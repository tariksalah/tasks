{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/components/widgets/general.html
--}}



<div class="kt-portlet">
  <div class="kt-portlet__body  kt-portlet__body--fit">
    <div class="row row-no-padding row-col-separator-xl">

        <div class="kt-widget24">
          <h1 style="text-align: center;">
              <span>{{ $totalCounts }}</span>
              <br>
              <span style="font-size: 19px;color: #b3b3b3;">{{ $totalTitle }}</span>
          </h1>
        </div>

        @foreach ($widgetData as $key => $item)
          <div class="col-md-12 col-lg-6 col-xl-3">

            <div class="kt-widget24">
              <div class="kt-widget24__details">
                <div class="kt-widget24__info">
                  <h3 class="kt-widget24__title">
                    {!! $icon !!} {{ $item['title'] }}
                  </h3>
                  <!-- <span class="kt-widget24__desc">
                    -
                  </span> -->
                </div>
                <span class="kt-widget24__stats
                    @if ($key == 0 ) kt-font-brand @endif
                    @if ($key == 1 ) kt-font-warning @endif
                    @if ($key == 2 ) kt-font-danger @endif
                    @if ($key == 3 ) kt-font-success @endif"
                  >
                  {{ $item['value'] }}
                </span>
              </div>
              <div class="progress progress--sm">
                <div class="progress-bar
                  @if ($key == 0 ) kt-bg-brand @endif
                  @if ($key == 1 ) kt-bg-warning @endif
                  @if ($key == 2 ) kt-bg-danger @endif
                  @if ($key == 3 ) kt-bg-success @endif"
                 role="progressbar" style="width: {{ $item['percent'] }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="kt-widget24__action">
                <!-- <span class="kt-widget24__change">
                  Change
                </span> -->
                <span class="kt-widget24__number">
                  {{ $item['percent'] }}%
                </span>
              </div>
            </div>

          </div>
        @endforeach

      </div>

  </div>
</div>




<!-- <div class="kt-portlet">
  <div class="kt-portlet__body  kt-portlet__body--fit">
    <div class="row row-no-padding row-col-separator-xl">
      <div class="col-md-12 col-lg-6 col-xl-3">


        <div class="kt-widget24">
          <div class="kt-widget24__details">
            <div class="kt-widget24__info">
              <h4 class="kt-widget24__title">
                Total Profit
              </h4>
              <span class="kt-widget24__desc">
                All Customs Value
              </span>
            </div>
            <span class="kt-widget24__stats kt-font-brand">
              $18M
            </span>
          </div>
          <div class="progress progress--sm">
            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="kt-widget24__action">
            <span class="kt-widget24__change">
              Change
            </span>
            <span class="kt-widget24__number">
              78%
            </span>
          </div>
        </div>


      </div>
      <div class="col-md-12 col-lg-6 col-xl-3">


        <div class="kt-widget24">
          <div class="kt-widget24__details">
            <div class="kt-widget24__info">
              <h4 class="kt-widget24__title">
                New Feedbacks
              </h4>
              <span class="kt-widget24__desc">
                Customer Review
              </span>
            </div>
            <span class="kt-widget24__stats kt-font-warning">
              1349
            </span>
          </div>
          <div class="progress progress--sm">
            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="kt-widget24__action">
            <span class="kt-widget24__change">
              Change
            </span>
            <span class="kt-widget24__number">
              84%
            </span>
          </div>
        </div>


      </div>
      <div class="col-md-12 col-lg-6 col-xl-3">


        <div class="kt-widget24">
          <div class="kt-widget24__details">
            <div class="kt-widget24__info">
              <h4 class="kt-widget24__title">
                New Orders
              </h4>
              <span class="kt-widget24__desc">
                Fresh Order Amount
              </span>
            </div>
            <span class="kt-widget24__stats kt-font-danger">
              567
            </span>
          </div>
          <div class="progress progress--sm">
            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="kt-widget24__action">
            <span class="kt-widget24__change">
              Change
            </span>
            <span class="kt-widget24__number">
              69%
            </span>
          </div>
        </div>


      </div>
      <div class="col-md-12 col-lg-6 col-xl-3">


        <div class="kt-widget24">
          <div class="kt-widget24__details">
            <div class="kt-widget24__info">
              <h4 class="kt-widget24__title">
                New Users
              </h4>
              <span class="kt-widget24__desc">
                Joined New User
              </span>
            </div>
            <span class="kt-widget24__stats kt-font-success">
              276
            </span>
          </div>
          <div class="progress progress--sm">
            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="kt-widget24__action">
            <span class="kt-widget24__change">
              Change
            </span>
            <span class="kt-widget24__number">
              90%
            </span>
          </div>
        </div>


      </div>
    </div>
  </div>
</div> -->
