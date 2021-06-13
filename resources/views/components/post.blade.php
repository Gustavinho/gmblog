@props(['post'])

<div class="text-base lg:text-lg text-gray-600">
  @if (config('gmblog.postCardLayout') === 'vertical')
    <a href="{{ route('gmblog.show', $post->slug) }}">
      <img class="w-full object-cover rounded-lg h-48 xl:h-64" src="{{ $post->featured_image }}">
    </a>

    <div class="mt-4">
      <div class="flex mb-4">
        <div class="mr-2 flex-shrink-0">
          <img src="{{ $post->author->avatar }}" alt="" class="rounded-full w-6 h-6 mt-0 mb-0 object-cover">
        </div>
        <h4>{{ $post->author->name }}</h4>
      </div>
      <h3 class="font-bold text-xl text-gray-900">
        <a href="{{ route('gmblog.show', $post->slug) }}" class="hover:text-gray-900 hover:underline">
          {{ $post->title }}
        </a>
      </h3>
      <span class="inline big:hidden">
        {!! $post->publish_date->diffForHumans() !!}
      </span>
    </div>

    <div class="mt-4">
      <p>{{ $post->excerpt }}</p>
    </div>

  @endif

  @if (config('gmblog.postCardLayout') === 'horizontal')
    <div class="flex flex-col md:flex-row md:space-x-4">
      <div class="flex-1">
        <div class="mt-4 md:mt-0">

          @if (config('gmblog.showAuthor'))
            <div class="flex mb-2">
              <div class="mr-4 flex-shrink-0">
                <img src="{{ $post->author->avatar }}" alt="" class="rounded-full w-6 h-6 mt-0 mb-0 object-cover">
              </div>
              <h4>{{ $post->author->name }}</h4>
            </div>
          @endif

          <h3 class="font-bold text-xl text-gray-900">
            <a href="{{ route('gmblog.show', $post->slug) }}" class="hover:text-gray-900 hover:underline">
              {{ $post->title }}
            </a>
          </h3>
          <span>
            {!! $post->publish_date->diffForHumans() !!}
          </span>
        </div>

        <div class="mt-2 lg:mt-4">
          <p >{{ $post->excerpt }}</p>
        </div>


      </div>
      <div class="order-first md:order-last md:w-4/12 mt-0 md:mt-8">
        <a href="{{ route('gmblog.show', $post->slug) }}">
          <img class="w-full object-cover rounded-lg h-full" src="{{ $post->featured_image }}">
        </a>
      </div>
    </div>
  @endif

  <div class="mt-4">
    <a href="{{ route('gmblog.show', $post->slug) }}" class="text-gray-700 hover:underline">
      {{__('Read more')}}...
    </a>
  </div>
</div>