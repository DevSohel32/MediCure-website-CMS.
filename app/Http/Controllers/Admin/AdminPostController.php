<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SharedDynamicFormRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\PostCategory;


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

    public function store(SharedDynamicFormRequest $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->merge(['table_name' => 'posts']);

        $tags = $request->tags ? implode(',', array_filter($request->tags, 'trim')) : '';

        $obj = new Post();
           if($request->hasFile('photo')){
               $obj->photo = $this->uploadPhoto($request, 'photo');
           }


       $obj->fill($request->validated());
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

    public function update(SharedDynamicFormRequest $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->merge(['table_name' => 'posts']);

        $obj = Post::where('id',$id)->first();

        if($request->hasFile('photo')) {
           $obj->photo = $this->uploadPhoto($request, 'photo', $obj->photo);
        }


        $obj->fill($request->validated());
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

   protected function uploadPhoto($request, $fieldKey, $oldFileName = null)
    {
        $file = $request->file($fieldKey);
        $final_name = 'department_' . time() . '.' . $file->extension();

        if (!empty($oldFileName) && file_exists(public_path('uploads/' . $oldFileName))) {
            unlink(public_path('uploads/' . $oldFileName));
        }

        $file->move(public_path('uploads'), $final_name);

        return $final_name;
    }
}
