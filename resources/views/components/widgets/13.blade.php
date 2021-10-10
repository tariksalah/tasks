{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/components/widgets/general.html
--}}

{{--
mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"
label=""
image="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
description="{{ optional(optional($advs_most_rate->item_info)->first())->description }}"
link="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
username="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
userimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
:value="$advs_most_view->rate"
valuestring="{{ __('words.count') }}"
--}}

<div class="kt-portlet kt-bg-danger kt-portlet--skin-solid kt-portlet--height-fluid">
  <div class="kt-portlet__head kt-portlet__head--noborder">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $mainTitle }}
      </h3>
    </div>

    <!-- <div class="kt-portlet__head-toolbar">
      <a href="#" class="btn btn-icon" data-toggle="dropdown">
        <i class="flaticon-more-1 kt-font-light"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
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
    </div> -->

  </div>
  <div class="kt-portlet__body">


    <div class="kt-widget7 kt-widget7--skin-light">

      <div class="kt-widget7__content">
        <div class="kt-widget7__userpic">
          <img src="{{ $image }}" alt="">
        </div>
        <div class="kt-widget7__info">
          <h3 class="kt-widget7__username">
            {{ $username }}
          </h3>
          <span class="kt-widget7__time">
            {{ $itemdatefrom }}
          </span>
        </div>
      </div>
      <div class="kt-widget7__desc" style="margin-top: 30px !important;">
        {!! $description !!}
      </div>
      <div class="kt-widget7__button">
        <a class="btn btn-brand" href="{{ $link }}" role="button">{{ __('words.read_more') }}</a>
      </div>
    </div>


  </div>
</div>




<!-- <div class="kt-portlet kt-bg-danger kt-portlet--skin-solid kt-portlet--height-fluid">
  <div class="kt-portlet__head kt-portlet__head--noborder">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Announcements
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <a href="#" class="btn btn-icon" data-toggle="dropdown">
        <i class="flaticon-more-1 kt-font-light"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
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
  <div class="kt-portlet__body">


    <div class="kt-widget7 kt-widget7--skin-light">
      <div class="kt-widget7__desc">
        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod tinciduntut laoreet doloremagna
      </div>
      <div class="kt-widget7__content">
        <div class="kt-widget7__userpic">
          <img src="./assets/media//users/100_5.jpg" alt="">
        </div>
        <div class="kt-widget7__info">
          <h3 class="kt-widget7__username">
            Nick Mana
          </h3>
          <span class="kt-widget7__time">
            6 hours ago
          </span>
        </div>
      </div>
      <div class="kt-widget7__button">
        <a class="btn btn-brand" href="#" role="button">All Feeds</a>
      </div>
    </div>


  </div>
</div> -->
