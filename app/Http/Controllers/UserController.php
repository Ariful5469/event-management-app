<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function profile()
{
    $seller = Auth::user(); // Already authenticated & seller due to middleware
    return view('user.profile', compact('seller'));
}
    public function index()
     {
        $user=User::where('usertype','user')->get()->count();
        $product=Product::all()->count();
     
      
         
         return view('user.index');
     }

  
    /**
     * Handle adding a new category.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function search_product(Request $request)
     {
         $search = $request->search;
     
         
         $product = Product::where('title', 'LIKE', "%{$search}%")->paginate(3);
     
         
         return view('home.product', compact('product'));
     }
 

    public function add_product()
    {
       
        return view('user.add_product');
    }
    

    public function upload_product(Request $request)
    {
        // Create a new Product instance
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;
    
        // Handle image upload
        $image = $request->image;
        if ($image) {
            // Generate a unique name for the image using current time and file extension
            $imagename = time() . '.' . $image->getClientOriginalExtension();
    
            // Move the image to the 'product' directory
            $request->image->move('product', $imagename);
    
            // Save the image name in the database
            $data->image = $imagename;
        }
    
        // Save the product to the database
        $data->save();
    
        // Display success message
        toastr()->success('Product uploaded successfully'); // Corrected toastr method
        return redirect()->back();
    }
    



  








    
}
