<div class="row">

  <!-- users counts -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.17
      widgetTitle="{{ __('admin/dashboard.all_clients') }}"
      widgetSubTitle=""
      :mainTitle="$userCounts"
      mainSubTitle=""
      icon="<i class='flaticon2-user-1' style='padding: 0px 10px;'></i>"
      color="color: #59b0fd;"
      :widgetData="$userCountsData"
    />
  </div>

  <!-- items counts -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.17
      widgetTitle="{{ __('admin/dashboard.all_items') }}"
      widgetSubTitle=""
      :mainTitle="$itemCounts"
      mainSubTitle=""
      icon="<i class='flaticon2-shopping-cart' style='padding: 0px 10px;'></i>"
      color="color: #e1ca6d;"
      :widgetData="$itemCountsData"
    />
  </div>





  <div class="col-xl-12 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.12
      :mainTitle="$userCounts"
      :totalCounts="$userCounts"
      :widgetData="$userCountsData"
      icon="<i class='flaticon2-user-1' style='padding: 0px 10px;font-size: 30px;color: gainsboro;'></i>"
      />
  </div>

  <div class="col-xl-12 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.12
      :mainTitle="$itemCounts"
      :totalCounts="$itemCounts"
      :widgetData="$itemCountsData"
      icon="<i class='flaticon2-shopping-cart' style='padding: 0px 10px;font-size: 30px;color: gainsboro;'></i>"
    />
  </div>





  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.18
      mainTitle="{{ __('admin/dashboard.all_clients') }}"
      :mainCount="$userCounts"
      :widgetData="$userCountsData"
      icon="<i class='flaticon2-user-1' style='font-size: 20px;color: #ccc;'></i>"
    />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.18
      mainTitle="{{ __('admin/dashboard.all_items') }}"
      :mainCount="$itemCounts"
      :widgetData="$itemCountsData"
      icon="<i class='flaticon2-shopping-cart' style='font-size: 20px;color: #ccc;'></i>"
    />
  </div>






  <!-- charts -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.chart_01
      mainTitle="{{ __('admin/dashboard.all_clients') }}"
      :widgetData="$clientCountsChart"
      divChart="div_chart_1"
      icon="<i class='flaticon2-user-1' style='padding: 0px 10px;font-size: 20px;color: #ccc;'></i>"
    />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.chart_01
      mainTitle="{{ __('admin/dashboard.all_items') }}"
      :widgetData="$itemCountsChart"
      divChart="div_chart_2"
      icon="<i class='flaticon2-shopping-cart' style='padding: 0px 10px;font-size: 20px;color: #ccc;'></i>"
    />
  </div>






  <!-- most views -->
  <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.03
          mainTitle="{{ __('admin/dashboard.offers_most_view') }}"
          label=""
          image="{{ optional($offers_most_view->client->user)->getImagePath() }}"
          description="{!! optional(optional($offers_most_view->item_info)->first())->description !!}"
          link="{{ route('admin.offers.edit', [ 'id' => $offers_most_view->id ] ) }}"
          username="{{ optional(optional($offers_most_view->client->client_info)->first())->title }}"
          userimage="{{ optional($offers_most_view->client->user)->getImagePath() }}"
          :value="$offers_most_view->views_count"
          valuestring="{{ __('words.count') }}"
    />
  </div>

  <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.03
          mainTitle="{{ __('admin/dashboard.orders_most_view') }}"
          label=""
          image="{{ optional($orders_most_view->client->user)->getImagePath() }}"
          description="{!! optional(optional($orders_most_view->item_info)->first())->description !!}"
          link="{{ route('admin.orders.edit', [ 'id' => $orders_most_view->id ] ) }}"
          username="{{ optional(optional($orders_most_view->client->client_info)->first())->title }}"
          userimage="{{ optional($orders_most_view->client->user)->getImagePath() }}"
          :value="$orders_most_view->views_count"
          valuestring="{{ __('words.count') }}"
    />
  </div>

  <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.03
          mainTitle="{{ __('admin/dashboard.advs_most_view') }}"
          label=""
          image="{{ optional($advs_most_view->client->user)->getImagePath() }}"
          description="{!! optional(optional($advs_most_view->item_info)->first())->description !!}"
          link="{{ route('admin.advs.edit', [ 'id' => $advs_most_view->id ] ) }}"
          username="{{ optional(optional($advs_most_view->client->client_info)->first())->title }}"
          userimage="{{ optional($advs_most_view->client->user)->getImagePath() }}"
          :value="$advs_most_view->views_count"
          valuestring="{{ __('words.count') }}"
    />
    </div>





    <!-- most comments -->
    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.03
            mainTitle="{{ __('admin/dashboard.offers_most_comment') }}"
            label=""
            image="{{ optional($offers_most_comment->client->user)->getImagePath() }}"
            description="{!! optional(optional($offers_most_comment->item_info)->first())->description !!}"
            link="{{ route('admin.offers.edit', [ 'id' => $offers_most_comment->id ] ) }}"
            username="{{ optional(optional($offers_most_comment->client->client_info)->first())->title }}"
            userimage="{{ optional($offers_most_comment->client->user)->getImagePath() }}"
            :value="$offers_most_view->comments_count"
            valuestring="{{ __('words.count') }}"
      />
    </div>

    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.03
            mainTitle="{{ __('admin/dashboard.orders_most_comment') }}"
            label=""
            image="{{ optional($orders_most_comment->client->user)->getImagePath() }}"
            description="{!! optional(optional($orders_most_comment->item_info)->first())->description !!}"
            link="{{ route('admin.orders.edit', [ 'id' => $orders_most_comment->id ] ) }}"
            username="{{ optional(optional($orders_most_comment->client->client_info)->first())->title }}"
            userimage="{{ optional($orders_most_comment->client->user)->getImagePath() }}"
            :value="$orders_most_view->comments_count"
            valuestring="{{ __('words.count') }}"
      />
    </div>

    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.03
            mainTitle="{{ __('admin/dashboard.advs_most_comment') }}"
            label=""
            image="{{ optional($advs_most_comment->client->user)->getImagePath() }}"
            description="{!! optional(optional($advs_most_comment->item_info)->first())->description !!}"
            link="{{ route('admin.advs.edit', [ 'id' => $advs_most_comment->id ] ) }}"
            username="{{ optional(optional($advs_most_comment->client->client_info)->first())->title }}"
            userimage="{{ optional($advs_most_comment->client->user)->getImagePath() }}"
            :value="$advs_most_comment->comments_count"
            valuestring="{{ __('words.count') }}"
      />
      </div>




      <!-- most rate -->
      <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
        <x-widgets.03
              mainTitle="{{ __('admin/dashboard.offers_most_rate') }}"
              label=""
              image="{{ optional($offers_most_rate->client->user)->getImagePath() }}"
              description="{!! optional(optional($offers_most_rate->item_info)->first())->description !!}"
              link="{{ route('admin.offers.edit', [ 'id' => $offers_most_rate->id ] ) }}"
              username="{{ optional(optional($offers_most_rate->client->client_info)->first())->title }}"
              userimage="{{ optional($offers_most_rate->client->user)->getImagePath() }}"
              :value="$offers_most_rate->rate"
              valuestring="{{ __('words.count') }}"
        />
      </div>

      <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
        <x-widgets.03
              mainTitle="{{ __('admin/dashboard.orders_most_rate') }}"
              label=""
              image="{{ optional($orders_most_rate->client->user)->getImagePath() }}"
              description="{!! optional(optional($orders_most_rate->item_info)->first())->description !!}"
              link="{{ route('admin.orders.edit', [ 'id' => $orders_most_rate->id ] ) }}"
              username="{{ optional(optional($orders_most_rate->client->client_info)->first())->title }}"
              userimage="{{ optional($orders_most_rate->client->user)->getImagePath() }}"
              :value="$orders_most_view->rate"
              valuestring="{{ __('words.count') }}"
        />
      </div>

      <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
        <x-widgets.03
              mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"
              label=""
              image="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
              description="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
              link="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
              username="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
              userimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
              :value="$advs_most_view->rate"
              valuestring="{{ __('words.count') }}"
        />
        </div>



    <!-- red block -->
    <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.13
              mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"
              label=""
              image="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
              description="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
              link="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
              username="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
              userimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
              :value="$advs_most_view->rate"
              valuestring="{{ __('words.count') }}"
              itemdatefrom="{{ $advs_most_rate->foramatCreatedFrom($advs_most_rate->getCreatedFrom()) }}"
      />
    </div>




    <!-- wave block -->
    <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.08
          mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"
          image="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
          description="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
          link="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
          username="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
          userimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
      />
    </div>


    <!-- small image data title details more -->
    <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
      <x-widgets.09
        mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"

        itemimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
        itemdescription="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
        itemlink="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
        itemname="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
      />
    </div>


  <!-- list colors bars -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.05
          mainTitle="{{ __('admin/dashboard.offers_top_view') }}"
          :widgetData="$offers_top_rate"
    />
  </div>


  <!-- list image title details views comments -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">

  <x-widgets.01
      mainTitle="{{ __('admin/dashboard.offers_top_view') }}"
      :widgetData="$offers_top_rate"
  />
  </div>


  <!-- list image title details but more -->
  <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
  <x-widgets.02
      mainTitle="{{ __('admin/dashboard.offers_top_view') }}"
      :widgetData="$offers_top_rate"
  />
  </div>


  <!-- list image title details but more -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.04
        mainTitle="{{ __('admin/dashboard.offers_top_view') }}"
        :widgetData="$offers_top_rate"
    />
  </div>



  <!-- single with table info( key value ) -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.07
        mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"

        itemimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
        itemname="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
        iteminfo="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
        itemlink="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
        itemdescription="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
        iteminfo01="{{ optional($advs_most_rate->client->user)->email }}"
        iteminfo02="{{ optional($advs_most_rate->client->user)->mobile }}"
    />
  </div>


  <!-- single with table links social media -->
  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.16
        mainTitle="{{ __('admin/dashboard.advs_most_rate') }}"

        itemimage="{{ optional($advs_most_rate->client->user)->getImagePath() }}"
        itemname="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
        iteminfo="{{ optional(optional($advs_most_rate->client->client_info)->first())->title }}"
        itemlink="{{ route('admin.advs.edit', [ 'id' => $advs_most_rate->id ] ) }}"
        itemdescription="{!! optional(optional($advs_most_rate->item_info)->first())->description !!}"
        itemstatus="{{ $advs_most_rate->isActive() }}"
        iteminfo01="{{ optional($advs_most_rate->client->user)->email }}"
        iteminfo02="{{ optional($advs_most_rate->client->user)->mobile }}"
    />
  </div>













  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.10 />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.11 />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.14 />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.15 />
  </div>

  <div class="col-xl-6 col-lg-6 order-lg-3 order-xl-1">
    <x-widgets.19 />
  </div>





</div>
