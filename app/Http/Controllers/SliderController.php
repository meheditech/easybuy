<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Validator;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            $fileName="S_".rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('files',$fileName);
            $input['photo']=$fileName;
        }

        try{
            $data=Slider::create($input);
            return redirect('slider')->with('success', 'Slider created');
        }
        catch (\Exception $e){
            return redirect()->back()->withInput()->with('error', 'Something went wrong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::findOrFail($id);

        $data->delete();

        return redirect('slider')->with('success', 'Slider Was Deleted');
    }

    public function delete()
    {
        $trash = Slider::onlyTrashed()->orderBy('id','desc')->get();
        return view('admin.trash.slider-trash-list', compact('trash'));
    }

    public function reset($id)
    {
        Slider::withTrashed()->where('id',$id)->restore();
        return redirect('slider')->with('success', 'Slider is Restored');
    }

    public function forcedelete($id)
    {
        $data = Slider::withTrashed()->where('id',$id);
        $data->forceDelete();
        return redirect()->back()->with('success', 'Slider is Permanently Deleted');
    }
}
