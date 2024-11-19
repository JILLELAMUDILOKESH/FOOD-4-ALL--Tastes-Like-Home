<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $itemName = $_POST["item-name"];
    $itemPrice = $_POST["item-price"];
    $weight = $_POST["weight"];
	$quantity = $_POST["quantity"];
    
    // File upload handling
    $targetDirectory = "images/"; // Create a directory for uploaded images
    $targetFile = $targetDirectory . basename($_FILES["item-image"]["name"]);
    
    if (move_uploaded_file($_FILES["item-image"]["tmp_name"], $targetFile)) {
        // File uploaded successfully
        // Database connection parameters
        include('connection.php');
        // Insert data into the "stock" table
        $sql = "INSERT INTO items VALUES ('$targetFile', '$itemName', '$quantity','$weight', ' $itemPrice ','0','0','0','0','0','0','0')";
		$result = mysqli_query($con, $sql);  
    } else {
        echo "Error uploading the file.";
    }
}
?>
