
//DOMContentLoaded permet de s'assurer qu'on a bien chargé notre DOM avant d'éxécuter les scripts
document.addEventListener('DOMContentLoaded', (event) => {

    //Animation des titres au scroll
    //Etape 1 : Construction des titres h2 et h3
    construction_titres();
    //Etape 2 : Appliquer les classes d'animation grâce à IntersectionObserver
    document.querySelectorAll('h2 span, h3 span').forEach(function(r){
        observer.observe(r);  
    })

    //Initialisation de SwiperJS pour la mise en place du carroussel des personnages
    init_SwiperJS();

    //Effet de parrallaxe entre la vidéo et le titre du header
    window.addEventListener("scroll", parallaxeVideo);

    //Animation des nuages qui doivent se déplacer au fur et à mesure du scroll
    let distance = 0;
    window.addEventListener("scroll", animation_nuages);

    //Animation du menu burger
    animation_menu_burger();

});//Fin DOMContentLoaded



//reconstruction des titres h2 et h3 pour qu'on puisse les animer
function construction_titres(){

    //tableau des titres
    const tab_titres = [
      {   partie1: "L'Histoire", partie2: ""},
      {   partie1: "Les", partie2: "Personnages"},
      {   partie1: "Le", partie2: "Lieu"},
      {   partie1: "Studio", partie2: "Koukaki"}
    ]

    //on lit tous les titres de la page
    const titles = document.querySelectorAll('h2, h3');
    var i = 0;
    //on parcoure les titres
    titles.forEach(title => {
      //on reconstruit les titres de telle manière à ce qu'ils soient composés de 3 balises "em" dans 1 "span"
      title.innerText = "";    
      const span_title = document.createElement('span');

      //Premier mot du titre
      const em0 = document.createElement('em');
      em0.innerText = tab_titres[i].partie1;
      span_title.appendChild(em0);

      //On ajoute un espace
      const em1 = document.createElement('em');
      em1.innerText = " ";
      span_title.appendChild(em1);

      //deuxième mot du titre
      const em2 = document.createElement('em');
      em2.innerText = tab_titres[i].partie2;
      span_title.appendChild(em2);

      //on rattache le span au h2 ou h3
      title.appendChild(span_title);

      i++;
    })
}

//Animer les titres au scroll suite à IntersectionObserver
const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {      

          if (entry.isIntersecting) {   

            entry.target.firstElementChild.classList.add('animation-title');
            entry.target.lastElementChild.classList.add('animation-title-delay');    
            //Cette option permet d'appliquer l'animation qu'une seule fois        
            // observer.unobserve(entry.target);         
            return; 
          }    
          entry.target.firstElementChild.classList.remove('animation-title');
          entry.target.lastElementChild.classList.remove('animation-title-delay');
    });
});    

//Initialisation de Swiper JS
function init_SwiperJS(){

    var swiper = new Swiper(".mySwiper", {      
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        //loop:true,
        //loopedSlides:2, 
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
    });
}

//Parallaxe entre le titre et la video du header
function parallaxeVideo() {

    const video = document.querySelector("video");
    const image_video = document.querySelector(".anim-img-video");
    
    //position du scroll au niveau de la page
    const scrollTop = window.scrollY;
    //position du top du titre de la video par rapport à la page
    const position_image = image_video.getBoundingClientRect().top;
 
    if (position_image < scrollTop){
      video.classList.add("anim-video");
      return;
    }
    video.classList.remove("anim-video");
}

//Animation des nuages qui doivent défiler avec le scroll sur 300px
function animation_nuages() {

  const element = document.querySelector(".clouds");
  const position = element.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;

  if (position < windowHeight){  
    //cette formule vient d'une corrélation entre la taille de la fenêtre et la position des nuages
    distance = (windowHeight - position) / 3;
    
    if (distance < 300)   {
        element.style.transform= `translateX(-${distance}px)`;  
     }
  }  
}

//Animation du menu burger
function animation_menu_burger(){

    //affichage, ouverture et fermeture du menu 
    var sidenav = document.getElementById("mySidenav");
    var openBtn = document.getElementById("openBtn");
    var closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

    //fermeture du menu quand on clique sur un des liens
    var affiche_story = document.getElementById("lien-story");
    var affiche_perso = document.getElementById("lien-perso");
    var affiche_lieu = document.getElementById("lien-lieu");
    var affiche_studio = document.getElementById("lien-studio");

    affiche_story.onclick = closeNav;
    affiche_perso.onclick = closeNav;
    affiche_lieu.onclick = closeNav;
    affiche_studio.onclick = closeNav;

    //ouvrir le menu
    function openNav() {
      sidenav.classList.add("active");
      openBtn.classList.add("invisible");
      closeBtn.classList.remove("invisible");
    }

    //fermer le menu
    function closeNav() {
      sidenav.classList.remove("active");
      openBtn.classList.remove("invisible");
      closeBtn.classList.add("invisible");
    }
}



