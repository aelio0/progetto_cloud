var btn=document.getElementById("introduction");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="Introduzione";
    p.innerHTML="Questo è un progetto scolastico per la materia Sistemi e Reti che consiste nell'utilizzo di tecnologie imparate nel corso del quinto anno dell'ITIS informatico della scuola superiore ISIS Bernocchi. Le tecnologie utilizzate si trovano nell'header, premile per avere una descrizione sul loro utilizzo all'interno di questa pagina.";
})