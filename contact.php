<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
  </head>
  <body>
    <section class="contact">
    <div class="container head1">
      <div class="contactInfo">
        <div>
          <h2>Contact Info</h2>
          <ul class="info">
            <li>
              <span><img src="images/location.png"></span>
              <span>2912 Standley Road<br>
                Noida,Delhi<br>
                110096
              </span>
            </li>
            <li>
              <span><img src="images/mail.png"></span>
              <span>CovidHelp@gmail.com</span>
            </li>
            <li>
              <span><img src="images/call.png"></span>
              <span>123-456-789</span>
            </li>
          </ul>
        </div>
        <ul class="sci">
          <li><a href="#"><img src="images/1.png"></a></li>
          <li><a href="#"><img src="images/2.png"></a></li>
          <li><a href="#"><img src="images/3.png"></a></li>
          <li><a href="#"><img src="images/4.png"></a></li>
          <li><a href="#"><img src="images/5.png"></a></li>
        </ul>
      </div>
      <div class="contactForm">
        <h2>Ask your Query</h2>
        <form action="userinfo.php" method="post">
        <div class="formBox">
          <div class="inputBox w50">
            <input type="text" name="fname" required>
            <span>First Name</span>
          </div>
          <div class="inputBox w50">
            <input type="text" name="lname" required>
            <span>Last Name</span>
          </div>
          <div class="inputBox w50">
            <input type="email" name="email" required>
            <span>Your Email</span>
          </div>
          <div class="inputBox w50">
            <input type="text" name="mobile" required>
            <span>Mobile Number</span>
          </div>
          <div class="inputBox w100">
            <textarea name="message" required></textarea>
            <span>Feel free to ask any doubt regarding COVID-19...</span>
          </div>
          <div class="inputBox w100">
            <input type="submit" value="Submit">
          </div>
        </div>
      </form>
      </div>
    </div>
  </section>

  </body>
</html>
