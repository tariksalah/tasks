<form method="POST" action="{{ $link }}" onsubmit="ajaxForm(event,this,'dt_dv','er_dv','');" id="frm_delete_file">
    {{ csrf_field() }}

    <div id="delete_file"  onclick="this.closest('form').submit();" class="btn btn-outline-danger input-group">{{ __('words.delete')}}</div>
</form>
