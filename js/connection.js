function password() {
    var nbr = 0;
    var pass = document.getElementById("validationServer05").value;
        for(let i=0; i<pass.length; i++){
            nbr++;
            }
    if(nbr<8) {
        var b = "votre mot de passe doit dépasser 8 caractères";
        document.getElementById("valeur").innerHTML=b;
    }
}

   /* function comparaison() {
        var pass = document.getElementById("pass").value;
        var confirm = document.getElementById("confirm").value;

        if(pass != confirm) {
            var c = "votre mot de passe ne coresspond pas";
            document.getElementById("conf").innerHTML=c;
        }
    }

    function formular()
    {
        var firs = document.getElementById("firs").value;
        var las = document.getElementById("las").value;
        var compan = document.getElementById("compan").value;
        var emai = document.getElementById("emai").value;
        var numbe = document.getElementById("numbe").value;

        console.log(firs)
        console.log(las)
        console.log(compan)
        console.log(emai)
       document.getElementById("nom").innerHTML=firs;
       document.getElementById("prenom").innerHTML=las; 
       document.getElementById("compani").innerHTML=compan; 
       document.getElementById("couriel").innerHTML=emai;
       document.getElementById("numero").innerHTML=numbe;

    } */