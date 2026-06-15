<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\PostCategory;
use Hash;
use Auth;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $post_categories = PostCategory::orderBy('name','asc')->get();
        return view('admin.post.create', compact('post_categories'));
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'title' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:posts',
            'short_description' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->tags == null) {
            $tags = '';
        } else {
            $tagsArray = array_filter($request->tags, function ($t) { return trim($t) !== ''; });
            $tags = implode(',', $tagsArray);
        }

        $obj = new Post();

        $final_name = 'post_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);
        $obj->photo = $final_name;

        $obj->post_category_id = $request->post_category_id;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->tags = $tags;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_post_index')->with('success', __('Data is created successfully'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $post_categories = PostCategory::orderBy('name','asc')->get();
        $post_tags = array_values(
            array_filter(explode(',', $post->tags), function ($t) { return trim($t) !== ''; })
        );
        return view('admin.post.edit', compact('post', 'post_categories', 'post_tags'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'title' => 'required',
            'slug' => 'required|regex:/^[a-z0-9-]+$/|unique:posts,slug,'.$id,
            'short_description' => 'required',
            'description' => 'required',
        ]);

        if($request->tags == null) {
            $tags = '';
        } else {
            $tagsArray = array_filter($request->tags, function ($t) { return trim($t) !== ''; });
            $tags = implode(',', $tagsArray);
        }

        $obj = Post::where('id',$id)->first();

        if($request->photo)
        {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $final_name = 'post_'.time().'.'.$request->photo->extension();
            if($obj->photo != '') {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        $obj->post_category_id = $request->post_category_id;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->short_description = $request->short_description;
        $obj->description = $request->description;
        $obj->tags = $tags;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_post_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Post::where('id',$id)->first();
        if($obj->photo != '') {
            unlink(public_path('uploads/'.$obj->photo));
        }
        $obj->delete();

        return redirect()->route('admin_post_index')->with('success', __('Data is deleted successfully'));
    }

    public function comment()
    {
        $comments = Comment::get();
        return view('admin.post.comment', compact('comments'));
    }

    public function comment_status_change($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $comment = Comment::findOrFail($id);
        if($comment->status == 'Pending') {
            $comment->status = 'Active';
        } else {
            $comment->status = 'Pending';
        }
        $comment->update();

        return redirect()->back()->with('success','Comment status changed successfully');
    }

    public function comment_delete($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }


    public function reply()
    {
        $replies = Reply::get();
        return view('admin.post.reply', compact('replies'));
    }

    public function reply_status_change($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $reply = Reply::findOrFail($id);
        if($reply->status == 'Pending') {
            $reply->status = 'Active';
        } else {
            $reply->status = 'Pending';
        }
        $reply->update();

        return redirect()->back()->with('success','Reply status changed successfully');
    }

    public function reply_delete($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $reply = Reply::findOrFail($id);
        $reply->delete();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }

    public function reply_submit(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $request->validate([
            'reply' => 'required',
        ]);

        $reply = new Reply();
        $reply->comment_id = $request->comment_id;
        $reply->reply = $request->reply;
        $reply->user_type = 'Admin';
        $reply->status = 'Active';
        $reply->save();

        return redirect()->back()->with('success','Reply submitted successfully');
    }
}
