<div>
    <div class="flex items-center gap-6 overflow-x-auto text-nowrap">
        <button wire:click="showAll()" class="toggler {{ !$category_id ? "active" : "" }}">Все</button>

        @foreach($categories as $category)
            <button class="toggler {{ isset($category_id) && $category_id == $category->id ? "active" : "" }}" wire:click="showCategory({{ $category->id }})">{{ $category->title }}</button>
        @endforeach
    </div>

    @if ($projects->isNotEmpty())
        <div class="grid grid-cols-1/1 tablet:grid-cols-2 desktop:grid-cols-3 gap-5 desktop:gap-8 mt-6 desktop:mt-14">
            @foreach($projects as $project)
                <x-project-card :title="$project->title"
                                :thumbnail="$project->thumbnail"
                                :thumbnailWebp="$project->thumbnailWebp"
                                :link="route('project', $project)"
                >
                </x-project-card>
            @endforeach
        </div>

        @if ($projects->hasMorePages())
            <button wire:click="loadmore()" class="button bg-button-more w-full tablet:py-5 text-main mt-5 desktop:mt-8">Показать
                ещё
            </button>
        @endif
    @else
        <p class="mt-6">Данный раздел пуст</p>
    @endif
</div>
