<div id="config-window-background">
    <div id="config-window">
        <input type="text" name="session-name" placeholder="Session Name">
        <section id="focus-time">
            <h1>Pomodoro Duration:</h1>
            <div class="buttons">
                <input type="number" min="0" max="59" maxlength="2" name="pomodoro-duration-hr" placeholder="00">
                :
                <input type="number" min="0" max="59" maxlength="2" name="pomodoro-duration-min" placeholder="25">
                :
                <input type="number" min="0" max="10" maxlength="2" name="pomodoro-duration-sec" placeholder="00">
            </div>
        </section>
        <section id="short-break">
            <h1>Short Breaks:</h1>
            <div class="settings">
                <div class="amount">
                    <h2>Amount</h2>
                    <div class="buttons">
                        <input type="number" min="0" max="10" maxlength="2" name="short-break-amount" placeholder="03">
                    </div>
                </div>
                <div class="duration">
                    <h2>Duration</h2>
                    <div class="buttons">
                        <input type="number" min="0" max="59" maxlength="2" name="short-break-duration-min" placeholder="05">
                        :
                        <input type="number" min="0" max="10" maxlength="2" name="short-break-duration-sec" placeholder="00">
                    </div>
                </div>
            </div>
        </section>
        <section id="long-break">
            <h1>Long Break Duration:</h1>
            <div class="buttons">
                <input type="number" min="0" max="59" maxlength="2" name="long-break-duration-min" placeholder="15">
                :
                <input type="number" min="0" max="10" maxlength="2" name="long-break-duration-sec" placeholder="00">
            </div>
        </section>
        <div id="confirm-buttons-container">
            <button class="confirm-button" id="save-changes">
                Save Settings
            </button>
            <button class="confirm-button" id="cancel-changes">
                Cancel
            </button>
        </div>
    </div>
</div>
