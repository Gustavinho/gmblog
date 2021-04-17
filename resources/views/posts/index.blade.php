@extends($layout)

@section('blog')

<div class="grid gap-16 grid-cols-1 md:grid-cols-3">
  <div class="col-span-1 md:col-span-2">
    @foreach ($posts as $post)
      <div class="mb-24">
        <x-gmblog-post :post="$post" :showDate="true" />
      </div>
    @endforeach
  </div>
  <div class="">
    <h3>Etiquetas relacionadas</h3>
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
</div>

@endsection