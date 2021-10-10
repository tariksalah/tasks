{{--
E:/Source/metronic-responsive-admin-dashboard-template/metronic_v6.0.4/theme/classic/demo1/components/widgets/lists.html
--}}





<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $mainTitle }}  {{ $mainCount }}
      </h3>
    </div>

    <!-- <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">
            Week
          </a>
        </li>
      </ul>
    </div> -->

  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget31_tab1_content">
        <div class="kt-widget31">

          @foreach ($widgetData as $key => $item)
            <div class="kt-widget31__item">
              <div class="kt-widget31__content">
                <div class="kt-widget31__pic">
                  <!-- <img src="./assets/media/users/100_4.jpg" alt=""> -->
                  {!! $icon !!}
                </div>
                <div class="kt-widget31__info">
                  <a href="#" class="kt-widget31__username">
                    {{ $item['title'] }}
                  </a>
                  <p class="kt-widget31__text">
                    {{ isset($item['sub_title']) ? $item['sub_title'] : '' }}
                  </p>
                </div>
              </div>
              <div class="kt-widget31__content">
                <div class="kt-widget31__progress">
                  <a href="#" class="kt-widget31__stats">
                    <span>{{ $item['percent'] }}%</span>
                    <span>{{ $item['value'] }}</span>
                  </a>
                  <div class="progress progress-sm">
                    <div class="progress-bar
                    @if ($key == 0 ) kt-bg-brand @endif
                    @if ($key == 1 ) kt-bg-warning @endif
                    @if ($key == 2 ) kt-bg-danger @endif
                    @if ($key == 3 ) kt-bg-success @endif
                    @if ($key == 4 ) kt-bg-info @endif"
                    role="progressbar" style="width: {{$item['percent']}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <!-- <a href="#" class="btn-label-brand btn btn-sm btn-bold">{{ __('words.read_more') }}</a> -->
              </div>
            </div>


          @endforeach

        </div>
      </div>

    </div>
  </div>
</div>






<!-- <div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        User Progress
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget31_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget31_tab2_content" role="tab">
            Week
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget31_tab1_content">
        <div class="kt-widget31">
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_4.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Anna Strong
                </a>
                <p class="kt-widget31__text">
                  Visual Designer,Google Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>63%</span>
                  <span>London</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_14.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Milano Esco
                </a>
                <p class="kt-widget31__text">
                  Product Designer, Apple Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>33%</span>
                  <span>Paris</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic kt-widget4__pic--pic">
                <img src="./assets/media/users/100_11.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Nick Bold
                </a>
                <p class="kt-widget31__text">
                  Web Developer, Facebook Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>13%</span>
                  <span>London</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic kt-widget4__pic--pic">
                <img src="./assets/media/users/100_1.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Wiltor Delton
                </a>
                <p class="kt-widget31__text">
                  Project Manager, Amazon Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <div class="kt-widget31__stats">
                  <span>93%</span>
                  <span>New York</span>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_6.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Sam Stone
                </a>
                <p class="kt-widget31__text">
                  Project Manager, Kilpo Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <div class="kt-widget31__stats">
                  <span>50%</span>
                  <span>New York</span>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget31_tab2_content">
        <div class="kt-widget31">
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic kt-widget4__pic--pic">
                <img src="./assets/media/users/100_11.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Nick Bold
                </a>
                <p class="kt-widget31__text">
                  Web Developer, Facebook Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>13%</span>
                  <span>London</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic kt-widget4__pic--pic">
                <img src="./assets/media/users/100_1.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Wiltor Delton
                </a>
                <p class="kt-widget31__text">
                  Project Manager, Amazon Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <div class="kt-widget31__stats">
                  <span>93%</span>
                  <span>New York</span>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_14.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Milano Esco
                </a>
                <p class="kt-widget31__text">
                  Product Designer, Apple Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>33%</span>
                  <span>Paris</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_6.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Sam Stone
                </a>
                <p class="kt-widget31__text">
                  Project Manager, Kilpo Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <div class="kt-widget31__stats">
                  <span>50%</span>
                  <span>New York</span>
                </div>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
          <div class="kt-widget31__item">
            <div class="kt-widget31__content">
              <div class="kt-widget31__pic">
                <img src="./assets/media/users/100_4.jpg" alt="">
              </div>
              <div class="kt-widget31__info">
                <a href="#" class="kt-widget31__username">
                  Anna Strong
                </a>
                <p class="kt-widget31__text">
                  Visual Designer,Google Inc
                </p>
              </div>
            </div>
            <div class="kt-widget31__content">
              <div class="kt-widget31__progress">
                <a href="#" class="kt-widget31__stats">
                  <span>63%</span>
                  <span>London</span>
                </a>
                <div class="progress progress-sm">
                  <div class="progress-bar bg-brand" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <a href="#" class="btn-label-brand btn btn-sm btn-bold">Follow</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
