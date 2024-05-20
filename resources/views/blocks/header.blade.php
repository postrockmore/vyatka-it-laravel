<header class="header {{ $classes }} overflow-hidden desktop:overflow-visible sticky left-0 z-20 w-full bg-bg-header-dark text-caption-dark" data-header data-header-height {{ $is_opacity ? "data-header-opacity" : "" }}>
    <div data-header-top>
        <div class="container" data-header-top-height>
        <div class="flex justify-between items-center py-2 desktop:py-3">
            {{-- Mobile --}}

            @if(request()->routeIs('home'))
                <div class="flex desktop:hidden items-center gap-x-2">
                    <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                    <div class="flex flex-col">
                        <span class="text-sm text-main-dark">{{ __('logo.title') }}</span>
                        <span class="text-xxs">{{ __('logo.subtitle') }}</span>
                    </div>
                </div>
            @else
                <a href="{{ route('home') }}" class="flex desktop:hidden items-center gap-x-2">
                    <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                    <div class="flex flex-col">
                        <span class="text-sm text-main-dark">{{ __('logo.title') }}</span>
                        <span class="text-xxs">{{ __('logo.subtitle') }}</span>
                    </div>
                </a>
            @endif

            <div class="flex desktop:hidden items-center gap-x-2.5" data-menu-open>
                <button class="button button--accent-smooth p-1.5 text-sm leading-6">{{ __('header.action_button') }}</button>
                <button class="flex" @click="menu_open=true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="#0085FF" fill-opacity="0.14"/>
                        <path d="M10 10H26V12H10V10Z" fill="#5AAFFF"/>
                        <path d="M10 22H26V24H10V22Z" fill="#5AAFFF"/>
                        <path d="M26 16H10V18H26V16Z" fill="#5AAFFF"/>
                    </svg>
                </button>
            </div>

            {{-- Desktop --}}
            <div class="hidden desktop:flex gap-x-4">
                <div class="flex items-center gap-1">
                    <span class="">Киров</span>
                    <svg class="w-4 h-4 fill-caption-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.175 5L8 8.7085L11.825 5L13 6.1417L8 11L3 6.1417L4.175 5Z" fill-opacity="0.32"/>
                    </svg>
                </div>

                <span>info@vyatka-it.ru</span>
            </div>

            @if($links)
                <nav class="hidden desktop:flex gap-x-6">
                    @foreach($links as $link)
                        <a class="header-link" href="{{ $link['url'] }}">
                            {{ $link['label'] }}

                            @if ($link['tag'])
                                <span class="header-link-label">{{ $link['tag'] }}</span>
                            @endif
                        </a>
                    @endforeach
                </nav>
            @endif
        </div>
    </div>
    </div>

    <div class="container" data-header-botton-height>
        <div class="flex items-center justify-between py-2.5 desktop:py-4 border-y border-border-main-dark">

            @if(request()->routeIs('home'))
                <div class="hidden desktop:flex items-center gap-x-3">
                    <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                    <div class="flex flex-col">
                        <span class="text-main-dark">{{ __('logo.title') }}</span>
                        <span class="text-xs">{{ __('logo.subtitle') }}</span>
                    </div>
                </div>
            @else
                <a href="{{ route('home') }}" class="hidden desktop:flex items-center gap-x-3">
                    <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                    <div class="flex flex-col">
                        <span class="text-main-dark">{{ __('logo.title') }}</span>
                        <span class="text-xs">{{ __('logo.subtitle') }}</span>
                    </div>
                </a>
            @endif

            <div class="w-full desktop:w-auto flex items-center gap-x-10">
                <nav class="w-full desktop:w-auto flex items-center gap-6 text-main-dark overflow-x-auto desktop:overflow-visible">
                    @foreach($service_categories as $category)
                        <div class="relative group">
                            <a href="{{ route('services.category', $category) }}" class="flex items-center gap-2 text-nowrap group-hover:text-link transition-colors">
                                <div class="w-4 h-4 fill-main-dark group-hover:fill-link">
                                    {!! $category->icon !!}
                                </div>

                                <span>{{ $category->title }}</span>
                            </a>

                            @if($category->childrens->isNotEmpty())
                                <div class="hidden group-hover:flex absolute top-[calc(100%+0.5rem)] left-0 flex-col z-10 py-3 bg-button-second-dark-pressed border border-border-main-dark rounded-xl before:absolute before:bottom-full before:w-full before:h-2.5">
                                    @foreach($category->childrens as $child)
                                        <a href="{{ $child->url }}" class="w-full text-nowrap py-2 px-6 hover:bg-button-second-dark transition-all">{{ $child->title }}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach

{{--                    <a href="#" class="flex items-center gap-2 text-nowrap">--}}
{{--                        <svg class="w-4 h-4 fill-main-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0H1C0.734784 0 0.480444 0.105356 0.292908 0.292892C0.105371 0.480429 0 0.734784 0 1V11C0 11.2652 0.105371 11.5196 0.292908 11.7071C0.480444 11.8946 0.734784 12 1 12H7V14H5C4.73478 14 4.48044 14.1054 4.29291 14.2929C4.10537 14.4804 4 14.7348 4 15C4 15.2652 4.10537 15.5196 4.29291 15.7071C4.48044 15.8946 4.73478 16 5 16H11C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15C12 14.7348 11.8946 14.4804 11.7071 14.2929C11.5196 14.1054 11.2652 14 11 14H9V12H15C15.2652 12 15.5196 11.8946 15.7071 11.7071C15.8946 11.5196 16 11.2652 16 11V1C16 0.734784 15.8946 0.480429 15.7071 0.292892C15.5196 0.105356 15.2652 0 15 0ZM14 10H2V2H14V10Z" fill-opacity="0.2"/>--}}
{{--                        </svg>--}}
{{--                        <span>Сайты</span>--}}
{{--                    </a>--}}

{{--                    <a href="#" class="flex items-center gap-2 text-nowrap">--}}
{{--                        <svg class="w-4 h-4 fill-main-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path d="M9 11H7V13H9V11Z" fill-opacity="0.2"/>--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C2 0.447715 2.44772 0 3 0H13C13.5523 0 14 0.447715 14 1V15C14 15.5523 13.5523 16 13 16H3C2.44772 16 2 15.5523 2 15V1ZM4 14V2H12V14H4Z" fill-opacity="0.2"/>--}}
{{--                        </svg>--}}
{{--                        <span>Приложения</span>--}}
{{--                    </a>--}}

{{--                    <a href="#" class="flex items-center gap-2 text-nowrap">--}}
{{--                        <svg class="w-4 h-4 fill-main-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15 4.99702H13.168L14.047 3.47252C14.1121 3.35974 14.1544 3.23522 14.1715 3.10607C14.1886 2.97691 14.18 2.84566 14.1464 2.71981C14.1128 2.59395 14.0548 2.47596 13.9756 2.37256C13.8964 2.26916 13.7977 2.18239 13.685 2.1172L10.251 0.133247C10.1384 0.0679735 10.014 0.0255923 9.88495 0.00852928C9.75593 -0.00853376 9.62484 5.93276e-05 9.49915 0.033815C9.37345 0.0675707 9.25568 0.125825 9.15253 0.20524C9.04937 0.284655 8.96287 0.383666 8.89801 0.496603L8 2.04713L7.10602 0.498604C7.04107 0.385632 6.95444 0.286599 6.8512 0.207172C6.74795 0.127745 6.63011 0.0694921 6.50433 0.0357395C6.37856 0.00198689 6.24732 -0.00659963 6.11823 0.0104767C5.98913 0.027553 5.86471 0.0699508 5.75201 0.135248L2.31897 2.1192C2.20629 2.18439 2.10756 2.27116 2.02838 2.37456C1.94921 2.47796 1.89116 2.59595 1.85754 2.72181C1.82393 2.84766 1.8154 2.97892 1.83246 3.10807C1.84952 3.23722 1.89183 3.36174 1.95697 3.47452L2.836 4.99702H1C0.734784 4.99702 0.480444 5.10248 0.292908 5.2902C0.105371 5.47792 0 5.73253 0 5.998V10.0019C0 10.2674 0.105371 10.522 0.292908 10.7097C0.480444 10.8975 0.734784 11.0029 1 11.0029H2.83197L1.953 12.5274C1.88773 12.6402 1.84532 12.7647 1.82819 12.8939C1.81105 13.023 1.81952 13.1543 1.85315 13.2802C1.88677 13.4061 1.94486 13.5241 2.02411 13.6275C2.10336 13.7309 2.20223 13.8176 2.315 13.8827L5.74799 15.8667C5.86068 15.932 5.98516 15.9744 6.11426 15.9915C6.24335 16.0085 6.37453 16 6.50031 15.9662C6.62608 15.9325 6.74398 15.8742 6.84723 15.7948C6.95048 15.7153 7.03704 15.6163 7.10199 15.5033L8 13.9528L8.89398 15.5013C8.95893 15.6143 9.04556 15.7133 9.1488 15.7928C9.25205 15.8722 9.36989 15.9304 9.49567 15.9642C9.62144 15.9979 9.75268 16.0065 9.88177 15.9895C10.0109 15.9724 10.1353 15.93 10.248 15.8647L13.681 13.8807C13.7937 13.8155 13.8924 13.7288 13.9716 13.6254C14.0508 13.522 14.1088 13.404 14.1425 13.2781C14.1761 13.1523 14.1846 13.021 14.1675 12.8919C14.1505 12.7627 14.1082 12.6382 14.043 12.5254L13.164 11.0029H15C15.2652 11.0029 15.5196 10.8975 15.7071 10.7097C15.8946 10.522 16 10.2674 16 10.0019V5.998C16 5.73253 15.8946 5.47792 15.7071 5.2902C15.5196 5.10248 15.2652 4.99702 15 4.99702ZM14 9.00095H12.385C12.1822 9.88535 11.7172 10.6878 11.051 11.3032L11.835 12.6615L10.119 13.6535L9.33698 12.2982C8.46817 12.5664 7.53879 12.5664 6.66998 12.2982L5.88898 13.6535L4.172 12.6615L4.95599 11.3032C4.29018 10.6877 3.82556 9.88523 3.62299 9.00095H2V6.99899H3.61298C3.81422 6.11441 4.27867 5.31168 4.94501 4.69672L4.164 3.3444L5.88098 2.35343L6.65802 3.69975C7.09122 3.56517 7.54239 3.49765 7.99597 3.49955C8.44949 3.49862 8.90056 3.56612 9.33398 3.69975L10.111 2.35543L11.827 3.3464L11.047 4.69873C11.713 5.31397 12.1774 6.11657 12.379 7.00099H14V9.00295V9.00095ZM8.00897 5.98799C7.61341 5.98799 7.22679 6.10541 6.89789 6.32539C6.56899 6.54537 6.31263 6.85803 6.16125 7.22384C6.00988 7.58965 5.97025 7.99218 6.04742 8.38052C6.12459 8.76886 6.31508 9.12558 6.59479 9.40556C6.87449 9.68554 7.23087 9.87621 7.61884 9.95345C8.0068 10.0307 8.4089 9.99106 8.77435 9.83953C9.1398 9.68801 9.45217 9.43141 9.67194 9.10219C9.8917 8.77297 10.009 8.38591 10.009 7.98996C10.009 7.72672 9.95714 7.46606 9.85638 7.22291C9.75562 6.97976 9.60795 6.75889 9.42181 6.57294C9.23567 6.38699 9.01472 6.2396 8.77161 6.13923C8.52849 6.03886 8.26799 5.98746 8.005 5.98799H8.00897Z" fill-opacity="0.2"/>--}}
{{--                        </svg>--}}
{{--                        <span>Поддержка</span>--}}
{{--                    </a>--}}

{{--                    <a href="#" class="flex items-center gap-2 text-nowrap">--}}
{{--                        <svg class="w-4 h-4 fill-main-dark" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <g clip-path="url(#clip0_2419_24973)">--}}
{{--                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8667 9.6H11.1093L6.4 4.89067V2.13333C6.4 1.56754 6.17524 1.02492 5.77516 0.624839C5.37508 0.224761 4.83246 0 4.26667 0H2.13333C1.56754 0 1.02492 0.224761 0.624839 0.624839C0.224761 1.02492 0 1.56754 0 2.13333V4.26667C0 4.83246 0.224761 5.37508 0.624839 5.77516C1.02492 6.17524 1.56754 6.4 2.13333 6.4H4.89067L9.6 11.1093V13.8667C9.6 14.4325 9.82476 14.9751 10.2248 15.3752C10.6249 15.7752 11.1675 16 11.7333 16H13.8667C14.4325 16 14.9751 15.7752 15.3752 15.3752C15.7752 14.9751 16 14.4325 16 13.8667V11.7333C16 11.1675 15.7752 10.6249 15.3752 10.2248C14.9751 9.82476 14.4325 9.6 13.8667 9.6ZM2.13333 2.13333H4.26667V4.26667H2.13333V2.13333ZM13.8667 13.8667H11.7333V11.7333H13.8667V13.8667Z" fill-opacity="0.2"/>--}}
{{--                                <path d="M12.8 0H8V2.13333H12.8C13.0829 2.13333 13.3542 2.24571 13.5542 2.44575C13.7543 2.64579 13.8667 2.9171 13.8667 3.2V8H16V3.2C16 2.35131 15.6629 1.53737 15.0627 0.937258C14.4626 0.337142 13.6487 0 12.8 0Z" fill-opacity="0.2"/>--}}
{{--                                <path d="M2.13333 8V12.8C2.13333 13.0829 2.24571 13.3542 2.44575 13.5542C2.64579 13.7543 2.9171 13.8667 3.2 13.8667H8V16H3.2C2.35131 16 1.53737 15.6629 0.937258 15.0627C0.337142 14.4626 0 13.6487 0 12.8V8H2.13333Z" fill-opacity="0.2"/>--}}
{{--                            </g>--}}
{{--                            <defs>--}}
{{--                                <clipPath id="clip0_2419_24973">--}}
{{--                                    <rect width="16" height="16"/>--}}
{{--                                </clipPath>--}}
{{--                            </defs>--}}
{{--                        </svg>--}}
{{--                        <span>Интеграции</span>--}}
{{--                    </a>--}}
                </nav>
                <button class="hidden desktop:flex button button--accent-smooth py-3 px-4">
                    {{ __('header.action_button') }}
                    <span class="emoji emoji--medium emoji--work"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div x-show="menu_open" x-cloak class="bg-bg-main-dark z-20 fixed top-0 left-0 bottom-0 right-0">
    <div class="flex flex-col text-body-dark py-2 px-4">
        <div class="flex items-center justify-between">
            <div class="flex desktop:hidden items-center gap-x-2">
                <img src="{{ Vite::image('logo.svg') }}" alt="Логотип Вятка-IT">
                <div class="flex flex-col">
                    <span class="text-sm text-main-dark">{{ __('logo.title') }}</span>
                    <span class="text-xxs">{{ __('logo.subtitle') }}</span>
                </div>
            </div>

            <button class="flex" @click="menu_open=false">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.41406 4.33594L4.33594 5.41406L10.9219 12L4.33594 18.5859L5.41406 19.6641L12 13.0781L18.5859 19.6641L19.6641 18.5859L13.0781 12L19.6641 5.41406L18.5859 4.33594L12 10.9219L5.41406 4.33594Z" fill="white"/>
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center my-11">
            @if($links)
                <nav class="flex flex-col items-center gap-y-6">
                    @foreach($links as $link)
                        <a class="header-link text-body-dark" href="{{ $link['url'] }}">
                            {{ $link['label'] }}

                            @if ($link['tag'])
                                <span class="header-link-label">{{ $link['tag'] }}</span>
                            @endif
                        </a>
                    @endforeach
                </nav>
            @endif
        </div>
    </div>
</div>
