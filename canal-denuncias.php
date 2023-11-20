<?php include('includes/head.php'); ?>
    <body>
        <header class="continer-fluid" style="background-image: url(images/bg-canal-denuncias.jpg); background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <?php include('includes/nav.php'); ?>
            </div>
            <div class="container my-auto pb-3">
                <div class="row align-items-center hero-banner">
                    <div class="col-md-7">
                        <h1 class="banner-title">Tu voz cuenta, garantizamos la justicia a través de la verdad</h1>
                        <a href="contacto"><button class="btn btn-laforce">CONTÁCTANOS</button></a>
                    </div>
                </div>
            </div>
            <?php include('includes/menu-tab.php'); ?>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-6">
                            <img class="img-fluid" src="images/img-laboratorio.png" alt="">
                        </div>
                        <div class="col-md-6 col-justify">
                            <h1 class="section-title">Canal de denuncias</h1>
                            <p>En LAFORSE-HG, tenemos como propósito llevar bienestar. Para lograrlo, es imprescindible no solo vivir nuestros principios, sino también hacer las cosas de forma íntegra.</p>
                            <p>Esto va más allá de nuestros procesos. Se trata de cómo nos comportamos en nuestro día a día.
LAFORSE-HG pone a disposición de sus empleados, clientes y proveedores esta herramienta de comunicación para reportar información acerca de conductas que van en contra de nuestro Código de Ética, Política Corporativa de Prevención de Corrupción, u otras circunstancias irregulares.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <h1 class="section-title text-center pb-4">Registra tu denuncia</h1>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <form>
                                <div class="mb-3 text-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                        <label class="form-check-label" for="inlineCheckbox1">Datos personales</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">No deseo ingresar mis datos</label>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" />
                                            <label class="form-label" for="form3Example1">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Apellidos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="email" id="typeEmail" class="form-control" />
                                            <label class="form-label" for="typeEmail">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Celular</label>
                                        </div>
                                    </div>
                                </div>
                                <p>Detalle del incidente</p>
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                    <label class="form-label" for="textAreaExample">¿Qué fue lo que ocurrió?</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" id="form12" class="form-control" />
                                    <label class="form-label" for="form12">¿Cuándo pasó?</label>
                                </div>
                                <p>Tipo de incidente </p>
                                <div class="mb-3 text-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                                        <label class="form-check-label" for="inlineCheckbox1">abuso de autoridad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">abuso de confianza</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">acoso sexual</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">actividades ilícitas</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                                        <label class="form-check-label" for="inlineCheckbox2">otros</label>
                                    </div>
                                </div>
                                <p>Detalle de alguien relacionado en el incidente </p>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" />
                                            <label class="form-label" for="form3Example1">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example2" class="form-control" />
                                            <label class="form-label" for="form3Example2">Apellidos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" id="textAreaExample" rows="6"></textarea>
                                    <label class="form-label" for="textAreaExample">Otra información adicional (opcional)</label>
                                </div>
                                <button type="submit" class="btn btn-laforce">ENVIAR</button>
                            </form>
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
