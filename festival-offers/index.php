


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500;600;700&display=swap");
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");
      .container {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      body {
        background-image: url("./media/banner-bg.jpg");
        background-size: cover;
        overflow: hidden;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      p,
      a,
      strong,
      span,
      li,
      ::placeholder,
      input,
      select,
      option,
      td {
        font-family: "Barlow", sans-serif;
      }
      .header {
          width: 100%;
      }
      .wheel {
        position: relative;
        text-align: center;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
      }
       img {
           width: 100%;
       }
      .wheel-container {
        width: 80vh;
        overflow: hidden;
        position: relative;
        height: 80vh;
        border: 10px solid #E9D659;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 1000;
        justify-content: center;
        background: conic-gradient(var(--bg-color) 0% 16.66%, #fff 16.66% 100%);
        
        box-shadow: 0px 0px 0px 20px #103E54;
      }
   

      .wheel-section {
        position: absolute;
        width: 50%;
        height: 50%;
        background-color: var(--bg-color);
        transform-origin: bottom right;
        transform: rotate(calc(36deg * var(--i)));
        /* clip-path: polygon(0 0, 60% 0, 100% 100%, 0 60%); */
        display: flex;
        clip-path: polygon(50% 0%, 0 51%, 100% 100%);
        
        justify-content: center;
        align-items: center;
        left: 0;
        top: 0;
        box-shadow: 0px 0px 50px 30px rgba(21, 12, 7, 1) inset;
        text-align: center;
        
      }
      .wheel-section:after {
          content: "";
          background-color: red;
          position: absolute;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          left: 0;
          top: 0;
          
      }
    .wheel-section img {
        width: 14%;
        position: absolute;
        left: 45%;
        top: 28%;
    }
      .wheel-section span {
        font-size: 1rem;
        color: white;
        position: relative;
        width: 70%;
        padding-left: 5rem;
        z-index: 100;
        transform: rotate(45deg);
        padding-top: 1.5rem;
        text-align: left;
        font-weight: 600;
        line-height: 0.95;
      }
      #spin-button {
        align-items: center;
        background: white;
        font-size: 1.3rem;
        font-weight: 600;
        /* margin-top: 20px; */
        padding: 10px 20px;
        background-color: #164358;
        text-align: center;
        color: #E9D659;
        border: 4px solid #E9D659;
        cursor: pointer;
        position: absolute;
        left: 50%;
        display: flex;
        text-align: center;
        width: 70px;
        justify-content: center;
        height: 70px;
        border-radius: 50%;
        top: 50%;
        z-index: 1000;
        transform: translate(-50%, -50%);
      }

      .result {
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
        overflow: hidden;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease-in-out;
      }
      
      .result-container {
          background-color: rgba(255, 255, 255, 0.8);
          width: 50%;
          height: 80vh;
          padding: 3rem;
          border-radius: 10px;
          position: relative;
      }
     .result.active {
         z-index: 1000 !important;
         opacity: 1 !important;
         transition-delay: 4s;
     }
      #user-details {
        /* display: none; */
        margin-top: 20px;
        width: 80%;
        text-align: center;
        padding: 1rem;
        overflow: hidden;
      }
      #user-details input {
        display: block;
        width: 90%;
        margin: 1rem 0;
        font-size: 1rem;
        padding: 0.6rem;
      }
      #user-details input::placeholder {
        font-size: 1rem;
      }
      .active-box {
        background-color: black;
        color: white;
        transition-delay: 4s;
        animation: winGlow 1s ease-in-out infinite;
        transition: all 0.5s ease-in-out;
      }
      .active-box span {
        color: white;
        transition: all 0.5s ease-in-out;
      }
      @keyframes winGlow {
        from {
          background-color: #164358;
          color: white !important;
        }
        to {
          background-color: white;
          color: black !important;
        }
      }
      .wheel-section:nth-child(odd) {
        background-color: #CD2027;
      }
      .wheel-section:nth-child(even) {
        background-color: #EEBE8B;
      }
         
     .wheel-section:nth-child(odd) span {
         color: #EEBE8B;
     }
         
    .wheel-section:nth-child(even) span {
         color: #CD2027;
     }



      #claim-button {
        width: 94% !important;
        background-color: #5a1e48;
        color: white;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        margin-top: 1rem;
        border: 0;
        cursor: pointer;
      }
      #user-details h3 {
        font-size: 1.6rem;
        color: #5a1e48;
        margin-top: 0;
        width: 94%;
      }
      .prize-content {
          overflow: hidden;
        color: #5a1e48;
        display: inline;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 60%;
          
      }
      #result-section {
        font-size: 2.7vw;
        /* padding: 0.1rem 0.6rem; */
        
        /*background-color: #5a1e48 !important;*/
      }
      .price-input {
          height: 0 !important;
          overflow: hidden;
          margin-bottom: -30px !important;
          display: block !important;
          padding: 0 !important;
          margin: 0 !important;
      }
      .header {
          position: fixed;
          left: 0;
          top: 0;
          width: 100%;
          display: flex;
      }
      .log-1 {
          width: 13%;
          padding: 1rem;
      }
      .log-2 {
          width: 80%;
      }
      .log-3 {
          width: 15%;
          padding: 1rem;
      }
      .spin-body {
          width: 100%;
          
      }
      .close-popuresult {
          position: absolute;
          z-index: 500;
          cursor: pointer;
          right: 4%;
          top: 4%;
          
      }
      .close-popuresult i {
          font-size: 2.5vw;
          color: #5a1e48;
          transition: all 0.3s ease-in-out;
          
      }
      .close-popuresult:hover i {
          color: black;
      }
      input[type='submit'] {
          background-color: #5a1e48;
          padding: 0.4rem 1.5rem;
          color: white;
          font-size: 1.4vw;
          border: 0;
          transition: all 0.4s ease-in-out;
          cursor: pointer;
          
      }
      input[type='submit']:hover {
          background-color: #EEBE8B;
          color: black;
      }
    </style>
  </head>
  <body>
    <section class="container">
      <!--logo starts here -->
      <header class="header">
          <!--1-->
          <div class="log-1">
              <img src="./media/pearl-logo.svg">
          </div>
          <!--2-->
          <div class="log-2">
              
          </div>
          <!--3-->
          <div class="log-3">
              <img src="./media/skd-logo.svg">
          </div>
      </header>
      
      <!--logo ends here -->
     <section class="spin-body">
          <div class="wheel">
          <div class="outer-border"></div>
        <div class="wheel-container" id="wheel">
            <!--1-->
          <div class="wheel-section" style="--i: 1; --bg-color: #ff0000">
            <img src="./media/car-parking.svg">
            <span> Discount on <br> Car Parking </span>
          </div>
          <!--2-->
          <div class="wheel-section" style="--i: 2; --bg-color: #00ff00">
              <img src="./media/home-automation.svg">
            <span>Home Automation <br> worth 1 Lakh</span>
          </div>
          <!--3-->
          <div class="wheel-section" style="--i: 3; --bg-color: #0000ff">
              <img src="./media/ac.svg">
            <span>Free ACs in all <br> Bedrooms</span>
          </div>
          <!--4-->
          <div class="wheel-section" style="--i: 4; --bg-color: #ffff00">
              <img src="./media/tv.svg">
            <span>Free 55 Inch <br>LED Television</span>
          </div>
          <!--5-->
          <div class="wheel-section" style="--i: 5; --bg-color: #ff00ff">
              <img src="./media/refrigerator.svg">
            <span>Free 250L <br> Refrigerator</span>
          </div>
          <!--6-->
          <div class="wheel-section" style="--i: 6; --bg-color: #00ff08">
              <img src="./media/gold.svg">
            <span>10 Grams <br> Gold</span>
          </div>
          <!--7-->
          <div class="wheel-section" style="--i: 7; --bg-color: #cdedb7">
              <img src="./media/interior.svg">
            <span>Interiors worth <br> 1 Lakh</span>
          </div>
          <!--8-->
          <div class="wheel-section" style="--i: 8; --bg-color: #00fff67">
              <img src="./media/mentainance.svg">
            <span>1 Year <br> Maintenance Free</span>
          </div>
          <!--9-->
          <div class="wheel-section" style="--i: 9; --bg-color: #7d9c68">
              <img src="./media/no-floor-rise.svg">
            <span>No Floor <br> Rise</span>
          </div>
          <!--10-->
          <div class="wheel-section" style="--i: 10; --bg-color: #999c97">
              
               <img src="./media/rupee.svg">
            <span>No Facing <br> Charges</span>
          </div>
          <!--11-->
        </div>
        <!-- spin button  -->
        <button id="spin-button">Spin</button>
        <!-- spin button  -->
      </div>
     </section>

      <div class="result" id="result">
         <div class="result-container">
             <div class="close-popuresult">
               <a href="./">
                <i class="bi bi-x-circle-fill"></i>
               </a>
              </div>
            <div>
                <img src="./media/congrats.gif">
            </div>
            <div class="prize-content">
                <strong class="tocken-text"></strong>
                <h2 id="result-section"></h2>
                <form action="connection.php" method="POST">
                    <input type="hidden" class="tocken-input" name="tocken">
                    <input type="hidden" class="price-input" name="price">
                    <input type="hidden" class="date" name="date">
                    <input type="submit" class="" name="submit-from" value="OK">
                </form>
            </div>
         </div>
       
      </div>
    </section>
    
    <audio id="audioElement" src="./media/spinning-reel-27903.mp3"></audio>
    
    
    <audio id="success-audio" src="./media/Claps-10-Sec.mp3"></audio>

    <script>
      const wheel = document.getElementById("wheel");
      //const result = document.getElementById("result");
      const result = document.querySelector('.result')
      const offerResult = document.getElementById("result-section");
      const userForm = document.getElementById("user-details");
      const spinButton = document.getElementById("spin-button");
      const claimButton = document.getElementById("claim-button");
      const wheelSection = document.querySelectorAll(".wheel-section");
      const priceInput = document.querySelector(".price-input");
      const audioPlay = document.querySelector('#audioElement');
      const successPlay = document.querySelector('#success-audio');
      const dateInput = document.querySelector('.date');
      const tockenInput = document.querySelector(".tocken-input");
      const tockenText = document.querySelector(".tocken-text");
      
      
      

      let spinning = false;

      // Add a click event to the spin button
      spinButton.addEventListener("click", () => {
        if (!spinning) {
          spinning = true;
          const deg = Math.floor(5000 + Math.random() * 10000); // Random rotation value
          wheel.style.transition = "all 5s ease-out";
          wheel.style.transform = `rotate(${deg}deg)`;
          audioPlay.play();
          
        
          // Simulate a delay for wheel spinning
          setTimeout(() => {
            spinning = false;
            audioPlay.pause();
            showResult();
          }, 5000);
        }
      });

      // Display the offer result and user details form
      function showResult() {
        const offers = [
          "1 Lakh off on Car Parking",
          "Home Automation worth 1 Lakh",
          "Free ACs in all Bedrooms",
          "Free 55 Inch LED Television",
          "Free 250L Refrigerator",
          "10 Grams Gold",
          "Interiors worth 1 Lakh",
          "1 Year Maintenance Free",
          "No Floor Rise",
          "No Facing Charges",
        ];
         result.classList.add('active');
         successPlay.play();
        const randomOffer = offers[Math.floor(Math.random() * offers.length)];
        offerResult.textContent = `Congratulations! 
        You Got,
        ${randomOffer}`;
        let priceInputvalue = (priceInput.value = randomOffer);
         console.log(priceInputvalue);
        let findIndexArray = offers.indexOf(randomOffer);
        console.log(findIndexArray);
        
        let findBox = wheelSection[findIndexArray];
        console.log(findBox);
        
            findBox.classList.add("active-box");
      
        // date injection 
        
        const currentDate = new Date();
        
        let dateInputValue = (dateInput.value = currentDate);
        
        console.log(dateInputValue);
        
       // result.style.display = "block";
        // userForm.style.display = "block";
        //   limitation 
        //  let locasS = localStorage.setItem("used", "true");
        
        // if(localStorage.getItem("used", "true")){
        //     alert('you used your chance');
        // }
        
        // random tocken generator starts here 
        
        // Function to generate a unique random number
            function generateUniqueRandomNumber() {
              let uniqueNumbers = JSON.parse(localStorage.getItem('uniqueNumbers')) || [];
            
              // Generate a random number
              let randomNum;
              do {
                randomNum = Math.floor(Math.random() * 1000); // Adjust this range as needed
              } while (uniqueNumbers.includes(randomNum));
            
              // Add the generated number to the uniqueNumbers array
              uniqueNumbers.push(randomNum);
            
              // Update local storage
              localStorage.setItem('uniqueNumbers', JSON.stringify(uniqueNumbers));
            
              return randomNum;
            }
            
            // Generate and display a unique random number
            const uniqueRandomNumber = generateUniqueRandomNumber();
            console.log("Tocken :", uniqueRandomNumber);
            
            tockenText.innerHTML = `YOUR COUPON CODE : SKD - ${uniqueRandomNumber}`;
            
            let tockenInputValue = (tockenInput.value = `SKD-${uniqueRandomNumber}`);
            
            //let tockenInputWithText = `SKD-${tockenInputValue}`;
            
            
            
            
        
        // randow tocken generator ends here 
       
        
      }

      // Handle claiming an offer
    //   claimButton.addEventListener("click", () => {
    //     const name = document.getElementById("name").value;
    //     const email = document.getElementById("email").value;

    //     if (name && email) {
    //       // Send the details to the server or perform any desired action
    //       alert(`Offer claimed by ${name} with email ${email}`);
    //       userForm.style.display = "none";
    //     } else {
    //     //   alert("Please enter your name and email to claim the offer.");
    //     }
    //   });
    </script>
    
    
    
    
    
    
    
    
    
    
    

  </body>
</html>
