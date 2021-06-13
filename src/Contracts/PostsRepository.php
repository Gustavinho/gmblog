<?php

namespace Gmblog\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface PostsRepository
{
    public function all(): Builder;
    public function byTag($tag): Builder;
    public function bySlug(string $slug);
    public function lastNdifferentAs(int $limit, $post);
}
