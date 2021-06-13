@props(['tag', 'selected' => false])

<a href="{{ route('gmblog.index.tag', $tag->slug) }}" class="mb-2">
  <span class="border hover:bg-gray-200 hover:border-gray-300 rounded px-4 py-2 text-sm mr-2 inline-flex {{ $selected ? 'bg-primary-100 border-primary-400' : 'border-gray-200' }}">
    {{ $tag->name }}
    @if ($tag->posts_count)
      ({{ $tag->posts_count }})
    @endif
  </span>
</a>