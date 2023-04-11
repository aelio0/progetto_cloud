var btn=document.getElementById("html");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="HTML";
    p.innerHTML="Linguaggio di Markup utilizzato per la visualizzazione del contenuto del sito.";
})