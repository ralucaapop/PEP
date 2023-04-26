const navSlide = () => {
    const meniu = document.querySelector('.meniuLogo');
    const butoane = document.querySelector('.butoane');
    const toateButoanele = document.querySelectorAll(".butoane li");
   
    meniu.addEventListener('click', () => {
         ///toggle Nav
        butoane.classList.toggle('butoane-active');
        ///Butoane animate
        toateButoanele.forEach((link, index) => {
             if(link.style.animation)
             link.style.animation = '';
             else {
            link.style.animation =`butoaneFade 0.5s ease forwards ${index / 7+ 0.8}s `;
             }
        });

        //animatie meniu
        meniu.classList.toggle('toggle');
    });

    
}
navSlide();