function resizeInput() {
  this.style.width = this.value.length * 1.25 + "rem";
}

let titleInput = document.querySelector("#todo-title")
titleInput.addEventListener("input", resizeInput)
resizeInput.call(titleInput)

let inputs = document.querySelectorAll("input[maxlength='2']")
inputs.forEach(input => input.addEventListener("keypress", event => {
    let is_not_bs_or_del = (event.key != 'Backspace' || event.key != 'Delete')

    if (input.value.length >= 2 && is_not_bs_or_del)
      event.preventDefault()
}))
