var password= document.querySelector('.password');
var password2=document.querySelector('.password_2');
password2.onkeyup =function(){
    message_erreur=document.querySelector('.message_erreur');
    if(password.value != password2.value){
        message_erreur.innerText="Les Mots de passe ne sont pas compatibiles !";
    }else{
        message_erreur.innerText="";
    }
}