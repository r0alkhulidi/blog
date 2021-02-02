<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Artical;
use App\Models\Comment;
use Illuminate\Http\Request;

class dashboardsController extends Controller
{
    public function index()
    {
        $catcount=Category::get()->count();
        $articalcount=Artical::get()->count();
        $commentcount=Comment::get()->count();
        return view('admin.dashboard')->with('categoryCount',$catcount)
        ->with('commentcount',$commentcount)->with('articalcount',$articalcount);
    }
}
