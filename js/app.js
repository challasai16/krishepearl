

 // popup main starts here 
    let popup = document.querySelector(".main-popup");
    let closePopup = document.querySelector(".close-popup");
    console.log(popup);
        if(localStorage.getItem("popup-local")) {
        popup.style.display = "none";
    }
    
    function popupClose() {
        closePopup.addEventListener("click", ()=> {
        popup.classList.add("active");
        let local = localStorage.setItem("popup-local", "true");
    
    });
    }
    popupClose();
 
let specificationBox = document.querySelectorAll('.specificationbox');
let specificationContent = document.querySelectorAll('.specification-content');
let specificationIconmanu = document.querySelectorAll('.specification-iconbox .line-2');
for(i=0; i<specificationBox.length; i++) {
    specificationBox[i].addEventListener("click", function(){
       this.classList.toggle("active");
    });
}



// mobile menu js 
let mobileMenu = document.querySelector('.mobile-nav');
let mobileOpen = document.querySelector('.menu-iconbox');
let mobileMenuClose = document.querySelector('.mobile-closeicon i');
let mobileMenuLinks = document.querySelectorAll('.mobile-nav ul li');


mobileOpen.addEventListener("click", ()=> {
    mobileMenu.classList.add('mobile-nav-manu');
})
mobileMenuClose.addEventListener('click', ()=> {
    mobileMenu.classList.remove('mobile-nav-manu');
})
mobileMenuLinks.forEach(links=> {
    links.addEventListener("click", ()=> {
        mobileMenu.classList.remove('mobile-nav-manu');
    })
})




