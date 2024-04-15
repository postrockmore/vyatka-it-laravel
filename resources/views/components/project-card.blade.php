<div>
    <a href="{{ $link }}" class="group relative z-0">
        <img class="w-full aspect-square max-h-[13.375rem] tablet:max-h-[27.5rem] rounded-xl object-cover" src="{{ $thumbnail }}" alt="{{ $title }}">
        <div class="opacity-0 group-hover:opacity-100 transition-all absolute top-0 left-0 bottom-0 right-0 bg-black/75 rounded-xl z-10 p-8 flex flex-col justify-end">
            <span class="title title-h3 text-white">{{ $title }}</span>
        </div>
    </a>
</div>
