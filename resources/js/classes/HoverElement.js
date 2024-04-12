export default class HoverElement {
    constructor(parent) {
        this.parent = parent

        this.element = this.create()
        this.x = 0
        this.y = 0
        this.need_x = 0
        this.need_y = 0
        this.mouse_x = 0
        this.mouse_y = 0
        this.smooth = 0.1
        this.is_moved = false

        this.parent.onmousemove = function(e) {
            this.is_moved = true

            this.mouse_x = e.clientX
            this.mouse_y = e.clientY
        }.bind(this)

        this.parent.onmouseleave = function() {
            this.is_moved = false
        }.bind(this)

        this.loop()
    }

    loop() {
        if (innerWidth > 640) {
            if (this.is_moved) {
                this.moved()
            }
        }

        window.requestAnimationFrame(this.loop.bind(this))
    }

    moved(e) {
        const bounds = this.parent.getBoundingClientRect()

        this.need_x = this.mouse_x - bounds.left
        this.need_y = this.mouse_y - bounds.top

        this.x = Math.lerp(this.x, this.need_x, this.smooth)
        this.y = Math.lerp(this.y, this.need_y, this.smooth)

        this.element.style.setProperty('left', this.x + 'px')
        this.element.style.setProperty('top', this.y + 'px')
    }

    create() {
        const element = document.createElement('div')
        element.className = 'hover-element'

        this.parent.append(element)

        return element
    }


    static init() {
        const elements = document.querySelectorAll('[data-hover-element]')

        if (elements.length) {
            elements.forEach(element => new HoverElement(element))
        }
    }
}

HoverElement.init()