var btn=document.getElementById("docker");
var h2=document.getElementById("h2");
var p=document.getElementById("p");

btn.addEventListener("click",function(){ 
    h2.replaceChildren(); 
    p.replaceChildren(); 

    h2.innerHTML="Docker";
    p.innerHTML="Piattaforma utilizzata per la costruzione dell'applicazione. Grazie ad esso è possibile l'isolamento dei singoli processi quali database e server web per renderli container facilmente distribuili. All'interno del progetto si ha i file docker-compose dove vengono specificati i servizi dell'applicazione come il database il quale ne si può accedere tramite phpmyadmin; sempre all'interno del file vengono specificate le porte su cui operano i servizi e la rete; si ha anche file Dockerfile dove si trovano una serie di comandi eseguiti quando viene assemblata l'immagine dall'utente e in questo caso viene installata e attivata l'estensione di php mysqli.";
})