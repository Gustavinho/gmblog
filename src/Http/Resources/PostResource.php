<?php

namespace Gmblog\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $route = $request->route()->action['as'];

        $resource = [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'featured_image' => $this->featured_image,
            'created_at' => $this->created_at,
            'publish_date' => $this->publish_date,
            'tags' => $this->tags->map(fn ($tag) => [
                'name' => $tag->name,
                'slug' => $tag->slug,
            ]),
            'author' => [
                'name' => $this->author->name,
                'slug' => $this->author->slug,
                'email' => $this->author->email,
                'avatar' => $this->author->avatar,
            ]
        ];

        if ($route === 'posts.show') {
            $resource['body'] = $this->body;
            $resource['meta'] = $this->meta;
            $resource['markdown'] = $this->markdown;
        }

        return $resource;
    }
}
