<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
//use GuzzleHttp\Psr7\Request as Greq;
use Illuminate\Http\Request;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
//use App\Http\Controllers\Http;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function show_post(){
        //$client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/posts']);
        //$request = new Greq('GET', 'https://jsonplaceholder.typicode.com/posts');
        $post = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        //echo $encoded = json_encode($request);
        $collection = collect($post);
        $id = $collection->unique('id');
     
       
        
        //dump($collection);

        //$collection;
        return view('user.post',[
            'id' => $id
        ]);
       
       
    }

    public function comments($id){
        $comments = Http::get('https://jsonplaceholder.typicode.com/comments')->json();
        $commentCollection = collect($comments)->where('postId',$id);
        $postid = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $postcol = collect($postid)->where('id',$id);
        $idPost = $postcol->unique('id');
        $idComments = $commentCollection->unique('id');
        //dump($commentCollection);
        //dump($postcol);

        return view('user.comments',[
            'id' => $idComments,
            'postId' => $idPost

        ]);
    
    }
}
