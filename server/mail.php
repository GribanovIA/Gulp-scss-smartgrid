<?php
//Задержка для тестирования спинера
// sleep(1);
require('./vendor/autoload.php');
//Если делаем запрос через axios
$_POST = json_decode(file_get_contents('php://input'), true);

use Rakit\Validation\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit'])){
    // <========== 5) Считываем данные из массива $_POST ==========>
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $formName = $_POST['formName'];


  // <========== 7) Определяем сообщение при ошибке валидации ==========>
  //Устанавливаем сообщения об ошибках, т.к. умолчанию они на английском
  $validator = new Validator([
    'alpha' => 'Поле :attribute должно содержать только буквы',
    'numeric' => 'Поле :attribute должно содержать только цифры',
    'required' => 'Поле :attribute обязательно для заполнения',
    'min' => 'Поле :attribute должно содержать не менее :value символов'
  ]);
  // <========== 6) Определяем какие поля необходимо валидировать ==========>
  //Имена полей должны совпадать с именами полей в автоглобальном массиве $POST
  $validation = $validator->make($_POST, [
    'name'                  => 'required|alpha',
    'email'                 => 'required',
    'phone'                 => 'required|numeric|min:10',
  ]);

  // <========== 8) Создаем для полей формы рускоязычный псевдоним ==========>
  //Создаем псевдоним для :attribute, иначе он берет значение из имени поля, а оно у нас на английском.
  
  $validation->setAliases([
    'name' => 'Имя',
    'email' => 'Email',
    'phone' => 'Телефон'
  ]);

  $validation->validate();

  if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();
    $response = array(
      'status' => 'ERROR',
      'messages' => $errors->all()
    );
    echo json_encode($response);
    exit;
  } else {
    //<========== 9) Отправляем письмо на почту ==========>
    try {
      $mail = new PHPMailer(true);
      $mail->CharSet = "UTF-8";
      $mail->setLanguage('ru', 'phpmailer/language/');
      $mail->IsHTML(true);

      //От кого письмо
      $mail->setFrom('site@my-blog.space','Сайт');

      //Кому отправить
      $mail->addAddress('gribanovivanjob@gmail.com');
      
      //Тема письма
      $mail->Subject = "Сообщение с сайта";

      
      $body = "
        <!doctype html>
        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
          <head>
            <title>
              
            </title>
            <!--[if !mso]><!-->
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <!--<![endif]-->
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <style type='text/css'>
              #outlook a { padding:0; }
              body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
              table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
              img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
              p { display:block;margin:13px 0; }
            </style>
            <!--[if mso]>
            <xml>
            <o:OfficeDocumentSettings>
              <o:AllowPNG/>
              <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
            <!--[if lte mso 11]>
            <style type='text/css'>
              .mj-outlook-group-fix { width:100% !important; }
            </style>
            <![endif]-->
            
          <!--[if !mso]><!-->
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
            <style type='text/css'>
              @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500,700);
            @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
            </style>
          <!--<![endif]-->

        
            
          <style type='text/css'>
            @media only screen and (min-width:480px) {
              .mj-column-per-100 { width:100% !important; max-width: 100%; }
            }
          </style>
        
      
            <style type='text/css'>
            
            

        @media only screen and (max-width:480px) {
          table.mj-full-width-mobile { width: 100% !important; }
          td.mj-full-width-mobile { width: auto !important; }
        }
      
            </style>
            
            
          </head>
          <body style='word-spacing:normal;background-color:#e0e0e0;'>
            
            
          <div
            style='background-color:#e0e0e0;'
          >
            
          <div
            style='height:60px;line-height:60px;'
          >&#8202;</div>
        
          
          <!--[if mso | IE]><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
        
          
          <div  style='background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:10px 10px 0px 0px;max-width:600px;'>
            
            <table
              align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#ffffff;background-color:#ffffff;width:100%;border-radius:10px 10px 0px 0px;'
            >
              <tbody>
                <tr>
                  <td
                    style='direction:ltr;font-size:0px;padding:20px 0;padding-top:50px;text-align:center;'
                  >
                    <!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' ><![endif]-->
                
          <div
            class='mj-column-per-100 mj-outlook-group-fix' style='font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'
          >
            
          <table
            border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'
          >
            <tbody>
              
                  <tr>
                    <td
                      align='left' style='font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;'
                    >
                      
          <table
            border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'
          >
            <tbody>
              <tr>
                <td  style='width:150px;'>
                  
            <a
              href='http://www.psk-met.ru/' target='_blank'
            >
              
          <img
            height='auto' src='http://www.psk-met.ru/img/logo_test1.jpg' style='border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;' width='150'
          />
        
            </a>
          
                </td>
              </tr>
            </tbody>
          </table>
        
                    </td>
                  </tr>
                
            </tbody>
          </table>
        
          </div>
        
              <!--[if mso | IE]></td></tr></table><![endif]-->
                  </td>
                </tr>
              </tbody>
            </table>
            
          </div>
        
          
          <!--[if mso | IE]></td></tr></table><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
        
          
          <div  style='background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;'>
            
            <table
              align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#ffffff;background-color:#ffffff;width:100%;'
            >
              <tbody>
                <tr>
                  <td
                    style='direction:ltr;font-size:0px;padding:0;text-align:center;'
                  >
                    <!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' ><![endif]-->
                
          <div
            class='mj-column-per-100 mj-outlook-group-fix' style='font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'
          >
            
          <table
            border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'
          >
            <tbody>
              
                  <tr>
                    <td
                      align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'
                    >
                      
          <table
            border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'
          >
            <tbody>
              <tr>
                <td  style='width:180px;'>
                  
          <img
            height='auto' src='https://www.freepnglogos.com/uploads/logo-gmail-png/logo-gmail-png-gmail-icon-download-png-and-vector-1.png' style='border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;' width='180'
          />
        
                </td>
              </tr>
            </tbody>
          </table>
        
                    </td>
                  </tr>
                
                  <tr>
                    <td
                      align='center' style='font-size:0px;padding:10px 25px;padding-top:0px;word-break:break-word;'
                    >
                      
          <div
            style='font-family:Roboto;font-size:22px;font-weight:500;line-height:1;text-align:center;color:#000000;'
          >{$formName}</div>
        
                    </td>
                  </tr>
                
            </tbody>
          </table>
        
          </div>
        
              <!--[if mso | IE]></td></tr></table><![endif]-->
                  </td>
                </tr>
              </tbody>
            </table>
            
          </div>
        
          
          <!--[if mso | IE]></td></tr></table><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
        
          
          <div  style='background:#ffffff;background-color:#ffffff;margin:0px auto;border-radius:0px 0px 10px 10px;max-width:600px;'>
            
            <table
              align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background:#ffffff;background-color:#ffffff;width:100%;border-radius:0px 0px 10px 10px;'
            >
              <tbody>
                <tr>
                  <td
                    style='direction:ltr;font-size:0px;padding:20px 0;padding-bottom:150px;padding-top:50px;text-align:center;'
                  >
                    <!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' ><![endif]-->
                
          <div
            class='mj-column-per-100 mj-outlook-group-fix' style='font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'
          >
            
          <table
            border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'
          >
            <tbody>
              
                  <tr>
                    <td
                      align='left' style='font-size:0px;padding:10px 25px;word-break:break-word;'
                    >
                      
          <table
            cellpadding='0' cellspacing='0' width='100%' border='0' style='color:#000000;font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;border:none;'
          >
            <tr style='height: 35px;'>
                <td style='width: 120px;'>Имя клиента:</td>
                <td>{$name}</td>
              </tr>
              <tr style='height: 35px;'>
                <td style='width: 120px;'>Телефон:</td>
                <td>{$phone}</td>
              </tr>
              <tr style='height: 35px;'>
                <td style='width: 120px;'>Email:</td>
                <td>{$email}</td>
              </tr>
          </table>
        
                    </td>
                  </tr>
                
            </tbody>
          </table>
        
          </div>
        
              <!--[if mso | IE]></td></tr></table><![endif]-->
                  </td>
                </tr>
              </tbody>
            </table>
            
          </div>
        
          
          <!--[if mso | IE]></td></tr></table><![endif]-->
        
        
          <div
            style='height:120px;line-height:120px;'
          >&#8202;</div>
        
          </div>
        
          </body>
        </html>
      ";

      $mail->Body = $body;

      $mail->send();

      //<=== 10) Отправляем ответ на клиент об успешной отправке письма ===>
      $response = array(
      'status' => 'SUCCESS'
    );
    echo json_encode($response);
    } catch(Exception $e) {
      $response = array(
        'status' => 'ERROR',
        'messages' => array("Сообщение не может быть отправлено. Ошибка: {$mail->ErrorInfo}")
      );
      echo json_encode($response);
    }
  }
  exit;
}else{
  $response = array(
    'status' => 'ERROR',
    'messages' => array('Вы не отправили форму')
  );
  echo json_encode($response);
  exit;
}


?>