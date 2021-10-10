
<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $mainTitle }}
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <!-- <div class="dropdown dropdown-inline">
        <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="flaticon-more-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">


          <ul class="kt-nav">
            <li class="kt-nav__head">
              Export Options
              <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24" />
                    <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                    <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                    <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                  </g>
                </svg> </span>
            </li>
            <li class="kt-nav__separator"></li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-drop"></i>
                <span class="kt-nav__link-text">Activity</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                <span class="kt-nav__link-text">FAQ</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-link"></i>
                <span class="kt-nav__link-text">Settings</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                <span class="kt-nav__link-text">Support</span>
                <span class="kt-nav__link-badge">
                  <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                </span>
              </a>
            </li>
            <li class="kt-nav__separator"></li>
            <li class="kt-nav__foot">
              <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
              <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
            </li>
          </ul>


        </div>
      </div> -->
    </div>
  </div>

  <div class="kt-portlet__body">
    <div class="kt-widget3">

      @foreach( $widgetData as $key => $item)
        <div class="kt-widget3__item">
          <div class="kt-widget3__header">
            <div class="kt-widget3__user-img">
              <img class="kt-widget3__img" src="{{ optional(optional($item->client)->user)->getImagePath() }}" alt="">
            </div>
            <div class="kt-widget3__info">
              <a href="#" class="kt-widget3__username">
                {{ optional(optional(optional($item->client)->client_info)->first())->title }}
              </a><br>
              <span class="kt-widget3__time">
                {{ $item->foramatCreatedFrom($item->getCreatedFrom()) }}
              </span>
            </div>
            <span class="kt-widget3__status
              @if ($key == 0 ) kt-font-info @endif
              @if ($key == 1 ) kt-font-warning @endif
              @if ($key == 2 ) kt-font-danger @endif
              @if ($key == 3 ) kt-font-success @endif
              @if ($key == 4 ) kt-font-primary @endif
              ">
              aaaaaaa
            </span>
          </div>
          <div class="kt-widget3__body">
            <p class="kt-widget3__text">
              {!! optional(optional($item->item_info)->first())->description !!}
            </p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>





<!--begin:: Widgets/Support Tickets -->
<!-- <div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Support Tickets
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <div class="dropdown dropdown-inline">
        <button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="flaticon-more-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">


          <ul class="kt-nav">
            <li class="kt-nav__head">
              Export Options
              <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24" />
                    <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                    <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                    <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                  </g>
                </svg> </span>
            </li>
            <li class="kt-nav__separator"></li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-drop"></i>
                <span class="kt-nav__link-text">Activity</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                <span class="kt-nav__link-text">FAQ</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-link"></i>
                <span class="kt-nav__link-text">Settings</span>
              </a>
            </li>
            <li class="kt-nav__item">
              <a href="#" class="kt-nav__link">
                <i class="kt-nav__link-icon flaticon2-new-email"></i>
                <span class="kt-nav__link-text">Support</span>
                <span class="kt-nav__link-badge">
                  <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
                </span>
              </a>
            </li>
            <li class="kt-nav__separator"></li>
            <li class="kt-nav__foot">
              <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
              <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="kt-widget3">
      <div class="kt-widget3__item">
        <div class="kt-widget3__header">
          <div class="kt-widget3__user-img">
            <img class="kt-widget3__img" src="./assets/media/users/user1.jpg" alt="">
          </div>
          <div class="kt-widget3__info">
            <a href="#" class="kt-widget3__username">
              Melania Trump
            </a><br>
            <span class="kt-widget3__time">
              2 day ago
            </span>
          </div>
          <span class="kt-widget3__status kt-font-info">
            Pending
          </span>
        </div>
        <div class="kt-widget3__body">
          <p class="kt-widget3__text">
            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
          </p>
        </div>
      </div>
      <div class="kt-widget3__item">
        <div class="kt-widget3__header">
          <div class="kt-widget3__user-img">
            <img class="kt-widget3__img" src="./assets/media/users/user4.jpg" alt="">
          </div>
          <div class="kt-widget3__info">
            <a href="#" class="kt-widget3__username">
              Lebron King James
            </a><br>
            <span class="kt-widget3__time">
              1 day ago
            </span>
          </div>
          <span class="kt-widget3__status kt-font-brand">
            Open
          </span>
        </div>
        <div class="kt-widget3__body">
          <p class="kt-widget3__text">
            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
          </p>
        </div>
      </div>
      <div class="kt-widget3__item">
        <div class="kt-widget3__header">
          <div class="kt-widget3__user-img">
            <img class="kt-widget3__img" src="./assets/media/users/user5.jpg" alt="">
          </div>
          <div class="kt-widget3__info">
            <a href="#" class="kt-widget3__username">
              Deb Gibson
            </a><br>
            <span class="kt-widget3__time">
              3 weeks ago
            </span>
          </div>
          <span class="kt-widget3__status kt-font-success">
            Closed
          </span>
        </div>
        <div class="kt-widget3__body">
          <p class="kt-widget3__text">
            Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
          </p>
        </div>
      </div>
    </div>
  </div>
</div> -->
