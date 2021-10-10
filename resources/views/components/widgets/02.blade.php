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
          <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
            Month
          </a>
        </li>
      </ul>
    </div> -->

  </div>

  <div class="kt-portlet__body">
    <div class="tab-content">

      <div class="tab-pane active" id="kt_widget4_tab1_content">

        <div class="kt-widget4">

            @foreach( $widgetData as $key => $item)
              <div class="kt-widget4__item">
                <div class="kt-widget4__pic kt-widget4__pic--pic">
                  <img src="{{ optional(optional($item->client)->user)->getImagePath() }}" alt="">
                </div>
                <div class="kt-widget4__info">
                  <a href="{{ route('admin.offers.edit', [ 'id' => $item->id ] ) }}" class="kt-widget4__username">
                    {{ optional(optional(optional($item->client)->client_info)->first())->title }}
                  </a>
                  <p class="kt-widget4__text">
                    {{ $item->foramatCreatedFrom($item->getCreatedFrom()) }}
                  </p>
                </div>
                <a href="{{ route('admin.offers.edit', [ 'id' => $item->id ] ) }}"
                    class="btn btn-sm btn-bold
                    @if ($key == 0 ) btn-label-brand @endif
                    @if ($key == 1 ) btn-label-warning @endif
                    @if ($key == 2 ) btn-label-danger @endif
                    @if ($key == 3 ) btn-label-success @endif
                    @if ($key == 4 ) btn-label-primary @endif"
                  >
                  {{ __('words.read_more') }}
                </a>
              </div>
            @endforeach

        </div>

      </div>

    </div>
  </div>
</div>






<!--begin:: Widgets/New Users-->
<!-- <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        New Users
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
            Today
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
            Month
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget4_tab1_content">
        <div class="kt-widget4">
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_4.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Anna Strong
              </a>
              <p class="kt-widget4__text">
                Visual Designer,Google Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_14.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Milano Esco
              </a>
              <p class="kt-widget4__text">
                Product Designer, Apple Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_11.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Nick Bold
              </a>
              <p class="kt-widget4__text">
                Web Developer, Facebook Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_1.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Wiltor Delton
              </a>
              <p class="kt-widget4__text">
                Project Manager, Amazon Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_5.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Nick Stone
              </a>
              <p class="kt-widget4__text">
                Visual Designer, Github Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget4_tab2_content">
        <div class="kt-widget4">
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_2.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Kristika Bold
              </a>
              <p class="kt-widget4__text">
                Product Designer,Apple Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-success">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_13.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Ron Silk
              </a>
              <p class="kt-widget4__text">
                Release Manager, Loop Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_9.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Nick Bold
              </a>
              <p class="kt-widget4__text">
                Web Developer, Facebook Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_2.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Wiltor Delton
              </a>
              <p class="kt-widget4__text">
                Project Manager, Amazon Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-success">Follow</a>
          </div>
          <div class="kt-widget4__item">
            <div class="kt-widget4__pic kt-widget4__pic--pic">
              <img src="./assets/media/users/100_8.jpg" alt="">
            </div>
            <div class="kt-widget4__info">
              <a href="#" class="kt-widget4__username">
                Nick Bold
              </a>
              <p class="kt-widget4__text">
                Web Developer, Facebook Inc
              </p>
            </div>
            <a href="#" class="btn btn-sm btn-label-info">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
