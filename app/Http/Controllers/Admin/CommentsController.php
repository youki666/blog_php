<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
class CommentsController extends Controller
{
    //
    public function index(){
        return view('admin/comments/comments')->withComments(Comment::all());
    }


    //编辑评论

    public function edit($id)
    {
        return view('admin/comments/edit')->withComment(Comment::find($id));
    }
    //更新
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nickname' => 'required',
            'email' => 'required', 
            'content' => 'required',
            'website' => 'required'
        ]);
        $comment = Comment::find($id);
        $comment->nickname = $request->get('nickname');
        ///dd($request->all());
        $comment->email = $request->get('email');
        $comment->content = $request->get('content');
        $comment->website = $request->get('website');
        if ($comment->save()) {
            return redirect('admin/comments');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }
    //删除评论
    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}
