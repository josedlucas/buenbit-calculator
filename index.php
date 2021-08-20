<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Buenbit || Calculadora</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css"/>
    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Bootstrap slider rang-->
    <link rel="stylesheet" href="css/bootstrap-slider.css"/>
    <!-- Material Design Bootstrap-->
    <link rel="stylesheet" href="css/buenbit.css"/>
</head>
<body class="img-background-home">
<header>
    <!-- Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
        <div class="container col-md-10">
            <!-- SideNav slide-out button-->
            <div class="float-left d-md-none d-block">
                <a href="index.php">
                    <img src="img/logo-buenbit-d.svg"/>
                </a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <a href="index.php">
                    <img src="img/logo-buenbit-d.svg"/>
                </a>
            </div>
            <!-- Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto d-md-flex d-none">
                <li class="nav-item mx-md-3"><a href="https://app.buenbit.com/registro"
                            class="nav-link btn btn-rounded btn-outline-primary btn-lg px-4 py-2"><span
                                class="clearfix d-none d-sm-inline-block">Crear cuenta</span></a></li>
                <li class="nav-item"><a href="https://app.buenbit.com/" class="nav-link btn btn-rounded btn-primary btn-lg px-4 py-2"><span
                                class="clearfix d-none d-sm-inline-block">Ingresar</span></a></li>
            </ul>
            <!-- Navbar links-->
        </div>
    </nav>
    <!-- Navbar-->
</header>
<main>

    <div class="container-fluid">
        <section class="section-home-mt container col-md-10 mx-auto">

            <div class="row pt-md-5 pt-4">
                <div class="col-md-7 pt-md-3 order-md-1 order-2 d-md-block d-none">
                    <div>
                        <h1 class="font-48 font-weight-bold line-65">Usá tus stablecoins <br> para pedir un préstamo <br> en
                            pesos a tasa 0%</h1>
                    </div>
                    <div>
                        <h6 class="font-20 font-18-m mt-md-5 font-weight-normal  bb-color-text line-31 ">
                            No vendas tus criptomonedas para cubrir gastos <br class="d-md-block d-none"> inesperados. Pedí un préstamo en pesos y dejá tus <br class="d-md-block d-none"> criptomonedas en garantía.
                        </h6>
                        <div class="mt-md-4 d-md-block d-none">
                            <a class="btn btn-primary btn-md btn-rounded mb-4 mt-2 col-md-3 mx-auto font-12 col-8 font-15 mt-md-3 simular_prestamo">
                                Ir al simulador
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pt-md-4 order-md-2 order-1 pl-md-4">
                    <div class="d-md-none d-block mb-4">
                        <h1 class="font-35-m font-weight-bold">Usá tus stablecoins <br> para pedir un <br> préstamo en pesos a tasa 0%</h1>
                    </div>
                    <div class="d-md-none">
                        <h6 class="font-20 font-18-m mt-md-5 font-weight-normal  bb-color-text line-31 line-25-m">
                            No vendas tus criptomonedas para cubrir gastos <br class="d-md-block d-none"> inesperados. Pedí un préstamo en pesos y dejá tus <br class="d-md-block d-none"> criptomonedas en garantía.
                        </h6>
                    </div>
                    <div class="card pt-4 ml-md-4 col-md-11 px-md-0 pb-md-5 mt-md-3 mt-4">
                        <p class="text-center mt-md-3">¿Cuántos pesos necesitás?</p>
                        <div class="d-flex align-items-center">
                            <div class="col-md-3 text-right"><small>ARG</small></div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center">
                                <div class="text-center align-items-center font-35 justify-content-center set_amount view_input_set">
                                    $<span class="amount">5.000</span></div>
                                <div class="md-form col-12  set_amount"  style="display:none;">
                                    <input class="form-control mb-md-1 mb-0  numberico" id="amount_input_set"
                                           type="number" placeholder="Monto" min="5" max="50000"/>
                                </div>
                                <input class="amount_input" type="hidden" name="amount" value="5000"/>
                            </div>
                            <div class="col-md-3"><a class="view_input_set"><i class="fas fa-retweet"></i></a></div>
                        </div>
                        <div class="justify-content-center d-flex my-3 col-12 mx-auto find">
                            <div class="text-primary mr-3" id="bajar"><i class="fal fa-minus-circle font-23"></i></div>
                            <input id="ex13" type="text"/>
                            <div class="text-primary ml-3" id="subir"><i class="far fa-plus-circle font-23"></i></div>
                        </div>
                        <button class="btn btn-primary btn-md btn-rounded mb-4 mt-2 col-md-6 mx-auto font-12 col-8 simular_prestamo font-15">
                            Simular préstamo
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pt-5">
            <div class="mt-md-5">
                <h3 class="text-md-center font-35 font-weight-bold px-md-0 px-3">¡No vendas tus <br class="d-block d-md-none"> criptomonedas!</h3>
            </div>
            <div class="col-md-9 mx-auto mt-md-5 mt-4 pt-1">
                <div class="row">
                    <div class="col-md-4 pt-md-4">
                        <div>
                            <div>
                                <img src="img/icono7.svg" alt="">
                            </div>
                            <div class="font-weight-bold font-20 py-md-3 py-3">Préstamos en pesos</div>
                            <div>
                                <p>Pedí hasta $50.000 y gastalos en lo <br> que quieras.</p>
                            </div>
                        </div>

                        <div class="mt-md-5 mt-4">
                            <div>
                                <img src="img/icono8.svg" alt="">
                            </div>
                            <div class="font-weight-bold font-20 py-md-3 py-3">Pedilo a tasa 0%</div>
                            <div>
                                <p>Elegí la tasa de interés que querés <br> pagar y la cantidad de cuotas en las <br> que querés devolver tu préstamo.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 d-md-block d-none">
                        <img src="img/cripto-center.png" alt="">
                    </div>
                    <div class="col-md-4  pt-md-4 pt-4">
                        <div>
                            <div>
                                <img src="img/icono9.svg" class="ml-md-auto d-block" alt="">
                            </div>
                            <div class="font-weight-bold font-20 text-md-right py-md-3 py-3">Tus cripto como garantía</div>
                            <div class="text-md-right">
                                <p>Tus stablecoins quedan como garantía <br> y te las devolvemos al cancelar el <br> préstamo.</p>
                            </div>
                        </div>

                        <div class="mt-md-5 mt-5">
                            <div>
                                <img src="img/icono10.svg" class="ml-md-auto d-block" alt="">
                            </div>
                            <div class="font-weight-bold font-20 text-md-right py-md-3 py-3">¡Al toque!</div>
                            <div class="text-md-right">
                                <p>Podés cancelar tu préstamo en <br> cualquier momento antes del <br> vencimiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-md-5 pt-5">
            <div class="mt-md-4 mt-4">
                <h3 class="text-md-center font-35 font-35-m font-weight-bold px-md-0 px-4">Cubrí tus gastos sin  usar los ahorros o la inversión</h3>
            </div>
            <div class="col-md-9 mx-auto mt-md-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <img src="img/icono11.svg" alt="">
                            </div>
                            <div class="font-weight-bold font-20 py-md-3 py-3">¡No gastes tus ahorros!</div>
                            <div>
                                <p class="font-14">Dejá tus criptomonedas estables como <br> garantía y llevate pesos.</p>
                            </div>
                        </div>
                        <div class="col-md-4 my-4 my-md-0">
                            <div>
                                <img src="img/icono12.svg" alt="">
                            </div>
                            <div class="font-weight-bold font-20 py-md-3 py-3">Cancelalo cuando quieras</div>
                            <div>
                                <p class="font-14">Lo pedís y lo tenés acreditado <br>
                                    en pocos minutos.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <img src="img/icono13.svg" alt="">
                            </div>
                            <div class="font-weight-bold font-20 py-md-3 py-3">¡Lo cancelás <br> cuando quieras!</div>
                            <div>
                                <p class="font-14">Ni bien lo hacés, te devolvemos tus <br> criptos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container col-md-10 mx-auto pt-md-5 pt-4">
            <div class="row mt-5 pt-md-4">
                <div class="col-md-4">
                    <small>FAQs</small>
                    <h3 class="font-weight-500 font-35">Préstamos</h3>
                </div>
                <div class="col-md-8">
                    <div class="accordion md-accordion" id="accordion-progress" role="tablist"
                         aria-multiselectable="true">



                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1043">
                                <a data-toggle="collapse" href="#collapse-1043" aria-expanded="false"
                                   aria-controls="collapse-1043" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>
                                            ¿Por qué tomaría un préstamo en lugar de vender mis criptomonedas?
                                        </div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1043" class="collapse px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1043" data-parent="#accordion-progress">
                                <small>
                                    Los usuarios están pidiendo préstamos principalmente para cubrir gastos que surgen de manera inesperada. Si tenés criptomonedas como ahorro o inversión, ahora no es necesario venderlas para poder cubrir esos gastos inesperados. Podés pedir un préstamo en pesos y dejar tus criptmononedas como garantía de la devolución del préstamo.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1044">
                                <a data-toggle="collapse" href="#collapse-1044" aria-expanded="false"
                                   aria-controls="collapse-1044" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuáles son los requisitos para obtener un préstamo?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1044" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1044" data-parent="#accordion-progress">
                                <small>
                                    Para poder acceder a un préstamo en pesos garantizado con criptomonedas es necesario
                                    ser persona física, mayor a 18 años y contar con capacidad para contratar y ser
                                    usuario de Buenbit. Deberán haber aceptado los términos y condiciones generales del
                                    servicio de Créditos Colaterizados como así también los TYC y Políticas de
                                    Privacidad de Buenbit.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-10451">
                                <a data-toggle="collapse" href="#collapse-10451" aria-expanded="false"
                                   aria-controls="collapse-10451" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cómo puedo pedir un préstamo?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-10451" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-10451" data-parent="#accordion-progress">
                                <small>
                                    Al completar el formulario de simulación de préstamo en este sitio web, una persona de nuestro equipo te va a contactar para asesorarte, responder todas tus dudas y acompañarte en el proceso de otorgación del préstamo en pesos sólo si decides avanzar.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-10452">
                                <a data-toggle="collapse" href="#collapse-10452" aria-expanded="false"
                                   aria-controls="collapse-10452" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuántos pesos puedo pedir prestados?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-10452" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-10452" data-parent="#accordion-progress">
                                <small>
                                    Podés pedir tu préstamo por un valor de hasta AR$ 50.000. Tené en cuenta que cuanto mayor sea el valor de tu préstamo, mayor será la garantía necesaria a ofrecer en criptomonedas.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->

                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1045">
                                <a data-toggle="collapse" href="#collapse-1045" aria-expanded="false"
                                   aria-controls="collapse-1045" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Puedo solicitar un préstamo en criptomonedas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1045" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1045" data-parent="#accordion-progress">
                                <small> No, el préstamo que obtendrás es en pesos argentinos.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1046">
                                <a data-toggle="collapse" href="#collapse-1046" aria-expanded="false"
                                   aria-controls="collapse-1046" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Puedo cancelar la totalidad de mi préstamo antes del vencimiento?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1046" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1045" data-parent="#accordion-progress">
                                <small>Sí, podés cancelar la totalidad de tu préstamo antes del vencimiento pactado,
                                    asumiendo los costos administrativos por cancelación anticipada.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-md-4">
                <div class="col-md-4">
                    <small>FAQs</small>
                    <h3 class="font-weight-500 font-35">Garantías</h3>
                </div>
                <div class="col-md-8">
                    <div class="accordion md-accordion" id="accordion-progress" role="tablist"
                         aria-multiselectable="true">
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1048">
                                <a data-toggle="collapse" href="#collapse-1048" aria-expanded="false"
                                   aria-controls="collapse-1048" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuáles son las criptomonedas que puedo ofrecer en garantía?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1048" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1048" data-parent="#accordion-progress">
                                <small>Podés ofrecer en garantía distintos tipos de stablecoins como DAI, USDT, USDC o
                                    USDB.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1049">
                                <a data-toggle="collapse" href="#collapse-1049" aria-expanded="false"
                                   aria-controls="collapse-1049" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuál es el valor de las criptomonedas que tengo que ofrecer en garantía
                                            para obtener mi préstamo?
                                        </div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1049" class="collapse px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1049" data-parent="#accordion-progress">
                                <small>El valor de las criptomonedas que deberás ofrecer en garantía depende del valor
                                    en pesos de tu préstamo y el costo financiero que quieras asumir. Cuanto mayor sea
                                    el valor del préstamo que querés obtener y menor el costo financiero que querés
                                    asumir, mayor será el valor de criptomonedas que necesitarás ofrecer en garantía.
                                    Podés calcular una estimación del valor a ofrecer en garantía usando la calculadora
                                    de simulación de préstamos en este sitio web.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1050">
                                <a data-toggle="collapse" href="#collapse-1050" aria-expanded="false"
                                   aria-controls="collapse-1050" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿En qué momento recupero mis criptomonedas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1050" class="collapse px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1050" data-parent="#accordion-progress">
                                <small>Una vez que canceles la totalidad del préstamo te devolveremos exactamente el
                                    mismo valor y en la misma criptomoneda que dejaste en garantía.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1047">
                                <a data-toggle="collapse" href="#collapse-1047" aria-expanded="false"
                                   aria-controls="collapse-1047" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Las criptomonedas que dejo en garantía siguen generando intereses?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1047" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1047" data-parent="#accordion-progress">
                                <small>
                                    No. Mientras tus criptomonedas estén en garantía no generan ningún tipo de interés o rendimiento. Al cancelar la totalidad de tu préstamo te devolveremos exactamente el mismo valor y en la misma criptomoneda que dejaste en garantía.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-md-4">
                <div class="col-md-4">
                    <small>FAQs</small>
                    <h3 class="font-weight-500 font-35">Cuotas</h3>
                </div>
                <div class="col-md-8">
                    <div class="accordion md-accordion" id="accordion-progress" role="tablist"
                         aria-multiselectable="true">
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1088">
                                <a data-toggle="collapse" href="#collapse-1088" aria-expanded="false"
                                   aria-controls="collapse-1088" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿En cuántas cuotas puedo cancelar mi préstamo?
                                        </div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1088" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1088" data-parent="#accordion-progress">
                                <small>Podés cancelar tu préstamo en 3, 6 o 12 cuotas.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1052">
                                <a data-toggle="collapse" href="#collapse-1052" aria-expanded="false"
                                   aria-controls="collapse-1052" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuál es la tasa de interés que voy a pagar en las cuotas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1052" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1052" data-parent="#accordion-progress">
                                <small>
                                    Podés elegir cuál es la tasa de interés que querés pagar por tu préstamo, incluso con la posibilidad de obtener tu préstamo a tasa 0%. Cuanto mayor sea el valor de las criptomonedas que ofrezcas en garantía menor será la tasa de interés a pagar. Podés usar la calculadora de simulación de préstamos en este sitio web y calcular la tasa de interés que pagarías en tu préstamo.
                                </small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <!--<div class="card">


                            <div class="card-header py-4" role="tab" id="heading-1053">
                                <a data-toggle="collapse" href="#collapse-1053" aria-expanded="false"
                                   aria-controls="collapse-1053" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cuál es el sistema de amortización de las cuotas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            
                            <div id="collapse-1053" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1053" data-parent="#accordion-progress">
                                <small> El sistema de amortización de las cuotas es el francés.</small>
                            </div>
                        </div>-->
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1054">
                                <a data-toggle="collapse" href="#collapse-1054" aria-expanded="false"
                                   aria-controls="collapse-1054" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cómo puedo ver el vencimiento de mis cuotas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1054" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1054" data-parent="#accordion-progress">
                                <small> Una vez que obtengas tu préstamo te brindaremos el detalle para que puedas
                                    controlar el vencimiento de las cuotas. De todas maneras, también te vamos a avisar
                                    un día antes de cada vencimiento para que puedas recordarlo.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1054">
                                <a data-toggle="collapse" href="#collapse-1054" aria-expanded="false"
                                   aria-controls="collapse-1054" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Cómo puedo cancelar las cuotas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1054" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1054" data-parent="#accordion-progress">
                                <small>Las cuotas se cancelan vía transferencia bancaria.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                        <!-- Accordion card -->
                        <div class="card">

                            <!-- Card header -->
                            <div class="card-header py-4" role="tab" id="heading-1055">
                                <a data-toggle="collapse" href="#collapse-1055" aria-expanded="false"
                                   aria-controls="collapse-1055" class="collapsed">
                                    <h6 class="mb-0 text-secondary font-20 d-flex">
                                        <div>¿Qué pasa con la garantía si no puedo cancelar las cuotas?</div>
                                        <i class="far fa-plus rotate-icon ml-auto"></i>
                                    </h6>
                                </a>
                            </div>

                            <!-- Card body -->
                            <div id="collapse-1055" class="collapse  px-4 m-acordion-content" role="tabpanel"
                                 aria-labelledby="heading-1055" data-parent="#accordion-progress">
                                <small>En caso que no puedas cancelar las cuotas, como última instancia podríamos acudir
                                    a utilizar tus criptomonedas en garantía para venderlas a precio de mercado contra
                                    pesos argentinos, y así saldar la deuda de tu préstamo.</small>
                                <small>En caso que el valor de tus criptomonedas en garantía superen el valor total del
                                    préstamo a cancelar, solo venderemos la cantidad de criptomonedas necesarias para
                                    cancelar el total de la deuda más los costos administrativos por la gestión, y el
                                    saldo en criptomonedas (en caso de existir), te será devuelto.</small>
                            </div>
                        </div>
                        <!-- Accordion card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<!-- Footer-->
<div class="footer-background-home mt-md-5 align-items-center d-flex pt-5">
    <div class="container px-md-4 pt-md-5">
        <div class="row align-items-center d-flex">
            <div class="col-6">
                <a href="index.php">
                    <img src="img/logo-buenbit-d-w.svg"/>
                </a>
            </div>
            <div class="col-6 text-right">
                <a href="terminos.php">
                    <small class="text-white ">
                        <u>Términos y condiciones</u>
                    </small>
                </a>
            </div>
        </div>
        <hr class="text-white border-info mt-5 mb-5 mb-md-5 col-md-12 col-10" style="opacity: .2" >
        <div class="justify-content-center d-flex">
            <a href="https://open.spotify.com/show/5VfrmT5T2fmyxQNZEwY8wJ?si=jcfqwbLsS-6pJFnBCjMamA&nd=1"
               class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQjSURBVHgB7Z1NT1NBFIbf2woigkZdmVj3inuif0Bda/wFujfiWuPer73+ATGu1biHPyDGtbhFw5cCAvW8vTPtpVzotD13binnSQ79oMXwcObMmam5kyCQer2eyM2YxKjEiMQJiQTDSV1iW+KfxJbERpIk9ZA3dhQiIqtyMy5xGsMrMIQ/EmsiduewFx0oyGXkJFKRRos1pGJzMzZXqMvKCxJVGHkwS5fysnWfUJHJ+ngOJrMTlPlLpG5nn6xkH7jMNJlh0NF556xJU6irmTbMu6NRGp27BtkMnYTJ7AU6m/APGkJd2tps3jsTfuj7DJ2A0S/s1VERsxX/wOiLcdZSyjwJQwO6HOOXURhajJpQXUYo1FolPaoUepx3kLSpVGCoYkKVMaHKmFBlTKgyJlQZE6qMCVXGhCpjQpUxocqYUGVMqDImVJkTiM8liSmJyxJXJc66x3D3z7S9fkViWWLR3eftT4mvEgvuuYEhkQ+WLqJ4bknclLiN/cL6hYIp9pPEHFLZpRFD6COJx4gHM/e9xEeUIDeG0O/Qz8pQmLVvJOYRiUERuoJWfcyjhrT29gpLwVOkpaFQYgi9J/Ha3ac0/lIclvPu/jLCJxb+YTiZ+YnthrsNHQFPJN6iQGJNSl7EDxQzK1PsdaST39Qhr+Mf7woKJJbQmLA8zCCV2565LCnTKJAy+tA8OITzelDia2toZvO1D5GKZbmZyXxvFgUTO0MpjEPyGtIhyvu1wPdSKGsvhfn6GzLJ1Ny/w/fPoWBiCr2PtB/VbKEol5LYHn3GABBLKLPxA4rFy32BEldLsYRyyH055PsU4OvksnvO11RGDd1l9juUJDbmkH8m8QDpL8ll4TekGbUY+H4KZe31/Sc3VjrV3+cSLxGRo942UTBrM0vKQXLvIOLS86jvh3LWZ4s07W7zsj20i1BhmDaY2WO2i/UTVTTKGPJ+kplCqw/1y8W8bOJExSUra292H6BTo8+fFVqf1Ygt9BX0NpmZebMYgE3lLDGFFtmLltYmtRNTKLOSvagf1guZ8Ov19iGa7UVDtutKF1vGWl5jG49iufGR1y5xYTCNkj68G4btO7+jlBV7F5Fnd88w7YdSLFdi/uOOUhjGDeZSsf85oowJVcaEKmNClTGhyphQZUyoMiZUGROqjAlVxoQqY0KVMaHKmFBlKDToYs1GELsUugNDix0K3YKhxbYJ1WWTQjdhdVSLjUqSJLtIL3pv9MdfXtvet03rMPpllV8aQt0F7i1Le2fdHxKQbexp2Fqo7qGzVf+gKdTV0iWY1G7wR1g0J/U9S0+Xtr9hUkNouGo/D8QOV+mN8MNVPO5y7Dx9wS7Jvhd2RKtdHf+TxWUrxZ7C8YXy2AWt93xA1b6f2DpCjde95xFB1W7ef8SgQIrjEWpcSQYfofYfLLMzGMYDiWoAAAAASUVORK5CYII="
                     alt="">
            </a>
            <a href="https://www.facebook.com/Buenbit/" class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALUSURBVHgB7Z1NctNAEIV75MSE4FAFrKCAC+QAHIELULCn4AQcgJtwAthzkZzAFLtABcfkz47TLY8cxZGVsfwWLeV9Vc+ObMeLr3pGI6tqOkgis9ks6NOOpq/Z1mxpgnSTmWaiudCca05DCLOUf7xTiIrs6dOu5pF0V2AK/zXHKnZa96GVgmJF7slcJLnmWOZiKyu2UmisymeanpAqrEoPq6r1llCVafPjE6HMuzCZf1TqpPxiVj6IlUmZaZijp9HZgoXQOGdymK9HPjVGdznlCt0TymyCORsUB7nQWLY8mzdnUAz9okIHQjbF1uqSqdmsOCAbsWtzqcl8IASBudyxh74QFH0KxbJtQrlUwtEzoff5FyQ0WSYECoWCoVAwFAqGQsFQKBgKBUOhYLbEP481HzRvNa9iqnghDvAudF/zTVZLdIdnoSbxh8wrtDV4nkO/SMtkGl6Fmsj30kK8Dvn9hM/8i3GFV6Gva94baj5qDsQhXof8y5r3DsSpTKONC/sjcQyvlMBQKJigN+efiw++l/6uu8QcxizzThzgSehvaY4JfiMO6MqQ/yVO6IpQN2f+rggdihMoFIynS8/ySeWT5vOKz/3UfF16zc2Q9yS0XGV1P3ociaOKXIYLezAUCoZCwVAoGAoFQ6FgKBQMhYKhUDAUCoZCwVAoGAoFQ6FgKBSMp7ueZZrcRnaBV6GthUMeDIWCoVAwFAqGQsFQKBgKBUOhYCgUjAlN2qyZJHFpQqdCUExN6LkQFBMKxXJmQs+E8yiK0yyEcCnzTe/JZpzY3vbFsmksZFNG9pALjRvcs0qbMy6aBJQX9maYS6j1MWej4mAhNM6lh0Kp61C0sFic1G9cesay/SuUmkLuarkfCJurNCO9uUpB3I7dui9wS/ab2IpotFb7nzKxWk3sQ7m/mDxbBY0bN6i69Y3XLdRs33trEdST7u7fbAJNnLVQsyvJ5BZqV4Y4oxDB+fajAAAAAElFTkSuQmCC"
                     alt="">
            </a>
            <a href="https://www.youtube.com/c/Buenbit" class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOaSURBVHgB7Z1dThRBEMf/swuICBr1yQS8gL4bffcEGr2A8Vk9gCfAjwN4AYwHMPEa4AXwFQ0CCgis9d/tXgaYhfmoGmZ265fUDjOwZPPb6pqenkl3gpz0er1ENrMSMxLTElMSCcaTnsSBxD+JfYndJEl6ed54oRAR2ZXNnMQ1jK/APPyR2Baxh+f90UhBISMXMBDpHLONgdjMjM0UGrLytkQXThbM0o2sbD0jVGSyPt6Ey7wIyvwpUg/SBzvpnZCZLjMfdHQrOBsyFBpqpjfzYvRLY3DXJ52hC3CZZaCz+bjTFxrS1s/m5ZmPTT9m6DycqrCvjo6Y7cQdpxJzrKWUeQWOBnQ5y5cZOFrMuFBdpinUu0p6dCl0kkeQtOl04KjiQpVxocq4UGVcqDIuVBkXqowLVcaFKuNClXGhyrhQZaZQH/dCLEkshmNLp7YYsZ/Fb4nN1P5mOEbWw88/JFYl1lK/MyWRYfs7sIUSP4btZbIs8R7GWAtlpn2TuI5msCLxGoZY19AvaI5M8lziIQyxFBrrZdN4BkMshT5CMzH9XJZCF9FM2GrMypCl0CY290grhVb90Ow3rsOGuzDCUugNVIOd8acSn6FPKzO0qlDCDH0l8Ri62TqRTT4Ns/WBxFvYlQEV2iI08gk6ZaCVGWqFRhnQKEeZtHn4LpYBi5NWadoslP1cjhWYXkoWpc7xUC1Y/15IvET5Wmh2YrMUysFd7ctPjhRxbLWxV2FtyVAK/AC9gQ2z0XvLGrqJ6rBJv8FgkFpzlMhMqGWGsk5Vue3BckGRFs1b48vOxFJo1SywrJNmJyXLJr+GZpK+O6qOpdBVNJPvMMQ6Q2u5F16QFRhiKZQyl9EsWDu/whDrS0+ODr1DM6DMJzBuNXU8OUJ4xubl4n2cfBTHkngLZS3ECmooQXUJHcWoZ5vYob9oiO302Xp9xPFauWyhY4c/zqiMC1XGhSrjQpVxocq4UGVcqDIuVBkXqowLVcaFKkOhuSZrdnJxRKGHcLQ4pNB9OFocuFBd9ih0D15HtdjtJElyhMGk9041/nJu+9ht2oFTlS2+9IWGCe49S8uzExcJSHfsadi7UMWhs624MxQaaukGXGoR4hIWw5P6iUvPkLa/4FLz0Hd1ej0QX1ylHPkXV4mE6di5+oJPyX4S9oi2Ci3/kyZkK8VexeRCeewF7ZReoOrMfzxeQo3z3nOJoG6R97cMCqQ4LqHGK8ncS6j9B1os0P1r6J4lAAAAAElFTkSuQmCC"
                     alt="">
            </a>
            <a href="https://www.instagram.com/buenbit/" class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAATHSURBVHgB7Z07bNRAEIbHFwivAAIqUEKNgJqI9CCoefUIqFGgR/SAqEHQg6BH0IPoE4maILqA8oIkJDnmv9u9zF3uzmt7Peck80mT2Icd6z7N7o4feBMKpF6vJ/xrP8cwx16OPRwJ7UzqHGsc/zhWOZaTJKmH7JgqhEUO8a+DHIdo5woM4Q/HIotd77dRT0EuIw9TU6SxySI1xXbN2K5CXVae4BgioxvI0tlu2bpFKMtE/3iMTGYakPmLpa7JD2tyxWWmyQwDjo47Zy1aQl2fac08G42u0blrIDP0MJnMPMDZiF9pCHVpa6N5fkZ80/cZOkJGUVCrU43N1vyKUYiD6Eshcx8ZMYDL/fgxTEYshk1oXPZCqJVK8RiC0N18BSk2tRoZUTGhkTGhkTGhkTGhkTGhkTGhkTGhkdlD1eWIi27Mu6gcgxQKWbc4znJMcByl3gLTgNzvHD84PnB8dsvqJHwN7yTpAml3OO5RfoEhPOF4RspoCx3jeMVxnnSY4bhGitmqLfQrNaV68IXfcky78J9lYUz8vshxk9qPMcVxnZT6XE2hkxwPxfpTF2XwwIXGsdrQEoqM+SrWy/iCvj/2mSilznGMk0KWatWhF8UymnRsmTc4vrmYdJ/hGF4gKoibpICW0Cti+S3F555YRrcy6pZfis/PkQJadagcJL6E7dJWp/r9kXEhdabPzGnx2QQpMAihcynbptWpPttlnXmf4zk1m/YL6i60zJq3hdag9FMsX6De2ZW1Tk2rMzsHw1NUMoMQ2u9LfaR2mcg09IMQhsxGP5i1zgw9dhSqdLUJo7OUCZFnqDlav6Fm34nlcWqvErDPXaoIVRGKjOss+h/12R7/Lkdw9LkhfWTp/WhVhOapUyE8a525a4TKOvUDhaNeZ6ZRFaEyc6YpHDm6n6YKsN1vgaTVtOpURajMtCxNV25bCblVESqbeZaLGHLbLH1vaVRFKOpMOWI/DtgHdass8D8H7LNjLt+l4c+IPCjUJ/tsD+GddWvIbY7ShQ7i1BNnP72+2Cdq7xdRk6Ip+y4Bl+U6L5rg1PMyhR279FPPQdxGhoxeQm9zvKZNqWjS/U4rp9w+vRgjZbSafGhTQ0ZeovQzpXm3DS6KhN7RVKkCtDIUAnwzxcWMNAmQhSv7OCW9KvaFcDR/OYj1Y1Qsq9xK1hKKEdiXOGjOISXODG3eZs7LRMffKx2tJi/rzDukh3qdqiU0T51ZlDx1amE0B6UsdWZR8taphdF8cgQDy3vqXmciIH2Osj2qKB95POeis07FMcZJiUE8LPaO9OpDX6eqPSymferps6Xs54zy1KlRGMTzoR7/tBzqzFG3XuSBWwQGnix1anQGKXRHYv9pITImNDImNDImNDImNDImNDImNDImNDImNDIQGvSyZiOIDQhdJyMW6xC6SkYs1kxoXFYgdIWsH43Fci1Jkg1qvvTeKMZfvNvel01LZBRlAT8aQt0L7i1L87PkJwmQhT0MWwmVHThb8Cstoa4vnSWTmgU/hUVrUG879XRp+5tMaggNV53zgdjkKvkIn1zF417HjtkX7JXs7aAiWsg0/Y/EZSvEHqDdC+ShClrKPUHVlr+4OYUa3nuPKYKGsuy/zYBAiMMUajiTDJ5C7T/D90RKVK9OJAAAAABJRU5ErkJggg=="
                     alt="">
            </a>
            <a href="https://twitter.com/buenbit" class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQqSURBVHgB7Z3LThRREIb/HhQRAaOuTOAJdG2CL6B7jaw16t7L2sS9KHuMe0hce3kAia4hcY9xh4abAgJj/TPnQAPD0NNdXT1AfUkx6aGbwEf1qerTkz4JMlKv1xN56ZPolTgrcUYiwcmkLrEp8U9iQ2ItSZJ6lgOPFCIie+SlX+ICTq7ALPyRWBGxW+12OlRQyMhBNEU6u6ygKbZlxrYUGrLyikQPnFYwSxdaZesBoSKT4+MluMyjoMxfInUz/WYtvREy02Vmg44uB2c77AgNY6af5p3RGBqDuwbpDB2Ey8wDnQ3EjYbQkLZezfMzEE/9mKEDcIrCXh01MVuLG04h+jmWUuY5OBrQZR+/9MLRoteF6nKWQr1V0qOHQk/zDJI2tRocVVyoMi5UGReqjAtVxoUq40KVcaHKuFBlXKgyx1XoqMQ7ia8SP0N8lngjMXzIMddgQCKToldhw0OJtyjGkMQziUdt9pmXGJeYDvuPSdwK7z9ByVgJvY1mRr2SeI38MAuvZ9x3NrUvZd6R+IGSsTrlR8Prc4mnyAePyyoTqX2X0JS5lPo9SsNKaHr8otSX6IyRcFweFiUmJL6hOQSUipXQpX3bHANZUIaRjSKZxX/GTYkXEp9QMlZC51u8xz+UWcNT+SixRSs0ZU7DACuhM22+x1P5Pdq3PBeRnykU7y4yYyX0C1pnaYTZyvaGGctKzjGWp3kc8xaRnxkYYtmHxtYpDxyD8xaUBxIfYYRVhrKxZl84jnwUqc5LMOQMbOA4ycIyD3tmYYhVhsZTbgS2zME4Qy2LUhWYZiexbJuqkFp6I78fy+k7VlvrMdT8n2gplGPZXdi1MFMwHj+JZR+a5h6a85plFqkbMJiu249V25TmO8qf9WF2msskVdwCmUT55L2AKExVQudQHpRZSXaSKoTGGfQyptNY8CrLTlJVUYpw4pfFSePWhNl9o3ZULTTC6/wJ5J9I7gqZpIoqn4bVnreXHyN/5e8amaQKoRTHTOT86BiKtVC8pL2PChr4w7AQyntGHCtjE6/RzFMg7/Gb3drIiuUHHXins2jxocjJEF2TlWmsixKzk2MmMzZrAaI49q1ssz6gS0VGqqzyIyEodgi7QwFvyFEaiwxFms9pFqFb2qYTg38+VBkXqowLVcaFKuNClXGhyrhQZVyoMi5UGReqjAtVxoUqQ6GZHtbsZGKbQrfgaLFFoRtwtNh0obqsU+g6fBzVYq2WJMk2mg+9d4rxl8+2j23TKpyiLPNLQ2h4wL1naX5W4yIB6caehr2F6hw6W44bO0LDWLoAl9oJcQmLnaK+59IzpO1vuNQsNFztXw/EF1fJR/bFVSLhcexcfcEfyb4XdkTLHS3/kyZkK8Wex+mF8tgFreZeoOrAT9xdQo3PvecSQT2dHH/MoECK4xJqvJLMvITafxDsAW8lbvPGAAAAAElFTkSuQmCC"
                     alt="">
            </a>
            <a href="https://t.me/buenbitcomunidad" class="p-btn-footer-f">
                <img class="iconos-footer"
                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQ0SURBVHgB7Z1NTxNRFIbPlA8RQaOuXLDX+Atwj7r3g70xbv3cG+NWYlxj3Gt0j38AE9dqXItxh0Y+FBCo5+3c2w5laO/MnNN2pudJDs1A24SHd+6cuR3mRhRIvV6P+GGCa5xrjGuUK6JqUufa5frHtcO1FUVRPeSFXYWwyBF+mOQ6QdUVGMIfrg0Wu9fpSUcKcomcplik0WKDYrGpiU0V6lJ5lmuEjDSQ0tW0tB4SyjIxPp4mk9kNyPzJUneT36wlN1wyTWYYcHTGOWvSFOrGTNvNs9EYGp27BsmETpPJzAOcTfmNhlAXWzua52fK7/o+oVNkFAW9OtXYbM1vGIWYxFgKmcfIkAAuJ/BlnAwpxk2oLGMQaq2SHCMQOswzSNLUamSIYkKFMaHCmFBhTKgwJlQYEyqMCRVmGISe5HrA9ZbrK9cPriekRMRTTueomsxyPeS6dMTP57g+kzCjVC0ucl3hukNxMjtxihSoglCIQwpv09FpTOM3KVBmoVnSmMYKKVBGod3GxhCQzjVSoCxCkUDs0nnT2M4XUmLQhUqkMQ2V8RMMolAkcJ7rJsXjZBbWKCzB4u2SZ5Aae6QRDfdH95hF5iLXea7Xgc9XEzoICS2yW+NIfZ9rmeI/wHzg61QOSKBfQovs1h6kcoFiOXiPdxR+wPpESvRaqMTRGgLvcr1321llqrVMoFdCsVv7RBbhA8Uyv7vtrDKBWssEtIVKtT1I1DOul4nv3eB6StmT/o0U0RIq2T9ivLtFrVQCyHxB+VA7wgMNoZh7fEQyLLiSfP/S7fKhrUsnkEq0Q+1pkvhjqZ0lAY3G/jrXG8oHxkok8jIdlvmcZJKvustrztjPUGssnQl4fvsRPAlkSiQfMudIEc2j/IorpBVCr7qabXseRCKVyynvgSP4K5KbHFGZA03Sr8+UfGK7Ndn4YE1ypintICdKv049Q5KCkwDpaTvV8RMM8sfI0jKB+i4/yEKlf3kML0OdUIx1iySHakPvGfQrRx5TfNopkVbVht5ThktxlqjYyYJnmXpAWa5tQkLvucqbVtvlU0BK86ZVddrOU+aLxdCnhp7WYvy8QD2gzJczZklrT3Z3UPbrQ0PHVrUP5dqpygW3Pq1LKT/DXIFkP9uRKl3BjISiZ02mFTNZ1yh9SlCFKl/B3BfsnxaEMaHCmFBhTKgwJlQYEyqMCRXGhApjQoWB0KCbNRtB7EPoHhlS7EHoDhlS7JpQWbYhdJtsHJViqxZF0T7FN703ivEX97b3bdMmGUVZx5eGUHeDe0tpfjb9IgHJxh6GrYXKDpyt+42mUDeWrpJJzYJfwqJ5UD9w6uli+4tMaggNV+3rgdjiKvkIX1zF427HjtUX7JbsB0FHtJ5p+Z8kLq0Qe5yGF8hDF7SZe4GqQ+/YWkIN973HEkEjWV5fMiAQ4rCEGs4kg5dQ+w+uD/+ri2cmuwAAAABJRU5ErkJggg=="
                     alt="">
            </a>
        </div>
    </div>
</div>

<!-- Footer-->
<!-- JQuery-->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips-->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Bootstrap slider rang JavaScript-->
<script type="text/javascript" src="js/bootstrap-slider.js"></script>
<!-- MDB core JavaScript-->
<script type="text/javascript" src="js/mdb.js"></script>
<!-- Script-->
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>