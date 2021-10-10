<?php

namespace App\Services;
use App\Models\ItemType;

class ItemTypeService
{

  public function getAll()
  {
    return ItemType::all();
  }

  public function getClientUserTypes()
  {
    return ItemType::wherein('id',['1','3'])->get(); // only shop and delegate of shope
  }

  // public function checkInClientUserTypes($typeId)
  // {
  //     if (array_search( $typeId , ["1","3"]  ) === (bool) false) {
  //       return false;
  //     }
  //
  //     return true;
  // }
  //
  // public function getAdminUserTypes()
  // {
  //   return UserType::wherein('id',['4'])->get();
  // }





  // public function checkAlloewdAdminUserTypes($typeId)
  // {
  //   // used in Admin Midelware. only shop and admin can access admin Panel
  //   if (array_search( $typeId , ["1","4"]  ) === (bool) false) {
  //     return false;
  //   }
  //
  //   return true;
  // }

}
