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
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file'])){ 
    // Get the submitted form data 
    $name = test_input($_POST['name']); 
    $email = test_input($_POST['email']); 
     
    

    // Check whether submitted data is not empty 
   
            $uploadStatus = 1; 
             
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
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only PDF files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                include_once("db_connect.php"); 

                // $sql = "select * from `career_form` where name='$name' AND email='$email'";
                // // Insert form data in the database 
                // $result = mysqli_query($conn, $sql);

				// if (mysqli_num_rows($result) == 1) {
                //     mysqli_query($conn, "delete from `career_form` where name='$name' AND email='$email'");
                //     $insert1 = $conn->mysqli_query("INSERT INTO career_form (name, email, filename, time) VALUES ('".$name."','".$email."','".$uploadedFile."', NOW())"); 
				// } 
                // else
                $insert = $conn->query("INSERT INTO career_form (name, email, filename, time) VALUES ('".$name."','".$email."','".$uploadedFile."', NOW())"); 
                 
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully! We will get back to you shortly!!'; 
                } 
                // else{
                //     $response['status'] = 1; 
                //     $response['message'] = 'Your Resume has been updated successfully! We will get back to you shortly!!'; 
                // }
            } 
        } 
    
 
// Return response 
echo json_encode($response);


?>