<?php include('includes/head.php'); ?>
    <body>
        <header class="continer-fluid" style="background-image: url(images/bg-blog.jpg); background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <?php include('includes/nav.php'); ?>
            </div>
            <div class="container my-auto pb-3">
                <div class="row align-items-center hero-banner">
                    <div class="col-md-7">
                        <h1 class="banner-title">Peritraje preciso para desvelar la verdad</h1>
                        <a href="contacto"><button class="btn btn-laforce">CONTÁCTANOS</button></a>
                    </div>
                </div>
            </div>
            <?php include('includes/menu-tab.php'); ?>
        </header>
        <main>
            <?php include('includes/nav-servicio.php'); ?>
            <section class="pt-1">
                <div class="container">
                    <div class="row row-service">
                        <div class="col-md-10 mx-auto">
                            <p class="service-slide-title">Auditoría corporativa</p>
                            <img class="img-fluid mb-2" src="images/img-balistica.jpg" alt="...">
                            <p>Analizamos las armas de fuego empleadas en los crímenes. Incluimos estudio y análisis de los proyectiles y de los impactos determinando el calibre del arma disparada.</p>
            
                            <p>También determinamos la correspondencia entre proyectiles o vainas (cascos o casquillos) halladas en el sitio del suceso con algún arma hallada en poder de un sospechoso o en el lugar mismo del hecho delictivo; asimismo, verificamos la presencia de residuos de pólvora sobre el blanco, con el objeto de obtener una aproximación de la distancia a la que fue realizado el disparo.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('includes/footer.php'); ?>
        
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    </body>
</html>
