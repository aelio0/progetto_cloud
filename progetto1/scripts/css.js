var btn=document.getElementById("css");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="CSS";
    p.innerHTML="Linguaggio utilizzato per definire la formattazione HTML di questa pagina, come ad esempio il font dei caratteri o il colore dello sfondo della pagina. Bootstrap è un famoso framework CSS ed è stato utilizzato per la creazione dell'applicazione.";
})