<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
require_once dirname(__DIR__).'/../public/librerias/fpdf/fpdf_protection.php';

use App\models\Encuestas;
use \Core\View;
use \Core\MasterDom;
use \App\models\Login AS LoginDao;
use \App\models\Encuestas AS EncuestasDao;

class EncuestaSatisfaccion{
    private $_contenedor;

    public function index() {
        $extraHeader =<<<html
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.png">
        <link rel="icon" type="image/png" href="/img/favicon.png">
        <title>
           Encuesta - Mental Health
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
        <link rel="stylesheet" href="/css/alertify/alertify.core.css" />
        <link rel="stylesheet" href="/css/alertify/alertify.default.css" id="toggleCSS" />
        <style>
        .photo {
            max-width: 15rem;
        }
        #msg_email{
            font-size: 0.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: red;
            
        }
        </style>
        
html;
        $extraFooter =<<<html

        <footer class="footer pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto text-center mt-0">
                        <p class="mb-0 text-secondary">
                            Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> Grupo LAHE.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="/js/jquery.min.js"></script>
        <script src="/js/validate/jquery.validate.js"></script>
        <script src="/js/alertify/alertify.min.js"></script>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <script src="/assets/js/core/popper.min.js"></script>
        <script src="/assets/js/core/bootstrap.min.js"></script>
        <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- Kanban scripts -->
        <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
        <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
        <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

        
html;
        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::render("encuesta");
    }

    public function isUserValidate(){
        //echo $_POST['usuario'];
        echo (count(LoginDao::getUser($_POST['usuario']))>=1)? 'true' : 'false';
    }

    public function saveEncuesta(){
        
        
        $data = new \stdClass();
        
        $nombre = $_POST['nombre'];         
        $email = $_POST['email'];
        $preg_1 = $_POST['group2'];
        $preg_2 = $_POST['group3'];
        $preg_3 = $_POST['group4'];
        $preg_3_txt = $_POST['txt_preg_3'];
        $preg_4 = $_POST['group5'];
        $preg_5_1 = $_POST['group6'];
        $preg_5_2 = $_POST['group7'];
        $preg_5_3 = $_POST['group8'];
        $preg_5_4 = $_POST['group9'];
        $preg_5_5 = $_POST['group10'];
        $preg_5_6 = $_POST['group11'];
        $preg_5_7 = $_POST['group12'];
        $preg_5_8 = $_POST['group13'];
        $preg_5_9 = $_POST['group14'];
        $preg_5_10 = $_POST['group15'];
        $preg_5_11 = $_POST['group16'];
        $preg_5_12 = $_POST['group17'];
        $preg_6 = $_POST['group36'];
        $preg_7 = $_POST['group38'];
        $preg_7_1 = $_POST['txt_preg_9'];
        $preg_8 = $_POST['group39'];
        $preg_9 = $_POST['txt_preg_10'];

        
        $data->_nombre = $nombre;
        $data->_email = $email;
        $data->_preg_1 = $preg_1;
        $data->_preg_2 = $preg_2;
        $data->_preg_3 = $preg_3;
        $data->_preg_3_txt = $preg_3_txt;
        $data->_preg_4 = $preg_4;
        $data->_preg_5_1 = $preg_5_1;
        $data->_preg_5_2 = $preg_5_2;
        $data->_preg_5_3 = $preg_5_3;
        $data->_preg_5_4 = $preg_5_4;
        $data->_preg_5_5 = $preg_5_5;
        $data->_preg_5_6 = $preg_5_6;
        $data->_preg_5_7 = $preg_5_7;
        $data->_preg_5_8 = $preg_5_8;
        $data->_preg_5_9 = $preg_5_9;
        $data->_preg_5_10 = $preg_5_10;
        $data->_preg_5_11 = $preg_5_11;
        $data->_preg_5_12 = $preg_5_12;
        $data->_preg_6 = $preg_6;
        $data->_preg_7 = $preg_7;
        $data->_preg_7_1 = $preg_7_1;
        $data->_preg_8 = $preg_8;
        $data->_preg_9 = $preg_9;

        $user = EncuestasDao::searchUserEncuesta($email);
        $datos = [];

        if($user){
            $datos = [
                "status" => "error",
                "msg" => "El usuario asociado a este email ya respondio la encuesta"
            ];
        }else{
            //se guardo la encuesta y puede descargar la constancia
           // echo "no existe";
           

            $id = EncuestasDao::insert($data);

            if($id >= 1){
                $nombre = html_entity_decode($_POST['nombre']);
                $nombre = mb_strtoupper($nombre);
                // $nombre_completo = $user['nombre']." ".$user['segundo_nombre']." ".$user['apellido_paterno']." ".$user['apellido_materno'];
                $data_pdf = [
                    "nombre"  => $nombre,
                    "email" => $email
                ];
                // $this->generarPDF($data_pdf);
                $datos = [
                    "status" => "success",
                    "nombre"  => $nombre,
                    "msg" => "¡Gracias por contestar la encuesta!"
                ];
            }else{
                $datos = [
                    "status" => "error",
                    "msg" => "Hubo un error al guardar la información",
                    "data" => $data,
                ];
            }
        }  
        
        echo json_encode($datos);

    }

    public function generarPDF($data){
        $cadena = str_split($data['nombre']);
        $conteo = count($cadena);

        $pdf = new \FPDF_Protection($orientation = 'L', $unit = 'mm', $format = 'Letter');
        $pdf->AddPage();
        $pdf->Image('PDF/template/constancia.jpeg',0, 0, 279.4, 215.9,'JPG');
        $pdf->SetTextColor(255, 255, 255);
        if($conteo < 33){
            $pdf->setXY(46,85);
        }else{
            $pdf->setXY(46,78);
        }
		
        $pdf->SetFont('Arial','B',25);
        $pdf->MultiCell(192,8,utf8_decode($data['nombre']),0,"C");
        $pdf->SetProtection(array('modify'), '', null);
        // $pdf->Output();
        print_r($pdf->Output('PDF/'.$data['nombre'].'.pdf','F'));
      }

}
