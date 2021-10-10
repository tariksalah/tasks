
@if ( count($activeLanguages) > 1)
<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('language.title') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <select class="form-control kt-select2 {{ $errors->has('language') ? ' is-invalid' : '' }}" required id="kt_select2_1" name="input_language">
      @foreach ( $activeLanguages as $language )
        <option {{ old('language') == $language->locale ? 'selected' : '' }} value="{{ $language->locale }}">{{ $language->title }}</option>
      @endforeach
    </select>
    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
    @if ($errors->has('language'))
        <span class="invalid-feedback">{{ $errors->first('language') }}</span>
    @endif
  </div>
</div>
@endif
