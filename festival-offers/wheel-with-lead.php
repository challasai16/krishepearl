


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500;600;700&display=swap");
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
        background-repeat: no-repeat;
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
          width: 10%;
      }
      .wheel {
        position: relative;
        text-align: center;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
       img {
           width: 100%;
       }
      .wheel-container {
        width: 400px;
        overflow: hidden;
        position: relative;
        height: 400px;
        border: 5px solid #333;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: conic-gradient(var(--bg-color) 0% 16.66%, #fff 16.66% 100%);
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
        text-align: center;
      }

      .wheel-section span {
        font-size: 1rem;
        color: white;
        position: relative;
        width: 70%;
        padding-left: 2rem;
        z-index: 100;
        transform: rotate(45deg);
      }
      #spin-button {
        align-items: center;
        background: white;
        font-size: 1.4rem;
        /* margin-top: 20px; */
        padding: 10px 20px;
        background-color: white;
        text-align: center;
        color: black;
        border: none;
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
        /* display: none; */
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 50%;
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
        transition-delay: 5s;
        animation: winGlow 1s ease-in-out infinite;
        transition: all 0.5s ease-in-out;
      }
      .active-box span {
        color: white;
        transition: all 0.5s ease-in-out;
      }
      @keyframes winGlow {
        from {
          background-color: black;
        }
        to {
          background-color: orange;
        }
      }
      .wheel-section:nth-child(even) {
        background-color: #5a1e48;
      }
      .wheel-section:nth-child(odd) {
        background-color: rgba(246, 161, 36, 255);
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
      #result-section {
        font-size: 1.6rem;
        /* padding: 0.1rem 0.6rem; */
        overflow: hidden;
        color: white;
        display: inline;
        width: 94%;
        background-color: #5a1e48 !important;
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
      }
    </style>
  </head>
  <body>
    <section class="container">
      <!--logo starts here -->
      <header class="header">
          <img src="./media/festive-logo.svg">
      </header>
      
      <!--logo ends here -->
      <div class="wheel">
        <div class="wheel-container" id="wheel">
          <div class="wheel-section" style="--i: 1; --bg-color: #ff0000">
            <span> 1 Lakh off on Car Parking</span>
          </div>
          <div class="wheel-section" style="--i: 2; --bg-color: #00ff00">
            <span>Home Automation worth 1 Lakh</span>
          </div>
          <div class="wheel-section" style="--i: 3; --bg-color: #0000ff">
            <span>Free ACs in all Bedrooms</span>
          </div>
          <div class="wheel-section" style="--i: 4; --bg-color: #ffff00">
            <span>Free 55 Inch LED Television</span>
          </div>
          <div class="wheel-section" style="--i: 5; --bg-color: #ff00ff">
            <span>Free 250L Refrigerator</span>
          </div>
          <div class="wheel-section" style="--i: 6; --bg-color: #00ff08">
            <span>10 Grams Gold</span>
          </div>
          <div class="wheel-section" style="--i: 7; --bg-color: #cdedb7">
            <span>Interiors worth 1 Lakh</span>
          </div>
          <div class="wheel-section" style="--i: 8; --bg-color: #00fff67">
            <span>1 Year Maintenance Free</span>
          </div>
          <div class="wheel-section" style="--i: 9; --bg-color: #7d9c68">
            <span>No Facing Charges</span>
          </div>
          <div class="wheel-section" style="--i: 10; --bg-color: #999c97">
            <span>No Floor Rise</span>
          </div>
        </div>
        <!-- spin button  -->
        <button id="spin-button">Spin</button>
        <!-- spin button  -->
      </div>

      <div class="result" id="result">
        <h2 id="result-section"></h2>
        <div id="user-details">
          <h3>Enter Your Details to Claim</h3>
          <form action="connection.php" method="POST">
            <input type="hidden" name="price" class="price-input" />
            <input type="text" name="name" id="name" required placeholder="Your Name" />
            <input type="tel" name="mobilenumber" required placeholder="Your Mobile Number" />
            <input type="email" name="email" id="email" required placeholder="Your Email" />
            <input type="submit" name="submit-from" id="claim-button" value="CLAIM YOUR OFFER" />
          </form>
        </div>
      </div>
    </section>
    
    <audio id="audioElement" src="./media/spinning-reel-27903.mp3"></audio>

    <script>
      const wheel = document.getElementById("wheel");
      const result = document.getElementById("result");
      const offerResult = document.getElementById("result-section");
      const userForm = document.getElementById("user-details");
      const spinButton = document.getElementById("spin-button");
      const claimButton = document.getElementById("claim-button");
      const wheelSection = document.querySelectorAll(".wheel-section");
      const priceInput = document.querySelector(".price-input");
      const audioPlay = document.querySelector('#audioElement')

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
        const randomOffer = offers[Math.floor(Math.random() * offers.length)];
        offerResult.textContent = `Congratulations! 
        You Got,  ${randomOffer}`;
        let priceInputvalue = (priceInput.value = randomOffer);
        console.log(priceInputvalue);
        let findIndexArray = offers.indexOf(randomOffer);
        console.log(findIndexArray);
        
        let findBox = wheelSection[findIndexArray];
        console.log(findBox);
        
       
            findBox.classList.add("active-box");
      
       

        result.style.display = "block";
        userForm.style.display = "block";
        //   limitation 
        //  let locasS = localStorage.setItem("used", "true");
        
        // if(localStorage.getItem("used", "true")){
        //     alert('you used your chance');
        // }
       
        
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
