var btn=document.getElementById("php");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="PHP";
    p.innerHTML="Linguaggio di scripting utilizzato per le funzioni di login e signup, infatti permette di prendere i caratteri immessi dall'utente all'interno di caselle di input per permettere la registrazione o l'accesso al sito interrogando il database tramite query. La connessione al database viene eseguita tramite i campi specificati nel file db_connection; le query vengono effettuate tramite prepared statement che le rendono immuni ad attachi SQL injection.";
})