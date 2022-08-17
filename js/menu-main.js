
/* header : */

let navsm = document.getElementById("navsm");
let hide = document.getElementById("hide");
let nohide = document.getElementById("nohide");


function headerhide() {

    navsm.classList.remove("d-none");
    navsm.classList.add("d-block");

    hide.classList.remove("d-block");
    hide.classList.add("d-none");

    nohide.classList.remove("d-none");
    nohide.classList.add("d-block");


}


function noheaderhide() {

    navsm.classList.remove("d-block");
    navsm.classList.add("d-none");

    hide.classList.remove("d-none");
    hide.classList.add("d-block");

    nohide.classList.remove("d-block");
    nohide.classList.add("d-none");


}


if (scrollX > 767) {
    navsm.classList.remove("d-block");
    navsm.classList.add("d-none");

}


















/* menu hide/ show  : */

let cardmenu = document.getElementById("cardmenu");
let table = document.getElementById("table");

function showtable(){
    table.classList.remove("d-none");
    table.classList.add("d-block");

    cardmenu.classList.remove("d-block");
    cardmenu.classList.add("d-none");
    
    
}


function showcard(){
    table.classList.remove("d-block");
    table.classList.add("d-none");

    cardmenu.classList.remove("d-none");
    cardmenu.classList.add("d-block");
    
    
}





/* fixed */


let fixed = document.getElementById("fixed");


function hidebottom(){

fixed.style.display="none";

}









/* up button */



//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
if (
document.body.scrollTop > 20 ||
document.documentElement.scrollTop > 20
) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}



