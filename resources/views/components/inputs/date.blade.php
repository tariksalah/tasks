<input type="{{ $type }}" class="form-control {{ $errors->has( $name ) ? ' is-invalid' : '' }}
@if ($type == 'text') datepicker @endif " maxlength="10" name="{{ $name }}"
placeholder="" data-date-format="yyyy-mm-dd" value="{{ old( $name , !empty($data) ? $data : '' ) }}"
>
