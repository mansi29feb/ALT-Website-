<?php



$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
// If form is submitted 
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file']) || isset($_POST['g-recaptcha-response'])){ 
    // Get the submitted form data 
    $name = test_input($_POST['name']); 
    $email = test_input($_POST['email']); 
     

   if(!empty($_POST['g-recaptcha-response'])){
    $captchaStatus = 1;
        //your site secret key
        $secret = '6Lc_z_wUAAAAAIlMFI3MEJj_6-QeScM3UiX7v5J4';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
            //captacha validated successfully.
            $response['message'] = 'captacha validated successfully.'; }
        else{
            $captchaStatus = 0;
            $response['message'] = 'Robot verification failed, please try again.';}
        }

    else{
        $captchaStatus = 0;
         $response['message'] = 'invalid captcha';}

    // Check whether submitted data is not empty 
   
            $uploadStatus = 0; 
           
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('pdf'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                        $uploadStatus = 1;
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1 && $captchaStatus == 1){ 
                include_once("db_connect.php"); 
                $insert = $conn->query("INSERT INTO career_form (name, email, filename, time) VALUES ('".$name."','".$email."','".$uploadedFile."', NOW())"); 
                 
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully! We will get back to you shortly!!'; 
                } 
    
            }
        } 
    
 
// Return response 
echo json_encode($response);


?>