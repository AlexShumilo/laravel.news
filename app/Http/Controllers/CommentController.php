<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function sendComment(Request $request) {

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'theme' => 'required',
            'comment' => 'required'
        ];
        $messages = [
            'required'=>'Все поля формы должны быть заполнены!'
        ];

        $this->validate($request, $rules, $messages);

        Comment::create([
            'user_name' => $request->name,
            'user_email' => $request->email,
            'comment_theme' => $request->theme,
            'comment_text' => $request->comment,
            'news_id' => $request->news_id
        ]);

        return view('comment_sended');
    }
}
