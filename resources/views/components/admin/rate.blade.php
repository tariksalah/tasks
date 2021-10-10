  @for($i=1 ; $i <= 5 ; $i++ )
    @if( $i <= $data )
    <i style="color: gold;" class="fa fa-star"></i>
    @else
    <i style="color: silver;" class="fa fa-star"></i>
    @endif
  @endfor
