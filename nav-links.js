const navLinks = document.querySelectorAll('.nav-links');
const currentUrl = window.location.href;

for (const navLink of navLinks) {
    if (navLink.href === currentUrl) {
        navLink.classList.add('active-nav-links');
    }
}


document.querySelector(".nav-links").addEventListener("click",function(){
    document.querySelector(".nav-links").classList.add("active-nav-links");
});
document.querySelector(".nav-links").addEventListener("click",function(){
    document.querySelector(".nav-links").classList.remove("active-nav-links");
});