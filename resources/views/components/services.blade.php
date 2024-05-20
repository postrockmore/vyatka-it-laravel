<div class="grid grid-cols-1/1 tablet:grid-cols-2 desktop:grid-cols-6 mt-6 desktop:mt-16 gap-6 desktop:gap-8">
    @foreach($categories as $category)
        <x-service-category-card
            columns="{{ in_array($loop->iteration, [1, 2]) ? 3 : 2 }}"
            background="{{ $category->color }}"
            name="{{ $category->title }}"
            description="{{ $category->excerpt }}"
            link="{{ route('services.category', $category) }}"
        >
            {!! $category->icon_alt !!}
        </x-service-category-card>
    @endforeach
</div>
