const icono_menu = document.getElementById("icono_menu");
const menu_movil = document.getElementById("menu_movil");
const icono_cerrarMenu = document.getElementById("icono_cerrarMenu");


icono_menu.addEventListener("click", ()=> {
    menu_movil.style.display = "flex";
    icono_menu.style.display = "none";
    icono_cerrarMenu.style.display = "block";
})

icono_cerrarMenu.addEventListener("click", ()=> {
    menu_movil.style.display = "none";
    icono_menu.style.display = "flex";
    icono_cerrarMenu.style.display = "none";
})