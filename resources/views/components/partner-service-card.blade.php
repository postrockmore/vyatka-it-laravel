<div class="flex flex-col p-6 desktop:p-8 rounded-xl desktop:col-span-{{ $columns }} bg-main-dark" style="--bg: rgba(82, 203, 255, 0.15)" data-hover-element>
    {{ $slot }}
    
    <span class="text-lg font-bold mt-5 desktop:mt-8">{{ $name }}</span>
    <p class="mt-2 max-w-[336px]">{{ $description }}</p>
</div>