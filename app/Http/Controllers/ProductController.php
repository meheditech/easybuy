<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Validator;
use Illuminate\Http\Request;
use Nexmo\Client\Exception\Exception;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
//            'name'=>'required:min:6',
//            'photo' => 'mimes:jpeg,jpg,png,ico,JPG|max:1024',

        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input=$request->all();
        if ($request->hasFile('photo')) {
            $file=$request->file('photo');
            $fileType=$file->getClientOriginalExtension();
            $fileName="P_".rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('files',$fileName);
            $input['photo']=$fileName;
        }

        try{
        $data=Product::create($input);
        return redirect('products')->with('success', 'Item created');
        }
        catch (\Exception $e){
            return redirect()->back()->withInput()->with('error', 'Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::pluck('name', 'id');
        $data = Product::findOrFail($id);

        return view('admin.product.show', compact('data','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('name', 'id');
        $products = Product::findOrFail($id);

        return view('admin.product.edit', compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $product = Product::findOrFail($id);

        try{
            $product->update($input);

            return redirect('products')->with('success', 'Products Updated Successfully');
        } catch (\Exception $e)
        {
            return redirect('products.edit')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('products')->with('success', 'Product Was Deleted');
    }

    public function delete()
    {
        $trash = Product::onlyTrashed()->orderBy('id','desc')->get();
        return view('admin.trash.product-trash-list', compact('trash'));
    }
    public function reset($id)
    {
        Product::withTrashed()->where('id',$id)->restore();
        return redirect('products')->with('success', 'Product is Restored');
    }
    public function forcedelete($id)
    {
        $data = Product::withTrashed()->where('id',$id);
        $data->forceDelete();
        return redirect('products')->with('success', 'Product is Permanently Deleted');
    }
}
