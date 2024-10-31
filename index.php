<?php
$insert = false; // Initialize $insert
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Check if email already exists
    $check_sql = "SELECT * FROM `portfolio`.`form` WHERE email='$email'";
    $result = $con->query($check_sql);
    
    if ($result->num_rows > 0) {
        echo "This email is already responded!";
    } else {
        // Proceed with insertion if no duplicate is found
        $sql = "INSERT INTO `portfolio`.`form` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp());";
        
        if ($con->query($sql) == true) {
            $insert = true;
        } else {
            echo "Error: $sql <br> $con->error";
        }
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ahmad Awsaf Anondo</title>
  <link rel="shortcut icon" href="Logo white.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="upper-nav"></div>
    <div class="nav-content">
      <nav id="navMenu">
        <img src="Hamburger.png" alt="" id="hamburger" style="margin-top: 30px; margin-left: 80vw; width: 30px;">
        <a href="index.html">
          <img src="Logo black.png" alt="">
        </a>
        <div id="nav-ul">
          <ul class="nav-ul">
            <li><a href="#landing-page">HOME</a></li>
            <li><a href="#about-me">ABOUT ME</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="#contact">CONTACT ME</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <section class="landing-page" id="landing-page">
      <div class="content-1" id="content-1">
        <h1 style="margin-top: 30% !important;" id="heading">AHMAD AWSAF ANONDO</h1>
        <h2>Hey there this is Ahmad!</h2>
        <p>I’m a passionate web developer with a love for crafting clean, responsive, and engaging websites. With a strong foundation in HTML, CSS, and JavaScript, I bring creative ideas to life and continuously explore new technologies to enhance my skills. Whether I’m building a dynamic portfolio, a user-friendly e-commerce site, or a unique web experience, my goal is to create impactful, accessible designs that leave a lasting impression. Thank you for visiting, and I look forward to connecting with you!</p>
        <a target="_blank" href="CV.pdf">
          <button class="btn-1">
            DOWNLOAD CV
          </button>
        </a>
        <a href="#contact"><button class="btn-2">
            CONTACT ME
          </button></a>
      </div>
      <div class="side-nav">
        <img src="sidebar white.png" alt="">
      </div>
      <div class="me">
        <img src="combined compressed.png" alt="" id="me">
      </div>
    </section>
    <section class="page-2">
      <section class="about-me" id="about-me">
        <h1 class="about-heading" id="about-heading">ABOUT ME</h1>
        <p>Welcome to my creative corner! I’m a versatile web developer and digital creator skilled in Graphic Design, Video Editing, and Web Development. With a strong foundation in HTML, CSS, and JavaScript, I bring websites to life, creating dynamic, engaging, and user-friendly experiences. My design skills allow me to craft visuals that are not only appealing but also align with each project’s goals, while my video editing expertise adds an extra layer of storytelling to my work.

          Whether I'm building a responsive website, designing eye-catching graphics, or editing captivating videos, my focus is always on quality, creativity, and impact. Thank you for exploring my work, and I look forward to bringing new ideas to life together!</p>
      </section>
      <section class="about-me-2">
        <div class="about-items">
          <div class="name">
            <h5>Name</h4>
              <p><b>Ahmad Awsaf Anondo</b></p>
          </div>
          <div class="name">
            <h5>Email</h4>
              <p><b>ahmadawsafanondo@gmail.com</b></p>
          </div>
          <div class="name">
            <h5>Education</h4>
              <p><b>United International University</b></p>
          </div>
          <div class="name-1">
            <h5>Address</h4>
              <p><b>Dhaka, Bangladesh</b></p>
          </div>
        </div>
      </section>
    </section>
    <section class="skills" id="skills">
      <div class="skill-description">
        <h1>Skills</h1>
        <p>As a multifaceted digital creator, I bring together expertise in Graphic Design, Video Editing, and Web Development with HTML, CSS, and JavaScript to deliver dynamic and visually compelling projects. With a background in graphic design, I craft unique visuals that stand out and effectively convey messages. My video editing skills add another dimension, enabling me to produce polished, engaging video content that resonates with audiences.

          In web development, I leverage HTML, CSS, and JavaScript to create responsive, user-friendly websites that prioritize both aesthetics and functionality. Every project I take on reflects a blend of creativity, technical proficiency, and a commitment to impactful design, ensuring that clients and users enjoy a seamless, memorable experience. Whether through visuals, video, or code, my work aims to communicate ideas in a meaningful and engaging way.</p>
      </div>
      <div class="skill-items">
        <div class="skill-items-1">
          <img src="HTML logo white.png" alt="">
          <h4>HTML</h4>
          <p>As the foundation of web development, my HTML skills enable me to create clean, well-structured content layouts that provide a solid framework for any website. I focus on building organized, semantic HTML that improves accessibility and makes each page easy to navigate, ensuring that users have a seamless experience.</p>
        </div>
        <div class="skill-items-2">
          <img src="CSS logo.png" alt="">
          <h4>CSS</h4>
          <p>With CSS, I add visual style and personality to web layouts, enhancing the aesthetics and responsiveness of each page. My CSS expertise allows me to create adaptable designs that look polished and function smoothly across all devices, delivering a user-friendly and visually consistent experience.</p>
        </div>
        <div class="skill-items-2">
          <img src="js.png" alt="">
          <h4>JavaScript</h4>
          <p>With JavaScript, I bring interactivity and dynamic functionality to web projects. From animations to form validation, my JavaScript skills enhance user experience, allowing for smoother, more engaging interactions that elevate the overall functionality of a website.</p>
        </div>
        <div class="skill-items-3">
          <img src="Graphic Designer Symbol white.png" alt="">
          <h4>Graphic Design</h4>
          <p>With a focus on impactful, professional design, I create visuals that capture attention and effectively convey messages. From branding elements like logos to promotional materials and layouts, my design approach balances creativity with purpose, crafting memorable visuals that resonate with audiences.</p>
        </div>
        <div class="skill-items-4">
          <img src="video editor symbol white.png" alt="">
          <h4>Video Editing</h4>
          <p>I transform raw footage into engaging, polished stories through precise editing and thoughtful enhancements. With experience in creating video content for social media, promotions, and presentations, I bring together elements like timing, sound, and transitions to produce captivating, high-quality videos.</p>
        </div>
      </div>
      </div>
      </div>
    </section>
    <section class="contact" id="contact">
    <form action="index.php" method="post">
    <h1>Contact Me</h1>
    <?php
    if ($insert == true) {
        echo '<p class="submitMSG">Thanks for your response!</p>';
    }
    ?>
    <div class="contact-items">
        <input type="text" name="name" placeholder="Enter Your Name" id="form-name">
        <input type="email" name="email" placeholder="Enter Your Email" id="form-email">
        <textarea name="message" id="textarea" placeholder="Enter your Message"></textarea>
        <input type="submit" value="Submit" id="submit">
    </div>
</form>

    </section>
  </main>
  <footer class="footer">
    <h5>&copy; 2024 All Rights Reserved to Ahmad Awsaf Anondo</h5>
    <div class="social-media">
      <a href="https://www.facebook.com/ahmad.awsaf.anondo">
        <img src="Blacks/facebook.svg" alt="">
      </a>
      <a href="https://www.youtube.com/@a-3892">
        <img src="Blacks/youtube.svg" alt="">
      </a>
      <a href="https://x.com/AnondoAhmad">
        <img src="Blacks/twitter.svg" alt="">
      </a>
      <a href="https://www.linkedin.com/in/ahmad-awsaf-anondo-421686215/">
        <img src="Blacks/linkedin.svg" alt="">
      </a>
      <a href="https://www.instagram.com/ahmad_awsaf_anondo/">
        <img src="Blacks/instagram.svg" alt="">
      </a>
    </div>
  </footer>
  <script src="script.js"></script>
</body>
</html>