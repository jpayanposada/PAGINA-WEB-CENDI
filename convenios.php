    <title>Carrusel de Marcas</title>
    <style>
        .carousel-2 {
            width: 80%;
            margin: auto;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }
        .carousel-2-track {
            display: flex;
            animation: scroll 10s linear infinite;
        }
        .carousel-2 img {
            display: inline-block;
            width: 100px;
            margin: 10px;
        }
        h3 {
            text-align: center;
        }
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    <h3 class="mt-4">NUESTROS CONVENIOS</h3>
    <div class="carousel-2 m-3 mb-4 justify-content-center">
        <div class="carousel-2-track">
            <?php
                $convenios = array(
                    "img/icons/hospital.png", 
                    "img/icons/logo-sena.png",
                    "img/icons/Min.png",
                    "img/icons/Secedu.png",
                    "img/icons/Q10.png",
                    "img/icons/Mega.png",
                    "img/icons/mejores.png",
                    "img/icons/lineaVital.png",
                    "img/icons/domina.png",
                    "img/icons/clinica.png",
                    "img/icons/dropopular.png",
                    "img/icons/coe.png",
                    "img/icons/belleza.png",
                    "img/icons/sanigancio.png",
                    "img/icons/fenalco.png",
                    "img/icons/pasteur.jpg"
                );

                foreach ($convenios as $convenio) {
                    echo '<img src="' . $convenio . '" alt="Marca">';
                }

                // Duplicar las imágenes para crear el efecto de bucle infinito
                foreach ($convenios as $convenio) {
                    echo '<img src="' . $convenio . '" alt="Marca">';
                }
            ?>
        </div>
    </div>


      




