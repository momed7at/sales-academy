<?php

namespace App\Http\Controllers;

use App\Ac_Video;
use App\Script;
use App\User_video;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\File\UploadedFile;





class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = Ac_Video::orderBy('id','desc')->paginate(5);
        $var= auth()->user()->id;

        // to get all posts count from DB
        return view('videos', compact('videos','var'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('videos.create');
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

        //  'title' => 'required|max:200',
        //  'body' => 'required|max:500',
            'thumbnail' => 'image|mimes:jpeg,jpg,png,gif|max:19990',
            'vid_location' => 'mimetypes:video/avi,video/mpeg,video/mp4,video/quicktime',
            'script' =>  "required|mimes:pdf|max:10000",

        ]);

        if ($request->hasFile('vid_location')) {
        $file1 = $request->file('vid_location');
        $ext1 = $file1->getClientOriginalExtension();
        $filename1 = 'vid_location' . '_' . time() . '.' . $ext1;
        $file1->storeAs('public/vid_location', $filename1);
        // dd($path);
        } else {
            $filename1 = 'noimage.png';
        }
        if ($request->hasFile('thumbnail')) {
            $file2 = $request->file('thumbnail');
            $ext2 = $file2->getClientOriginalExtension();
            $filename2 = 'thumbnail' . '_' . time() . '.' . $ext2;
            $file2->storeAs('public/coverImages', $filename2);
            // dd($path);
        } else {
        $filename2 = 'noimage.png';
        }
        if ($request->hasFile('script')) {
            $file3 = $request->file('script');
            $ext3 = $file3->getClientOriginalExtension();
            $filename3 = 'script' . '_' . time() . '.' . $ext3;
            $file3->storeAs('public/scripts', $filename3);
            // dd($path);
        }

        $videos = new Ac_Video();
        // $videos = $request->file('vid_location');
        // $videos = $request->file('thumbnail');
        // $videos->storeAs('public/upload', 'public');
        $videos->vid_ar_title = $request->vid_ar_title;
        $videos->vid_en_title = $request->vid_en_title;
        $videos->vid_ar_summary = $request->vid_ar_summary;
        $videos->vid_en_summary = $request->vid_en_summary;
        $videos->vid_ar_description = $request->vid_ar_description;
        $videos->vid_en_description = $request->vid_en_description;
        $videos->vid_location = $filename1;
        $videos->thumbnail = $filename2;
        $videos->script = $filename3;



        $videos->save();

        //pivot table enta 23ml model
        $UserVideo = new User_video();
        $UserVideo->user_id = auth()->user()->id;
        $UserVideo->vid_id = $videos->id;
        $UserVideo->save();

        return redirect('/videos')->with('status','Post was created !');
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
     // Show page
    public function show($id)
    {
        $video = Ac_Video::find($id);
        $UserVideo = User_video::find($id);
        // dd($post);
        return view('videos.show',compact('video','UserVideo'));
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

    public function download($id){
        $video = Ac_Video::find($id);

        // $file=public_path()."/storage/scripts/script_1575895307.pdf";
        // $headers = array(
        //     'Content-Type: application/pdf',
        // );
        // // dd($file);
        $pathToFile = public_path()."/storage/scripts/".$id;

       // $name = time().'.pdf';

        $headers = ['Content-Type: application/pdf'];


        return response()->download($pathToFile,$id, $headers);
        // return response()->download($file, "Script-file.pdf",$headers);

    }
}
