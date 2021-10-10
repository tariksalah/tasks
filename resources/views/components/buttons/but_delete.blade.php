<form method="POST" action="{{ $link }}" id="frm_delete">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <button type="submit" id="delete" name="delete" class="btn btn-outline-danger input-group">{{ __('words.delete')}}</button>
</form>
