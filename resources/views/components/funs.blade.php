@php use Illuminate\Support\Facades\Storage; @endphp
<div class="grid grid-cols-4 gap-8">
    @foreach($gallery as $image)
        <a href="{{ Storage::url($image) }}" data-fancybox="gallery" data-hover-3d>
            <img src="{{ Storage::url($image) }}" alt="">
        </a>
    @endforeach
</div>
