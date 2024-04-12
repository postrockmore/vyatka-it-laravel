/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    corePlugins: {
        container: false,
    },
    optimizeDeps: {
        exclude: [
            'js-big-decimal'
        ],
        include: [
            "swiper",
        ]
    },
    theme: {
        screens: {
            'tablet': '768px',
            // => @media (min-width: 640px) { ... }

            'laptop': '1024px',
            // => @media (min-width: 1024px) { ... }

            'desktop': '1280px',
            // => @media (min-width: 1280px) { ... }

            'wide': '1560px',
            // => @media (min-width: 1560px) { ... }
        },
        extend: {
            animation: {
                'spin-slow': 'spin 5s linear infinite',
                'spin-slow-reverse': 'spin 5s linear infinite reverse',
            },
            fontSize: {
                'xxs': ['0.6875rem', '0.6875rem'],
                '5xl': ['3rem', '3.25rem'],
                '6xl': ['3.5rem', '4rem'],
                '7xl': ['4.5rem', '4.5rem'],
                'stages': ['5.5rem', '6rem']
            },
            spacing: {
                'section': '3.75rem',
                '18': '4.5rem'
            },
            maxWidth: {
                'container': 'calc(80rem + (1rem * 2))'
            },
            boxShadow: {
                'inset': 'inset 0rem 0rem 0rem 1px',
                'inset-xl': 'inset 0rem 0rem 0rem 2px'
            },
            gridTemplateRows: {
                'layout': 'auto 1fr auto',
            },
            gridTemplateColumns: {
                '1/1': '100%',
            },
            colors: {
                'button-accent': '#129FEE',
                'button-accent-hover': '#52CBFF',
                'button-accent-pressed': '#0B95E3',

                'button-accent-smooth': '#EDF6FF',
                'button-accent-smooth-dark': '#0085ff24',

                'button-second': '#ECECEC',
                'button-second-hover': '#D8D8D8',
                'button-second-pressed': '#F2F2F2',

                'button-second-dark': '#202020',
                'button-second-dark-hover': '#444444',
                'button-second-dark-pressed': '#151515',

                'button-more': '#F5F5F5',

                'main': '#0B0B0B',
                'main-dark': '#FFF',

                'body': 'rgba(0,0,0,0.72)',
                'body-dark': 'rgba(255, 255, 255,0.6)',

                'caption': 'rgba(0, 0, 0, 0.32)',
                'caption-dark': 'rgba(255, 255, 255, 0.32)',

                'link': '#3D8CD6',
                'link-hover': '#2657B8',

                'link-dark': '#5AAFFF',
                'link-dark-hover': '#B4DBFF',

                'disable': 'rgba(0, 0, 0, 0.2)',
                'disable-dark': 'rgba(255, 255, 255, 0.2)',

                'bg-main': '#fff',
                'bg-main-dark': '#161623',
                'bg-main-dark/2': '#292D45',
                'bg-third': '#F1F1F1',
                'bg-second': '#F8F8F8',
                'bg-second-dark': '#1C1F38',
                'bg-header-dark': 'rgba(0, 0, 0, 0.48)',
                'bg-alpha-dark': 'rgba(0, 0, 0, 0.74)',

                'border-brand': 'rgb(61, 140, 214, 0.32)',
                'border-main': 'rgba(0, 0, 0, 0.08)',
                'border-main-dark': 'rgba(255, 255, 255, 0.08)',
                'border-light': 'rgba(0, 0, 0, 0.07)',
                'border-link': '#3d8cd63d',
                'border-controls': 'rgba(0, 0, 0, 0.16)',
                'border-controls-dark': 'rgba(255, 255, 255, 0.16)',
            }
        },
        fontFamily: {
            'inter': ['Inter', 'sans-serif'],
            'gilroy': ['Gilroy', 'sans-serif']
        },
    },
    safelist: [
        'desktop:col-span-2',
        'desktop:col-span-3',
        'desktop:col-span-4',
        {
            pattern: /col-span-|radio-variation/,
        },
    ],
    plugins: [],
}

