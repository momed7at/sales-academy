<?php

namespace App\Http\Controllers;

use App\Ac_category;
use Illuminate\Http\Request;

class Ac_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Ac_category::orderBy('id','desc')->paginate(8);
        $var2= auth()->user()->id;

        return view('pages.categories',compact('categories','var2'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // dd($request->title);
         $request->validate([
            'cat_ar_name' => 'required|max:500',
            'cat_en_name' => 'required|max:500',
            'cat_thumb' => 'image|mimes:jpeg,jpg,png,gif|max:19990',

        ]);

            if ($request->hasFile('cat_thumb')) {
                $file6 = $request->file('cat_thumb');
                $ext6 = $file6->getClientOriginalExtension();
                $filename6 = 'cat_thumb' . '_' . time() . '.' . $ext6;
                $file6->storeAs('public/cat_thumb', $filename6);
                // dd($path);
            }else {
                $filename6 = 'noimage.png';
            }
            $categories = new Ac_category();
            $categories->cat_ar_name = $request->cat_ar_name;
            $categories->cat_en_name = $request->cat_en_name;
            $categories->cat_thumb = $filename6;
            // $categories->user_id = auth()->user()->id;
            // dd($categories);
            $categories->save();

            return redirect()->back()->with('status','Post was created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Show page
    public function show($id)
    {
        //

        // $ac_category=Ac_category::all();
        // // dd($post);
        // return view('pages.categories',compact('ac_category'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
