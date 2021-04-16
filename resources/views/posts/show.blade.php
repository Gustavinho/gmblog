@extends($layout, [
  'title' => $post->title,
  'footerClass' => 'dark'
])

@section('meta')
  <meta name="description" content="{{ $post->meta['meta_description'] }}">
  <meta property="og:url" content="{{ route('blog.show', ['slug' => $post->slug]) }}" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $post->meta['opengraph_title'] }}" />
  <meta property="og:description" content="{{ $post->meta['opengraph_description'] }}" />
  <meta property="og:image" content="{{ $post->meta['opengraph_image'] }}" />
@endsection

@section('content')

  <x-gmblog-full-post :post="$post" />

  @component('components.section', [
    'title' => 'Lo nuevo de Mi diario  de marketing  digital  y emprendimiento',
    'contrast' => true,
  ])
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      @foreach ($posts as $post)
        <x-gmblog-post :post="$post" />
      @endforeach
    </div>
  @endcomponent
@endsection