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
    <form class="kt-form kt-form--label-right" action="{{ route('admin.users.index') }}" method="post">
          {{ csrf_field() }}

      <div class="kt-portlet__body">
        <div class="form-group row">

          <!-- <div class="col-lg-3">
            <label>{{ __('item.name') }}</label>
            <input type="text" class="form-control">
          </div> -->
          <div class="col-lg-3">
                  <label class="">{{ __('category.name') }}</label>
                  <select class="form-control kt-select2 {{ $errors->has('category_id') ? ' is-invalid' : '' }}" id="kt_select2_2" name="category_id">
                    <option {{ old('category_id') == 0 ? 'selected' : '' }} value="0"> {{ __('words.all')}}</option>
                    @foreach ( $categories as $category )
                      <option {{ old('category_id') == $category->id ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->title }} {{str_repeat('__', $category->depth ?? 0)}}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('category_id'))
                      <span class="invalid-feedback">{{ $errors->first('category_id') }}</span>
                  @endif
          </div>
          <div class="col-lg-2">
            <label>{{ __('words.active') }}</label>
            <x-active-status/>
          </div>

          @if ( request()->user()->isAdmin() )
          <div class="col-lg-3">
            <label>{{ __('user.type') }}</label>
                  <select class="form-control kt-select2 {{ $errors->has('type_id') ? ' is-invalid' : '' }}" id="kt_select2_3" name="type_id">
                    <option {{ old('category_id') == 0 ? 'selected' : '' }} value="0"> {{ __('words.all')}}</option>
                    @foreach ( $userTypes as $userType )
                      <option {{ old('type_id') == $userType->id ? 'selected' : '' }} value="{{ $userType->id }}"> {{ $userType->title }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('type_id'))
                      <span class="invalid-feedback">{{ $errors->first('type_id') }}</span>
                  @endif
          </div>
          @endif

          <div class="col-lg-4">
            <label>.</label>
            <div class="input-group"><x-buttons.but_agree/><x-buttons.but_delete link='aaaa'/></div>

          </div>
        </div>
      </div>

    </form>

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
        <thead>
          <tr>
            <th>ID</th>
            <th>{{ __('words.image') }}</th>
            <th>{{ __('user.name') }}</th>
            <th>{{ __('category.name') }}</th>
            <th>{{ __('subscription.title') }}</th>
            <th>{{ __('order.title') }}</th>
            <th>{{ __('words.active') }}</th>
            <th>{{ __('words.rate') }}</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $item)
          <tr id="{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>
              <a class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                <img src="{{ $item->item_image ? asset('storage/app/'.$item->item_image) : $emptyImage }}">&nbsp;
              </a>
            </td>
            <td>
              <a href="{{ route('admin.users.edit' , [ 'id' => $item->id ] ) }}" class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                  {{ $item->name ? $item->name : $item->phone }}<br>
              </a>
              @if ($item->client)
              <a href="{{ route('admin.clients.edit' , [ 'id' => $item->client->id ] ) }}" class="kt-userpic kt-userpic--circle kt-margin-r-5 kt-margin-t-5" data-toggle="kt-tooltip" data-placement="right">
                  {{ $item->client->client_info->first()->title }}
              </a>
              @endif
            </td>
            <td>
              @foreach ($item->categories as $category)
                {{ $category->category_info->first()->title}} -
              @endforeach
            </td>
            <td>
              @if ( $item->type_id == 1 || $item->type_id == 2 )
                <x-buttons.but_link link="{{ route('admin.users.subscriptions', [ 'id' => $item->id ] ) }}" title="{{ __('subscription.title') }}"/></td>
              @endif
            </td>
            <td>
              @if ( $item->type_id != 4 )
                <x-buttons.but_link link="{{ route('admin.users.orders', [ 'id' => $item->id ] ) }}" title="{{ __('order.title') }}"/></td>
              @endif
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
            <td>{{ $item->rate }}</td>
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

<script>
function submitForm(me)
{
  $(me).closest("form").submit();
}
</script>

@endsection
