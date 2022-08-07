<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Images;
use App\Models\Sections;
use App\Models\Views;
use Exception;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    
    public function create(Request $request){
        
        $this->middleware('auth');
        $validate = $request->validate([
            'title' => 'required',
            'main_image' => 'required',
            'article' => 'required',
            'select' => 'required',
        ]);

        $rules = ['title', 'file', 'article'];
        //image
        $main_image = $request->file('main_image');
        $path_push = 'images/featureds/';
        $filename = time() .'-'.$main_image->getClientOriginalName();
        $upload = $request->file('main_image')->move($path_push, $filename);
        //add path in db
        $imagen = new Images;
        $imagen->path = $path_push . $filename;
        $imagen->save();
        //views
        $views = new Views;
        $views->save();
        //article
        $article = new Post;
        $article->path = $request->path;
        $article->title = $request->title;
        $article->images_id = $imagen->id;
        $article->section_id = $request->section_id;
        $article->views_id = $views->id;
        $data = array();
        foreach ($request->request as $key => $item) { //custom object 
            $break_item = explode("_", $key);
            if(in_array($break_item[0], $rules)){
                $data[$key] = $item;
            }
        } 
        try {
            $article->data_post = json_encode($data);
            $article->save();
        } catch(Exception $error){
            dd($error);
        }
    }
    
    public function get_all_post(){
        return Post::all();
    }

    public function get_one_post($id){
        $post = Post::where('id', $id)->first();
        $number_views = Views::where('id', $post->id);
        $number_views = $number_views->number_views++;
        return $post;
    }

    public function get_for_section($section_id){
        return Post::where('section_id', $section_id)->get();
    }
    
    //SECTIONS 

    public function physics(){
        $posts_section = $this->get_for_section(1);
        return view('pages/physics', [
            'posts' => $posts_section,           
        ]);
    }   
    public function programming(){
        $posts_section = $this->get_for_section(2);
        return view('pages/programing', [
            'posts' => $posts_section,           
        ]);
        
    }
    public function summaries_books(){
        $posts_section = $this->get_for_section(3);
        return view('pages/summaries', [
            'posts' => $posts_section,           
        ]);
    }



}
