(function(){
    
    let boite__carrousel = document.querySelector(".boite__carrousel");

    let boite__carrousel__navigation = document.querySelector(".boite__carrousel__navigation");

    let galerie__img = document.querySelectorAll('.galerie img');

    let boite__carrousel__fermeture = document.querySelector('.boite__carrousel__fermeture');

    let boite__carrousel__img = document.querySelector('.boite__carrousel__img');

    let elmimg = document.createElement('img');

    boite__carrousel.append(elmimg);

    let index = 0;

    for(const img of galerie__img){

        let elmimg = document.createElement('img');
        elmimg.setAttribute('src',img.getAttribute('src'))
        img.dataset.index = index;
        boite__carrousel__img.append(elmimg);
        let bouton = document.createElement('input');
        bouton.checked=false
        bouton.type="radio"
        bouton.class="bouton"
        bouton.name="bouton"
        
        boite__carrousel__navigation.append(bouton);
        bouton.dataset.index = index++
        bouton.addEventListener('mousedown', function(){
            //elmimg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
        })
        
        img.addEventListener('mousedown',function(){

            console.log(this.dataset.index);
           
            boite__carrousel.classList.add('ouvrir');

            //console.log(boite__carrousel.classList)
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')

            //elmimg.setAttribute('src',this.getAttribute('src'));

        })

    }
        boite__carrousel__fermeture.addEventListener('mousedown',function(){
        boite__carrousel.classList.remove('ouvrir');
    })

})()