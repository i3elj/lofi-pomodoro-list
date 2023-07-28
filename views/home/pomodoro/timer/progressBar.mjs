export default class ProgressBar {
    constructor(timeLeft) {
        this.element = document.querySelector("#progress-bar")
        this.element.min = -timeLeft
        this.element.value = -timeLeft
        this.timeLeft = timeLeft
    }

    updateElement(duration) {
        this.element.min = -duration
        this.element.value = this.element.min
        this.timeLeft = duration
    }

    update(duration) {
        if (this.element.value <= this.timeLeft)
            this.element.value = Number(this.element.value) + 1

        let value = Number(this.element.value)
        let diff = Math.abs(duration + Number(this.element.min))
        let progress = ((diff * 100) / duration)
        this.element.style.background = `linear-gradient(to right, #D6D6D6 ${progress}%, #757575 ${progress}%)`;
    }
}
