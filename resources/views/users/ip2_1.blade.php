@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card">
      <div class="card-body">
        <div class="text-center">
            <h2><strong>Statement of Business Operation Form</strong></h2>           
        </div>
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf
            <div class="form-group">
                <label for="company_name" class="col-form-label">{{ __('Name of Broker') }}</label>

                    <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}" required autofocus>

                    @if ($errors->has('company_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group">
                <label for="company_name" class="col-form-label">{{ __('Address') }}</label>

                    <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}" required autofocus>

                    @if ($errors->has('company_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('company_name') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ic_license_number" class="col-form-label">{{ __('Telephone Number') }}</label>
                    <input id="ic_license_number" type="text" class="form-control{{ $errors->has('ic_license_number') ? ' is-invalid' : '' }}" name="ic_license_number" required>
                    @if ($errors->has('ic_license_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('_ic_license_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="tin" class="col-form-label text-md-right">{{ __('Certificate of Authority No.:') }}</label>
                    <input id="tin" type="text" class="form-control{{ $errors->has('tin') ? ' is-invalid' : '' }}" name="tin" required>
                    @if ($errors->has('tin'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ic_license_number" class="col-form-label">{{ __('Date Issued') }}</label>
                    <input id="ic_license_number" type="text" class="form-control{{ $errors->has('ic_license_number') ? ' is-invalid' : '' }}" name="ic_license_number" required>
                    @if ($errors->has('ic_license_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('_ic_license_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="tin" class="col-form-label text-md-right">{{ __('Valid Until') }}</label>
                    <input id="tin" type="text" class="form-control{{ $errors->has('tin') ? ' is-invalid' : '' }}" name="tin" required>
                    @if ($errors->has('tin'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ic_license_number" class="col-form-label">{{ __('Surety Bond') }}</label>
                    <input id="ic_license_number" type="text" class="form-control{{ $errors->has('ic_license_number') ? ' is-invalid' : '' }}" name="ic_license_number" required>
                    @if ($errors->has('ic_license_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('_ic_license_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group col-md-6">
                    <label for="tin" class="col-form-label text-md-right">{{ __('EO Bond') }}</label>
                    <input id="tin" type="text" class="form-control{{ $errors->has('tin') ? ' is-invalid' : '' }}" name="tin" required>
                    @if ($errors->has('tin'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Profile') }}
                </button>
            </div>
        </form>
      </div>
  </div>
  <br>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar1">1 out of 4</div>
  </div>
  <br>
  <a href="" class="btn btn-danger disabled">Previous</a>
  <a href="{{ url('/ip2_2') }}" class="btn btn-danger">Next</a>
  <a href="" class="btn btn-danger">Save as Draft</a>
</div>
</div>
@endsection