<?php

namespace App\Http\Controllers;

use App\Ac_category;
use App\User;
use App\User_category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all()->first()->with('categories')->orderBy('id','desc')->paginate(12)->toArray();
      //  dd($users['data'][0]['categories']);
      $users = $users['data'];
     // dd($users);
        $var3= auth()->user()->id;

        return view('pages.users',compact('users','var3'));
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
        //
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
        $user = User::find($id);

        $categories = Ac_category::all()->toArray();
        //dd($categories);//
        return view('pages.edit', compact('user','categories'));
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
        $user = User::find($id);
        $request->validate([
            'cat'=>'required:array',
        ]);
      // dd($user->categories);
       if(!$user->categories || $user->categories ==null|| count( $user->categories)==0)
        {
            foreach ($request->cat as $cat) {
                $User_category = new User_category();
                $User_category->user_id = $id;
                $User_category->ac_category_id = $cat;
                $User_category->save();
            }
        }
        else
        {
            $USerCat = $user->categories->toArray();

            foreach ($request->cat as $cat) {

                if(!in_array($cat,$USerCat))
                {  //dd($USercat['id']);
                    $User_category = new User_category();
                    $User_category->user_id = $id;
                   // dd($request->cat->id);
                    $User_category->ac_category_id = $cat;
                    $User_category->save();
                }
            }
        }
        return redirect('/users');
       /* foreach ($user->categories as $cat) {
            $cat->delete();
        }*/
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
