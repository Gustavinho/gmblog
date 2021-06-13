@extends($layout)

@section('blog')

<div class="lg:flex lg:space-x-8 xl:space-x-16">
  <div class="flex-1">
    @foreach ($posts as $post)
      @foreach (range(1, 5) as $item)
        <div class="{{ !$loop->last ? 'border-b pb-8 lg:pb-12 ' : '' }} border-gray-200 {{ !$loop->first ? 'mt-8 lg:mt-12' : '' }}">
          <x-gmblog-post :post="$post" :showDate="true" />
        </div>
      @endforeach
    @endforeach
  </div>
  @if (!$tags->isEmpty())
    <div class="w-1/3">
      <h3>{{ __('Related tags') }}</h3>
      <ul>
        @foreach ($tags as $tag)
          <li class="py-2">
            <x-gmblog-tag>
              {{ $tag->name }}
            </x-gmblog-tag>
          </li>
        @endforeach
      </ul>
    </div>
  @endif
</div>

@endsection