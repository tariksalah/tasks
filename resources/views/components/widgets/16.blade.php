{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/components/widgets/general.html
--}}




<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__body">


    <div class="kt-widget kt-widget--user-profile-4">
      <div class="kt-widget__head">
        <span class="kt-widget__username" style="text-decoration: underline;">{{ $mainTitle }}<br></span>
        <br>
        <div class="kt-widget__media">
          <img class="kt-widget__img kt-hidden-" src="{{ $itemimage }}" style="max-width: min-content !important;border-radius: 35px;" alt="image">
          <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
            JD
          </div>
        </div>
        <div class="kt-widget__content">
          <div class="kt-widget__section">
            <a href="#" class="kt-widget__username">
              {{ $itemname }} ( {{ $itemcount }} )
            </a>
            <div class="kt-widget__button">

              <span class="btn {{ $itemstatus ? 'btn-label-success' : 'btn-label-danger' }} btn-sm">{{ $itemstatus ? 'Active' :  'InActive' }}</span>
            </div>

            <!-- <div class="kt-widget__action">
              <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                <i class="socicon-facebook"></i>
              </a>
              <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                <i class="socicon-twitter"></i>
              </a>
              <a href="#" class="btn btn-icon btn-circle btn-label-google">
                <i class="socicon-google"></i>
              </a>
            </div> -->

          </div>
        </div>
      </div>
      <div class="kt-widget__body">
        <a class="kt-widget__item">{{ $iteminfo01 }}</a>
        <a class="kt-widget__item">{{ $iteminfo02 }}</a>
        <a href="{{ $itemlink }}" class="kt-widget__item kt-widget__item--active">
          {{ __('words.read_more') }}
        </a>
      </div>
    </div>


  </div>
</div>


<!-- <div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__body">


    <div class="kt-widget kt-widget--user-profile-4">
      <div class="kt-widget__head">
        <div class="kt-widget__media">
          <img class="kt-widget__img kt-hidden-" src="./assets/media/users/300_21.jpg" alt="image">
          <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
            JD
          </div>
        </div>
        <div class="kt-widget__content">
          <div class="kt-widget__section">
            <a href="#" class="kt-widget__username">
              Luca Doncic
            </a>
            <div class="kt-widget__button">
              <span class="btn btn-label-warning btn-sm">Active</span>
            </div>
            <div class="kt-widget__action">
              <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                <i class="socicon-facebook"></i>
              </a>
              <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                <i class="socicon-twitter"></i>
              </a>
              <a href="#" class="btn btn-icon btn-circle btn-label-google">
                <i class="socicon-google"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="kt-widget__body">
        <a href="#" class="kt-widget__item kt-widget__item--active">
          Profile Overview
        </a>
        <a href="#" class="kt-widget__item">
          Personal info
        </a>
        <a href="#" class="kt-widget__item">
          Account info
        </a>
        <a href="#" class="kt-widget__item">
          Change Passwort
        </a>
        <a href="#" class="kt-widget__item">
          Email settings
        </a>
        <a href="#" class="kt-widget__item">
          Saved Credit Cards
        </a>
        <a href="#" class="kt-widget__item">
          Tax information
        </a>
      </div>
    </div>


  </div>
</div> -->
