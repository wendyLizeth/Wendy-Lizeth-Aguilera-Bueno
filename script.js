/* LED1*/
document.querySelector("#check1").addEventListener("click", function () {
    let bulb1 = document.querySelector("#light1");
    if (this.checked)
        bulb1.classList.add("on");
    else
        bulb1.classList.remove("on");
});
/* LED2*/
document.querySelector("#check2").addEventListener("click", function () {
    let bulb2 = document.querySelector("#light2");
    if (this.checked)
        bulb2.classList.add("on");
    else
        bulb2.classList.remove("on");
});

/* LED3*/
document.querySelector("#check3").addEventListener("click", function () {
    let bulb3 = document.querySelector("#light3");
    if (this.checked)
        bulb3.classList.add("on");
    else
        bulb3.classList.remove("on");
});

/* LED4*/
document.querySelector("#check4").addEventListener("click", function () {
    let bulb4 = document.querySelector("#light4");
    if (this.checked)
        bulb4.classList.add("on");
    else
        bulb4.classList.remove("on");
});

/* LED5*/
document.querySelector("#check5").addEventListener("click", function () {
    let bulb5 = document.querySelector("#light5");
    if (this.checked)
        bulb5.classList.add("on");
    else
        bulb5.classList.remove("on");
});

/* LED6*/
document.querySelector("#check6").addEventListener("click", function () {
    let bulb6 = document.querySelector("#light6");
    if (this.checked)
        bulb6.classList.add("on");
    else
        bulb6.classList.remove("on");
});

/* LED7*/
document.querySelector("#check7").addEventListener("click", function () {
    let bulb7 = document.querySelector("#light7");
    if (this.checked)
        bulb7.classList.add("on");
    else
        bulb7.classList.remove("on");
});
/* LED8*/
document.querySelector("#check8").addEventListener("click", function () {
    let bulb8 = document.querySelector("#light8");
    if (this.checked)
        bulb8.classList.add("on");
    else
        bulb8.classList.remove("on");
});

/*air-conditioner*/
const slideValue = document.querySelector("span");
const inputSlider = document.querySelector("input");
inputSlider.oninput = (() => {
    let value = inputSlider.value;
    slideValue.textContent = value;
    slideValue.style.left = (value / 2) + "%";
    slideValue.classList.add("show");
});
inputSlider.onblur = (() => {
    slideValue.classList.remove("show");
});

