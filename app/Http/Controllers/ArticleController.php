<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();

        return view("articles.index",['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("articles.create");
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
        $user=auth()->user();

        $form=$request->all();
        $user->articles()->create([
                         'title'=>$form['title'],
                         'content'=>$form['content'],
                         'created_at'=>now(),
                         'updated_at'=>now()]); 
        }


     
        public function upload(Request $request)
        {
            if($request->hasFile('upload')) {
                //get filename with extension
                $filenamewithextension = $request->file('upload')->getClientOriginalName();
          
                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
          
                //get file extension
                $extension = $request->file('upload')->getClientOriginalExtension();
          
                //filename to store
                $filenametostore = $filename.'_'.time().'.'.$extension;
          
                //Upload File
                $request->file('upload')->storeAs('public/uploads', $filenametostore);
     
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = asset('storage/uploads/'.$filenametostore);
                $msg = 'Image successfully uploaded';
                $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                 
                // Render HTML output
                @header('Content-type: text/html; charset=utf-8');
                echo $re;
            }
        }
    public function show($id)
    {
        //
        $article=Article::where('id',$id)->first();
        return view('articles.show',['article'=>$article]);
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
