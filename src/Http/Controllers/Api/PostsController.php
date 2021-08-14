<?php

namespace Gmblog\Http\Controllers\Api;

use Gmblog\Contracts\PostsRepository;
use Gmblog\Http\Resources\PostResource;
use Illuminate\Routing\Controller;

class PostsController extends Controller
{
    private $posts;

    public function __construct(PostsRepository $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->all()->paginate(config('gmblog.paginate'));

        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = $this->posts->bySlug($id);

        return new PostResource($post);
    }
}
