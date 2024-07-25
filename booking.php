<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Now - HR Tourism</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <style>
    /* CSS for the card container */
    .card {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      margin: 20px;
      margin-top: 60px;
      margin-bottom: 80px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* CSS for form elements */
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="date"],
    .form-group input[type="number"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: hsl(180, 98%, 31);
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #fff;
      color: hsl(180, 82%, 31%);
      border: 4px;
      border-color: aqua;
    }
  </style>
</head>
<header class="header" data-header>
    <div class="container">
  
      <a href="#">
        <h1 class="logo">HR Tourism</h1>
      </a>
  
      <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-outline" class="close"></ion-icon>
      </button>
  
      <nav class="navbar">
  
        <ul class="navbar-list">
  
          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>
  
          <li>
            <a href="#" class="navbar-link">About Us</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Blog</a>
          </li>
  
          <li>
            <a href="#" class="navbar-link">Contact Us</a>
          </li>
  
        </ul>
    
      </nav>
    </div>
  </header>
<body>
 <main>
    <section class="booking-section">
      <div class="container">
        <div class="card">
          <h2>Book Your Tour</h2>
          <form action="payment.php" method="POST" id="bookingForm">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="destination">Destination:</label>
              <input type="text" id="destination" name="destination" required>
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
              <label for="travelers">Number of Travelers:</label>
              <input type="number" id="travelers" name="travelers" min="1" required>
            </div>
            <div class="form-group">
              <label for="amount">Amount to Pay:</label>
              <input type="text" id="amount" name="amount" required readonly>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Proceed to Payment</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <script>
    // Destination to price and currency mapping
    const destinationPrices = {
      "Malé, Maldives": { amount: 2500, currency: "$" },
      "Bangkok, Thailand": { amount: 1800, currency: "$" },
      "Kuala Lumpur, Malaysia": { amount: 3500, currency: "MYR" },
      "Kathmandu, Nepal": { amount: 45000, currency: "NPR" },
      "Jakarta, Indonesia": { amount: 12000000, currency: "IDR" },
      // Add more destinations and prices as needed
    };

    // Function to retrieve URL query parameters
    function getQueryParam(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    }

    // Function to update form fields with destination and amount
    function updateFormFields() {
      const destinationInput = document.getElementById('destination');
      const amountInput = document.getElementById('amount');

      // Get destination from URL query parameters
      const destination = getQueryParam('destination');

      // Update input field with destination
      destinationInput.value = destination;

      // Get price and currency based on destination
      const { amount, currency } = destinationPrices[destination];
      if (amount && currency) {
        amountInput.value = `${currency} ${amount}`;
      } else {
        amountInput.value = ""; // Clear amount if destination not found
      }
    }

    // Call the function to update form fields when the page loads
    window.onload = function() {
      updateFormFields();
    };
  </script>
      <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
        <div class="container">
    
          <div class="footer-top">
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Top destination</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Indonesia, Jakarta</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Maldives, Malé</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Australia, Canberra</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Thailand, Bangkok</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Morocco, Rabat</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Categories</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Travel</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Lifestyle</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Fashion</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Education</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Food & Drink</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Quick links</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">About</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Contact</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Tours</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Booking</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Terms & Conditions</a>
              </li>
    
            </ul>
    
            <div class="footer-list">
    
              <p class="footer-list-title">Get a newsletter</p>
    
              <p class="newsletter-text">
                For the latest deals and tips, travel no further than your inbox
              </p>
    
              <form action="" class="newsletter-form">
                <input type="email" name="email" required placeholder="Email address" class="newsletter-input">
    
                <button type="submit" class="btn btn-primary">Subscribe</button>
              </form>
    
            </div>
    
          </div>
    
          <div class="footer-bottom">
    
            <a href="#" class="logo">HR Tourism</a>
    
            <p class="copyright">
              &copy; 2022 <a href="#" class="copyright-link">HR Tourism Company</a>. All Rights Reserved
            </p>
    
            <ul class="social-list">
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>
    
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-google"></ion-icon>
                </a>
              </li>
    
            </ul>
    
          </div>
    
        </div>
      </footer>

</body>
</html>
