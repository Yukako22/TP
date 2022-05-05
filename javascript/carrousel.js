(function(){
    
    let boite__carrousel = document.querySelector(".boite__carrousel");

    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");

    let galerie__img = document.querySelectorAll('.galerie img');

    let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');

    let elmimg = document.createElement('img');

    boite__carrousel.append(elmimg);

    let index = 0;

    for(const img of galerie__img){

        let bouton = document.createElement('button');
        boite__carrousel__navigation.append(bouton);
        bouton.dataset.index = index++
        bouton.addEventListener('mousedown', function(){
            elmimg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
        })

        img.addEventListener('mousedown',function(){

            console.log(this.getAttribute('src'));
           
            boite__carrousel.classList.add('ouvrir');

            console.log(boite__carrousel.classList)

            elmimg.setAttribute('src',this.getAttribute('src'));

        })

    }
        boite__carrousel__fermeture.addEventListener('mousedown',function(){
        boite__carrousel.classList.remove('ouvrir');
    })

})()