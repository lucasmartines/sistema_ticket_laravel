<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;


use App\Comment;
use App\Ticket;
class CommentsController extends Controller
{
    //
    public function newComment(CommentFormRequest $request)
    {
        $comment = new Comment(
            array(
                'post_id' => $request->get('post_id'),
                'content' => $request->get('content')
            )
        );
        $comment->save();

        return redirect()->back()->with('status','Comentario Postado');

    }
    public function destroy($comment_id){
        $comment = Comment::whereId($comment_id)->firstOrFail();
        $comment->delete();
        return redirect()->back()->with('status','Comentario Deletado');
    }
}
