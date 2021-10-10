<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.name') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required maxlength="150"
    value="{{ old('name' , isset($data) ? $data->title : '') }}" name="name" placeholder="">
    @if ($errors->has('name'))
            <span class="invalid-feedback">{{ $errors->first('name') }}</span>
    @endif
  </div>
</div>

<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.mobile') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">

    <x-inputs.mobile name="mobile" type="text" required="true" numbersOnly="true" data="{{ isset($data) ? ($data->user) ? $data->user->mobile : '' : '' }} " /> 

    @if ($errors->has('mobile'))
            <span class="invalid-feedback">{{ $errors->first('mobile') }}</span>
    @endif
  </div>
</div>

<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.email') }}</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" maxlength="50"
    value="{{ old('email' , isset($data) ? ($data->user) ? $data->user->email : ''  : '') }}" name="email" placeholder="">
    @if ($errors->has('email'))
            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('auth.password') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
  </div>
</div>

<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('auth.confirm_password') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('admin/dashboard.roles') }} *</label>
  <div class="col-lg-4 col-md-9 col-sm-12">
    <select class="form-control kt-select2 {{ $errors->has('role') ? ' is-invalid' : '' }}" id="kt_select2_3" name="role">
      @foreach ( $roles as $role )
        <option {{ old('role' , isset($data) ?  (! $data->user->roles->isEmpty()) ? $data->user->roles->first()->id : null : null ) == $role->id ? 'selected' : '' }} value="{{ $role->id }}"> {{ $role->title }}</option>
      @endforeach
    </select>
    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
    @if ($errors->has('role'))
        <span class="invalid-feedback">{{ $errors->first('role') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-xl-3 col-lg-3 col-form-label">{{ __('words.image') }}</label>
  <div class="col-lg-9 col-xl-9">
      <div class="card">
          <div class="card-block">
              <h4 class="card-title"></h4>
              <div class="controls">
                <input type="file" name="image" id="image" class="dropify"
                data-default-file="{{ isset($data) ? ($data->user) ? $data->user->getImagePath() : '' : ''}}" />
                <input type="checkbox" value="1" id="image_remove" name="image_remove" class="image_check_remove">
              </div>
          </div>
      </div>
  </div>
</div>
