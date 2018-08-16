require 'date'

class GsisController < ApplicationController
    def self.destroy_all(acctno)
        all = Gsis.where(acctno: acctno)
        all.each do |a|
            a.destroy
        end
    end
    def self.getquery(acctno03)
        self.destroy_all(acctno03)
        resources = Mastersr.where(acctno: acctno03).order(sstartdate: :desc, samtqty: :desc)

        prev = Gsis.new()
        prev2 = Gsis.new()
        resources.each do |resource|

            cur = Gsis.new(resource.to_hash.except("id", "created_at", "updated_at"))
            unless prev["sstartdate"].nil?
                if cur["senddate"].nil? or prev["sstartdate"] < cur["senddate"]
                    startdate = Date.strptime(prev["sstartdate"].to_s, '%Y-%m-%d')
                    cur["senddate"] = startdate - 1
                end
                if cur["hide_row"] and !prev["hide_row"]
                    prev2 = prev
                end
            end 
            case cur["sstartdate"]
            when prev["sstartdate"]
                design = cur["sdesign"].slice(0, 5)
                if cur["hide_row"] and !prev["hide_row"]
                    prev.save
                elsif cur["hide_row"] and prev["sdesign"].include? design
                    cur = prev
                end
                if (prev["sdesign"] .eql? cur["sdesign"]) and (prev["sstatus"] .eql? cur["sstatus"]) and (prev["senttype"] .eql? cur["senttype"])
                    higher = prev["samtqty"].to_i > cur["samtqty"].to_i ? prev["samtqty"].to_i : cur["samtqty"].to_i
                    cur["samtqty"] = higher
                    cur["senddate"] = prev["senddate"]
                elsif (prev["sdesign"] .eql? cur["sdesign"]) and (prev["sstatus"] .eql? cur["sstatus"])
                    cur["senddate"] = prev["senddate"]
                elsif prev["samtqty"].to_i > cur["samtqty"].to_i
                    cur = prev
                elsif !(prev["sdesign"] .eql? cur["sdesign"]) and !prev["hide_row"]
                    prev.save
                end
            else
                design = cur["sdesign"].slice(0, 5)
                unless prev["sdesign"].nil?
                    design2 = prev["sdesign"].slice(0, 5)                
                end
                if !cur["sappttype"].nil? and !cur["sdesign"].nil? and (cur["sappttype"].include? "ADDL" or cur["sappttype"].include? "MEMO" or cur["sdesign"].include? "CHAIR" or cur["sdesign"].include? "DIRECTOR" or cur["sdesign"].include? "OIC" or cur["sdesign"].include? "FACULTY" or cur["sdesign"].include? "COORDINATOR")
                    cur = prev
                elsif cur["hide_row"] and !prev["hide_row"] and prev["sdesign"].include? design
                	if !(prev["samtqty"].to_i .eql? cur["samtqty"].to_i)
                		prev.save
                	end
                    startdate = Date.strptime(prev["sstartdate"].to_s, '%Y-%m-%d')
                    cur["senddate"] = startdate - 1
                elsif !cur["hide_row"] and prev["hide_row"] and prev["sdesign"].include? design and prev2["sdesign"].include? design2
                    startdate = Date.strptime(prev2["sstartdate"].to_s, '%Y-%m-%d')
                    cur["senddate"] = startdate - 1
                elsif (prev["sdesign"] .eql? cur["sdesign"]) and (prev["sstatus"] .eql? cur["sstatus"]) and (prev["samtqty"].to_i .eql? cur["samtqty"].to_i)
                    cur["senddate"] = prev["senddate"]
                    if cur["hide_row"]
                        if !prev["hide_row"]
                            prev.save
                        end
                        cur["sstartdate"] = prev["sstartdate"]
                    end
                elsif !prev["hide_row"]
                   prev.save
                end                                 
            end
            prev = cur
        end
        if !prev["hide_row"]
            prev.save
        end
        fixLumping(Gsis.where(acctno:acctno03))
    end
    def self.fixLumping(gsis)
        prev = Gsis.new()
        gsis.each do |cur|
            unless prev["sstartdate"].nil?
                startdate = Date.strptime(prev["sstartdate"].to_s, '%Y-%m-%d')-1
                enddate = Date.strptime(cur["senddate"].to_s, '%Y-%m-%d')
                if ((startdate) .eql? (enddate) or enddate > startdate) and (prev["sdesign"] .eql? cur["sdesign"]) and (prev["sstatus"] .eql? cur["sstatus"]) and (prev["samtqty"].to_i .eql? cur["samtqty"].to_i)
                    prev.update(sstartdate: cur["sstartdate"])
                    cur.destroy
                    cur = prev
                end
            end
            prev = cur
        end
    end
    def update
        if requested_resource.update(resource_params)
            if resource_params.has_key?("hide_row")
            else
                flash[:notice] = translate_with_resource("update.success")
                redirect_to session[:my_previous_url]
            end
        else
            render :edit, locals: {
            page: Administrate::Page::Form.new(dashboard, requested_resource),
            }
        end
    end
end
