@props(['post'])

@if (config('gmblog.showAuthor'))
  <div class="max-w-4xl px-0 md:px-10 mx-auto">
    <div class="flex mt-4">
      <div class="flex">
        <div class="mr-4 flex-shrink-0">
          <img src="{{ $post->author->avatar }}" alt="" class="rounded-full w-12 h-12 mt-0 mb-0 object-cover">
        </div>
        <div>
          <h4 class="text-gray-900 font-medium">{{ $post->author->name }}</h4>
          <p class="text-gray-500">
            {{ $post->publish_date->diffForHumans() }}
          </p >
        </div>
      </div>

      <div class="flex-1 flex justify-end items-center">
        <x-gmblog-share-post :post='$post' />
      </div>
    </div>
  </div>
@endif

<article class="prose lg:prose-xl mx-auto mt-8 text-gray-900">
  <h1>{{ $post->title }}</h1>

  <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full rounded-lg">


  {!! $post->body !!}

  <div class="mt-8 flex">
    <div class="flex-1">
      <div class="mb-2">
        <small>{{__('Related tags') }}</small>
      </div>
      @foreach ($post->tags as $tag)
        <x-gmblog-tag :tag="$tag" />
      @endforeach
    </div>
    <div class="">
      <div class="mb-2">
        <small>{{ __('Share') }}</small>
      </div>
      <div class="flex justify-end">
        <x-gmblog-share-post :post='$post' />
      </div>
    </div>
  </div>
</article>