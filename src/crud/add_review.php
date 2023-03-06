
	<!-- JavaScript code -->
    <?php
	// get the review data from the form
	 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['customerName'];
		$rating = $_POST['rating'];
		$review = $_POST['review_text'];

        echo $_FILES['image']['tmp_name'] ;
		
			// Check if the 'image' key exists in the $_FILES array
			if (isset($_FILES['image'])) {
		  
			  // Get the name of the uploaded file
			  $file_name = $_FILES['image']['name'];
		  
			  // Get the size of the uploaded file
			  $file_size = $_FILES['image']['size'];
		  
			  // Get the temporary location of the uploaded file
			  $file_tmp = $_FILES['image']['tmp_name'];
		  
			  // Get the file extension of the uploaded file
			  $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
		  
			  // Define the allowed file types
			  $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
		  
			  // Check if the file type is allowed
			  if (in_array($file_ext, $allowed_ext)) {
		  
				// Define the upload directory and target file path
				$upload_dir = "/uploads/";
				$target_file = $upload_dir . $file_name;

	

			// Upload the file to the server
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
			} 
			else {
			echo "Sorry, there was an error uploading your file.";
			}


	  		}		
		}



	   var_dump($_FILES);
		var_dump($file_name);
		var_dump($target_file);



		include 'db.php';

		// insert the review into the database
		$sql = "INSERT INTO reviews (customerName, rating, review_text, review_image) VALUES ('$name', '$rating', '$review' ,'$target_file')";
		if ($conn->query($sql) === TRUE) {
			
			echo '<br><br>'."Your information is added successfully";
		
		} else {
			echo "Error: ". $conn-> error;
		}	
		
	  }
	  


	?>


<?php
// Wait for 2 seconds
 sleep(3);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>go back</title>
	<meta http-equiv="refresh" content="2;url=../review.php">
</head>
<body>
	<h1>Go back to the review in 3 seconds...</h1>
</body>
</html> 
