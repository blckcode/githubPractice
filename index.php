<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee House</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >
  
</head>
<body>
  <header class="header">
    <a href="#" class="logo">
      <img src="assets/coffee-logo.png" alt="" >
    </a>

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#menu">Menu</a>
      <a href="#review">Review</a>
      <a href="#product">Product</a>
      <a href="#contact">Contact</a>

    </nav>

    <div class="icons">
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="assets/logo.png" alt="">
          <div class="content">
            <h3>cart item 01</h3>
            <div class="price">₱249.99/-</div>
          </div>
        </div>
        <a href="#" class="btn" >check out now</a>
    </div>
  </header>

  <section class="home" id="home">
    <div class="content">
      <h3>hot coffee in the morning</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate esse quo quam quibusdam impedit incidunt sapiente quis?</p>
      <a href="#" class="btn">get yours now</a>
    </div>
  </section>



  <script src="script.js"></script>
</body>
</html>