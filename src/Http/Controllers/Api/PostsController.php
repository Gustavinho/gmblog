<?php

namespace Gmblog\Http\Controllers;

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
        $paginate = 20;

        return response()->json(
            $this->posts->allPaginatedBy($paginate)
        );
    }

    public function show($slug)
    {
        $post = $this->posts->bySlug($slug);

        return response()->json($post);
    }
}
