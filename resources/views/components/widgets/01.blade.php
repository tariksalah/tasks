<div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        {{ $mainTitle }}
      </h3>
    </div>
    <!-- <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
            Latest
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
            Month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
            All time
          </a>
        </li>
      </ul>
    </div> -->
  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
        <div class="kt-widget5">

          @foreach( $widgetData as $key => $item)
            <div class="kt-widget5__item">
              <div class="kt-widget5__content">
                <div class="kt-widget5__pic" style="max-height: 6.5rem;overflow: clip;border-radius: 4.5px;">
                  <img class="kt-widget7__img" src="{{ optional(optional($item->client)->user)->getImagePath() }}" alt="">
                </div>
                <div class="kt-widget5__section">
                  <a href="{{ route('admin.offers.edit', [ 'id' => $item->id ] ) }}" class="kt-widget5__title">
                    {{ optional(optional(optional($item->client)->client_info)->first())->title }}
                  </a>
                  {{--
                  <p class="kt-widget5__desc">
                    {!! \Illuminate\Support\Str::limit( optional(optional($item->item_info)->first())->description , 150, $end='...') !!}
                  </p>
                  --}}
                  <div class="kt-widget5__info">
                    <!-- <span>Author:</span> -->
                    <span class="kt-font-info" style="color: #02989c !important;">{{ $item->foramatCreatedFrom($item->getCreatedFrom()) }}</span>
                    <!-- <span>Released:</span>
                    <span class="kt-font-info">23.08.17</span> -->
                  </div>
                </div>
              </div>
              <div class="kt-widget5__content">
                <div class="kt-widget5__stats">
                  <span class="kt-widget5__number
                        @if ($key == 0 ) kt-font-brand @endif
                        @if ($key == 1 ) kt-font-warning @endif
                        @if ($key == 2 ) kt-font-success @endif
                        @if ($key == 3 ) kt-font-danger @endif"
                  >{{ $item->rate }}</span>
                  <span class="kt-widget5__sales
                        @if ($key == 0 ) kt-font-brand @endif
                        @if ($key == 1 ) kt-font-warning @endif
                        @if ($key == 2 ) kt-font-success @endif
                        @if ($key == 3 ) kt-font-danger @endif"
                  >{{ __('project.rate') }}</span>
                </div>
                <div class="kt-widget5__stats">
                  <span class="kt-widget5__number
                        @if ($key == 0 ) kt-font-brand @endif
                        @if ($key == 1 ) kt-font-warning @endif
                        @if ($key == 2 ) kt-font-success @endif
                        @if ($key == 3 ) kt-font-danger @endif" style="text-align: center;">{{ $item->views_count }}</span>
                  <span class="kt-widget5__sales
                        @if ($key == 0 ) kt-font-brand @endif
                        @if ($key == 1 ) kt-font-warning @endif
                        @if ($key == 2 ) kt-font-success @endif
                        @if ($key == 3 ) kt-font-danger @endif"
                  >{{ __('project.views') }}</span>
                </div>

              </div>
            </div>
          @endforeach

        </div>
      </div>


    </div>
  </div>
</div>





<!--begin:: Widgets/Best Sellers-->
<!-- <div class="kt-portlet kt-portlet--height-fluid">
  <div class="kt-portlet__head">
    <div class="kt-portlet__head-label">
      <h3 class="kt-portlet__head-title">
        Best Sellers
      </h3>
    </div>
    <div class="kt-portlet__head-toolbar">
      <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
            Latest
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
            Month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
            All time
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="tab-content">
      <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
        <div class="kt-widget5">
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product27.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Great Logo Designn
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Keenthemes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">19,200</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1046</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product22.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Branding Mockup
                </a>
                <p class="kt-widget5__desc">
                  Metronic bootstrap themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">24,583</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">3809</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product15.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Awesome Mobile App
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.Lorem Ipsum Amet
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">210,054</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1103</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget5_tab2_content">
        <div class="kt-widget5">
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Branding Mockup
                </a>
                <p class="kt-widget5__desc">
                  Metronic bootstrap themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">24,583</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">3809</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Awesome Mobile App
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.Lorem Ipsum Amet
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">210,054</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1103</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Great Logo Designn
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Keenthemes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">19,200</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1046</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="kt_widget5_tab3_content">
        <div class="kt-widget5">
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Awesome Mobile App
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.Lorem Ipsum Amet
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">210,054</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1103</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Great Logo Designn
                </a>
                <p class="kt-widget5__desc">
                  Metronic admin themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Keenthemes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">19,200</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">1046</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
          <div class="kt-widget5__item">
            <div class="kt-widget5__content">
              <div class="kt-widget5__pic">
                <img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
              </div>
              <div class="kt-widget5__section">
                <a href="#" class="kt-widget5__title">
                  Branding Mockup
                </a>
                <p class="kt-widget5__desc">
                  Metronic bootstrap themes.
                </p>
                <div class="kt-widget5__info">
                  <span>Author:</span>
                  <span class="kt-font-info">Fly themes</span>
                  <span>Released:</span>
                  <span class="kt-font-info">23.08.17</span>
                </div>
              </div>
            </div>
            <div class="kt-widget5__content">
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">24,583</span>
                <span class="kt-widget5__sales">sales</span>
              </div>
              <div class="kt-widget5__stats">
                <span class="kt-widget5__number">3809</span>
                <span class="kt-widget5__votes">votes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
