{{ __('word.rate') }}
<br><br>
@foreach($data as $item)
  {{ $item->user ? $item->user->name : 'محذوف' }} : &nbsp;&nbsp;
  @for($i=1 ; $i <= 5 ; $i++ )
    @if( $i <= $item->rate )
    <i style="color: gold" class="fa fa-star"></i>
    @else
    <i style="color: silver" class="fa fa-star"></i>
    @endif
  @endfor
  <br>
    <br><br>
@endforeach
