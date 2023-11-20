<?php include('includes/head.php'); ?>
    <body>
        <header class="continer-fluid" style="background-image: url(images/bg-contacto.jpg); background-repeat: no-repeat; background-size: cover">
            <div class="container">
                <?php include('includes/nav.php'); ?>
            </div>
            <div class="container my-auto pb-3">
                <div class="row align-items-center hero-banner">
                    <div class="col-md-7">
                        <h1 class="banner-title">Conecta con nosotros te brindamos lo que necesitas</h1>
                        <!-- <a href="contacto"><button class="btn btn-laforce">CONTÁCTANOS</button></a> -->
                    </div>
                </div>
            </div>
            <?php include('includes/menu-tab.php'); ?>
        </header>
        <main>
            <section id="section-blog">
                <div class="container">
                    <h1 class="section-title mb-4 text-center">Contáctanos</h1>
                    <p class="text-center pb-4">Para preguntas generales, por favor complete el siguiente formulario</p>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="row">
                                <div class="col-md-6 px-5">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.644365235716!2d-76.9607851249386!3d-12.067972388170464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6f12a2433e3%3A0xca87f1bd5fc4b2ce!2sAv.%20la%20Molina%20905%2C%20La%20Molina%2015023!5e0!3m2!1ses-419!2spe!4v1700099431515!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <ul>
                                        <li>
                                        Av. Faustino Sánchez Carrión #615, Oficina 909, Jesús María - Lima
                                        </li>
                                        <li>
                                        Email: info@laforce-hg.com
                                        </li>
                                        <li>
                                        Tel: (01) 4963393
                                        </li>
                                        <li>
                                        Móvil: (+51) 974 910 699
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <p>Envíanos tu consulta</p>
                                    <form>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">Nombre</label>
                                        </div>
        
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">+Codigo de Pais Telefono</label>
                                        </div>
        
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">Pais</label>
                                        </div>
        
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">Correo Electrónico</label>
                                        </div>
        
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form4Example2" class="form-control" />
                                            <label class="form-label" for="form4Example2">Asunto</label>
                                        </div>
        
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                            <label class="form-label" for="form4Example3">Mensaje</label>
                                        </div>
        
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-laforce btn-block mb-4">Enviar</button>
                                    </form>
                                </div>
                            </div>
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
