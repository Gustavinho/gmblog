<?php

namespace Gmblog\Http\Controllers;

use Gmblog\Contracts\PostsRepository;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    protected $posts;

    public function __construct(PostsRepository $posts)
    {
        $this->posts = $posts;
    }
}
