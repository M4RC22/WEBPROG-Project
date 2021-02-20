const navSlide = () => { 
    // = () => is equal to anonymous function 
    const burger = document.querySelector(".burger"); 
    const nav = document.querySelector(".nav-links"); 
    const navLinks = document.querySelectorAll(".nav-links li"); 
    
    burger.addEventListener("click", () => { 
    //Toggle nav.classList.toggle("nav-active"); 
    
    //Animation navLinks.forEach((link, index) => { 
        if (link.style.animation) { 
              link.style.animation = ""; 
              } 
       else { 
               link.style.animation = `navLinkFade 0.5s ease forwards ${ 
                    index / 7 + 0.5 
               }s`; 
       } 
   }); 
   //Burger Animate 
   burger.classList.toggle("toggle"); 
   }); 
}; 
navSlide();
