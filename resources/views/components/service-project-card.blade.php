<div class="flex flex-col bg-bg-second rounded-xl overflow-hidden">
    <div class="w-full">
        <picture>
            <source srcset="{{ $project->thumbnail_webp }}">
            <img src="{{ $project->thumbnail }}" alt="{{ $project->title }}">
        </picture>
    </div>
    <div class="flex flex-col px-14 pt-14 pb-24">
        <div class="flex gap-4 items-end justify-between">
            <div class="flex flex-col">
                <span class="title title-h3">{{ $project->title }}</span>
                <div class="mt-1">{!! $project->description !!}</div>
            </div>
            <noindex>
                <a target="_blank" rel="nofollow" class="text-link" href="{{ $project->link }}">Смотреть кейс →</a>
            </noindex>
        </div>

        @if($project->from or $project->to)
            <sep class="w-full h-px bg-border-main my-12"></sep>
            <div class="grid grid-cols-2 gap-[4.5rem]">
                    @if($project->from)
                        <div class="flex flex-col items-start">
                            <span class="title title-h4">Было 😡</span>
                            <span class="text-body mt-3">{{ $project->from }}</span>
                        </div>
                    @endif

                    @if($project->to)
                        <div class="flex flex-col items-start">
                            <span class="title title-h4">Стало 👍</span>
                            <span class="text-body mt-3">{{ $project->to }}</span>
                        </div>
                    @endif
            </div>
        @endif
    </div>
</div>
