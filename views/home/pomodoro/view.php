<section id="pomodoro-section">
    <h1>Lofi Pomodoro List</h1>
    <div id="pomodoro-timer">
        <div id="settings">
            <button id="pomodoro-add">
                <?= plus_icon() ?>
            </button>
            <button id="pomodoro-config">
                <?= settings_icon() ?>
            </button>
        </div>
        <div id="pomodoro-timer-timer">
            <input id="timer-title" value="Study Time!" />
            <div id="timer-title-container">
            </div>
            <div id="timer">
                <p id="time"></p>

                <input disabled id="progress-bar" type="range" max="0" min="" value="25" name="progress-bar">

                <div id="media-buttons">
                    <button id="prev-pomodoro" title="Previous Pomodoro">
                        <?= previous_icon(color: "#fff") ?>
                    </button>
                    <button onclick="" id="start-pomodoro" title="Start Pomodoro">
                        <?= play_icon(color: "#fff") ?>
                    </button>
                    <button id="pause-pomodoro" title="Pause Pomodoro">
                        <?= pause_icon(color: "#fff") ?>
                    </button>
                    <button id="next-pomodoro" title="Next Pomodoro">
                        <?= next_icon(color: "#fff") ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
