<?php

namespace Gmblog\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
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
            'name' => $this->name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'posts_count' => $this->posts_count
        ];

        if ($route === 'tags.show') {
            $resource['meta'] = $this->meta;
            $resource['posts'] = PostResource::collection($this->posts);
        }

        return $resource;
    }
}
