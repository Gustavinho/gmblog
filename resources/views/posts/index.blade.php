@extends($layout)

@section('blog')

<div class="lg:flex lg:space-x-8">
  <div class="flex-1">
    @forelse ($posts as $post)
      @foreach (range(1, 5) as $item)
        <div class="{{ !$loop->last ? 'border-b pb-8 lg:pb-12 ' : '' }} border-gray-200 {{ !$loop->first ? 'mt-8 lg:mt-12' : '' }}">
          <x-gmblog-post :post="$post" :showDate="true" />
        </div>
      @endforeach
    @empty
      <div class="flex items-center justify-center h-32 font-medium text-gray-900 text-lg">
        {{ __('There are not posts yet.') }}
      </div>
    @endforelse

    <div class="mt-8">
      {{ $posts->links() }}
    </div>
  </div>

  @if (!$tags->isEmpty())
    <div class="w-full lg:w-1/3">
      <h3 class="mb-4">{{ __('Related tags') }}</h3>
      <div class="flex flex-wrap">
        @foreach ($tags as $tag)
          <x-gmblog-tag :tag="$tag" :selected="request()->route('tag') && request()->route('tag') === $tag->slug" />
        @endforeach
      </div>
    </div>
  @endif
</div>

@endsection