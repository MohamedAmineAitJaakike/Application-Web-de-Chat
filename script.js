document.addEventListener('DOMContentLoaded', function() {

    const messageTop = document.querySelector('#message_top');
    
    if (messageTop) {
       
        messageTop.addEventListener('mouseover', function() {
           
            messageTop.style.display = 'none';
        });
    } 

    var password = document.querySelector('.password');
    var password2 = document.querySelector('.password_2');
    
    if (password && password2) {
        password2.onkeyup = function() {
            var messageErreur = document.querySelector('.message_erreur');
            if (password.value != password2.value) {
                messageErreur.innerText = "Les Mots de passe ne sont pas compatibles !";
            } else {
                messageErreur.innerText = "";
            }
        };
    } else {
        console.log('Password fields not found');
    }
    
});
