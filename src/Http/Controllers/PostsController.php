<?php

namespace Gmblog\Http\Controllers;

use Gmblog\Facades\Gmblog;
use Wink\WinkTag;

class PostsController extends BlogController
{
    public function index()
    {
        $tags = WinkTag::orderBy('name')->get();

        return view('gmblog::posts.index', [
            'layout' => Gmblog::getLayout('blog'),
            'posts' => $this->posts->allPaginatedBy(12),
            'tags' => $tags
        ]);
    }

    public function show($slug)
    {
        $post = $this->posts->bySlug($slug);

        return view('gmblog::posts.show', [
            'layout' => Gmblog::getLayout('post'),
            'post' => $post,
            'posts' => $this->posts->lastNdifferentAs(3, $post),
        ]);
    }
}
