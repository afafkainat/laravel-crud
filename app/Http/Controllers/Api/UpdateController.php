<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {


        $post = Post::find($id);
        if ($post) {
            $post->name = $request->name;
            $post->quantity = $request->quantity;
            $post->price = $request->price;
            $post->category = $request->category;
            $post->update();

            return response()->json(['message' => 'post updates sucessfully'], 200);
        } else {
            return response()->json(['message' => 'no post found'], 404);
        }
    }
}
