(function(){

    let boite__modale = document.querySelector(".boite__modale");

    let boite__modale__texte = document.querySelector(".boite__modale__texte");

    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir');

    let boite__modale__fermeture = document.querySelector('.boite__modale__fermeture');



    for(const bouton of cours__desc__ouvrir){

        bouton.addEventListener('mousedown',function(){

            console.log(this.parentNode.parentNode.className);
           
            boite__modale.classList.add('ouvrir');

            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;

            

        })

    }
        boite__modale__fermeture.addEventListener('mousedown',function(){
        boite__modale.classList.remove('ouvrir');
    })

})()