<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $product=Product::all();
        return view('home.index',compact('product'));
    }

    public function contact(Request $request)
    {
        $contact=new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message= $request->message;
        $contact->save();
        return redirect()->back();
    }
}
