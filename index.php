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
        <div id="hero">
            <picture>
                <source media="(max-width:600px)" srcset="./imagenes/hero-img-1-600p.webp">
                <source media="(max-width:768px)" srcset="./imagenes/hero-img-1-768p.webp">
                <source media="(max-width:1200px)" srcset="./imagenes/hero-img-1-1200p.webp">
                <source media="(max-width:1600px)" srcset="./imagenes/hero-img-1-1600p.webp">
                <img src="./imagenes/hero-img-1-1920p.webp" alt="paisaje">
            </picture>
        </div>
        
    </main>
    <footer>
        <?php include './footer.php' ?>
    </footer>
    <script src="./js_header.js"></script>
</body>
</html>