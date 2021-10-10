{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/custom/apps/support-center/home-1.html
--}}

<div class="kt-portlet kt-callout">
  <div class="kt-portlet__body">
    <div class="kt-callout__body">

      <div class="">
        <img src="{{ $itemimage }}" style="max-height: 100px;padding: 0px 10px;">
      </div>


      <div class="kt-callout__content">
        <h3 class="kt-callout__title">{{ $itemname }}</h3>
        <p class="kt-callout__desc">{!! $itemdescription !!}</p>
      </div>
      <div class="kt-callout__action">
        <a href="{{ $itemlink }}" class="btn btn-custom btn-bold btn-upper btn-font-sm btn-primary">{{ __('words.read_more') }}</a>
      </div>
    </div>
  </div>
</div>
