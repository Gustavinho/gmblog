<?php

namespace Gmblog\Posts;

use Gmblog\Contracts\PostsRepository;
use Illuminate\Database\Eloquent\Builder;
use Wink\WinkPost;

class WinkPosts implements PostsRepository
{
    public function all(): Builder
    {
        return WinkPost::with('tags')
            ->with('author')
            ->live()
            ->orderBy('publish_date', 'DESC');
    }

    public function byTag($tag): Builder
    {
        return $this->all()->whereHas('tags', function (Builder $query) use ($tag) {
            $query->whereSlug($tag);
        });
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
