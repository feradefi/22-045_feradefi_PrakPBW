const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');
//const nilainya tidak bisa diubah

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
});
//toggle utuk memunculkan dan menyembunyikan elemen


function scrolling(){
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}

const scrolTop = document.querySelector('.scrull');
    
window.addEventListener('scroll', () => {
    if(window.pageYOffset > 100){
        scrolTop.classList.add('aktif');
    }else{
        scrolTop.classList.remove('aktif');
    }
    
}
)

