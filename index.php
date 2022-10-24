<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include './header.php' ?>
    </header>
    <main>
        <section id="hero">
            <div id="flechas_hero">
                <img id="flecha_retroceder_hero"  src="./iconos/icono_flecha_izquierda.svg" alt="icono retroceder">
                <img id="flecha_avanzar_hero" src="./iconos/icono_flecha_izquierda.svg" alt="icono retroceder">
            </div>
            <picture id="hero_picture_1" class="hero_picture">
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-1-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-1-768p.webp">
                <img src="./imagenes/hero-img-1-1200p.webp" alt="paisaje">
            </picture>
            <picture id="hero_picture_2" class="hero_picture">
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-2-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-2-768p.webp">
                <img src="./imagenes/hero-img-2-1200p.webp" alt="paisaje">
            </picture>
            <picture id="hero_picture_3" class="hero_picture">
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-3-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-3-768p.webp">
                <img src="./imagenes/hero-img-3-1200p.webp" alt="paisaje">
            </picture>
            <picture id="hero_picture_4" class="hero_picture">
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-4-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-4-768p.webp">
                <img src="./imagenes/hero-img-4-1200p.webp" alt="paisaje">
            </picture>
            <picture id="hero_picture_5" class="hero_picture">
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-5-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-5-768p.webp">
                <img src="./imagenes/hero-img-5-1200p.webp" alt="paisaje">
            </picture>
        </section>
        <div id="suscribete">
                <img src="./iconos/icono_campana.svg" alt="campana de suscripcion">
                <span>Suscríbete</span>
        </div>
        <h1>Juguetes eróticos para tus fantasías placenteras</h1>
    </main>
    <footer>
        <?php include './footer.php' ?>
    </footer>
    <script src="./js_header.js"></script>
    <script src="./js_index.js"></script>
</body>
</html>