@if(isset($icon))
<a href="{{ $link }}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View"><i class="la la-edit" style="color: #02989c;"></i></a>
@else
<a href="{{ $link }}" type="button" class="btn btn-warning"><i class="flaticon2-edit"></i>{{ __('words.edit') }}</a>
@endif
