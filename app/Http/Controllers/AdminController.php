<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\User;
class AdminController extends Controller
{
    /**
     * Show the category view.
     *
     * @return \Illuminate\View\View
     */

     public function admin_index()
     {
        $user=User::where('usertype','user')->get()->count();
        $product=Product::all()->count();
        
         
         return view('admin.index');
     }

   

   
   
   

    public function view_product()
    {
        $product=Product::paginate(3);
        return view('admin.view_product',compact('product'));
    }


    public function delete_product($id)
    {
        $data = Product::find($id);

        $data->delete();
        toastr()->addSuccess('Product deleted successfully');
        return redirect()->back();
    }

    public function search_product(Request $request)
{
    $search = $request->search;

    // Query the product database with the search term
    $product = Product::where('title', 'LIKE', "%{$search}%")->paginate(3);

    // Return the view with the search results
    return view('admin.view_product', compact('product'));
}







}
