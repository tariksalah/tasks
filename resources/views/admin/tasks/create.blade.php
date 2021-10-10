@extends('admin.layouts.master')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <div class="row">
    <div class="col-lg-12">

      <div class="kt-portlet">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
              {{ __('words.add') }} &nbsp;&nbsp;&nbsp; <x-buttons.but_back link="{{ route('admin.tasks.index') }}"/>
            </h3>
          </div>
        </div>
        <div class="kt-portlet__body">
          <div class="kt-section kt-section--first">


<!-- form -->
<form class="kt_form_1" enctype="multipart/form-data" action="{{route('admin.tasks.store')}}" method="post">
    {{ csrf_field() }}

    @include('admin.tasks._fields')

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
@endsection

@endsection
