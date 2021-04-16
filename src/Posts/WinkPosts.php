<?php

namespace Gmblog\Posts;

use Gmblog\Contracts\PostsRepository;
use Wink\WinkPost;

class WinkPosts implements PostsRepository
{
    public function allPaginatedBy(int $paginate)
    {
        $posts = WinkPost::with('tags')
            ->with('author')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate($paginate)
            ->makeHidden(['body']);

        return $posts;
    }

    public function lastNdifferentAs(int $limit, $post)
    {
        $posts = WinkPost::with('tags')
            ->where('id', '!=', $post->id)
            ->with('author')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit($limit)
            ->get();

        return $posts;
    }

    public function bySlug(string $slug)
    {
        $post = WinkPost::with('tags')
            ->with('author')
            ->live()
            ->whereSlug($slug)
            ->firstOrFail();

        return $post;
    }
}
