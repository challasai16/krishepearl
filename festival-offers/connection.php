    
<!--php code starts here -->
<?php

if(isset($_POST['submit-from'])) {
    // $customerName = urlencode($_POST['name']);
    // $mobileNumber = $_POST['mobilenumber'];
    $date = $_POST['date'];
    $prize = $_POST['price'];
    $tocken = $_POST['tocken'];

// mysql database connection 

$servername = "localhost";
$username = "srikrishnaDeveloper";
$password = "leads@123";
$database = "srikrishnaDeveloper";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `festive_offers`(`TOKEN`, `PRIZE`, `DATE`, `SERVER DARE`) VALUES ('$tocken','$prize','$date', CURTIME())";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// crm integration starts here 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // API endpoint
//     $api_url = "https://portal-api.clove.build/api/tpi/website/lead";
    
//     // API key
//     $api_key = "obKvqUxJC5DiYMcGrCphNvIaNDHVd2f012vPvij7I8c=";
    
//     // Form data
//     $data = array(
//         "property" => "Krishe Pearl",
//         "name" => $_POST["name"],
//         "email" => $_POST["email"],
//         "mobileNo" =>  $_POST["mobilenumber"],
//         "source" => "website",
//         "subSource" => "", // You can set this based on your needs
//         "isOtpVerified" => false, // Set to true or false as needed
//         "sitevisitDate" => "",
//         "message" => $_POST["message"],
//         "type" => "Apartment",
//         "configuration" => "1BHK",
//         "location" => "",
//         "budget" => "5L to 10L",
//         "facing" => "East",
//         "floor" => "1",
//         "visitedProject" => "",
//         "fundingSource" => "",
//         "minSize" => "1230",
//         "maxSize" => "3250"
//     );
    
//     // Initialize cURL session
//     $ch = curl_init($api_url);
    
//     // Set cURL options
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//         "x-api-key: " . $api_key,
//         "Content-Type: application/json"
//     ));
    
//     // Execute cURL request
//     $response = curl_exec($ch);
    
//     // Check for errors
//     if (curl_errno($ch)) {
//         echo "cURL error: " . curl_error($ch);
//     }
    
//     // Close cURL session
//     curl_close($ch);
    
//     // Handle the API response as needed
//     echo $response;
// } else {
//     // Handle non-POST requests
//     echo "Invalid request method.";
// }


// crm integration ends here 


 header('location: .');
    
    
}

?>



<!--php code ends here -->