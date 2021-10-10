<input type="{{ $type }}" class="form-control {{ $errors->has( $name ) ? ' is-invalid' : '' }} " maxlength="10" name="{{ $name }}"
placeholder="" date-format="dd/mm/yyyy" value="{{ old( $name , !empty($data) ? $data : '' ) }}"
>
