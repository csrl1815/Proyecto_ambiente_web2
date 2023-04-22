<?php 
  include 'utilitarios.php';
  include_once '../Controllers/usuariosController.php';  
?>
<!DOCTYPE html>
<html lang="en">
<?php 
      MostrarHead();
   ?>

<body>

    <!-- Header Section Start -->
    <?php
      MostrarHeader();
    ?>
    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">

                    <h1 class="text-white mb-5">VirusHunter</h1>

                    <a class="btn custom-btn smoothscroll" href="#section_2">Comenzar</a>
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            San José, Costa Rica
                        </h5>
                    </div>

                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Share:</span>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="video/video1.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </section>
    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Sobre Nosotros</h2>

                        <p class="text-white">Bienvenidos a VirusHunter, nuestra empresa se dedica a la venta de
                            licencias de software antivirus para proteger tu dispositivo y mantenerlo seguro frente a
                            los riesgos del mundo digital.

                            En VirusHunter, entendemos la importancia de la seguridad digital en la actualidad, por eso
                            nos esforzamos por brindar la mejor protección para tu dispositivo. Nuestro objetivo es
                            proporcionarte un software antivirus que se adapte a tus necesidades y te brinde
                            tranquilidad y seguridad en todo momento.

                            Contamos con un equipo altamente capacitado y comprometido en proporcionar el mejor servicio
                            a nuestros clientes. Trabajamos constantemente para mejorar nuestro producto y asegurarnos
                            de que siempre esté actualizado para enfrentar las amenazas más recientes.

                            Creemos que la protección no tiene que ser complicada ni costosa. Nuestras licencias de
                            software antivirus son accesibles y fáciles de usar para que puedas proteger tu dispositivo
                            sin complicaciones ni problemas.

                            En VirusHunter, nuestra prioridad es tu seguridad digital. Nos enorgullece ser parte de la
                            solución para mantener tus dispositivos seguros y protegidos. Únete a nuestra familia y
                            protégete hoy mismo con nuestros productos de antivirus.</p>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4">Nuestros Clientes</h1>
                </div>

                <div class="col-lg-5 col-6">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="img/PG.png" class="artists-image img-fluid">
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-6">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="img/pfizer.jpg"
                                class="artists-image img-fluid">
                        </div>

                    </div>

                    <div class="artists-thumb">
                        <img src="img/amazon.png" class="artists-image img-fluid">

                    </div>
                </div>

                <div class="artists-thumb">
                        <img src="img/AT&T_logo.png" class="artists-image img-fluid">

                    </div>
                </div>

            </div>
        </div>
    </section>


    


    <section class="pricing-section section-padding section-bg" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Nuestros Planes</h2>
                </div>

                <div class="col-lg-6 col-6">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3><small>Basic</small> $15</h3>

                                <p>Incluye:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Protección antivirus básica para un dispositivo o sistema operativo específico (por ejemplo, Windows o Mac).</li>

                            <li class="pricing-list-item">Protección contra virus, malware, spyware y otros tipos de amenazas comunes.</li>

                            <li class="pricing-list-item">Actualizaciones regulares de la base de datos de virus para mantener la protección al día.</li>

                            <li class="pricing-list-item">Análisis programados y manual para detectar y eliminar amenazas.</li>

                            <li class="pricing-list-item">Soporte técnico limitado, que puede ser ofrecido solo por correo electrónico o chat.</li>
                        </ul>

                        <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Adquirir</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-6 mt-4 mt-lg-0">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3><small>Premium</small> $30</h3>

                                <p>Incluye:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Protección avanzada contra una amplia gama de amenazas, incluidos virus, malware, ransomware, phishing y ataques de hacker.</li>

                            <li class="pricing-list-item">Protección multi-dispositivo para proteger varios dispositivos, como computadoras, teléfonos inteligentes y tabletas.</li>

                            <li class="pricing-list-item">Protección de identidad y privacidad, que incluye bloqueo de sitios web maliciosos y protección de la red WiFi</li>

                            <li class="pricing-list-item">Opciones de seguridad adicionales, como cortafuegos, controles parentales y herramientas de optimización del sistema</li>

                            <li class="pricing-list-item">Soporte técnico mejorado, con opciones de chat en vivo, teléfono y correo electrónico.</li>
                        </ul>

                        <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Adquirir</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-6 mt-4 mt-lg-0">
                    <div class="pricing-thumb">
                        <div class="d-flex">
                            <div>
                                <h3><small>Business</small> $80</h3>

                                <p>Incluye:</p>
                            </div>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Protección antivirus y antimalware avanzada para múltiples dispositivos y usuarios.</li>

                            <li class="pricing-list-item">Administración centralizada de la seguridad, que permite al administrador controlar la protección en todas las computadoras de la empresa.</li>

                            <li class="pricing-list-item">Protección de correo electrónico y filtrado de spam para proteger la comunicación de la empresa</li>

                            <li class="pricing-list-item">Control de acceso a la red y herramientas de prevención de pérdida de datos para garantizar la seguridad de la información empresarial confidencial.</li>

                            <li class="pricing-list-item">Soporte técnico empresarial, con opciones de chat en vivo, teléfono y correo electrónico.</li>
                        </ul>

                        <a class="link-fx-1 color-contrast-higher mt-4" href="ticket.html">
                            <span>Adquirir</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4">Mas informacion</h2>

                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-ContactForm" type="button" role="tab"
                                aria-controls="nav-ContactForm" aria-selected="false">
                                <h5>Formulario de contacto</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                            aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="contact-name" id="contact-name"
                                                class="form-control" placeholder="Nombre Completo" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="contact-email" id="contact-email"
                                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Correo Electronico"
                                                required>
                                        </div>
                                    </div>

                                    <textarea name="contact-message" rows="3" class="form-control" id="contact-message"
                                        placeholder="Mensaje"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    </main>
    <?php 
      MostrarContactUs();
    ?>
    <?php 
      MostrarJS();
    ?>
</body>

</html>