/* ==== data validation w regex ==== */

let userName = $('#iName')
let userTel = $('#iTel')
let userEmail = $('#iEmail')
let userMessage = $('#iMessage')


userName.addEventListener('blur', onlyLetters)
userTel.addEventListener('blur', onlyNumbers)



function onlyLetters() {
    let regex = /[0-9]/g

    if(this.value.match(regex)) {
        alert('Digite apenas letras!')
        userTel.disabled = true
        userEmail.disabled = true
        userMessage.disabled = true

    } else {
        userTel.disabled = false
        userEmail.disabled = false
        userMessage.disabled = false

        userTel.focus()
    }
}

function onlyNumbers() {
    let regex = /[aA-zZ]/g
    if(this.value.match(regex)) {
        alert('Digite apenas números!')
        userName.disabled = true
        userEmail.disabled = true
        userMessage.disabled = true
    } else {
        userName.disabled = false
        userEmail.disabled = false
        userMessage.disabled = false

        userEmail.focus()
    }
}






