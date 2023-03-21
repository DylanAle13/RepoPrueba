<?php date_default_timezone_set('America/Lima');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 01</title>
    <link rel="stylesheet" href="estilos_pagina01.css">
</head>
<body>
    <header>
        <div>
            Hola bienvenidos a mi pagina
        </div>
        <nav>
            <div>
                <a class="link-nav" href="#">Inicio</a>
                <a class="link-nav" href="#">Conocenos</a>
                <a class="link-nav" href="#">Preguntas Frecuentes</a>
                <a class="link-nav" href="#">Contactanos</a>
                <a class="link-nav" href="#">Próximamente</a>
            </div>
        </nav>
    </header>
    
    <main>
        <section>
            <section id="contenedor_articulos">
                <?php 
                    $hoy = date("d-m-Y") ; 
                    $diaSemana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
                ?>
                <?php for($i = 0 ; $i < 10 ; $i++):?>
                    <div class="articulos">
                        <time datetime="<?= $hoy ?>" pubdate>
                            <div class="numerodia"><?= date("d", strtotime($hoy)) ?> </div>
                            <div class="nombredia"><?= $diaSemana[date("w", strtotime($hoy))] ?? '...' ?>  </div>
                            <?php  $hoy = date("d-m-Y" , strtotime($hoy . "-1 days")) ; ?>
                        </time> 
                        <article>
                            <h1>Título Primer Artículo</h1> 
                            <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur quam recusandae assumenda sint cumque! Delectus veritatis eos, asperiores animi est aliquid reprehenderit tempore? Repellendus eveniet nobis, asperiores animi ratione consequatur.
                            </p>
                        </article>
                    </div>
                <?php endfor; ?>

            </section>
            <aside id="contenedor_categorias">
            </aside>
        </section>
    </main>
    <footer>
        <div class="section-footer">
            <div>
                
                <li><a class="link-footer" href="#">Inicio</a></li>
                <li><a class="link-footer" href="#">Conocenos</a></li>
                <li><a class="link-footer" href="#">Preguntas Frecuentes</a></li>
                <li><a class="link-footer" href="#">Contactanos</a></li>
                <li><a class="link-footer" href="#">Próximamente</a></li>
            </div>
            <div>
                <?= date("Y") ?> - Arequipa - Perú 
            </div>
            <div>
                Gracias por su visita
            </div>
        </div>
        <div class="bottom-footer">
            Diseño por Mi, Dylan Ale
        </div>
    </footer>
</body>
</html>