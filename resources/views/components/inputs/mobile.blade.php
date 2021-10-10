<input class="form-control {{ $errors->has( $name ) ? ' is-invalid' : '' }} {{ isset($numbersOnly) ?  'numbers_only' : '' }}"
name="{{ $name }}"
id="{{ $name }}"
type="{{ isset($type) ? $type : 'number' }}"
maxlength="{{ isset($maxLength) ? $maxLength : 10 }}"
minlength="{{ isset($minLength) ? $minLength : 10 }}"
@isset($required) required @endisset
value="{{old($name,!empty($data)?$data:null)}}"
@if ( isset($numbersOnly) )
 onkeypress="return isNumberKey(event)"
@endif
onkeypress="mobileRegex(this);"
>
<span class="form-text text-muted">{{ __('project.mobile_hint') }}</span>
