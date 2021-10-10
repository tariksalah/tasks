<link href="{{ asset('assets/admin/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />





{{--
<div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
  <x-widgets.chart_01 chartTitle="Title"
  ordersPercent1="10" ordersPercent2="20" ordersPercent3="30" ordersPercent4="15" ordersPercent5="15" ordersPercent6="10"
  ordersCount1="10" ordersCount2="20" ordersCount3="30" ordersCount4="15" ordersCount5="15" ordersCount6="10" />
</div>
--}}




<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-widget14">
    <div class="kt-widget14__header">
      <h3 class="kt-widget14__title">
        {!! $icon !!}{{ $mainTitle }}
      </h3>

      <!-- search params -->
      <!-- <div class="row">
        <div class=" form-group col-lg-2">
          <label for="">{{__('commission.from')}}</label>
          <input class="form-control datepicker"  placeholder="yyyy-mm-dd"  autocomplete="off" id="order_from" name="from">
        </div>
        <div class=" form-group col-lg-2">
          <label for="">{{__('commission.to')}}</label>
          <input class="form-control datepicker"  placeholder="yyyy-mm-dd"  autocomplete="off" id="order_to" name="to">
        </div>
        <div class="form-group col-lg-2">
          <label for="">&nbsp;</label>
          <button class="form-control btn btn-success " onclick="order_search()">
            <i class=" flaticon flaticon2-search-1"></i>{{__('words.search')}}
          </button>
        </div>
      </div> -->


    </div>
    <div class="kt-widget14__content" id="order_chart_div">


            <div class="kt-widget14__chart">
                <div id="{{ $divChart }}" style="height: auto; width: 50%;"></div>
            </div>
            <div class="kt-widget14__legends">

              @foreach($widgetData as $key => $item)
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet
                    @if ($key == 0 ) kt-bg-dark @endif
                    @if ($key == 1 ) kt-bg-brand @endif
                    @if ($key == 2 ) kt-bg-warning @endif
                    @if ($key == 3 ) kt-bg-success @endif
                    @if ($key == 4 ) kt-bg-danger @endif"></span>
                    <span class="kt-widget14__stats"> {{ $item['countTitle'.$key]  .' | '. $item['count'.$key]}}</span>
                </div>
              @endforeach

                {{--
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet kt-bg-dark "></span>
                    <span class="kt-widget14__stats"> countTitle1 .' | '. $count1}}</span>
                </div>
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet kt-bg-brand"></span>
                    <span class="kt-widget14__stats"> countTitle2 .' | '. $count2}}</span>
                </div>
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet kt-bg-warning"></span>
                    <span class="kt-widget14__stats"> $countTitle3 .' | '. $count3}}</span>
                </div>
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet kt-bg-success"></span>
                    <span class="kt-widget14__stats"> countTitle4 .' | '. $count4}}</span>
                </div>
                <div class="kt-widget14__legend">
                    <span class="kt-widget14__bullet kt-bg-danger"></span>
                    <span class="kt-widget14__stats"> countTitle5 .' | '. $count5}}</span>
                </div>
                --}}

            </div>


    </div>
  </div>
</div>










<script src="{{ asset('assets/admin/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>

<script>
    Morris.Donut({
          element: '{{ $divChart }}',
          data: [
            @foreach($widgetData as $key => $item)
              {
                  label: "{{ $item['countTitle'.$key] }} %",
                  value: "{{ $item['percent'.$key] }}"
              },
            @endforeach
          ],
          colors: [
            '#282a3c','#5d78ff','#ffb821','#0bbb87','#fd397a'
          ],
      });

</script>
