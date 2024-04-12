import MiniMasonry from "minimasonry"

window.addEventListener('load', () => {
    if (innerWidth > 640) {
        const reviews = document.querySelector('[data-masonry="reviews"]')

        if (reviews) {
            new MiniMasonry({
                container: reviews,
                gutterX: 32,
                gutterY: 40,
                baseWidth: 350,
                surroundingGutter: false,
                wedge: true
            })
        }
    }
})