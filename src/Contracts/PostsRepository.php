<?php

namespace Gmblog\Contracts;

interface PostsRepository
{
    public function bySlug(string $slug);
    public function lastNdifferentAs(int $limit, $post);
    public function allPaginatedBy(int $paginate);
}
