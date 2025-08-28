const menuBtn = document.getElementById("mobile-menu-button")
const menu = document.getElementById("mobile-menu")
const menuIcon = document.getElementById("menu-icon")

menuBtn.addEventListener("click", () => {
    if(menu.classList.contains("max-h-0")) {
        menu.classList.remove("max-h-0", "opacity-0", "scale-y-95")
        menu.classList.add("max-h-screen", "opacity-100", "scale-y-100")
        menuIcon.classList.replace("bi-list", "bi-x")
    }else{
        menu.classList.add("max-h-0", "opacity-0", "scale-y-95")
        menu.classList.remove("max-h-screen", "opacity-100", "scale-y-100")
        menuIcon.classList.replace("bi-x", "bi-list")
    }
})
