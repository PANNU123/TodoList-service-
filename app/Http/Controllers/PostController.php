<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('admin.Post.addpost');
    }

    public function store(Request $request, PostService $postService){
        $data=$request->only([
            'title',
            'description'
        ]);
        $result=['status' => 200];
        try{
           $result['data']=$postService->savePost($data);
           
        }catch(Exception $e){
            $result=[
                'status'=> 500,
                'error' => $e->getMessage()

            ];
        }
        return redirect()->back();
    }

    public function managepost( PostService $postService){
        
        $dt=$postService->getAll();
        if($dt['success'] == true){
            $post = $dt['data'];
            return view('admin.Post.managepost',compact('post'));
        }
        return $dt['msg'];
    }

    public function remove($id,PostService $postService){
        $dt=$postService->deletedata($id);
        if($dt['success']==true){
            return redirect()->back();

        }
    }

    public function postedit($id,PostService $postService){
        $post=Post::find($id);
        return view('admin.Post.editpost',compact('post'));
    }

    public function updatepost(Request $request,PostService $postService){
        $result=$postService->updatepost($request);
        if($result['success'] == true) {
            return redirect()->route('manage-post');
        }
        return $result['msg'];
    }

    public function helpersfun(){
        return view('helper');
    }
}
