<!--begin:: Widgets/Blog-->



{{--
<x-widgets.03
      mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"
      label=""
      :image="optional(optional($advs_most_rate->item_info)->first())->imagePath()"
      description="{{ optional(optional($advs_most_rate->item_info)->first())->description }}"
      link="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
      username="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
      userimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
      :value="$advs_most_view->rate"
      valuestring="{{ __('words.count') }}"
/>
--}}


<!-- ./assets/media//products/product4.jpg -->
<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
  <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides"
    style="min-height: 300px; background-color: #02989c; background-image: url({{ $image }})">
      <h3 class="kt-widget19__title kt-font-light">
        {{ $mainTitle }}
      </h3>
      <div class="kt-widget19__shadow"></div>
      @if ( $label )
        <div class="kt-widget19__labels">
          <a href="#" class="btn btn-label-light-o2 btn-bold ">{{ $label }}</a>
        </div>
      @endif
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="kt-widget19__wrapper">
      <div class="kt-widget19__content">
        <div class="kt-widget19__userpic">
          <img src="{{ $userimage }}" alt="">
        </div>
        <div class="kt-widget19__info">
          <a href="#" class="kt-widget19__username">{{ $username }}</a>
          <!-- <span class="kt-widget19__time">
            UX/UI Designer, Google
          </span> -->
        </div>
        <div class="kt-widget19__stats">
          <span class="kt-widget19__number kt-font-brand">
            {{ $value }}
          </span>
          <a href="#" class="kt-widget19__comment">
            {{ $valuestring }}
          </a>
        </div>
      </div>
      <div class="kt-widget19__text">
        {!! $description !!}
      </div>
    </div>
    <div class="kt-widget19__action">
      <a href="{{ $link }}" class="btn btn-sm btn-label-brand btn-bold">{{ __('words.read_more') }}</a>
    </div>
  </div>
</div>




<!-- <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
  <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/product4.jpg)">
      <h3 class="kt-widget19__title kt-font-light">
        Introducing New Feature
      </h3>
      <div class="kt-widget19__shadow"></div>
      <div class="kt-widget19__labels">
        <a href="#" class="btn btn-label-light-o2 btn-bold ">Recent</a>
      </div>
    </div>
  </div>
  <div class="kt-portlet__body">
    <div class="kt-widget19__wrapper">
      <div class="kt-widget19__content">
        <div class="kt-widget19__userpic">
          <img src="./assets/media//users/user1.jpg" alt="">
        </div>
        <div class="kt-widget19__info">
          <a href="#" class="kt-widget19__username">
            Anna Krox
          </a>
          <span class="kt-widget19__time">
            UX/UI Designer, Google
          </span>
        </div>
        <div class="kt-widget19__stats">
          <span class="kt-widget19__number kt-font-brand">
            18
          </span>
          <a href="#" class="kt-widget19__comment">
            Comments
          </a>
        </div>
      </div>
      <div class="kt-widget19__text">
        Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
      </div>
    </div>
    <div class="kt-widget19__action">
      <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
    </div>
  </div>
</div> -->
