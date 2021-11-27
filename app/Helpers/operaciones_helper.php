<?php 

//Retorla la url de Assets
function media()
{
    return BASE_URL."/Assets";
}
function headerAdmin($data="")
{
    $view_header = "Views/Template/header_admin.php";
    require_once ($view_header);
}
function footerAdmin($data="")
{
    $view_footer = "Views/Template/footer_admin.php";
    require_once ($view_footer);        
}
function headerTienda($data="")
{
    $view_header = "Views/Template/header_tienda.php";
    require_once ($view_header);
}
function footerTienda($data="")
{
    $view_footer = "Views/Template/footer_tienda.php";
    require_once ($view_footer);        
}
//Muestra información formateada
function dep($data)
{
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
function getModal(string $nameModal, $data)
{
    $view_modal = "Views/tiendaweb/Modals/{$nameModal}.php";
    require_once $view_modal;        
}
function getFile(string $url, $data)
{
    ob_start();
    require_once("Views/{$url}.php");
    $file = ob_get_clean();
    return $file;        
}
//Envio de correos
function sendEmail($data)
{
    $asunto = $data['asunto'];
    $emailDestino = $data['email'];
    $empresa = 'LIBRERIA HUEQUITO';
    $remitente = 'no-reply@libreriahuequito.com';
    //ENVIO DE CORREO
    $de = "MIME-Version: 1.0\r\n";
    $de .= "Content-type: text/html; charset=UTF-8\r\n";
    $de .= "From: {$empresa} <{$remitente}>\r\n";
    // ob_start();
    // require_once("Views/Template/Email/".$template.".php");
    // $mensaje = ob_get_clean();
    $mensaje = '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Recuperar cuenta</title>
        <style type="text/css">
            p{
                font-family: arial;
                letter-spacing: 1px;
                color: #7f7f7f;
                font-size: 15px;
            }
            a{
                color: #3b74d7;
                font-family: arial;
                text-decoration: none;
                text-align: center;
                display: block;
                font-size: 18px;
            }
            .x_sgwrap p{
                font-size: 20px;
                line-height: 32px;
                color: #244180;
                font-family: arial;
                text-align: center;
            }
            .x_title_gray {
                color: #0a4661;
                padding: 5px 0;
                font-size: 15px;
                border-top: 1px solid #CCC;
            }
            .x_title_blue {
                padding: 08px 0;
                line-height: 25px;
                text-transform: uppercase;
                border-bottom: 1px solid #CCC;
            }
            .x_title_blue h1{
                color: #0a4661;
                font-size: 25px;
                font-family: arial;
            }
            .x_bluetext {
                color: #244180 !important;
            }
            .x_title_gray a{
                text-align: center;
                padding: 10px;
                margin: auto;
                color: #0a4661;
            }
            .x_text_white a{
                color: #FFF;
            }
            .x_button_link {
                width: 100%;
                max-width: 470px;
                height: 40px;
                display: block;
                color: #FFF;
                margin: 20px auto;
                line-height: 40px;
                text-transform: uppercase;
                font-family: Arial Black,Arial Bold,Gadget,sans-serif;
            }
            .x_link_blue {
                background-color: #307cf4;
            }
            .x_textwhite {
                background-color: rgb(50, 67, 128);
                color: #ffffff;
                padding: 10px;
                font-size: 15px;
                line-height: 20px;
            }
        </style>
    </head>
    <body>
        <table align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" style="text-align:center;">
            <tbody>
                <tr>
                    <td>
                        <div class="x_sgwrap x_title_blue">
                            <h1>'.$empresa.'</h1>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="x_sgwrap">
                            <p>Hola '.$data["nombreUsuario"].'</p>
                        </div>
                        <p>Solicitud de acceso para el usuario: <strong>'.$data["email"].'</strong></p>
                        <p>Has solicitado los datos de tu usuario, accede al enlace de abajo para confirmar tu contraseña. </p>
                        <p class="x_text_white">
                        <a href="'.$data["url_recovery"].'" target="_blank" class="x_button_link x_link_blue">Confirmar datos</a>
                        </p>
                        <br>
                        <p>Si no te funciona el botón puedes copiar y pegar la siguiente dirección en tu navegador.</p>
                        <span>'.$data["url_recovery"].'</span>
                        <p class="x_title_gray"><a href="https://wwww.libreriahuequito.com" target="_blank">wwww.libreriahuequito.com</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>';
    $send = mail($emailDestino, $asunto, $mensaje, $de);
    return $send;
}

function getPermisos(int $idmodulo){
    // echo $idmodulo;
    $session = session();
    // $permisos = new UsuariosModel();
    $permisos = new \App\Models\PermisosModel();
    $idrol = session('userData')['idrol'];
    $arrPermisos = $permisos->permisosModulo($idrol);
    $permisos = '';
    $permisosMod = '';
    if(count($arrPermisos) > 0 ){
        $permisos = $arrPermisos;
        $permisosMod = isset($arrPermisos[$idmodulo]) ? $arrPermisos[$idmodulo] : "";
    }
    $dataSession = array('permisos' => $permisos, 'permisosMod' => $permisosMod );
    $session->set($dataSession);

    // require_once ("Models/PermisosModel.php");
    // $objPermisos = new PermisosModel();
    // $arrPermisos = $objPermisos->permisosModulo($idrol);
    // $_SESSION['permisos'] = $permisos;
    // $_SESSION['permisosMod'] = $permisosMod;
}

function sessionUser(int $idpersona){
    require_once ("Models/LoginModel.php");
    $objLogin = new LoginModel();
    $request = $objLogin->sessionLogin($idpersona);
    return $request;
}

function uploadImage(array $data, string $name){
    // $url_temp = $data['tmp_name'];
    $url_temp = $data->getTempName();
    $destino    = './public/images/productos/'.$name;        
    $move = move_uploaded_file($url_temp, $destino);
    return $move;
}

function deleteFile(string $ruta, string $name){
    unlink('./public/images/'.$ruta.'/'.$name);
}

//Elimina exceso de espacios entre palabras
function strClean($strCadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>","",$string);
    $string = str_ireplace("</script>","",$string);
    $string = str_ireplace("<script src>","",$string);
    $string = str_ireplace("<script type=>","",$string);
    $string = str_ireplace("SELECT * FROM","",$string);
    $string = str_ireplace("DELETE FROM","",$string);
    $string = str_ireplace("INSERT INTO","",$string);
    $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string = str_ireplace("DROP TABLE","",$string);
    $string = str_ireplace("OR '1'='1","",$string);
    $string = str_ireplace('OR "1"="1"',"",$string);
    $string = str_ireplace('OR ´1´=´1´',"",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("LIKE '","",$string);
    $string = str_ireplace('LIKE "',"",$string);
    $string = str_ireplace("LIKE ´","",$string);
    $string = str_ireplace("OR 'a'='a","",$string);
    $string = str_ireplace('OR "a"="a',"",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("--","",$string);
    $string = str_ireplace("^","",$string);
    $string = str_ireplace("[","",$string);
    $string = str_ireplace("]","",$string);
    $string = str_ireplace("==","",$string);
    return $string;
}

function clear_cadena(string $cadena){
    //Reemplazamos la A y a
    $cadena = str_replace(
    array('Á', 'À', 'Â', 'Ä', 'á', 'à', 'ä', 'â', 'ª'),
    array('A', 'A', 'A', 'A', 'a', 'a', 'a', 'a', 'a'),
    $cadena
    );

    //Reemplazamos la E y e
    $cadena = str_replace(
    array('É', 'È', 'Ê', 'Ë', 'é', 'è', 'ë', 'ê'),
    array('E', 'E', 'E', 'E', 'e', 'e', 'e', 'e'),
    $cadena );

    //Reemplazamos la I y i
    $cadena = str_replace(
    array('Í', 'Ì', 'Ï', 'Î', 'í', 'ì', 'ï', 'î'),
    array('I', 'I', 'I', 'I', 'i', 'i', 'i', 'i'),
    $cadena );

    //Reemplazamos la O y o
    $cadena = str_replace(
    array('Ó', 'Ò', 'Ö', 'Ô', 'ó', 'ò', 'ö', 'ô'),
    array('O', 'O', 'O', 'O', 'o', 'o', 'o', 'o'),
    $cadena );

    //Reemplazamos la U y u
    $cadena = str_replace(
    array('Ú', 'Ù', 'Û', 'Ü', 'ú', 'ù', 'ü', 'û'),
    array('U', 'U', 'U', 'U', 'u', 'u', 'u', 'u'),
    $cadena );

    //Reemplazamos la N, n, C y c
    $cadena = str_replace(
    array('Ñ', 'ñ', 'Ç', 'ç',',','.',';',':'),
    array('N', 'n', 'C', 'c','','','',''),
    $cadena
    );
    return $cadena;
}
//Genera una contraseña de 10 caracteres
function passGenerator($length = 10)
{
    $pass = "";
    $longitudPass=$length;
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena=strlen($cadena);

    for($i=1; $i<=$longitudPass; $i++)
    {
        $pos = rand(0,$longitudCadena-1);
        $pass .= substr($cadena,$pos,1);
    }
    return $pass;
}
//Genera un token
function token()
{
    $r1 = bin2hex(random_bytes(10));
    $r2 = bin2hex(random_bytes(10));
    $r3 = bin2hex(random_bytes(10));
    $r4 = bin2hex(random_bytes(10));
    $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
    return $token;
}
//Formato para valores monetarios
function formatMoney($cantidad){
    $cantidad = number_format($cantidad,2,'.',',');
    return $cantidad;
}
    

 ?>