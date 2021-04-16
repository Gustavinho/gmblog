@props(['post'])

<div class="inline big:flex overflow-hidden">
  <div>
    <a href="{{ route('blog.show', $post->slug) }}">
      <img class="w-full object-cover rounded-lg h-48 xl:h-64" src="{{ $post->featured_image }}">
    </a>

    <div class="mt-4">
      <a href="{{ route('blog.show', $post->slug) }}" class="text-gray-700">
        <h3 class="mb-0">{{ $post->title }}</h3>
      </a>
      <span class="inline big:hidden text-gray-600">
        {!! $post->publish_date->diffForHumans() !!}
      </span>
    </div>

    <div class="mt-4">
      <p class="text-base">{{ $post->excerpt }}</p>
    </div>

    <div class="mt-4">
      <a href="{{ route('blog.show', $post->slug) }}">Leer más...</a>
    </div>
  </div>
</div>