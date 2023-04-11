var btn=document.getElementById("javascript");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="JavaScript";
    p.innerHTML="Linguaggio di programmazione utilizzato per rendere il progetto una single-page application. Ciò è stato realizzato andando a cambiare dinamicamente i contenuti dei tag h2 (header della pagina) e p (paragrafo) andando a chiamare una funzione che ne aggiorna il testo andando premendo i bottoni dell'header tramite un action listener.";
})