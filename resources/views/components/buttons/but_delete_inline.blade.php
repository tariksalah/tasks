@if(isset($icon))
<form method="POST" action="{{ $link }}" onsubmit="deleteInLine(event,this);" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    @if (isset($ids)) <input type="hidden" value="{{ $ids }}" id="ids" name="ids"> @endif
    <button type="submit" id="delete" name="delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-remove" style="color: red;"></i></button>
</form>
@else
<form method="POST" action="{{ $link }}" onsubmit="deleteInLine(event,this);" >
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <button type="submit" id="delete" name="delete" class="btn btn-outline-danger input-group">{{ __('words.delete')}}</button>
</form>
@endif
