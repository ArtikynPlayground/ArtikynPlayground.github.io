let whichBg = prompt('Какой вы хотите фон?');
document.body.style.backgroundColor = whichBg;
let whichColor = prompt('Какой вы хотите цвет текста?');
const page = document.querySelector(".page");
page.style.color = whichColor;
let nameOfperson = prompt("Как зовут челвоека который вас вдохновляет?");
const span = document.querySelector(".name");
span.innerHTML = nameOfperson;
let imgAdress = prompt("Введите адрес картинки с фото этого человека: ");
const image = document.querySelector("img");
image.setAttribute('src', imgAdress);
let userText = prompt('Введите текст о данном человеке');
const textClass = document.querySelector(".shortBio");

textClass.className += ' animated';
textClass.innerHTML = userText;
