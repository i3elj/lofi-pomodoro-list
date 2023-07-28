import TimerConfig from "./config/config.mjs"
import ProgressBar from "./progressBar.mjs"

class Timer {
    constructor() {
        this.element = document.querySelector("#time")
        this.config = new TimerConfig()
        this.duration = this.config.getDefaultPomodoroDuration()
        this.progressBar = new ProgressBar(this.duration)
        this.state = { running: false }

        this.startButton = document.querySelector("#start-pomodoro")
        this.pauseButton = document.querySelector("#pause-pomodoro")
        this.configButton = document.querySelector("#pomodoro-config")
        this.cancelChangesButton = document.querySelector("#cancel-changes")
        this.saveChangesButton = document.querySelector("#save-changes")

        this.startButton.onclick = () => timer.start()
        this.pauseButton.onclick = () => timer.stop()
        this.configButton.onclick = () => this.config.showConfigPopup()
        this.cancelChangesButton.onclick = () => this.config.hideConfigPopup()
        this.saveChangesButton.onclick = () => {
            this.duration = this.config.save()
            this.progressBar.updateElement(this.duration)
            this.updateElement(this.secondsToArr(this.duration))
        }
        this.updateElement(this.secondsToArr(this.duration))
    }

    secondsToHour = sec => Math.floor(sec / 3600)
    secondsToMin = sec => Math.floor(sec % 3600 / 60)
    secondsToArr = sec => [
        this.secondsToHour(sec),
        this.secondsToMin(sec),
        Math.floor(sec % 3600 % 60)
    ]

    start() {
        if (!this.state.running) {
            this.intervalId = setInterval(() => {
                if (this.duration == 0) {
                    this.stop()
                    return
                }

                this.duration -= 1
                this.updateElement(this.secondsToArr(this.duration))
                this.progressBar.update(this.duration)
            }, 1000)

            this.state.running = true
        }
    }

    stop() {
        clearInterval(this.interavalId)
        this.state.running = false
    }

    /**
     * @param {number[]} time
     */
    updateElement(time) {
        this.element.innerText = time
            .map(v => v < 10 ? '0' + String(v) : String(v))
            .join(":")
    }
}

let timer = new Timer()
