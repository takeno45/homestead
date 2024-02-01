<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function text($id){
        $post = Post::findOrfail($id);

        return view('posts.text')->with(['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {
        $post = new Post();
        $post->title =$request->title;
        $post->detail =$request->detail;
        $post->save();

        return redirect()->route('index.posts');

    }


    public function edit($id){
        $post = Post::findOrfail($id);

        return view('posts.edit')->with(['post' => $post]);  //posts.textではなく、posts.editに修正
    }

    public function update(PostRequest $request, $id) {
        $post = Post::findOrfail($id);
        $post->title =$request->title;
        $post->detail =$request->detail;
        $post->save();

        return redirect()->route('text.posts',$post->id);

    }
    public function destroy($id){
        $post = Post::findOrfail($id);
        $post->delete();

        return redirect()->route('index.posts');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = collect();

        if (!empty($query)) {
            $posts = Post::where('title', 'like', "%{$query}%")->get();
        }

        return view('search')->with(['posts' => $posts]);
    }


}
