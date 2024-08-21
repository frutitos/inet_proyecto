const btn_menu = document.getElementById("btn-menu")
const menu_desplegrable = document.querySelector(".menu_desplegrable")
btn_menu.addEventListener("click", () => {
    menu_desplegrable.classList.toggle("move")
})