var bear = document.getElementById("bear");
var gorilla = document.getElementById("gorilla");
var lion = document.getElementById("lion");

if (bear) {
    bear.style.backgroundImage = "url('img/bear.jpg')";
} else {
    bear = '';
}

if (gorilla) {
    gorilla.style.backgroundImage = "url('img/gorilla.jpg')";
} else {
    gorilla = '';
}

if (lion) {
    lion.style.backgroundImage = "url('img/lion.jpg')";
} else {
    lion = '';
}