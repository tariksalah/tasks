
{{--
  E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/custom/apps/user/list-columns-1.html

btn-label-warning
btn-label-danger
btn-label-brand
btn-label-success
--}}


<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head kt-portlet__head--noborder">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title" style="padding: 0px 0px 20px 20px;">{{ $mainTitle }}</h3>
    </div>

    <!-- <div class="kt-portlet__head-toolbar">
      <a href="#" class="btn btn-icon" data-toggle="dropdown">
        <i class="flaticon-more-1 kt-font-brand"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
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
    -->

  </div>
  <div class="kt-portlet__body">


    <div class="kt-widget kt-widget--user-profile-2">
      <div class="kt-widget__head">
        <div class="kt-widget__media">
          <img class="kt-widget__img kt-hidden-" src="{{ $itemimage }}" alt="image">
          <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
            ChS
          </div>
        </div>
        <div class="kt-widget__info">
          <a href="{{ $itemlink }}" class="kt-widget__username">
            {{ $itemname }}
          </a>
          <span class="kt-widget__desc">
            {{ $iteminfo }}
          </span>
        </div>
      </div>
      <div class="kt-widget__body">
        <div class="kt-widget__section">
          {!! $itemdescription !!}
        </div>
        <div class="kt-widget__item">
          <div class="kt-widget__contact">
            <span class="kt-widget__label">{{ __('words.email') }}</span>
            <a href="#" class="kt-widget__data">{{ $iteminfo01 }}</a>
          </div>
          <div class="kt-widget__contact">
            <span class="kt-widget__label">{{ __('words.mobile') }}</span>
            <a href="#" class="kt-widget__data">{{ $iteminfo02 }}</a>
          </div>
        </div>
      </div>
      <div class="kt-widget__footer">
        <a href="{{ $itemlink }}" class="btn btn-label-warning btn-lg btn-upper">{{ __('words.read_more') }}</a>
      </div>
    </div>


  </div>
</div>







<!--Begin::Portlet-->
<!-- <div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head kt-portlet__head--noborder">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <a href="#" class="btn btn-icon" data-toggle="dropdown">
        <i class="flaticon-more-1 kt-font-brand"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
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
  <div class="kt-portlet__body">


    <div class="kt-widget kt-widget--user-profile-2">
      <div class="kt-widget__head">
        <div class="kt-widget__media">
          <img class="kt-widget__img kt-hidden-" src="./assets/media/users/300_21.jpg" alt="image">
          <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">
            ChS
          </div>
        </div>
        <div class="kt-widget__info">
          <a href="#" class="kt-widget__username">
            Luca Doncic
          </a>
          <span class="kt-widget__desc">
            Head of Development
          </span>
        </div>
      </div>
      <div class="kt-widget__body">
        <div class="kt-widget__section">
          I distinguish three <a href="#" class="kt-font-brand kt-link kt-font-transform-u kt-font-bold">#xrs-54pq</a> objectsves First
          esetablished and nice coocked rice
        </div>
        <div class="kt-widget__item">
          <div class="kt-widget__contact">
            <span class="kt-widget__label">Email:</span>
            <a href="#" class="kt-widget__data">luca@festudios.com</a>
          </div>
          <div class="kt-widget__contact">
            <span class="kt-widget__label">Phone:</span>
            <a href="#" class="kt-widget__data">44(76)34254578</a>
          </div>
          <div class="kt-widget__contact">
            <span class="kt-widget__label">Location:</span>
            <span class="kt-widget__data">Barcelona</span>
          </div>
        </div>
      </div>
      <div class="kt-widget__footer">
        <button type="button" class="btn btn-label-warning btn-lg btn-upper">write message</button>
      </div>
    </div>


  </div>
</div> -->
