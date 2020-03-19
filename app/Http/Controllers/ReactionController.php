<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Visitor;

class ReactionController extends Controller
{
    ////First thing Vistior added to db then add Reaction
    public function up(Request $request){


        $post = Post::find($request->id);
        $response = $visitor()->upvote($target)


        return response()->json(['success'=>$response]);
    }
}
