@extends($layout)

@push('meta')
  <meta name="description" content="{{ $post->meta['meta_description'] }}">
  <meta property="og:url" content="{{ route('blog.show', ['slug' => $post->slug]) }}" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $post->meta['opengraph_title'] }}" />
  <meta property="og:description" content="{{ $post->meta['opengraph_description'] }}" />
  <meta property="og:image" content="{{ $post->meta['opengraph_image'] }}" />
@endpush

@section('post')
  <x-gmblog-full-post :post="$post" />
@endsection