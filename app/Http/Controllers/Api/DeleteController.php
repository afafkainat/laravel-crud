<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {

            $post->delete();

            return response()->json(['message' => 'post deleted sucessfully'], 200);
        } else {
            return response()->json(['message' => 'no post found'], 404);
        }
    }
}
