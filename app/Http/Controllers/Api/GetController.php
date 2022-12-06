<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class GetController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $post = Post::find($id);
        if ($post) {
            return response()->json(['posts' => $post], 200);
        } else {
            $post = Post::all();

            return response()->json([
                'status' => true,
                'posts' => $post
            ]);
        }
    }
}
