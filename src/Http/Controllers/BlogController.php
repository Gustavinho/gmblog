<?php

namespace Gmblog\Http\Controllers;

use App\EnvironmentUsers;
use Gmblog\Contracts\PostsRepository;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    protected $posts;
    protected $blogUser;
    protected $views;
    protected $layout;

    public function __construct(PostsRepository $posts, EnvironmentUsers $blogUser)
    {
        $this->posts = $posts;
        $this->blogUser = $blogUser;
        $this->views = $this->blogUser->views();
        $this->layout = $this->views . '.layout';
    }
}
