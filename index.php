<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - MR SHOP HOT</title>
</head>
<body>
    <header>
        <?php include './header.php' ?>
    </header>
    <main>
        <?php include './hero.php' ?>
        <h1>Juguetes eróticos para tus fantasías placenteras</h1>
        <section id="suscribete_contactanos">
            <div id="suscribete">
                <div id="suscribete_etiqueta">
                        <img src="./iconos/icono_campana.svg" alt="campana de suscripcion">
                        <span>Suscríbete</span>
                </div>
                <form action="index.php">
                    <input type="email" placeholder="Ingresa tu correo electrónico">
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div id="contactanos">
                <div id="contactanos_etiqueta">
                        <img src="./iconos/icono_campana.svg" alt="campana de suscripcion">
                        <span>Contáctanos</span>
                </div>
                <div id="contactanos_componentes">
                    <div id="contactanos_llamar"><a href="tel:+573003581311"><img src="./iconos/icono_tel.svg" alt="icono whatsapp"><span>+57 300 3581311</span></a></div>
                    <div id="contactanos_whatsapp"><img src="./iconos/icono_whatsapp_2.svg" alt="icono whatsapp"></div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include './footer.php' ?>
    </footer>
    <script src="./js_header.js"></script>
    <script src="./js_index.js"></script>
</body>
</html>