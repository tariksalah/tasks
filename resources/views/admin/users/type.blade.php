@extends('admin.layouts.master')

@section('css_pagelevel')
<x-admin.datatable.header-css/>
@endsection


@section('content')


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!-- search -->

  <div class="kt-portlet">


    <!-- <div class="kt-portlet__head"> -->
      <!-- <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          3 Columns Form Layout
        </h3>
      </div> -->
    <!-- </div> -->

    <!--begin::Form-->
    <form class="kt-form kt-form--label-right" action="{{ route('admin.users.type' , [ 'id' => request()->id  ] ) }}" method="post">
          {{ csrf_field() }}

      <div class="kt-portlet__body">
        <div class="form-group row">

          <!-- <div class="col-lg-3">
            <label>{{ __('item.name') }}</label>
            <input type="text" class="form-control">
          </div> -->
          <div class="col-lg-2">
            <label>{{ __('words.active') }}</label>
            <x-active-status/>
          </div>


          <div class="col-lg-1">
            <label>.</label>
            <div class="input-group"><x-buttons.but_agree/></div>
          </div>
        </form>

        <div class="col-lg-1">
          <label>.</label>
          <div class="input-group"><x-buttons.but_delete link='aaaa'/></div>
        </div>

        </div>
      </div>



    <!--end::Form-->
  </div>






  <div class="kt-portlet kt-portlet--mobile">

    <!-- <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <span class="kt-portlet__head-icon">
          <i class="kt-font-brand flaticon2-line-chart"></i>
        </span>
        <h3 class="kt-portlet__head-title">
          Multiple Controls
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <div class="kt-portlet__head-actions">
            <div class="dropdown dropdown-inline">
              <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="la la-download"></i> Export
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__section kt-nav__section--first">
                    <span class="kt-nav__section-text">Choose an option</span>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-print"></i>
                      <span class="kt-nav__link-text">Print</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-copy"></i>
                      <span class="kt-nav__link-text">Copy</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-excel-o"></i>
                      <span class="kt-nav__link-text">Excel</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-text-o"></i>
                      <span class="kt-nav__link-text">CSV</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                      <span class="kt-nav__link-text">PDF</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            &nbsp;
            <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
              <i class="la la-plus"></i>
              New Record
            </a>
          </div>
        </div>
      </div>
    </div> -->

    <div class="kt-portlet__body">
      <style>
      .dataTables_wrapper div.dataTables_filter { display: contents; }
      </style>


      <!--begin: Datatable -->
      <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        @if (request()->id == 4) <!-- admin -->
        <thead>
          <tr>
            <th>ID</th>
            <th>{{ __('words.image') }}</th>
            <th>{{ __('user.name') }}</th>
            <th>{{ __('role.title') }}</th>
            <th>{{ __('words.mobile') }}</th>
            <th>{{ __('words.email') }}</th>
            <th>{{ __('words.active') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr id="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>
              <a class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                <img src="{{ $item->imagePath() }}">&nbsp;
              </a>
            </td>
            <td>
              <a href="{{ route('admin.users.edit' , [ 'id' => $item->id ] ) }}" class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                  {{ $item->name }}
              </a>
            </td>
            <td>{{ $item->roles->first()->title }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->email }}</td>
            <td>
              <form action="{{ route('admin.users.status',['id' => $item->id ]) }}" onsubmit="ajaxForm(event,this,'dt_dv','er_dv','');"  enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <input type="hidden" id="_method" name="_method" value="PUT">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                    <label>
                      <input type="checkbox"  {{ $item->is_active ? 'checked' : '' }}  onclick="submitForm(this);">
                      <span></span>
                    </label>
                  </span>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
        @endif


        @if (request()->id == 2 ) <!-- free delegate -->
        <thead>
          <tr>
            <th>ID</th>
            <th>{{ __('words.image') }}</th>
            <th>{{ __('user.name') }}</th>
            <th>{{ __('words.mobile') }}</th>
            {{--<th>{{ __('words.items') }}</th>--}}
            <th>{{ __('words.active') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr id="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>
              <a class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                <img src="{{ $item->imagePath() }}">&nbsp;
              </a>
            </td>
            <td>
              <a href="{{ route('admin.users.edit' , [ 'id' => $item->id ] ) }}" class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                  {{ $item->name ? $item->name : $item->phone }}<br>
              </a>
            </td>
            <td>{{ $item->phone }}</td>

            {{--<td><x-buttons.but_link link="{{ route('admin.users.orders', [ 'id' => $item->id ] ) }}" title="{{ __('order.title') }}"/></td>--}}
            <td>
              <form action="{{ route('admin.users.status',['id' => $item->id ]) }}" onsubmit="ajaxForm(event,this,'dt_dv','er_dv','');"  enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <input type="hidden" id="_method" name="_method" value="PUT">
                  <span class="kt-switch kt-switch--outline kt-switch--icon kt-switch--success">
                    <label>
                      <input type="checkbox"  {{ $item->is_active ? 'checked' : '' }}  onclick="submitForm(this);">
                      <span></span>
                    </label>
                  </span>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
        @endif


      </table>

      <!--end: Datatable -->
    </div>
  </div>
</div>


@endsection




@section('js_pagelevel')
<x-admin.datatable.footer-js/>

<script>
function submitForm(me)
{
  $(me).closest("form").submit();
}
</script>

@endsection
