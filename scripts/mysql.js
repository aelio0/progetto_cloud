var btn=document.getElementById("mysql");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="MYSQL";
    p.innerHTML="RDBMS utilizzato per il database che contiene le credenziali di accesso al sito. Il DB è composto da una tabella accounts contente i campi necessari come email e password dell'utente registrato.";
})