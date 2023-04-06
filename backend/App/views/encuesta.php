<?php
echo $header;
?>

<body class="">
    <main class="main-content main-content-bg mt-0">
        <div class="min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-12 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7">
                            <div class="container-fluid py-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="multisteps-form">
                                            <!--progress bar-->
                                            <!--form panels-->
                                            <div class="row">
                                                <div class="col-12 col-lg-12 m-auto">
                                                    <form class="multisteps-form__form" id="form_encuesta" method="POST" action="/EncuestaSatisfaccion/saveEncuesta" style="height: 403px;">
                                                        <div id="card_three" class="card multisteps-form__panel p-1 border-radius-xl bg-white js-active" data-animation="FadeIn">


                                                            <div class="row text-center mt-4">
                                                                <div class="col-10 mx-auto">
                                                                    <h5 class="font-weight-normal"><strong>MENTAL HEALTH 2023
                                                                        </strong></h5>
                                                                    <p>Coloque el puntaje a cada uno de los siguientes ítems, donde (Cara feliz) es “totalmente satisfecho” y (cara triste) es “nada satisfecho”.</p>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="multisteps-form__content row text-center">

                                                                <br>
                                                                <div class="row mx-auto">
                                                                    <div class="col-md-6">
                                                                        <label for="nombre">Nombre Completo *:</label>
                                                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escriba su nombre completo" required>
                                                                        
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="nombre">Correo *:</label>
                                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Escriba su email" required>
                                                                        <span id="msg_email"></span>
                                                                    </div>
                                                                    <span>* Verifique que sus datos esten escritos correctamenrte.</span>

                                                                </div>

                                                                <div class="row mt-3">
                                                                    <div class="col-md-12">

                                                                        <ul style="list-style-type: none;">
                                                                            <li>
                                                                                <p>1. Coordinación de Traslados.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck4" name="group2" required value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-green" for="btncheck4">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck5" name="group2" required value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-yellow" for="btncheck5">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck6" name="group2" required value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-orange" for="btncheck6">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck7" name="group2" required value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2 color-face-red" for="btncheck7">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>2. Calidad de las instalaciones (alojamiento y salones).</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck8" name="group3" required value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck8">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck9" name="group3" required value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck9">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck10" name="group3" required value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck10">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck11" name="group3" required value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck11">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>


                                                                            <li>
                                                                                <p>3. Valoración global del evento (traslados, alojamiento, alimentación, atención del staff tecnofarma)</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck12" name="group4" required value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck12">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck13" name="group4" required value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck13">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck14" name="group4" required value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck14">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck15" name="group4" required value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck15">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>Comentarios adicionales.</p>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea name="txt_preg_3" id="txt_preg_3" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>4. Calidad de la agenda científica.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck16" name="group5" required value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck16">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck17" name="group5" required value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck17">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck18" name="group5" required value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck18">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck19" name="group5" required value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck19">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>5. Nivel de los expositores.</p>
                                                                                <table class="table">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/1.png" alt="" class="photo">
                                                                                            Dr. Carlos Macias Ojeda 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck20" name="group6" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck20">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck21" name="group6" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck21">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck22" name="group6" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck22">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck23" name="group6" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck23">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/2.png" alt="" class="photo">
                                                                                            Dr. Jorge Yamamoto Cuevas 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck24" name="group7" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck24">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck25" name="group7" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck25">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck26" name="group7" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck26">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck27" name="group7" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck27">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/3.png" alt="" class="photo">
                                                                                            Dr. Rafael García Rascón 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck28" name="group8" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck28">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck29" name="group8" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck29">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck30" name="group8" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck30">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck31" name="group8" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck31">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/4.png" alt="" class="photo">
                                                                                            Dr. Manuel Robles Sanroman 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck32" name="group9" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck32">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck33" name="group9" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck33">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck34" name="group9" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck34">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck35" name="group9" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck35">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/5.png" alt="" class="photo">
                                                                                            Dr. Antonio Manuel Ortega 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck36" name="group10" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck36">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck37" name="group10" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck37">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck38" name="group10" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck38">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck39" name="group10" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck39">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/6.png" alt="" class="photo">
                                                                                            Dra. Tania Nava Bringas 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck40" name="group11" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck40">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck41" name="group11" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck41">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck42" name="group11" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck42">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck43" name="group11" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck43">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/7.png" alt="" class="photo">
                                                                                            Dr. Carlos Macias Ojeda 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck44" name="group12" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck44">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck45" name="group12" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck45">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck46" name="group12" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck46">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck47" name="group12" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck47">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/8.png" alt="" class="photo">
                                                                                            Dr. Jorge Yamamoto Cuevas 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck48" name="group13" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck48">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck49" name="group13" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck49">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck50" name="group13" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck50">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck51" name="group13" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck51">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/9.png" alt="" class="photo">
                                                                                            Dr. Rafael García Rascón 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck52" name="group14" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck52">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck53" name="group14" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck53">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck54" name="group14" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck54">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck55" name="group14" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck55">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/10.png" alt="" class="photo">
                                                                                            Dr. Manuel Robles Sanroman 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck56" name="group15" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck56">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck57" name="group15" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck57">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck58" name="group15" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck58">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck59" name="group15" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck59">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/11.png" alt="" class="photo">
                                                                                            Dr. Antonio Manuel Ortega 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck60" name="group16" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck60">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck61" name="group16" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck61">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck62" name="group16" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck62">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck63" name="group16" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck63">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <img width="190" height="190" src="/img/ponentes/12.png" alt="" class="photo">
                                                                                            Dra. Tania Nava Bringas 
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="row mt-4 d-flex justify-content-around text-center">
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-green" id="btncheck64" name="group17" required value="3">
                                                                                                    <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck64">
                                                                                                        <i class="far fa-grin-beam"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-yellow" id="btncheck65" name="group17" required value="2">
                                                                                                    <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck65">
                                                                                                        <i class="far fa-grin"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-orange" id="btncheck66" name="group17" required value="1">
                                                                                                    <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck66">
                                                                                                        <i class="far fa-meh"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>
                                                                                                <div class="col-sm-1 ">
                                                                                                    <input type="radio" class="btn-check btn-face-red" id="btncheck67" name="group17" required value="0">
                                                                                                    <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck67">
                                                                                                        <i class="far fa-frown"></i>
                                                                                                    </label>
                                                                                                    <h6></h6>
                                                                                                </div>

                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                </table>
                                                                            </li>

                                                                            <li>
                                                                                <p>6. Valoración respecto al tiempo destinado a las conferencias, preguntas y mesas redondas.</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-green" id="btncheck140" name="group36" required value="3">
                                                                                        <label class="color-face-green btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck140">
                                                                                            <i class="far fa-grin-beam"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-yellow" id="btncheck141" name="group36" required value="2">
                                                                                        <label class="color-face-yellow btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck141">
                                                                                            <i class="far fa-grin"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-orange" id="btncheck142" name="group36" required value="1">
                                                                                        <label class="color-face-orange btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck142">
                                                                                            <i class="far fa-meh"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-red" id="btncheck143" name="group36" required value="0">
                                                                                        <label class="color-face-red btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck143">
                                                                                            <i class="far fa-frown"></i>
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>7. Considera que hubo temas importantes que quedaron fuera de la agenda</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck148" name="group38" required value="si">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck148">
                                                                                            SI
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck149" name="group38" required value="no">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck149">
                                                                                            NO
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                </div>
                                                                                <p>¿Como cuáles temas?</p>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea name="txt_preg_9" id="txt_preg_9" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>8. Desde el punto de vista científico, ¿volvería a participar en Embajadores OA?</p>
                                                                                <div class="row mt-4 d-flex justify-content-center text-center">
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck150" name="group39" required value="si">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck150">
                                                                                            SI
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>
                                                                                    <div class="col-sm-1 ">
                                                                                        <input type="radio" class="btn-check btn-face-" id="btncheck151" name="group39" required value="no">
                                                                                        <label class="btn btn-lg btn-outline-secondary border-2 px-2 py-2" for="btncheck151">
                                                                                            NO
                                                                                        </label>
                                                                                        <h6></h6>
                                                                                    </div>

                                                                                </div>
                                                                            </li>

                                                                            <li>
                                                                                <p>9. Desea agregar algún comentario adicional.</p>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <textarea name="txt_preg_10" id="txt_preg_10" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </li>


                                                                            <li>
                                                                                <div class="row mt-3">
                                                                                    <div class="col-md-6 m-auto">
                                                                                        <button class="btn btn-secondary" id="btnEnviar" >Enviar respuestas!</button>
                                                                                        
                                                                                        <a href="" id="btn_download_pdf" style="display: none;">descargar</a>
                                                                                    </div>
                                                                                </div>
                                                                            </li>


                                                                        </ul>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="loader" id="loader" name="loader" hidden>
        <div class="box-1">
        </div>
    </div>

</body>

<style>
    .loader {
    position: fixed;
    text-align: -webkit-center;
    width: 100%;
    height: 100%;
    top: 50%;
    }

    .box-1 {
    display: flex;
    justify-content: center;
    text-align: -webkit-center;
    align-items: center;
    position: relative;
    height: 150px;
    width: 150px;
    background-color: #FFFFFF;
    background-image: linear-gradient(135deg, #FFFFFF 0%, #6284FF 34%, #FF0000 100%);
    border-radius: 50%;
    animation: rotate 3s linear infinite;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
    }

    @keyframes rotate {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
    }

    .box-1::before {
    content: '';
    position: absolute;
    inset: 25px;
    background: #f5f5f5;
    border-radius: 50%;
    box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
    }
    
    @keyframes text-animate412 {

    10% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
    }
</style>


<?php echo $footer; ?>
<script>
        $(document).ready(function(){
            $("#form_encuesta").on("submit", function(event){
               event.preventDefault();
                var formData = $(this).serialize();

                $("#loader").removeAttr("hidden","hidden");
                $.ajax({
                    url: "/EncuestaSatisfaccion/saveEncuesta",
                    type: "POST",
                    data: formData, 
                    dataType: 'json',                
                    beforeSend: function() {
                        console.log("Procesando....");
                    },
                    success: function(respuesta) {
                        if (respuesta.status == 'success') {
                            $("#loader").attr("hidden","true");
                            // $("#btn_download_pdf").attr("href", '../PDF/'+respuesta.nombre+'.pdf'); 
                            // $("#btn_download_pdf").attr("download","");
                            // $("#btn_download_pdf")[0].click();

                            Swal.fire(respuesta.msg, "", respuesta.status).
                                then((value) => {       
                                                      
                                // window.location.href = "/Video/";
                                window.location.reload();
                            });                
                        }
                        else{
                            $("#loader").attr("hidden","true");
                            Swal.fire(respuesta.msg, "", respuesta.status).
                                then((value) => {
                                window.location.reload();
                            });
                        }
                       
                        console.log(respuesta);
                        console.log(respuesta.msg);
                        console.log(respuesta.status);
                        console.log(respuesta.nombre);
                    },
                    error: function(respuesta) {
                        $("#loader").attr("hidden","true");
                        console.log(respuesta);
                    }
                });                
            });
        });
    </script> 