<?php

use Illuminate\Support\Facades\View;
 
if (!function_exists('front_view')) {

    function front_view($name)
    {
      return View("public.page.".$name);
    }
}

if (!function_exists('admin_view')) {

  function admin_view($name)
  {
    return View("admin.page.".$name);
  }
}
