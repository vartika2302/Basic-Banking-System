<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Bank of Sparks</title>
        <?php include 'links.php' ?>
    </head>
    <body>
        <!-- Title Section -->
        <section class="white-section" id="title">
        <?php include 'navbar.php' ?>
        <div class="container-fluid">
        <div class="row">

<div class="col-lg-6">
    <p>Your Neighbourhood Bank</p>
  <h1 class="big-heading">We're next door & here for you</h1>
  <p>Online, on the phone, we're here to make your transaction easier.</p>
  <button type="button" class="btn home-btns btn-lg" onclick="window.location.href='register.php'">Register Here</button>
</div>

<div class="col-lg-6">
  <img class="title-image" src="images/home-img.jpg" alt="home-img">
</div>

</div>

        </div>
        </section>

        
        <!-- About Us section -->
        <section class="coloured-section" id="about-us">
            <div class="container-fluid">
            <img class="about-us-img" src="images/about-us-img.jpg" alt="about-us-img">
            <div class="about-us-description">
                <h1 class="med-heading">Building the bank you deserve.</h1>
                <p>A true community bank.We live here,we work here and we're invested in you.Bank of Sparks helps to transfer money between different users.You just need to click on the user's name & you will be automatically directed to the next page where you need to select the user's name to whom you want to transfer money to and write the amount you want to transfer.After clicking the transfer button,your transaction will be successful.</p>
                <br><button class="btn home-btns" onclick="window.location.href='register.php'">Register here</button>
            </div>
            </div>
        </section>


        <!-- Features -->

  <section class="white-section" id="features">

<div class="container-fluid">

  <div class="row">
    <div class="feature-box col-lg-4">
        <a href="customers.php" style="text-decoration: none; color: #172774">
        <img src="images/customers-img.jpg" alt="customers-img" class="features-img">
      <div class="features-description">
      <h3 class="feature-title">View all users</h3>
      <p>View all the users of the bank.</p>
      </div>
        </a>
      
    </div>
    

    <div class="feature-box col-lg-4">
        <a href="transactions.php" style="text-decoration: none; color: #172774">
        <img src="images/transaction-img.jpg" alt="transaction-img" class="features-img">
      <div class="features-description">
      <h3 class="feature-title">Transaction history</h3>
      <p>Here, you can view all the transactions made b/w the users till now.</p>
      </div>
    </a>
    </div>

    <div class="feature-box col-lg-4">
        <a href="transfer.php" style="text-decoration: none; color: #172774">
        <img src="images/transfer.jpg" alt="transfer-img" class="features-img third">
      <div class="features-description">
          <h3 class="feature-title">Transfer money</h3>
          <p>Here, you can transfer money b/w multiple users.</p>
      </div>
    </a>
    </div>
  </div>

</div>
</section>


<!-- Testimonial section -->

<!-- Testimonials -->

<section class="coloured-section" id="testimonials">

<div id="testimonial-carousel" class="carousel slide" data-ride="false">
  <div class="carousel-inner">
    <div class="carousel-item active container-fluid">
      <h2 class="testimonial-text">Super flexible website, takes only milliseconds to transfer money. So happy!</h2>
      <img class="testimonial-image" src="images/jyotika-img.jpg" alt="dog-profile">
      <em>Jyotika Tangri, New Delhi</em>
    </div>
    <div class="carousel-item container-fluid">
      <h2 class="testimonial-text">A very beautiful website which makes money transfer so simpler. Just loved it!!</h2>
      <img class="testimonial-image" src="images/kavya-img.jpg" alt="lady-profile">
      <em>Kavya Mehra, Kolkata</em>
    </div>
    <div class="carousel-item container-fluid">
      <h2 class="testimonial-text">My experience with this website is marvellous. Gonna share with all my friends.</h2>
      <img class="testimonial-image" src="images/nishant-img.jpg" alt="lady-profile">
      <em>Nishant Jha, Mumbai</em>
    </div>
  </div>
  <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
<span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>


        <?php include 'footer.php' ?>
    </body>
</html>

<!-- https://sparks-banking-system-01.herokuapp.com/ -->