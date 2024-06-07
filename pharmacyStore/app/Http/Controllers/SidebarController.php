<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
   public function accountShow(){
    return view('/pages.customer_profile');
   }

   
}
