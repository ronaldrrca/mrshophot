const hero_picture_1 = document.getElementById("hero_picture_1");
const hero_picture_2 = document.getElementById("hero_picture_2");
const hero_picture_3 = document.getElementById("hero_picture_3");
const hero_picture_4 = document.getElementById("hero_picture_4");
const hero_picture_5 = document.getElementById("hero_picture_5");
const flecha_retroceder_hero = document.getElementById("flecha_retroceder_hero"); 
const flecha_avanzar_hero = document.getElementById("flecha_avanzar_hero"); 


let picture_activo = "hero_picture_1";

flecha_avanzar_hero.addEventListener("click", ()=> {
    switch (picture_activo) {
        case "hero_picture_1": 
            picture_activo = "hero_picture_2";
            hero_picture_1.style.display = "none";
            hero_picture_2.style.display = "flex";
            break;
        case "hero_picture_2": 
            picture_activo = "hero_picture_3";
            hero_picture_2.style.display = "none";
            hero_picture_3.style.display = "flex";
            break;
        case "hero_picture_3": 
            picture_activo = "hero_picture_4";
            hero_picture_3.style.display = "none";
            hero_picture_4.style.display = "flex";
            break;
        case "hero_picture_4": 
            picture_activo = "hero_picture_5";
            hero_picture_4.style.display = "none";
            hero_picture_5.style.display = "flex";
            break;
        case "hero_picture_5": 
            picture_activo = "hero_picture_1";
            hero_picture_5.style.display = "none";
            hero_picture_1.style.display = "flex";
            break;
    }
})


flecha_retroceder_hero.addEventListener("click", ()=> {
    switch (picture_activo) {
        case "hero_picture_5": 
            picture_activo = "hero_picture_4";
            hero_picture_5.style.display = "none";
            hero_picture_4.style.display = "flex";
            break;
        case "hero_picture_4": 
            picture_activo = "hero_picture_3";
            hero_picture_4.style.display = "none";
            hero_picture_3.style.display = "flex";
            break;
        case "hero_picture_3": 
            picture_activo = "hero_picture_2";
            hero_picture_3.style.display = "none";
            hero_picture_2.style.display = "flex";
            break;
        case "hero_picture_2": 
            picture_activo = "hero_picture_1";
            hero_picture_2.style.display = "none";
            hero_picture_1.style.display = "flex";
            break;
        case "hero_picture_1": 
            picture_activo = "hero_picture_5";
            hero_picture_1.style.display = "none";
            hero_picture_5.style.display = "flex";
            break;
    }
})