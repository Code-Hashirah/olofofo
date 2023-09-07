<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewsBlog extends Controller
{
    //
    function adminAdd(){
        return view('Admin.addBlog');
    }
    public function store(Request $request){
        DB::table('blogs')->insert([
            'title'=>$request->Title,
            'body'=>$request->Body,
            'picture'=>$request->Picture
        ]);
        return redirect('/admin/addBlog')->with('success', 'Blog added');
    }
    public function getAll(){
        $Blogs=DB::table('blogs')->get();
        return view('Admin.manageBlogs',compact(['Blogs']));
    }

    public function deleteBlog(Request $request){
        DB::table('blogs')->where('id',$request->Id)->delete();
        return redirect('/admin/manage-blog')->with('success','Blog deleted');
    }

    public function editBlog($id){
        $SingleBlog=DB::table('blogs')->find($id);
        return view('Admin.editBlog',compact((['SingleBlog'])));
    }
    public function updateBlog(Request $request){
        DB::table('blogs')->where('id',$request->id)->update([
            'title'=>$request->Title,
            'body'=>$request->Body,
            'picture'=>$request->Picture
        ]);
        return redirect('/admin/manage-blog');
    }
}
