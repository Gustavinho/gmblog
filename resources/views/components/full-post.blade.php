@props(['post'])

<article class="container mx-auto mt-8 pb-32 prose lg:prose-xl">
  <h1>{{ $post->title }}</h1>

  <div class="flex">
    <div class="flex items-center">
      <img src="{{ $post->author->avatar }}" alt="" class="rounded-full w-12 h-12 mt-0 mb-0" style="margin-bottom: 0; margin-top: 0">
      <div class="ml-4" style="line-height: 32px">
        <span class="text-gray-800 font-semibold block" style="margin-bottom: 0">
          {{ $post->author->name }}
        </span>
        <span class="text-gray-700 mb-0">
          {{ $post->publish_date->diffForHumans() }}
        </span>
      </div>
    </div>
    <div class="flex-1 flex justify-end items-center">
      @component('components.share-post', ['post' => $post])
      @endcomponent
    </div>
  </div>

  <img src="{{ $post->featured_image }}" alt="" class="w-full rounded-lg mb-8">

  {!! $post->body !!}

  <div class="mt-8 flex">
    <div class="flex-1">
      <div class="mb-2">
        <small>Etiquetas relacionadas</small>
      </div>
      @foreach ($post->tags as $tag)
        <a href="{{ $tag->name }}">
          <x-gmblog-tag>
            {{ $tag->name }}
          </x-gmblog-tag>
        </a>
      @endforeach
    </div>
    <div class="">
      <div class="mb-2">
        <small>Compartir en</small>
      </div>
      <div class="flex justify-end">
        @component('components.share-post', ['post' => $post])
        @endcomponent
      </div>
    </div>
  </div>
</article>