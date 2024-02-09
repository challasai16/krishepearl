<?php
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
    // echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--head starts here -->
    <?php
      include 'head.php'
    ?>
    <!--heade ends here -->
    <title>LEADS</title>
    <!--<link rel="stylesheet" href="../assets/css/styles.css">-->
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500;600;700&display=swap");
      .addCategory {
          
          padding: 2rem;
      
          
      }
      h1,h2,h3,h4,h5,h6,p,a,strong,span,li,::placeholder,tr, td,
      input,
      select,
      option,
      td {
        font-family: "Barlow", sans-serif;
      }
        table{
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 50px;
            width: 100%;
            text-align: center;
            padding: 04px;
         }
         thead {
             background-color: black;
             color: white;
             padding: 1rem;
         }
         thead tr {
             font-size: 1.2rem;
         }
        #startfilter,  #endfilter{
            font-size: 1rem;
            padding: 0.2rem;
        }
         table td{
            border: 1px solid black;
            padding: 04px;
         }
        
        tbody tr td {
            font-size: 0.98rem;
            padding: 0.3rem 1rem;
        }
        
        a{
            padding: 10px;
            text-decoration: none;
            color: black;
            gap: 10px;
         }
         a:hover,.active{
            color: Orange;
            font-weight: bolder;
         }
         .filter{
             margin:50px 0;
             margin-top: 1rem;
         }
         button{
             /*margin: 50px auto;*/
         }
         #date-submit {
             background-color: var(--orange-color);
             color: white;
             font-size: 1rem;
             padding: 0.4rem 1rem;
             border: 0;
             margin-left: 2rem;
         }
         #btnExport {
             background-color: var(--orange-color);
             color: white;
             font-size: 1rem;
             padding: 0.4rem 1.5rem;
             border: 0;
             margin: 3rem 0;
         }
         .lead-access-manu {
             z-index: -1 !important;
             display: none !important;
         }
        .lead-access {
            width: 100%;
            height: 100vh;
            top: 0;
            
            left: 0;
            position: fixed;
            background-color: #fff;
            z-index: 10000;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }
        .lead-access.active {
            opacity: 0;
            z-index: -1;
            transform: scale(0);
        }
        .lead-access-container {
            width: 40vw;
            margin: 0 auto;
            box-shadow: 0px 0px 30px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem 3rem;
            border-radius: 30px;
            
        }
        .access-logo {
            text-align: center;
            border-bottom: 1px solid rgb(220, 220, 220);
            padding-bottom: 1.5rem;
            margin-bottom: 3rem;
        }
        .lead-access-container img {
            width: 20%;
            text-align: center;
            box-shadow: 0px 0px 30px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 1rem;
        }
        .lead-access-container input {
            padding:  1rem;
            display: block;
            width: 100%;
            border-radius: 0;
            font-size: clamp(1rem, 1.5vw, 1.1rem);
            margin: 2rem 0;
            border: 0;
            background-color: #f2f2f2;
            border-radius: 6px;
        }
        .lead-access-container input.active {
            border: 1px solid red;
        }
        .lead-access-container button {
            width: 100%;
            background-color: black;
            margin-top: 0.6rem;
            cursor: pointer;
            color: white;
            padding: 1rem;
            border: 0;
            font-size: clamp(0.9rem, 0.9vw, 1.1rem);
            transition: all 0.3s ease;
            border-radius: 6px;
        }
        .lead-access-container button:hover {
            background-color: var(--orange-color);
            color: white;
        }
        .lead-access-container p {
            padding: 1rem 0;
            color: red;
            text-align: center;
        }
        #date-submit, #btnExport {
            background-color: black;
            font-size: 1rem;
            color: white;
            padding: 0.3rem 1rem;
            cursor: pointer;
        }
        .clicks-count {
            font-size: 1.4rem;
            padding: 0.3rem 1rem;
            border-bottom: 4px solid Orange;
            
        }
        a {
            cursor: pointer;
        }
        .page-heading {
            text-align: center;
            font-size: 2rem;
            border-bottom: 1px solid black;
            padding-bottom: 1rem;
        }
        /* leads page css end here  */
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section class="lead-access" id="popup">
    <div class="lead-access-container">
        <div class="access-logo">
          <img src="./media/pearl-logo.svg" alt="">
        </div>
        <input type="text" placeholder="Username" class="access-username">
        <input type="text" placeholder="password" class="access-password">
        <button class="access-btn" id="closePopup">GET ACCESS</button>
        <p class="error-access"></p>
    </div>
</section>
    <?php
      include "header.php";
    ?>
    
    <h1 class="page-heading">FESTIVAL OFFERS PRICES DASHBOAD</h1>
    <div class="addCategory">

  
        
        <!--<form action="leadview.php">-->
        <!--    <label for="filter">Date:</label>-->
        <!--    <input type="date" id="filter" name="filter">-->
        <!--    <input type="submit">-->
        <!-- </form>-->
        
        
         <form action="leads.php" class="filter" method="GET">
            <label for="filter"> From : &nbsp </label>
            <input type="date" id="startfilter" name="startfilter">
            <label for="filter"> &nbsp To : &nbsp </label>
            <input type="date" id="endfilter" name="endfilter">
            <input type="submit" id="date-submit">
          <a class="logout">LOG OUT</a>
         </form>
        
         
        <?php
            
            
            // echo $_GET['startfilter'];
            
            
            
            if(!empty($_GET['startfilter'] && $_GET['endfilter'])){
                
                $start_date = date('Y-m-d', strtotime($_GET['startfilter']));
                
                echo "Start Date:  " . $start_date . "</br></br>" ;
                 $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
                echo "End Date:  " . $end_date. "</br></br>";
            }
            
            // if(!empty($_GET['endfilter'])){
                
             
            //  $end_date = date('Y-m-d', strtotime($_GET['endfilter']));
            //  echo "End Date:  " . $end_date. "</br></br>";
            // }
        ?>
      
        <table id="headerTable">
            <?php
            
              $sql = "SELECT COUNT(*) AS row_count FROM `festive_offers`";
              
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $rowCount = $row['row_count'];
                } else {
                    $rowCount = 0;
                }
            ?>
            <strong class="clicks-count">
               No.of clicks:  <?php echo $rowCount; ?>
            </strong>
            
            <thead>
                <tr>
                    <!--<td>S.No</td>-->
                    <!--<td>Name</td>-->
                    <!--<td>Email</td>-->
                    <!--<td>Mobile Number</td>-->
                    <td>Coupon Code</td>
                    <td>Prize</td>
                    <td>Spin Wheel Date</td>
                    <td>Server Date</td>
                </tr>
            </thead>
            <tbody>
                <?php
                        if(!empty($_GET['startfilter'] && $_GET['endfilter'])){
                             $sql = "SELECT * FROM `festive_offers` WHERE Date BETWEEN '$start_date' and '$end_date'";
                        }else {
                            $sql = "SELECT * FROM `festive_offers`";
                            
                            // echo "Please Select the Date";
                        }
                       
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                          // output data of each row
                          
                          while($row = $result->fetch_assoc()) {
                                    ?>
                        <tr>
                            <!--<td><?= $row['ID']?></td>-->
                            <td><?= $row['TOKEN']?></td>
                            <td><?= $row['PRIZE']?></td>
                            <td><?= $row['DATE']?></td>
                            <td><?= $row['SERVER DARE']?></td>
                        </tr>
                    <?php
                        }
                        
                    }else{
                        echo "NO RECORDS FOUND";
                        
                    }
                    
                    

                        ?>
            </tbody>
        </table>
        <iframe id="txtArea1" style="display:none"></iframe>
        <button id="btnExport" onclick="fnExcelReport();"> DOWNLOAD LEADS </button>

    </div>
        
    
    <!--footer starts here -->
       <?php
          include 'footer.php';
       ?>
    <!--footer ends here -->
    <script>
    function fnExcelReport()
        {
            var tab_text="<table border='none'><tr bgcolor='#87AFC6'>";
            var textRange; var j=0;
            tab = document.getElementById('headerTable'); // id of table
        
            for(j = 0 ; j < tab.rows.length ; j++) 
            {     
                tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                //tab_text=tab_text+"</tr>";
            }
        
            tab_text=tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params
        
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE "); 
        
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
                txtArea1.document.open("txt/html","replace");
                txtArea1.document.write(tab_text);
                txtArea1.document.close();
                txtArea1.focus(); 
                sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
            }  
            else                 //other browser not tested on IE 11
                sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  
        
            return (sa);
        }
</script>

<script>
    // access starts here 
let input = document.querySelectorAll('.lead-access input')
let accessBtn = document.querySelector('.access-btn');
let username = document.querySelector('.access-username');
let password = document.querySelector('.access-password');
let errorMsg = document.querySelector('.error-access');
let accessMain = document.querySelector('.lead-access');

// accessBtn.addEventListener('click', ()=> {
//     if(username.value=="skd" && password.value=="skd@123") {
//         accessMain.classList.add('active');
//     }else {
//         errorMsg.innerHTML  = "Please check once Username or Password are not matched";
//         input.forEach(inputs => {
//             inputs.classList.add('active');
//         })
//     }
// });


// document.addEventListener("DOMContentLoaded", function() {
//     // Check if the popup should be displayed
//     if (!localStorage.getItem("popupClosed")) {
//         document.getElementById("popup").style.display = "block";
//     }

//     // Add a click event listener to the "GET ACCESS" button
//     document.getElementById("closePopup").addEventListener("click", function() {
//         if(username.value=="skd" && password.value=="skd@123") {
//         // Hide the popup
//         document.getElementById("popup").style.display = "none";

//         // Store a flag in localStorage to prevent the popup from showing again during this session
//         localStorage.setItem("popupClosed", "true");
//       }else {
//           errorMsg.innerHTML  = "Please check once Username or Password are not matched";
//           localStorage.setItem("popupClosed", "false");
//       }
//     });

//     // To display the popup again after the session has ended, you can clear the localStorage
//     // Uncomment the following line if you want to clear localStorage on each page load
//     //localStorage.removeItem("popupClosed");
// });



accessMain.addEventListener('click', ()=> {
    if(username.value=="skd" && password.value=="skd@123") {
         // Hide the popup
         document.getElementById("popup").classList.add('lead-access-manu');

        // Store a flag in localStorage to prevent the popup from showing again during this session
        let localS = localStorage.setItem("popupClosed", "true");
       }else {
          errorMsg.innerHTML  = "Please check once Username or Password are not matched";
         
    }
  
});
 if(localStorage.getItem("popupClosed")) {
        document.getElementById("popup").classList.add('lead-access-manu');
    }else {
    //   document.getElementById("popup").style.display = "block";
    }
    
    
let logout = document.querySelector('.logout');
logout.addEventListener('click', ()=> {
    localStorage.clear("popupClosed", "true");
    window.location.href = "./leads.php";
   
});
</script>
</body>
</html>