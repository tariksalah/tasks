<textarea name="{{ $name }}" class="form-control ckeditor {{ $errors->has( $name ) ? ' is-invalid' : '' }}"
  rows="{{ isset($rows) ?? 10 }}"  {{ isset($required) ? 'required' : '' }} >{!! old( $name , !empty($data) ? $data : '' ) !!}</textarea>
