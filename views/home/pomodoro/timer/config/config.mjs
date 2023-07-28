export default class TimerConfig {
    constructor() {
        this.popup = document.querySelector("#config-window-background")
        this.pomodoroDurationHr = document.querySelector("input[name='pomodoro-duration-hr'")
        this.pomodoroDurationMin = document.querySelector("input[name='pomodoro-duration-min'")
        this.pomodoroDurationSec = document.querySelector("input[name='pomodoro-duration-sec'")
        this.pomodoroDuration = [
            Number(this.pomodoroDurationHr.placeholder),
            Number(this.pomodoroDurationMin.placeholder),
            Number(this.pomodoroDurationSec.placeholder),
        ]

        this.pomodoroDurationHr.oninput = () => {
            if (this.getPomodoroHour() >= 24)
                this.pomodoroDurationHr.value = 23
        }
        this.pomodoroDurationMin.oninput = () => {
            if (this.getPomodoroMin() >= 60)
                this.pomodoroDurationMin.value = 59
        }
        this.pomodoroDurationSec.oninput = () => {
            if (this.getPomodoroSec() >= 60)
                this.pomodoroDurationSec.value = 59
        }
    }

    getPomodoroHour = () => Number(this.pomodoroDurationHr.value)
    getPomodoroMin = () => Number(this.pomodoroDurationMin.value)
    getPomodoroSec = () => Number(this.pomodoroDurationSec.value)

    getDefaultPomodoroDuration = () => (
        this.pomodoroDuration[0] * 60 * 60 +
        this.pomodoroDuration[1] * 60 +
        this.pomodoroDuration[2]
    )
    getPomodoroDuration = () => {
        return this.getPomodoroHour() * 60 * 60 +
            this.getPomodoroMin() * 60 +
            this.getPomodoroSec()
    }

    hideConfigPopup() {
        this.popup.style.display = "none"
    }

    showConfigPopup() {
        this.popup.style.display = "flex"
    }

    save() {
        this.pomodoroDuration = this.getPomodoroDuration()
        return this.pomodoroDuration
    }
}
