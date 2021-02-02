<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articale;
use App\Models\Category;
use App\Models\User;

class ArticalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articales=Articale::orderBy('id','desc')->get();
        //$categories=Category::orderBy('id')->get();
        return view('admin.articales_list')->with('articales',$articales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::select('id','name')->where('is_active',1)->get();
       // $users=User::select('id','name')->get();
        return view('admin.articale_add')->with('all_cats',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_active=$request->has('is_active')?1:0;
        $newArticale=new Articale();
        $newArticale->title=$request->input('art_title');
        $newArticale->content=$request->input('art_content');
        $newArticale->cat_id=$request->input('cat_id');
        $newArticale->is_active=$is_active;
        $result=$newArticale->save();
        //if($result>0)
        return redirect()->route('articales.index')->with('message', 'artical added successful '.$result);
       
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
