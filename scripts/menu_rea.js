// function changeStyle() {
//     var element = document.getElementById("navbarNav");
//         element.style.width = "150px";
// }

var title = $("#title");
var div1 = $("#div1");
var div2 = $("#div2");
var div3 = $("#div3");
var div4 = $("#div4");
var div5 = $("#div5");
var div6 = $("#div6");
var div7 = $("#div7");
var div8 = $("#div8");

div1.hide();
div2.hide();
div3.hide();
div4.hide();
div5.hide();
div6.hide();
div7.hide();
div8.hide();


$(window).on("scroll", function() {
    if ($(this).scrollTop() < 20) {
        title.fadeIn();
    } else {
        title.fadeOut();
    }
    if ($(this).scrollTop() > 20 && $(this).scrollTop() < 1000) {
        div1.fadeIn();
    } else {
        div1.fadeOut();
    }
    if ($(this).scrollTop() > 1500 && $(this).scrollTop() < 2500) {
        div2.fadeIn();
    } else {
        div2.fadeOut();
    }
    if ($(this).scrollTop() > 3000 && $(this).scrollTop() < 4000) {
        div3.fadeIn();
    } else {
        div3.fadeOut();
    }
    if ($(this).scrollTop() > 4500 && $(this).scrollTop() < 5500) {
        div4.fadeIn();
    } else {
        div4.fadeOut();
    }
    if ($(this).scrollTop() > 6000 && $(this).scrollTop() < 7000) {
        div5.fadeIn();
    } else {
        div5.fadeOut();
    }
    if ($(this).scrollTop() > 7500 && $(this).scrollTop() < 8500) {
        div6.fadeIn();
    } else {
        div6.fadeOut();
    }
    if ($(this).scrollTop() > 9000 && $(this).scrollTop() < 10000) {
        div7.fadeIn();
    } else {
        div7.fadeOut();
    }
    if ($(this).scrollTop() > 10500 && $(this).scrollTop() < 11500) {
        div8.fadeIn();
    } else {
        div8.fadeOut();
    }
});
