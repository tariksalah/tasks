@extends('admin.layouts.master')

@section('css_pagelevel')
<x-admin.datatable.header-css/>
@endsection

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <div class="kt-portlet">

    <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          &nbsp; <x-buttons.but_new link="{{ route( 'admin.admins.create' ) }}"/>
        </h3>
        <x-buttons.but_delete link='{{ route("admin.admins.destroy") }}'/>
      </div>
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
            <th>{{ __('words.image') }}</th>
            <th>{{ __('words.name') }}</th>
            <th>{{ __('words.email') }}</th>
            <th>{{ __('words.mobile') }}</th>
            <th>{{ __('admin/dashboard.roles') }}</th>
            <th>{{ __('words.active_state') }}</th>
            <th>{{ __('words.actions') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr id="{{ $item->id }}">
            <td value="{{ $item->id }}"></td>
            <td>{{ $item->id }}</td>
            <td><a class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right"><img src="{{ $item->user ? $item->user->getImagePath() : null }}"></a></td>
            <td>
              <a href="{{ route('admin.admins.edit' , [ 'id' => $item->id ] ) }}" class="td_clickable">
                  {{ $item->title }}
              </a>
            </td>
            <td>{{ $item->user ? $item->user->email : '' }}</td>
            <td>{{ $item->user ? $item->user->mobile : '' }}</td>
            <td>
              @if ($item->user)
                @if (! $item->user->roles->isEmpty() )
                  @foreach ($item->user->roles as $role)
                    {{ $role->title }}
                  @endforeach
                @endif
              @endif
            </td>
            <td>
              <form action="{{ route('admin.admins.status',['id' => $item->id ]) }}" onsubmit="ajaxForm(event,this,'dt_dv','er_dv','');" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" id="_method" name="_method" value="PUT">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                    <label><input type="checkbox"  {{ $item->user->is_active ? 'checked' : '' }}  onclick="submitForm(this);"><span></span></label>
                  </span>
              </form>
            </td>
            <td>
              <div id="action_div" class="dt_action_div">
                <div><x-buttons.but_edit link="{{ route('admin.admins.edit' , [ 'id' => $item->id ] ) }}" icon='true'/></div>
                <div><x-buttons.but_delete_inline link="{{ route('admin.admins.destroy' ) }}" ids="{{ $item->id }}" icon='true'/></div>
              </div>
            </td>
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
<x-buttons.but_delete_inline_js/>
<script>
function submitForm(me)
{
  $(me).closest("form").submit();
}
</script>

@endsection
