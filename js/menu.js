let btnmenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnmenu.addEventListener("click", ()=>{
    menu.classList.add("abrir-menu")
})

menu.addEventListener("click", ()=>{
    menu.classList.remove("abrir-menu")
})

overlay.addEventListener("click", ()=>{
    menu.classList.remove("abrir-menu")
})

// LOCOMOTVE SCROLL

const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e){
        e.preventDefault(); // Previne a rolagem nativa
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
                scroll.scrollTo(targetElement); // Usa Locomotive Scroll para rolar
            }
            
        
    });
});

// CARROSSEL

