<div class="flex flex-col p-6 desktop:p-8 rounded-xl desktop:col-span-{{ $columns }}" style="background: {{ $background }}; --bg: {{ $background }}" data-hover-element data-hover-element-with-border>
    {{ $slot }}
    
    <span class="text-lg font-bold mt-5 desktop:mt-8">{{ $name }}</span>
    <p class="mt-2 max-w-[336px]">{{ $description }}</p>
</div>