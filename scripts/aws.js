var btn=document.getElementById("aws");
var header=document.getElementById("h2");
var paragraph=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="AWS";
    p.innerHTML="Servizio di cloud computing utilizzato per l'hosting sul web dell'applicazione. L'applicazione ha sia IP pubblico e DNS che ne permettono l'accesso all'interno del web da parte di tutti. Alcune delle porte utilizzate dall'applicazione sono 80 (HTTP) e 443 (HTTPS).";
})