var btn=document.getElementById("homepage");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="Progetto Cloud";
    p.innerHTML="Aliaj Elio. All rights reserved.";
})