<<x-layout>
    @if($category)
        <h1>{{ $category['name'] }}</h1>
        <hr>
        <p>{{ $category['description'] }}</p>
    @else
        <p class="text-muted">Oops! Kategori yang Anda cari tidak ditemukan.</p>
    @endif
</x-layout>