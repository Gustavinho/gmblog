<a class="twitter-share-button" target="_blank" href="
  https://twitter.com/intent/tweet?text={{ $post->meta['twitter_description'] }}&url={{ urlencode(route('blog.show', ['slug' => $post->slug])) }}
">
  <i data-feather="twitter"></i>
</a>
<a class="ml-2" id="facebook-Link" target="_blank"
  href="http://www.facebook.com/sharer.php?&p[url]={{ urlencode(route('blog.show', ['slug' => $post->slug])) }}&p[title]={{ $post->meta['opengraph_title'] }}&p[summary]={{ $post->meta['opengraph_description'] }}"
>
  <i data-feather="facebook"></i>
</a>