

function surlignePseudo(champ, erreur)
{
   if(erreur){
      champ.style.backgroundColor = "red";
   
    alert(
        "votre login doit etre entre 3 et 8 caractéres ");
   }
   else
      champ.style.backgroundColor = "";
}
////////////////////////////////////////////////////////////////////////////////
function surlignePassword(champ, erreur)
{
   if(erreur){
      champ.style.backgroundColor = "red";
    // document.writeln("Ligne 1");
    alert(
        "votre mot de passe doit avoir au minimum  8 caractéres ");
   }
   else
      champ.style.backgroundColor = "";
}
//////////////////////////////////////////////////////////////////////////////////
function surligneDuree(champ, erreur)
{
   if(erreur){
      champ.style.backgroundColor = "red";
   
    alert(
        "la duree doit pas dépasser 31 jours ");
   }
   else
      champ.style.backgroundColor = "";
}
//////////////////////////////////////////////////////////////////////
function surligne(champ, erreur)
{
   if(erreur){
      champ.style.backgroundColor = "red";
   
    alert(
        "saisir ce champ ");
   }
   else
      champ.style.backgroundColor = "";
}



///////////verifier le login//////////////////////



function verifPseudo(champ)
{
   if(champ.value.length < 3 || champ.value.length > 8)
   {
      surlignePseudo(champ, true);
      return false;
   }
   else
   {
      surlignePseudo(champ, false);
      return true;
   }
}


//////////////verifier le mot de passe//////////////////

function verifPassword(champ)
{
   if(champ.value.length < 8 )
   {
      surlignePassword(champ, true);
      return false;
   }
   else
   {
      surlignePassword(champ, false);
      return true;
   }
}

////////////verifier ////////////////////////
function mdpchange() {
   var mdp = document.getElementById("mdp").value; // tu récupères la valeur du mdp
   var longueur = mdp.lenght; // tu récupères la longueur
   // si la longueur n'est pas bonne tu affiches le message
   if(longueur < 8 || longueur > 255) {
       document.getElementById("message").innerHTML = "Attention le mot de passe n'est pas assez long, il doit faire 8 caractères minimum.";
       }
}



function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

/////////////verifier le formulaire///////////////////


function verif() {
    if (document.getElementById("username").value=="") {
        alert("Tapez votre nom d'utilisateur.");
        document.getElementById("username").focus();
        return false;
    }
    if (document.getElementById("password").value=="") {
        alert("Pensez à taper votre mot de passe .");
        document.getElementById("password").focus();
        return false;
    }
   
}
///////////verifier le message //////////////
function verifMessage() {
    if (document.getElementById("message").value=="") {
        alert("Tappez votre message.");
        document.getElementById("message").focus();
        return false;
    }}
    
   ////////////verifier reserver_p//////////

   function verifReservation() {
    if (document.getElementById("dateD").value=="") {
        alert("Tapez la date de début de réservation.");
        document.getElementById("dateD").focus();
        return false;
    }
    if (document.getElementById("dureeR").value=="") {
        alert("tappez la durée de la reservation .");
        document.getElementById("dureeR").focus();
        return false;
    }
   
}
//////////verifier la durée///////////////
function verifDuree(champ)
{
   if(champ.value>31 )
   {
      surligneDuree(champ, true);
      return false;
   }
   else
   {
      surligneDuree(champ, false);
      return true;
   }
}
//////////verifier date//////////////////
/*
function verifDate(champ)
{
   
   var date1 = document.getElementById("date1");
   var date2 = document.getElementById("date2");
   
   if(date1 >= date2){
    alerte("veuillez saisir une date de retour supérieur à la date de départ ");
   }
  
    

  
}
/////////////verifier contact//////////
/*function verifContact() {

   /*if (((document.getElementById("nom_vst").value=="") && (document.getElementById("message").value==""))== false){
      alert("veuillez tapper tous les champs .");
   
     }


   if (document.getElementById("message").value=="") {
       alert("Tappez votre message.");
     //  document.writeln("Ligne 1");
       document.getElementById("message").focus();
       return false;

   }

   if (document.getElementById("nom_vst").value=="") {
      alert("tappez votre nom .");
      document.getElementById("nom_vst").focus();
      return false;
  }
 
  if (document.getElementById("email").value=="") {
   alert("Tappez votre émail.");
   document.getElementById("email").focus();
   return false;

}
if (document.getElementById("prenom_vst").value=="") {
   alert("Tappez votre prénom.");
   document.getElementById("prenom_vst").focus();
   return false;

}



}
*/

/////////////////controler l'inscription register/////////////////////
/*
function verifInscription{


   if (document.getElementById("").value=="") {
      alert("Tappez votre message.");
    //  document.writeln("Ligne 1");
      document.getElementById("message").focus();
      return false;

  }

  if (document.getElementById("message").value=="") {
   alert("Tappez votre message.");
 //  document.writeln("Ligne 1");
   document.getElementById("message").focus();
   return false;

}
if (document.getElementById("message").value=="") {
   alert("Tappez votre message.");
 //  document.writeln("Ligne 1");
   document.getElementById("message").focus();
   return false;

}
if (document.getElementById("message").value=="") {
   alert("Tappez votre message.");
 //  document.writeln("Ligne 1");
   document.getElementById("message").focus();
   return false;

}
if (document.getElementById("message").value=="") {
   alert("Tappez votre message.");
 //  document.writeln("Ligne 1");
   document.getElementById("message").focus();
   return false;

}

function verifChamp(champ)
{
   if(champ.value.length = 0 )
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}
*/










































}