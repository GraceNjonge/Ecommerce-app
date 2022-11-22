<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public  function  product()
{
    return view('admin.product');
}
public  function uploadproduct(Request  $request)
{
    $data=new Product;
    $data-> $request->file('image ');
    $imagename=time().'.'.$image->getClientOriginalExension();
    $request->file->move('productimage',$imagename);
    $data->image=$imagename;
    $data->title=$request->title;
    $data->Price=$request->Price;
    $data->Description=$request->Description;
    $data->Quantity=$request->Quantity;
     

    $data->save();
return  redirect()->back();
}
}
