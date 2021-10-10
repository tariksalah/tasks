@extends('admin.layouts.master')

@section('css_pagelevel')
<x-admin.datatable.header-css/>
@endsection

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <div class="kt-portlet">

    <div class="kt-portlet__head">
      {{--
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          &nbsp; <x-buttons.but_new link="{{ route( 'admin.dealers.create' ) }}"/>
        </h3>
        <x-admin.trans-bar :languages="$languages" route="{{ route('admin.dealers.index') }}" :curLanguage="$currentLanguage"/>
        <x-buttons.but_delete link='{{ route("admin.dealers.delete") }}'/>
      </div>
      --}}
    </div>

  </div>


  <div class="kt-portlet kt-portlet--mobile">

    <div class="kt-portlet__body">
      <style>
      .dataTables_wrapper div.dataTables_filter { display: contents; }
      </style>


      <!--begin: Datatable -->
      <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
          <tr>
            <th><input type="checkbox" name="select_all" class="dt-select-all" id="select_all"></th>
            <th>ID</th>
            <th>{{ __('words.name') }}</th>
            <th>{{ __('words.name') }}</th>
            <th>{{ __('words.created_at') }}</th>
            <th>{{ __('words.details') }}</th>
            {{--
            <th>{{ __('words.active_state') }}</th>
            <th>{{ __('words.actions') }}</th>
            --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr id="{{ $item->id }}">
            <td value="{{ $item->id }}"></td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->sender_user ? $item->sender_user->name : __('words.deleted') }}</td>
            <td>{{ $item->sender_user ? $item->sender_user->name : __('words.deleted') }}</td>
            <td>{{ $item->created_at }}</td>
            <td><a href="{{ route('admin.chat.details' , [ 'id' => $item->id ] ) }}">{{ __('project.chats') }}</a></td>
            {{--
            <td>
              <form action="{{ route('admin.dealers.status',['id' => $item->id ]) }}" onsubmit="ajaxForm(event,this,'dt_dv','er_dv','');" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" id="_method" name="_method" value="PUT">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                    <label><input type="checkbox"  {{ $item->is_active ? 'checked' : '' }}  onclick="submitForm(this);"><span></span></label>
                  </span>
              </form>
            </td>
            <td>
              <div id="action_div" class="dt_action_div">
                <div><x-buttons.but_edit link="{{ route('admin.dealers.edit' , [ 'id' => $item->id ] ) }}" icon='true'/></div>
                <div><x-buttons.but_delete_inline link="{{ route('admin.dealers.delete' ) }}" ids="{{ $item->id }}" icon='true'/></div>
              </div>
            </td>
            --}}
          </tr>
          @endforeach
        </tbody>
      </table>

      <!--end: Datatable -->
    </div>
  </div>
</div>


@endsection




@section('js_pagelevel')
<x-admin.datatable.footer-js/>
<!-- <x-buttons.but_delete_inline_js/> -->
<script>
function submitForm(me)
{
  $(me).closest("form").submit();
}
</script>

@endsection
