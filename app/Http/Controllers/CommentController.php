<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request) 
    {
        $comment = Comments::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => 1, 
        ]);

        return redirect()->back();
    }
}
