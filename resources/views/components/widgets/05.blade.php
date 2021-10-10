
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $mainTitle }}
      </h3>
    </div>

    <!-- <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
            Week
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
            Month
          </a>
        </li>
      </ul>
    </div> -->

  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget2_tab1_content">
        <div class="kt-widget2">

          @foreach( $widgetData as $key => $item)
            <div class="kt-widget2__item
                @if ($key == 0 ) kt-widget2__item--primary @endif
                @if ($key == 1 ) kt-widget2__item--warning @endif
                @if ($key == 2 ) kt-widget2__item--brand @endif
                @if ($key == 3 ) kt-widget2__item--success @endif
                @if ($key == 4 ) kt-widget2__item--danger @endif
                @if ($key == 5 ) kt-widget2__item--info @endif"
              >
              <div class="kt-widget2__checkbox">
                <!-- <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                  <input type="checkbox">
                  <span></span>
                </label> -->
              </div>

              <div class="kt-widget2__info">
                <a href="{{ route('admin.offers.edit', [ 'id' => $item->id ] ) }}" class="kt-widget2__title">
                  {{ optional(optional(optional($item->client)->client_info)->first())->title }}
                </a>
                <a href="{{ route('admin.offers.edit', [ 'id' => $item->id ] ) }}" class="kt-widget2__username">
                  {!! optional(optional($item->item_info)->first())->description !!}
                </a>
              </div>

              <div class="kt-widget2__actions">
                <!-- <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                  <i class="flaticon-more-1"></i>
                </a> -->
                <!-- <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                  <ul class="kt-nav">
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                        <span class="kt-nav__link-text">Reports</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-send"></i>
                        <span class="kt-nav__link-text">Messages</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                        <span class="kt-nav__link-text">Charts</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-avatar"></i>
                        <span class="kt-nav__link-text">Members</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-settings"></i>
                        <span class="kt-nav__link-text">Settings</span>
                      </a>
                    </li>
                  </ul>
                </div> -->

              </div>

            </div>
          @endforeach






        </div>
      </div>


    </div>
  </div>
</div>



<!-- <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Tasks
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
            Week
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
            Month
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget2_tab1_content">
        <div class="kt-widget2">
          <div class="kt-widget2__item kt-widget2__item--primary">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again.Lorem Ipsum Amet
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--warning">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Prepare Docs For Metting On Monday
              </a>
              <a href="#" class="kt-widget2__username">
                By Sean
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--brand">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Widgets Great Again.Estudiat Communy Elit
              </a>
              <a href="#" class="kt-widget2__username">
                By Aziko
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--success">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again. Lorem Ipsum
              </a>
              <a class="kt-widget2__username">
                By James
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--danger">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--info">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
                </p>
                <a href="#" class="kt-widget2__username">
                  By Sean
                </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget2_tab2_content">
        <div class="kt-widget2">
          <div class="kt-widget2__item kt-widget2__item--success">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again.Lorem Ipsum
              </a>
              <a class="kt-widget2__username">
                By James
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--warning">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Prepare Docs For Metting On Monday
              </a>
              <a href="#" class="kt-widget2__username">
                By Sean
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--danger">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--primary">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again.Lorem Ipsum Amet
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--info">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Sean
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--brand">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Widgets Great Again.Estudiat Communy Elit
                </p>
                <a href="#" class="kt-widget2__username">
                  By Aziko
                </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget2_tab3_content">
        <div class="kt-widget2">
          <div class="kt-widget2__item kt-widget2__item--warning">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again.Lorem Ipsum
              </a>
              <a class="kt-widget2__username">
                By James
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--danger">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--brand">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Widgets Great Again.Estudiat Communy Elit
              </a>
              <a href="#" class="kt-widget2__username">
                By Aziko
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--info">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Sean
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--success">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Completa Financial Report For Emirates Airlines
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="kt-widget2__item kt-widget2__item--primary">
            <div class="kt-widget2__checkbox">
              <label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
                <input type="checkbox">
                <span></span>
              </label>
            </div>
            <div class="kt-widget2__info">
              <a href="#" class="kt-widget2__title">
                Make Metronic Great Again.Lorem Ipsum Amet
              </a>
              <a href="#" class="kt-widget2__username">
                By Bob
              </a>
            </div>
            <div class="kt-widget2__actions">
              <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                      <span class="kt-nav__link-text">Reports</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-send"></i>
                      <span class="kt-nav__link-text">Messages</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                      <span class="kt-nav__link-text">Charts</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-avatar"></i>
                      <span class="kt-nav__link-text">Members</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-settings"></i>
                      <span class="kt-nav__link-text">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
