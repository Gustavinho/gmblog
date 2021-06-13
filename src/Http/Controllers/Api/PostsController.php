<?php

namespace Gmblog\Http\Controllers\Api;

use Gmblog\Contracts\PostsRepository;
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
        return response()->json(
            $this->posts->all()->get()
        );
    }

    public function show($slug)
    {
        $post = $this->posts->bySlug($slug);

        return response()->json($post);
    }
}
