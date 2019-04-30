<?php

namespace App\Http\Controllers;

use App\Category;
use Validator;
use Illuminate\Http\Request;
use Nexmo\Client\Exception\Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            $data = Category::create($input);
            return redirect('categories')->with('success', 'Category Created Successfully');
        } catch (\Exception $e)
        {
            return redirect('categories.create')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $category = Category::findOrFail($id);

        try{
            $category->update($input);

            return redirect('categories')->with('success', 'Category Updated Successfully');
        } catch (\Exception $e)
        {
            return redirect('categories.edit')->with('error', 'Something Went Wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('categories')->with('success', 'Category is Deleted');
    }


    public function delete()
    {
        $trash = Category::onlyTrashed()->orderBy('id','desc')->get();
        return view('admin.trash.category-trash-list', compact('trash'));
    }
    public function restore($id)
    {
        Category::withTrashed()->where('id',$id)->restore();
        return redirect('categories')->with('success', 'Category is Restored');
    }

}
