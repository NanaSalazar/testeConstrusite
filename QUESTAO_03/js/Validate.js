/* ==== data validation w regex ==== */

let userName = document.getElementById('iName')
let userTel = document.getElementById('iTel')
let userEmail = document.getElementById('iEmail')
let iMessage = document.getElementById('iMessage')

userName.addEventListener('blur', onlyLetters)

function onlyLetters() {
    let regex = /[0-9]/g

    if(this.value.match(regex)) {
        alert('Digite apenas letras!')
        userTel.disabled = true
        userEmail.disabled = true
        iMessage.disabled = true

    } else {
        userTel.disabled = false
        userEmail.disabled = false
        iMessage.disabled = false

        userTel.focus()
    }
}




