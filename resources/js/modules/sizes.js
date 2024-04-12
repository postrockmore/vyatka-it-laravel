let size_values = {}

const setSizes = () => {
    document.querySelector('[data-header-mt]')
        ?.style
        .setProperty('margin-top',
            (document.querySelector('[data-header]').clientHeight * -1) + 'px'
        )

    document.querySelector('[data-header-pt]')
        ?.style
        .setProperty('padding-top',
            document.querySelector('[data-header]').clientHeight + 'px'
        )

    size_values = {
        'header_height':
            document.querySelector('[data-header-height]')?.clientHeight || null,
        'header_top_height':
            document.querySelector('[data-header-top-height]')?.clientHeight || null,
        'header_bottom_height':
            document.querySelector('[data-header-bottom-height]')?.clientHeight || null,
    };

    // Максимальная высота карточки в блоке "Достижения"
    if (document.querySelector('[data-achievement-front]')) {
        let max_height = 0

        document.querySelectorAll('[data-achievement-front]').forEach(item => {
            if (item.clientHeight > max_height) {
                max_height = item.clientHeight
            }
        })

        size_values['achievements_card_front_height'] = max_height
    }

    for (let key in size_values) {
        let value = size_values[key]

        if (value) {
            document.querySelector(':root')
                .style
                .setProperty('--' + key, value + 'px')
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    setSizes()
})

const scrollCheck = (e) => {
    if (pageYOffset > size_values.header_top_height) {
        document.querySelector('[data-header-opacity]').classList.add('header-white')
    } else {
        document.querySelector('[data-header-opacity]').classList.remove('header-white')
    }
}

window.addEventListener('scroll', (e) => {
    scrollCheck(e)
})