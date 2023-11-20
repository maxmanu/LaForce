<nav class="navbar navbar-expand-lg navbar-light">
    <a href="#">
        <img src="images/LOGOTIPO.png" alt="" class="img-fluid" />
    </a>
    <button
            class="navbar-toggler px-0"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample1"
            aria-controls="navbarExample1"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="bi bi-list icon-hamburger"></i>
    </button>
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarExample1">
            <!-- Left links -->
            <ul class="navbar-nav ps-lg-0" style="padding-left: 0.15rem">
                <li class="nav-item">
                    <a class="nav-link <?php active('') || active('/') ?>"  href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('nosotros');?>" href="nosotros">Nosotros</a>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown dropdown-hover position-static">
                    <a
                        class="nav-link 
                        <?php
                            active('servicios')
                            || active('analisis-forense-imagen-video')
                            || active('auditoria-corporativa')
                        ?> dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Servicios
                    </a>
                    
                    <div
                        class="dropdown-menu w-100 mt-0"
                        aria-labelledby="navbarDropdown"
                        style="border-top-left-radius: 0; border-top-right-radius: 0"
                    >
                        <div class="container">
                            <div class="row my-4">
                                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <p class="submenu-title">Eforensic</p>
                                    <div class="list-group list-group-flush">
                                        <a href="analisis-forense-imagen-video" class="list-group-item list-group-item-action">Análisis forense de imagen y video</a>
                                        <a href="auditoria-corporativa" class="list-group-item list-group-item-action">Borrado seguro de datos</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Fonética y acústica forense</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Forense en dispositivos móviles</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Informática forense</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Preservación de evidencia digital</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Recuperación de evidencia digital</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <p class="submenu-title">Forensic Audit</p>
                                    <div class="list-group list-group-flush">
                                        <a href="servicios" class="list-group-item list-group-item-action">Auditoría forense</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Peritaje Administrativo</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Peritaje contable</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                    <p class="submenu-title">Forense</p>
                                    <div class="list-group list-group-flush">
                                        <a href="servicios" class="list-group-item list-group-item-action">Antropología y homologación facial</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Balística</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Biología</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Dactiloscopía</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Documentoscopía</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Grafotécnia</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Investigación y reconstrucción analítica y virtual de accidentes de tránsito y escena del crimen</a>
                                        <a href="" class="list-group-item list-group-item-action">Medicina legal y auditoría médica</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <p class="submenu-title">Asesoría</p>
                                    <div class="list-group list-group-flush">
                                        <a href="servicios" class="list-group-item list-group-item-action">Asesoría técnica legal</a>
                                        <a href="servicios" class="list-group-item list-group-item-action">Asesoría técnica pericial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('laboratorio');?>" href="laboratorio">Laboratorio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('canal-denuncias');?>" href="canal-denuncias">Canal de denuncias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('blog');?>" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('contacto');?>" href="contacto">Contáctanos</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>