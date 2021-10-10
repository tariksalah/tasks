<?php

namespace App\Services;
use App\Models\Rate;
use App\Helpers\UtilHelper;

class RateService
{

  public function validateDoublicateRate($user_id, $any_id, $for)
  {
      if ($for == 'item') {
        return Rate::where('user_id' , $user_id)->ofAny($any_id)->ForItem()->exists();
      }
  }

  public function disrate($user_id, $any_id, $for)
  {
      if ($for == 'item') {
        return Rate::where('user_id' , $user_id)->ofAny($any_id)->ForItem()->delete();
      }
  }

  public function calcRate( $any_id , $for )
  {
    if ($for == "item"){
      $rate = Rate::ofAny($any_id)->ForItem()->select('rate')->get();
    }

    $itemRatesCount = count($rate);
    $fullStars =  $itemRatesCount * 5;
    $itemStars = $rate->sum('rate');

    $rates = $rate->groupBy('rate');

    $rates = $rates->map(function ($item, $key) use ($fullStars) {
        if ($fullStars == 0) {
          $perc = 0;
        } else {
          $count = collect($item)->count();
          $perc = ( ($key * $count) * ($key / 5) ) / $fullStars ;
        }
        return ['reviews' => $count , 'perc' =>  round( ( $perc ) * 100 , 1) ];
    });


    $defaultStars = collect([
         '5'=>['reviews'=>0,'perc'=>0],
         '4'=>['reviews'=>0,'perc'=>0],
         '3'=>['reviews'=>0,'perc'=>0],
         '2'=>['reviews'=>0,'perc'=>0],
         '1'=>['reviews'=>0,'perc'=>0],
     ]);

     $rates = $rates->union($defaultStars)->sortKeysDesc();

     $rates->rate_count = $itemRatesCount;

     $rateValue = ($fullStars > 0) ?  round (( $itemStars / $fullStars ) * 5 , 2) : 0;
     $rates->rate = number_format($rateValue,2);

     return $rates;

  }



}
