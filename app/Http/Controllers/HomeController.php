<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Stripe;

class HomeController extends Controller
{
   public function index()
   {
      return view('admin.index');
   }



   public function home()
{
   $product = Product::all();
   return view('home.index', compact('product'));
}


   public function login_home()
   {
      $product = Product::all();
      if (Auth::id()) {
         $user = Auth::user();
         $userid = $user->id;
       

      } else {
         $count = '';
      }
      return view('home.index', compact('product', 'count'));
   }

   public function product_details($id)
   {

      $data = Product::find($id);
      if (Auth::id()) {
         $user = Auth::user();
         $userid = $user->id;
       

      } else {
         $count = '';
      }
      return view('home.product_details', compact('data', 'count'));
   }


 
  







  
  



}