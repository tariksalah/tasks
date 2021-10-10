@extends('admin.layouts.master')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-lg-12">

      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              {{ __('words.add') }} &nbsp;&nbsp;&nbsp; <x-buttons.but_back link="{{ route('admin.users.index') }}"/>
            </h3>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-section kt-section--first">





<!-- form -->
<form class="kt_form_1" enctype="multipart/form-data" action="{{route('admin.users.store')}}" method="post">
    {{ csrf_field() }}


    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('user.name') }} *</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required maxlength="150" value="{{ old('name') }}" name="name" placeholder="">
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('name'))
                <span class="invalid-feedback">{{ $errors->first('name') }}</span>
        @endif
      </div>
    </div>

    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.email') }} *</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
        <input id="email" type="email" autocomplete="off" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" maxlength="50" required autocomplete="email">
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('email'))
                <span class="invalid-feedback">{{ $errors->first('email') }}</span>
        @endif
      </div>
    </div>

    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.password') }} *</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password" minlength="8" maxlength="12">
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('password'))
                <span class="invalid-feedback">{{ $errors->first('password') }}</span>
        @endif
      </div>
    </div>


    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('auth.confirm_password') }} *</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="8" maxlength="12" required autocomplete="new-password">
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback">{{ $errors->first('password_confirmation') }}</span>
        @endif
      </div>
    </div>

    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.phone') }}</label>
      <div class=" col-lg-4 col-md-9 col-sm-12">
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" required maxlength="10" name="phone" value="{{ old('phone') }}">
        @if ($errors->has('phone'))
            <span class="invalid-feedback">{{ $errors->first('phone') }}</span>
        @endif
      </div>
    </div>




    <div class="form-group row" style="visibility: hidden;">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('user.type') }} *</label>
      <div class="col-lg-4 col-md-9 col-sm-12">
        <select class="form-control kt-select2 {{ $errors->has('type_id') ? ' is-invalid' : '' }}" id="kt_select2_1" name="type_id">
          @foreach ( $userTypes as $userType )
            <option {{ old('type_id') == $userType->id ? 'selected' : '' }} value="{{ $userType->id }}"> {{ $userType->title }}</option>
          @endforeach
        </select>
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('type_id'))
            <span class="invalid-feedback">{{ $errors->first('type_id') }}</span>
        @endif
      </div>
    </div>


    @if ($userTypes->first()->id == 4)
    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('role.title') }} *</label>
      <div class="col-lg-4 col-md-9 col-sm-12">
        <select class="form-control kt-select2 {{ $errors->has('role') ? ' is-invalid' : '' }}" id="kt_select2_2" name="role">
          @foreach ( $roles as $role )
            <option {{ old('role') == $role->id ? 'selected' : '' }} value="{{ $role->id }}"> {{ $role->title }}</option>
          @endforeach
        </select>
        <!-- <span class="form-text text-muted">Please enter your full name</span> -->
        @if ($errors->has('role'))
            <span class="invalid-feedback">{{ $errors->first('role') }}</span>
        @endif
      </div>
    </div>
    @endif


    <div class="form-group row">
      <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.image') }}</label>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="" />
      </div>
    </div>


    <x-buttons.but_submit/>

</form>





          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@section('js_pagelevel')
<x-admin.dropify-js/>
@endsection

@endsection
