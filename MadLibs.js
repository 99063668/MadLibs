var Button = document.getElementById("Submit");
var Text = document.getElementById("Text");

Button.onclick = onButtonclicked;

function onButtonclicked(){
    if(onButtonclicked){
        Text.style.display = "none";
    }
};
