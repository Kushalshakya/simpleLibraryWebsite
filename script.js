const facebook = document.querySelector('.fa-facebook')
const instagram = document.querySelector('.fa-instagram')
const twitter = document.querySelector('.fa-twitter')
const vk = document.querySelector('.fa-vk')

function fb(){
    window.open(
        "http://facebook.com",
        "_blank"
    )
}
function insta(){
    window.open(
        "http://instagram.com",
        "_blank"
    )
}
function tw(){
    window.open(
        "http://twitter.com",
        "_blank"
    )
}
function v(){
    window.open(
        "http://vk.com",
        "_blank"
    )
}
facebook.addEventListener('click',fb)
instagram.addEventListener('click',insta)
twitter.addEventListener('click',tw)
vk.addEventListener('click',v)