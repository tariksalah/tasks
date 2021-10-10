@extends('admin.layouts.master')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-lg-12">

      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              <div class="row">
              <x-buttons.but_back link="{{ route('admin.admins.index') }}"/>
              &nbsp;&nbsp;&nbsp; {{ __('words.edit') }} &nbsp;&nbsp;&nbsp;
              </div>
            </h3>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-section kt-section--first">





<!-- form -->
<form action="{{route('admin.admins.update',[ 'id'=> $data->id ]) }}" method="post" class="kt_form_1" enctype="multipart/form-data">

    {{ csrf_field() }}

    <input name="_method" type="hidden" value="PUT">

    @include('admin.admins._fields')

    <x-buttons.but_submit/>

</form>





          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@section('js_pagelevel')
<x-admin.dropify-js/>
<x-admin.dropify-events/>
@endsection

@endsection
