Math.lerp = function (value1, value2, amount) {
	amount = amount < 0 ? 0 : amount;
	amount = amount > 1 ? 1 : amount;
    let result = value1 + (value2 - value1) * amount;
    result = result.toFixed(2)
	return parseFloat(result);
};

export default class Hover3D {
    constructor(card) {
        this.card = card
        this.smooth = 0.03
        this.x = 0
        this.y = 0
        this.needX = 0
        this.needY = 0
        this.power = this.card.dataset.power || 5
        this.is_moved
        this.mouseX = 0
        this.mouseY = 0

        this.card.onmousemove = function(e) {
            this.is_moved = true

            this.mouseX = e.clientX
            this.mouseY = e.clientY
        }.bind(this)

        this.card.onmouseleave = function() {
            this.is_moved = false
        }.bind(this)

        this.is_moved = false
        
        this.loop()
    }

    loop() {
        if (innerWidth > 640) {
            if (this.is_moved) {
                this.moved()
            } else {
                this.leave()
            }
        }

        window.requestAnimationFrame(this.loop.bind(this)) 
    }

    moved(e) {
        const bounds = this.card.getBoundingClientRect()

        let percentageX = (this.mouseX - bounds.left) / bounds.width
        let percentageY = (this.mouseY - bounds.top) / bounds.height

        this.needX = ((this.power / 2) - ((percentageX) * this.power)).toFixed(2);
        this.needY = (((percentageY) * this.power) - (this.power / 2)).toFixed(2);

        this.x = Math.lerp(this.x, this.needX, this.smooth)
        this.y = Math.lerp(this.y, this.needY, this.smooth)

        var transform = `perspective(400px) rotateX(${this.y}deg) rotateY(${this.x}deg) `

        this.card.style.setProperty('transform', transform)
    }

    leave(e) {
        this.x = Math.lerp(this.x, 0, this.smooth)
        this.y = Math.lerp(this.y, 0, this.smooth)

        var transform = `perspective(400px) rotateX(${this.y}deg) rotateY(${this.x}deg) `

        this.card.style.setProperty('transform', transform)
        
    }

    static init() {
        if (innerWidth >= 996) {
            let elements = document.querySelectorAll('[data-hover-3d]')

            if (elements.length) {
                elements.forEach(element => {
                    new Hover3D(element)
                })
            }
        }
    }
}

Hover3D.init()