

const hero = document.querySelector('.hero');
const nav = document.querySelector('.nav');
const navBtn = document.querySelector('.nav__ham');
const listNav = document.querySelectorAll('.nav__menu ul li');
const menuNav = document.querySelector('.menu-header-menu-container');
const menuNavEng = document.querySelector('.menu-header-menu-en-container');
const htm = document.querySelector('html');
const navLogo = document.querySelector('.nav__logo img');




const changeLogo = () =>{

    const lang = htm.getAttribute('lang')
    if(lang == 'ar'){

        navLogo.setAttribute('src', citizenshipUri.root_theme + '/img/logo.svg');

    }else{
        
        navLogo.setAttribute('src', citizenshipUri.root_theme + '/img/logo-eng.svg')

    }


}
changeLogo();
const fixnNav =  () =>{

    if(nav.className == 'nav use'){

        
    }else{
        hero.offsetBottom = hero.offsetTop + hero.offsetHeight;

        if(window.scrollY >= hero.offsetBottom - 90){

            nav.classList.add("fixnav");
        }else{
            nav.classList.remove("fixnav");
        }

    }

    
    // alert("wowo")
}

fixnNav();
window.addEventListener("scroll", fixnNav);


navBtn.addEventListener('click', (e) =>{


    navBtn.classList.toggle('cancel');
    if(menuNav){

        menuNav.classList.toggle('open');
    }

    if(menuNavEng){

        menuNavEng.classList.toggle('open');

    }


})

listNav.forEach(item =>{

    item.addEventListener('click' , () =>{

        navBtn.classList.remove('cancel');
        if(menuNav){

            menuNav.classList.remove('open');
        }
        if(menuNavEng){

            menuNavEng.classList.remove('open');
        }

    })
})