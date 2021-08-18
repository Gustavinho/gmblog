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

    /**
     * Gets a list of all the posts slug in one single endpoint
     */
    public function slugs()
    {
        $slugs = $this->posts->all()->select('slug')->get()->pluck('slug');

        return response()->json($slugs);
    }
}
