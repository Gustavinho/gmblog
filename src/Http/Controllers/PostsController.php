<?php

namespace Gmblog\Http\Controllers;

use Gmblog\Facades\Gmblog;
use Wink\WinkTag;

class PostsController extends BlogController
{
    public function index($tag = null)
    {
        if ($tag) {
            $posts = $this->posts->byTag($tag);
        } else {
            $posts = $this->posts->all();
        }
        $tags = WinkTag::orderBy('name')->withCount('posts')->get();

        return view('gmblog::posts.index', [
            'layout' => Gmblog::getLayout('blog'),
            'posts' => $posts->paginate(config('gmblog.paginate')),
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
