@extends($layout)

@section('content')

@component('components.section', [
  'small' => true
])
<div class="grid gap-4 grid-cols-1 md:grid-cols-3">
  <h2 class=" col-span-3 md:col-span-2">Lo nuevo de Mi diario  de marketing  digital  y emprendimiento</h2>
</div>
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
@endcomponent

@endsection