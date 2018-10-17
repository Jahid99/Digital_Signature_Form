<?php 
  session_start();
if(isset($_SESSION['image'])){
  $image = 'doc_signs/'.$_SESSION['image'].'.png';
}
    $permited  = array('pdf', 'doc', 'docx');
    $file_name = $_FILES['mycv']['name'];
    $file_size = $_FILES['mycv']['size'];
    $file_temp = $_FILES['mycv']['tmp_name'];

   // echo $file_name;

    $div = explode('.', $file_name);
    $file_ext = strtolower(end($div));
    $unique_image = 'CV.'.$file_ext;
    $uploaded_image = "upload/".$unique_image;

    if (in_array($file_ext, $permited) === false) {
                 echo "<span class='error'>You can upload only:-".implode(', ', 

                $permited)."</span>";


                 exit;
                }

    move_uploaded_file($file_temp, $uploaded_image);



    $f_name = $_POST["f_name"];

    $l_name = $_POST["l_name"];

    $address = $_POST["address"];

    $city = $_POST["city"];

    $state = $_POST["state"];

    $zip = $_POST["zip"];

    $home_phone = $_POST["home_phone"];

    $cell_phone = $_POST["cell_phone"];

    $alternative_number = $_POST["alternative_number"];

    $gender = $_POST["gender"];

    $dob = $_POST["dob"];

    $email = $_POST["email"];

    if(isset($_POST['are_you_legally_yes'])){
         $are_you_legally_yes = $_POST['are_you_legally_yes'];
      }else{
         $are_you_legally_yes = 2;
    }

    if(isset($_POST['are_you_legally_no'])){
         $are_you_legally_no = $_POST['are_you_legally_no'];
      }else{
         $are_you_legally_no = 2;
    }

    if(isset($_POST['are_u_veteran_yes'])){
         $are_u_veteran_yes = $_POST['are_u_veteran_yes'];
      }else{
         $are_u_veteran_yes = 2;
    }

    if(isset($_POST['are_u_veteran_no'])){
         $are_u_veteran_no = $_POST['are_u_veteran_no'];
      }else{
         $are_u_veteran_no = 2;
    }

    if(isset($_POST['if_seleted_for_yes'])){
         $if_seleted_for_yes = $_POST['if_seleted_for_yes'];
      }else{
         $if_seleted_for_yes = 2;
    }

    if(isset($_POST['if_seleted_for_no'])){
         $if_seleted_for_no = $_POST['if_seleted_for_no'];
      }else{
         $if_seleted_for_no = 2;
    }

    if(isset($_POST['are_u_willing_yes'])){
         $are_u_willing_yes = $_POST['are_u_willing_yes'];
      }else{
         $are_u_willing_yes = 2;
    }

    if(isset($_POST['are_u_willing_no'])){
         $are_u_willing_no = $_POST['are_u_willing_no'];
      }else{
         $are_u_willing_no = 2;
    }

    $what_experience = $_POST["what_experience"];

    $position = $_POST["position"];

    $desired_location = $_POST["desired_location"];

    $available_start_date = $_POST["available_start_date"];

    if(isset($_POST['full_time'])){
         $full_time = $_POST['full_time'];
      }else{
         $full_time = 2;
    }

    if(isset($_POST['part_time'])){
         $part_time = $_POST['part_time'];
      }else{
         $part_time = 2;
    }

    if(isset($_POST['seasonal'])){
         $seasonal = $_POST['seasonal'];
      }else{
         $seasonal = 2;
    }

    $school_name1 = $_POST["school_name1"];
    $school_name2 = $_POST["school_name2"];
    $school_name3 = $_POST["school_name3"];
    $school_name4 = $_POST["school_name4"];
    $school_name5 = $_POST["school_name5"];

    $location1 = $_POST["location1"];
    $location2 = $_POST["location2"];
    $location3 = $_POST["location3"];
    $location4 = $_POST["location4"];
    $location5 = $_POST["location5"];

    $years_attended1 = $_POST["years_attended1"];
    $years_attended2 = $_POST["years_attended2"];
    $years_attended3 = $_POST["years_attended3"];
    $years_attended4 = $_POST["years_attended4"];
    $years_attended5 = $_POST["years_attended5"];

    $reference_name1 = $_POST["reference_name1"];
    $reference_name2 = $_POST["reference_name2"];
    $reference_name3 = $_POST["reference_name3"];
    $reference_name4 = $_POST["reference_name4"];

    $reference_title1 = $_POST["reference_title1"];
    $reference_title2 = $_POST["reference_title2"];
    $reference_title3 = $_POST["reference_title3"];
    $reference_title4 = $_POST["reference_title4"];

    $reference_company1 = $_POST["reference_company1"];
    $reference_company2 = $_POST["reference_company2"];
    $reference_company3 = $_POST["reference_company3"];
    $reference_company4 = $_POST["reference_company4"];

    if(isset($_POST['m'])){
         $m = $_POST['m'];
      }else{
         $m = 2;
    }

    if(isset($_POST['tu'])){
         $tu = $_POST['tu'];
      }else{
         $tu = 2;
    }


    if(isset($_POST['w'])){
         $w = $_POST['w'];
      }else{
         $w = 2;
    }

    if(isset($_POST['th'])){
         $th = $_POST['th'];
      }else{
         $th = 2;
    }


    if(isset($_POST['f'])){
         $f = $_POST['f'];
      }else{
         $f = 2;
    }


    if(isset($_POST['sa'])){
         $sa = $_POST['sa'];
      }else{
         $sa = 2;
    }

    if(isset($_POST['su'])){
         $su = $_POST['su'];
      }else{
         $su = 2;
    }

    $employer1_name = $_POST["employer1_name"];
    $employer1_title = $_POST["employer1_title"];
    $employer1_date = $_POST["employer1_date"];
    $employer1_workphone = $_POST["employer1_workphone"];
    $employer1_starting_payrate = $_POST["employer1_starting_payrate"];
    $employer1_ending_payrate = $_POST["employer1_ending_payrate"];
    $employer1_address = $_POST["employer1_address"];
    $employer1_city = $_POST["employer1_city"];
    $employer1_state = $_POST["employer1_state"];
    $employer1_zip = $_POST["employer1_zip"];

    $employer2_name = $_POST["employer2_name"];
    $employer2_job_title = $_POST["employer2_job_title"];
    $employer2_dates = $_POST["employer2_dates"];
    $employer2_work_phone = $_POST["employer2_work_phone"];
    $employer2_starting_pay_rate = $_POST["employer2_starting_pay_rate"];
    $employer2_ending_pay_rate = $_POST["employer2_ending_pay_rate"];
    $employer2_address = $_POST["employer2_address"];
    $employer2_city = $_POST["employer2_city"];
    $employer2_state = $_POST["employer2_state"];
    $employer2_zip = $_POST["employer2_zip"];

    $employer3_name = $_POST["employer3_name"];
    $employer3_job_title = $_POST["employer3_job_title"];
    $employer3_dates_employed = $_POST["employer3_dates_employed"];
    $employer3_work_phone = $_POST["employer3_work_phone"];
    $employer3_starting_pay_rate = $_POST["employer3_starting_pay_rate"];
    $employer3_ending_pay_rate = $_POST["employer3_ending_pay_rate"];
    $employer3_address = $_POST["employer3_address"];
    $employer3_city = $_POST["employer3_city"];
    $employer3_state = $_POST["employer3_state"];
    $employer3_zip = $_POST["employer3_zip"];

    $employer4_name = $_POST["employer4_name"];
    $employer4_job_title = $_POST["employer4_job_title"];
    $employer4_dates_employed = $_POST["employer4_dates_employed"];
    $employer4_work_phone = $_POST["employer4_work_phone"];
    $employer4_starting_pay_rate = $_POST["employer4_starting_pay_rate"];
    $employer4_ending_pay_rate = $_POST["employer4_ending_pay_rate"];
    $employer4_address = $_POST["employer4_address"];
    $employer4_city = $_POST["employer4_city"];
    $employer4_state = $_POST["employer4_state"];
    $employer4_zip = $_POST["employer4_zip"];

    $employer5_name = $_POST["employer5_name"];
    $employer5_job_title = $_POST["employer5_job_title"];
    $employer5_dates_employed = $_POST["employer5_dates_employed"];
    $employer5_work_phone = $_POST["employer5_work_phone"];
    $employer5_starting_pay_rate = $_POST["employer5_starting_pay_rate"];
    $employer5_ending_pay_rate = $_POST["employer5_ending_pay_rate"];
    $employer5_address = $_POST["employer5_address"];
    $employer5_city = $_POST["employer5_city"];
    $employer5_state = $_POST["employer5_state"];
    $employer5_zip = $_POST["employer5_zip"];

    $myname = $_POST["myname"];
    $mydate = $_POST["mydate"];

        if(isset($_POST['i_certify'])){
         $i_certify = $_POST['i_certify'];
      }else{
         $i_certify = 2;
    }
    
    


    // Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();
    $user_name = 'Ross Geller';
    $total_amount_due = 2270.00;

    ob_start();
    require('mypage.php');
    $html = ob_get_contents();
    ob_get_clean();
    $dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
    $dompdf->render();

// Output the generated PDF to Browser
 //   $dompdf->stream();

     $output = $dompdf->output();
    file_put_contents('Form.pdf', $output);


 ?>


<?php
    
   use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



//Load composer's autoloader
require 'vendor/autoload.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
  
   // $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'globalhomehealthcare001@gmail.com';                 // SMTP username
    $mail->Password = 'quxofr3p+u0=ch8d@tU8';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('globalhomehealthcare001@gmail.com');
    $mail->addAddress('globalhomehealthcare001@gmail.com');       // Add a recipient

    $files = glob('upload/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    $file = explode("/",$file)[1];
}

    $mail->addAttachment('upload/'.$file);         // Add attachments
    $mail->addAttachment('Form.pdf');

    $body = '<center><h2>Applicant Details</h2></center>';

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome!';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);
    

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

$files = glob('upload/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}


?>

 <h2>Request Sent Successfully</h2>