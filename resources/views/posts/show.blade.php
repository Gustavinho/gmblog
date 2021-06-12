@extends($layout)

@push('meta')
  <meta name="description" content="{{ $post->meta['meta_description'] }}">
  <meta property="og:url" content="{{ route('blog.show', ['slug' => $post->slug]) }}" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $post->meta['opengraph_title'] }}" />
  <meta property="og:description" content="{{ $post->meta['opengraph_description'] }}" />
  <meta property="og:image" content="{{ $post->meta['opengraph_image'] }}" />

  <meta name='twitter:card' content='summary_large_image' />
  <meta name='twitter:site' content='{{ config('gmblog.socialMedia.twitter') }}' />
  <meta name='twitter:creator' content='{{ config('gmblog.socialMedia.twitter') }}' />
  <meta name='twitter:image' content='{{ $post->meta['twitter_image'] }}' />
  <meta name='twitter:title' content='{{ $post->meta['twitter_title']   }}' />
  <meta name='twitter:description' content='{{ $post->meta['twitter_description']   }}' />
@endpush

@section('post')
  <x-gmblog-full-post :post="$post" />
@endsection