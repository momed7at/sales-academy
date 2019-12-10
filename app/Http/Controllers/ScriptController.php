<?php

namespace App\Http\Controllers;
use App\Script;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ScriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * @var UploadedFile
         */

        $request->validate([

             'scr_location' =>  "required|mimes:pdf|max:10000",
             'scr_en_title' => 'required|max:500',
        ]);

        if ($request->hasFile('scr_location')) {
            $file3 = $request->file('scr_location');
            $ext3 = $file3->getClientOriginalExtension();
            $filename3 = 'scr_location' . '_' . time() . '.' . $ext3;
            $file3->storeAs('scr_location', $filename3);
            // dd($path);
        }

        $scripts = new Script();
        // $scripts->scr_location = $request->scr_location;
        $scripts->vid_en_title = $request->vid_en_title;
        $scripts->scr_location = $filename3;
        $scripts->save();

        // //pivot table enta 23ml model
        // $UserVideo = new User_video();
        // $UserVideo->user_id = auth()->user()->id;
        // $UserVideo->vid_id = $videos->id;
        // $UserVideo->save();
        return redirect('/scripts')->with('status','Post was created !');
        // //
        // // dd($request->title);
        // $request->validate([
        //     'title' => 'required|max:200',
        //     'body' => 'required|max:500',
        //     'coverImage' => 'image|mimes:jpeg,jpg,png,gif|max:19990'
        // ]);

        // if ($request->hasFile('coverImage')) {
        //     $file = $request->file('coverImage');
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = 'cover_image' . '_' . time() . '.' . $ext;
        //     $file->storeAs('public/coverImages', $filename);
        //     // dd($path);
        // } else {
        //     $filename = 'noimage.png';
        // }
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->image = $filename;
        // $post->user_id = auth()->user()->id;

        // $post->save();

        // return redirect('/posts')->with('status', 'Post was created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $scripts = Script::find($id);
        return view('scripts');

        // //
        // $d1 = Script::find($id);
        // return Storage::download($d1->scr_location, $d1->scr_ar_title, $d1->scr_en_title);
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
