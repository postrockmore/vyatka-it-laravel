<div class="grid grid-cols-4 gap-x-8 gap-y-12 mt-12">
    @foreach($employees as $employee)
        <div class="flex flex-col">
            <div class="w-full" data-hover-3d>
                <picture>
                    <source srcset="{{ $employee->thumbnail_webp }}">
                    <img class="w-full aspect-square" src="{{ $employee->thumbnail }}" alt="{{ $employee->title }}">
                </picture>
            </div>
            <div class="flex flex-col mt-4">
                <span>{{ $employee->title }}</span>
                <p class="text-caption">{{ $employee->description }}</p>
            </div>
        </div>
    @endforeach

    <div class="flex flex-col col-span-2">
        <div class="flex aspect-[592/280] bg-[#d1d5d16e] gap-6">
            <div class="h-full flex items-end">
                <svg width="287" height="257" viewBox="0 0 287 257" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M91.1656 184.718C46.0325 196.151 11.5831 218.336 0 228V257.5H286.5C286.5 229.9 274.833 214.764 269 210.646C246.924 196.763 214.014 187.576 200.319 184.718L192.143 179.205L187.646 169.406C200.564 161.729 202.976 140.074 202.568 130.206C208.291 121.632 208 106.371 208 98C208 91.3035 204.59 87 201.319 92.4364V83.5L203.59 76.5118C205.552 44.4992 191.87 32.9572 184.784 31.1878C197.866 27.5129 193.369 -10.8696 136.544 3.01346C79.7188 16.8965 81.3541 36.9044 73.9954 49.5624C68.1085 59.6888 76.4483 91.892 81.3541 106.728C76.8571 107.136 73.1778 112.853 81.3541 132.452C87.8951 148.132 97.1616 147.968 100.977 145.927L106.701 154.093L108.745 165.118L91.1656 184.718Z" fill="#B3B5AB" fill-opacity="0.44"/>
                </svg>
            </div>
            <div class="flex flex-col items-start pt-8 pb-10 pr-10">
                <span class="title title-h3">{!! __('employees.vacancy.title') !!}</span>
                <p class="mt-2">{!! __('employees.vacancy.description') !!}</p>
                <a href="#" class="text-link custom-underline mt-2">{{ __('employees.vacancy.link') }}</a>
            </div>
        </div>
        <div class="flex flex-col mt-4">
            <span>{{ __('employees.vacancy.subtitle') }}</span>
            <p class="text-caption">{{ __('employees.vacancy.subdescription') }}</p>
        </div>
    </div>
</div>
