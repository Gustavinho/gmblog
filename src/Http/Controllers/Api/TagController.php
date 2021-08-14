<?php

namespace Gmblog\Http\Controllers\Api;

use Gmblog\Contracts\PostsRepository;
use Gmblog\Http\Resources\PostResource;
use Gmblog\Http\Resources\TagResource;
use Illuminate\Routing\Controller;
use Wink\WinkTag;

class TagController extends Controller
{
    public function index()
    {
        $tags = WinkTag::withCount('posts')->get();

        return TagResource::collection($tags);
    }

    public function show($slug)
    {
        $tag = WinkTag::whereSlug($slug)->with('posts')->first();

        return new TagResource($tag);
    }
}
