<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
   public function index()
   {

   
   $data = Article::all();

   
    return view('articles/index',['articles'=>$data]);
   }



   public function detail($id)
   {
      $data = Article::find($id);
      return view('articles.detail',['article'=>$data]);
   }

   public function add()
   {
      

      return view ('articles.add');
   }

   public function create()
   {
      $valitor = validator(request()->all(),['name'=>'required','email'=>'required','address'=>'required',]);

      if($valitor->fails())
      {
         return back ()->withErrors($valitor);
      }

      $article = new Article;
      $article->name = request()->name;
      $article->email = request()->email;
      $article->address = request()->address;
      $article->save();

      return redirect('/studentlist');
   }

   public function delete($id)
   {
      $article = Article::find($id);
      $article->delete();

      return redirect('/studentlist')->with('info','Article deleted');
   }

   public function edit($id)
   {
         $article = Article::find($id);
         return view('articles.edit',['editarticle'=>$article]);
   }

   public function update($id)
   {  
      $article = Article::find($id);
      $article->name = request()->name;
      $article->email = request()->email;
      $article->address = request()->address;
      $article->save();

      return redirect('/studentlist');
   }

}
