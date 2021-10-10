<?php

namespace App\Services;
use App\Models\SocialSite;

class SocialSiteService
{

  public function getAll()
  {
      $data = SocialSite::get();
      foreach ($data as $item) {
        $item->title = $item->getTitle();
      }
      return $data;
  }

  public function getActive()
  {
      $data = SocialSite::active()->get();
      foreach ($data as $item) {
        $item->title = $item->getTitle();
      }
      return $data;
  }



}
