<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $login = true;
}else{
  $login = false;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Learning Web</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/elearning.png" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="main">
      <!-- navbar start -->
      <div class="container">
        <nav>
          <div class="logo">
            <img src="images/brand-logo.png" alt="brand-logo" />
            <h1>Educa</h1>
          </div>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#categories">Categories</a></li>
            <li><a href="#courses">Courses</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <?php
            if(!$login){
             echo "<li><a href=./registration.php>Login</a></li>";
            }
            if($login){
              echo "<li><a href=./logout.php>Logout</a></li>";
            }
            ?>
            <!-- <li><a href="./registration.php">Login</a></li> -->
          </ul>
          <div class="icons">
            <i class="fa-regular fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
          <div class="menu">
            <i class="fa-solid fa-bars"></i>
          </div>
        </nav>
      </div>
      <div class="topmenu hide">
        <i class="fa-solid fa-circle-xmark cancel"></i>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#categories">Categories</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href=".\registraion.php">hii</a></li>
          <li><a href="#admin">Admin</a></li>
        </ul>
      </div>
      <!-- navbar end -->

      <!-- hero start -->
      <div class="hero" id="home">
        <div class="container">
          <div class="left_box">
            <h2>Best Online Learning Platform</h2>
            <h1>Accessible Online Courses For All</h1>
            <p>Own your future learning new skills online</p>
            <div class="email">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Write your email"
              />
              <button>Let's Start</button>
            </div>
          </div>
          <div class="right_box">
            <img src="images/student.png" alt="" />
          </div>
        </div>
      </div>
      <!-- hero end -->
    </div>

    <!-- categories start -->
    <div class="categories" id="categories">
      <div class="container">
        <h3>Categories</h3>
        <h1>Popular categories</h1>
        <div class="cards">
          <div class="card">
            <div class="card_icon">
              <img src="images/angular.png" alt="" />
            </div>
            <div class="card_text">
              <h2>Angular Deveploment</h2>
              <p>5 Courses</p>
            </div>
          </div>
          <div class="card">
            <div class="card_icon">
              <img src="images/nodejs.png" alt="" />
            </div>
            <div class="card_text">
              <h2>Node JS Deveploment</h2>
              <p>5 Courses</p>
            </div>
          </div>
          <div class="card">
            <div class="card_icon">
              <img src="images/react.png" alt="" />
            </div>
            <div class="card_text">
              <h2>React Deveploment</h2>
              <p>5 Courses</p>
            </div>
          </div>
          <div class="card">
            <div class="card_icon">
              <img src="images/js.png" alt="" class="js" />
            </div>
            <div class="card_text">
              <h2>JS Deveploment</h2>
              <p>5 Courses</p>
            </div>
          </div>
        </div>
        <button>All categories</button>
      </div>
    </div>
    <!-- categories end -->

    <!-- courses start -->
    <div class="courses" id="courses">
      <div class="container">
        <div class="heading">
          <h3>Courses</h3>
          <h1>Explore Popular Courses</h1>
        </div>
        <div class="cards">
          <div class="card">
            <div class="card_img">
              <img src="images/HTML.jpg" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>The Complete HTML Course 2023</h3>
              <p class="light">05 hours 20 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p class="light">{400 Reviews}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card_img">
              <img src="images/CSS.jpg" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>The Complete CSS Course 2023</h3>
              <p class="light">10 hours 30 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p class="light">{500 Reviews}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card_img">
              <img src="images/javascript.jpeg" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>The Complete Introduction To JS Course 2023</h3>
              <p class="light">30 hours 50 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star-half"></i>
                </div>
                <p class="light">{800 Reviews}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card_img">
              <img src="images/react.svg" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>React JS Full Course 2023</h3>
              <p class="light">20 hours 10 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
                <p class="light">{500 Reviews}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card_img">
              <img src="images/angular.jpg" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>Full Angular JS Course 2023</h3>
              <p class="light">25 hours 50 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star-half"></i>
                </div>
                <p class="light">{200 Reviews}</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card_img">
              <img src="images/node.webp" alt="" />
            </div>
            <div class="card_info">
              <p>$20.00</p>
              <h3>Master The Art Of Using Node.js</h3>
              <p class="light">22 hours 50 minutes</p>
              <div class="review">
                <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star-half"></i>
                </div>
                <p class="light">{700 Reviews}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="center">
          <button>Buy Now</button>
        </div>
        <div class="company">
          <h3>Trusted By</h3>
          <h1>500+ Leading Universities And Company</h1>
        </div>
        <div class="company_logos">
          <div class="logo">
            <img src="images/google.png" alt="" />
          </div>
          <div class="logo">
            <img src="images/amazon.png" alt="" />
          </div>
          <div class="logo">
            <img src="images/microsoft.png" alt="" />
          </div>
          <div class="logo">
            <img src="images/slack.png" alt="" />
          </div>
          <div class="logo">
            <img src="images/kraft.png" alt="" />
          </div>
          <div class="logo">
            <img src="images/Oculus-Logo.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- courses end -->

    <!-- about start -->
    <div class="about" id="about">
      <div class="container">
        <div class="about_img">
          <img src="images/about.png" alt="" />
        </div>
        <div class="about_text">
          <h1>About Us</h1>
          <h2>Want to share your knowledge? Join us a Mentor</h2>
          <p>
            High-definition video is video of higher resolution and quality than
            standard definition. While there is no standardized meaning for
            high-definition, generally any video.
          </p>
          <h4>Best Courses</h4>
          <h4>Top rated Instructors</h4>
          <button>Read More</button>
        </div>
      </div>
    </div>
    <!-- about end -->

    <!-- contact us start -->
    <div class="contact" id="contact">
      <div class="container">
        <div class="box">
          <form>
            <h1>Contact Us</h1>
            <input type="text" name="name" id="name" placeholder="Name" />
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter a valid email address"
            />
            <textarea
              name="message"
              id="message"
              cols="30"
              rows="5"
              placeholder="Enter your message"
            ></textarea>
            <button>Submit</button>
            <div class="icons">
              <div class="phone">
                <i class="fa-solid fa-phone-flip"></i>
                <p>+91 1234567890</p>
              </div>
              <div class="mail">
                <i class="fa-solid fa-envelope"></i>
                <p>educa@gmail.com</p>
              </div>
            </div>
            <div class="links">
              <i class="fa-brands fa-facebook"></i>
              <i class="fa-brands fa-instagram"></i>
              <i class="fa-brands fa-twitter"></i>
            </div>
          </form>
          <div class="contact_img">
            <img src="images/contact.png" alt="" />
          </div>
        </div>
        <div class="copyright">
          <h3>&copy; 2023 Ansari Mohd Naqeeb. All right reserved</h3>
        </div>
      </div>
    </div>
    <!-- contact us end -->

    <!-- JS -->
    <script src="app.js"></script>
  </body>
</html>
