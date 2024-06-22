// fonction date en php //
// function datee() {
//     var d ;
//     var date =new Date()
//     var jours = new Array ("Dimanche" , "Lundi" , " Mardi" , "Mercredi" , " Jeudi" , "Vendredi" , "Samedi") ;
//     var mois = new Array ("Janvier" , "Février" , "Mars" , "April" , "May" , "Juin" , "Juillet" , "Aught" , "september" , "October" , "November" , "December") ;
//     return  d = jours[date.getDay()] + " " + date.getDate() +" " + mois[date.getMonth()] + " " + date.getFullYear()
//
// }
function validerformulaire(F) {
    
    var err = false ;

    

    if(F.code.value==""){
        err = true ;
        document.getElementById("erreurcode").innerHTML="Le code est erronné!!";
    }
    if(F.prenom.value==""){
        err = true ;
        document.getElementById("erreurprenom").innerHTML="Le prenom est erronné!!";
    }
    if(F.nom.value==""){
        err = true ;
        document.getElementById("erreurnom").innerHTML="Le nom est erronné!!";
    }
    if(F.note.value==""){
        err = true ;
        document.getElementById("erreurnote").innerHTML="La note est erronné!!";
    }
    if((F.note.value<0 || F.note.value> 20)){
        err = true ;
        document.getElementById("erreurnote").innerHTML="Entrer une note entre 0 et 20 !!";
    }
    if(isNaN(F.note.value)){
        err = true ;
        document.getElementById("erreurnote").innerHTML="La note doit etre un nombre !!";
    }
    return err ;
}

function viderInput(F){
    var Code = document.getElementById("code");
    var Nom = document.getElementById("nom");
    var Prenom = document.getElementById("prenom");
    var Note = document.getElementById("note");

    var Erreur = document.querySelectorAll(".errspan");


    Nom.value="";
    Code.value="";
    Prenom.value="";
    Note.value="";
    for (var i = 0; i < Erreur.length; i++) {
           Erreur[i].innerHTML = "";
     }
}


function calculerMention(note) {
        if (note >=0 && note <10) 
        return "Ajourné!" ;
        if (note >=10 && note <12) 
        return "PASSABLE" ;
        if (note >=12 && note <14) 
        return "ASSEZ BIEN" ;
        if (note >=14 && note <16) 
        return "BIEN" ;
        if (note >=16 && note <18) 
        return "TRES BIEN" ; 
}



document.addEventListener("DOMContentLoaded" , function () {
    var supprimer  = document.getElementById("sup");
    supprimer.addEventListener("click" , function (){{
        confirm("Are you sure to delete?");
    }
    })
    var dd = document.getElementById("date") ;
    var btn = document.getElementById("btn") ;
    var btn1 = document.getElementById("btn1") ;
    var supbutton =  document.getElementById("sup");
    // fournit en code php
    // dd.innerHTML = datee() ;
    btn.addEventListener("click" , function () {
        if( validerformulaire(this.form)==true){
            event.preventDefault;
        } else{
            window.location.href="/php/succes.html"
            viderInput(this.form);
        }
    })
    btn1.addEventListener("click",function(){
        viderInput(this.form);
    })




   
})
