<?php
namespace App\Service;

use App\Models\Post;


class PostService{
 public function savePost($data){
     $post=new Post();
     $post->title = $data['title'];
     $post->description = $data['description'];
     $post->save();
 }  

 public function getAll(){
     $data = ['success' => false, 'data' => [],  'msg' => __('Something went wrong!')];
     $post=Post::orderBy('id','DESC')->get();
     if($post) {
        $data['success'] = true;
        $data['data'] = $post;
        $data['msg'] = __('All Files');
     }
     return $data;
 }

 public function deletedata($id){
    $data = ['success' => false, 'data' => [],  'msg' => __('Something went wrong!')];
    $post = Post::find($id)->delete();
    if($post){
        $data['success'] = true;
        $data['data'] = $post;
        $data['msg'] = __('All Files');
    }
    return $data;
 }
 public function editpost($id){
    //  $post= Post::where('id',$id)->get();
     $post=Post::find($id);
     if($post) {
        $data['success'] = true;
        $data['data'] = $post;
        $data['msg'] = __('All Files');
     }
     return $data;
 }
 public function updatepost($data){
     $dt = ['success' => false, 'data' => [], 'msg' => __('Something went wrong!')];
    $update = Post::where('id', $data->id)->update([
        'title' => $data->title,
        'description' => $data->description
    ]);
    if($update) {
        $dt['success'] = true;
        $dt['msg'] = __('Successfully Updated!');
    }
    return $dt;
 }
}

