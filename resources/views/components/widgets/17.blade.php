{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/components/widgets/general.html
--}}



<div class="kt-portlet kt-portlet--bordered-semi kt-portlet--space kt-portlet--height-fluid" style="height: auto;">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $widgetTitle }}
        <small>{{ $widgetSubTitle }}</small>
      </h3>
    </div>

    <!-- <div class="kt-portlet__head-toolbar">
      <div class="dropdown dropdown-inline">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="flaticon-more-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <ul class="kt-nav">
            <li class="kt-nav__section kt-nav__section--first">
              <span class="kt-nav__section-text">Finance</span>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                <span class="kt-nav__link-text">Statistics</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                <span class="kt-nav__link-text">Events</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                <span class="kt-nav__link-text">Reports</span>
              </a>
            </li>
            <li class="kt-nav__section">
              <span class="kt-nav__section-text">Customers</span>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                <span class="kt-nav__link-text">Notifications</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-file-1"></i>
                <span class="kt-nav__link-text">Files</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> -->


  </div>
  <div class="kt-portlet__body">
    <div class="kt-widget25">
      <span class="kt-widget25__stats m-font-brand">
        <div class="kt-demo-icon__preview" style="{{$color}}">
							{{ $mainTitle }}{!! $icon !!}
				</div>
      </span>
      {{--<span class="kt-widget25__subtitle">{{ $mainSubTitle }}</span>--}}
      <div class="kt-widget25__items">

        @foreach ($widgetData as $key => $item)
        <div class="kt-widget25__item">
          <span class="kt-widget25__number">
            {{ $item['value'] }}    ({{ $item['percent'] }}%)
          </span>
          <div class="progress kt-progress--sm">
            <div class="progress-bar
                @if ($key == 0 ) kt-bg-danger @endif
                @if ($key == 1 ) kt-bg-success @endif
                @if ($key == 2 ) kt-bg-warning @endif "
              role="progressbar" style="width: {{ $item['percent'] }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="kt-widget25__desc">
            {{ $item['title'] }}
          </span>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>






<!-- <div class="kt-portlet kt-portlet--bordered-semi kt-portlet--space kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Product Sales
        <small>total sales</small>
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <div class="dropdown dropdown-inline">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="flaticon-more-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <ul class="kt-nav">
            <li class="kt-nav__section kt-nav__section--first">
              <span class="kt-nav__section-text">Finance</span>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                <span class="kt-nav__link-text">Statistics</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                <span class="kt-nav__link-text">Events</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                <span class="kt-nav__link-text">Reports</span>
              </a>
            </li>
            <li class="kt-nav__section">
              <span class="kt-nav__section-text">Customers</span>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                <span class="kt-nav__link-text">Notifications</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-file-1"></i>
                <span class="kt-nav__link-text">Files</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="kt-widget25">
      <span class="kt-widget25__stats m-font-brand">$237,650</span>
      <span class="kt-widget25__subtitle">Total Revenue This Month</span>
      <div class="kt-widget25__items">
        <div class="kt-widget25__item">
          <span class="kt-widget25__number">
            63%
          </span>
          <div class="progress kt-progress--sm">
            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="kt-widget25__desc">
            Sales Growth
          </span>
        </div>
        <div class="kt-widget25__item">
          <span class="kt-widget25__number">
            39%
          </span>
          <div class="progress m-progress--sm">
            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 39%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="kt-widget25__desc">
            Product Growth
          </span>
        </div>
        <div class="kt-widget25__item">
          <span class="kt-widget25__number">
            54%
          </span>
          <div class="progress m-progress--sm">
            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 54%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <span class="kt-widget25__desc">
            Product Growth
          </span>
        </div>
      </div>
    </div>
  </div>
</div> -->
