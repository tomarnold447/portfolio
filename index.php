<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width:1170px)" href="tablet.css">
    <link rel="stylesheet" media="screen and (max-width:900px)" href="phone.css">
    <link rel="stylesheet" media="screen and (max-width:695px)" href="phone1.css">
   
     
</head>
<body>
    <nav class="mobile-navbar" id="mobile-navbar">
        <img id="menu-open" class="menu-icon menu-open" src="Images/hamburger.svg" alt="">
        <img id="menu-close" class="menu-icon menu-close hidden" src="Images/close.svg" alt="">
        <ul id="mobile-menu-items" class="hidden">
            <li><a href="#home" id="home-link">Home</a></li>
            <li><a href="#portfolio" id="portfolio-link">Portfolio</a></li>
            <li><a href="#education" id="education-link">Education</a></li>
            <li><a href="#about" id="about-link">About Me</a></li>
            <li><a href="#contact" id="contact-link">Contact Me</a></li>
        </ul>
    </nav>
    <nav class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>
 
    <section id="home">
        <h1 class="heading">HI, I AM</h1>
        <h1 class="heading">TOM OWITI</h1>
        <br><br>
        <p>AND THIS IS MY RESUME</p>
    </section>

    <section id="portfolio">
        <h1 class="heading">Portfolio</h1>
        <div class="gallery">
            <img src="Images/img1.jpg" alt="">
            <img src="Images/img2.jpg" alt="">
            <img src="Images/img3.jpg" alt="">
            <img src="Images/img4.jpg" alt="">
            <img src="Images/img5.jpg" alt="">
            <img src="Images/img6.jpg" alt="">
        </div>
    </section>

    <section id="education" class="container">
        <h1 class="heading">Education</h1>
        <div class="columns">
            <div class="box">
                <h2>Strathmore University <br>Bachelor of Business Information Technology</h2>
                <h3>2020 - present</h3>
                <p>Currently pursuing a course in Business Information Technology where I intend to be the best web designer once I complete my course.</p>
            </div>
            <div class="box">
                <h2>Kabianga School</h2>
                <h3>2016 - 2019</h3>
                <p>Successfully completed my secondary education within the 4 years where I managed to pass my final exams</p>
                <p>While in school, I was a dormitory captain which came with a lot of responsibilities which have had a positive impact in my life.</p>
                <p>I attended trainings and workshops, on Strategy and leadership. </p>
            </div>
            <div class="box">
                <h2>Furaha Primary School</h2>
                <h3>2008 - 2015</h3>
                <p>Successfully completed my primary education at Furaha Primary School, passed highly and proceeded to high school.</p>
                <p>While in school, I was involved in several co-curricular activities such as scouting where our school proceeded up to East Africa competitions</p>
                <p> I was also an active member of the drama club, music club and many others.</p>
            </div>
        </div>
    </section>

    <section id="about" class="container">
        <h1 class="heading">About me</h1>
        <div class="about">
            <img src="arnold.jpg" alt="My Pic">
            <div class="name">
                <h2>I'm Tom Arnold</h2>
                <p>My name is Tom Arnold, born on 25th April 2001 in Kisumu, Kenya. I'm currently pursuing my degree (Bachelors of Business Information Technology) at Strathmore University. <br>During my free time, I enjoy reading articles and books from the likes of renowned American business magnate Bill Gates who is the co-founder of Microsoft Corporation. I love taking part and volunteering in community involvement.<br> I have always been intrested to learn a new thing each and every day thus this pushes me to do a lot of research. I also love travelling, socializing and watching movies.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="container">
        <h1 class="heading">Contact</h1>
        <form action="config.php" method="POST" class="form">  
            <input type="text" name="name" class="input" placeholder="Enter Your Name">
            <input type="email" name="email" class="input" placeholder="Enter Your Email">
            <textarea name="message" id="message" cols="70" rows="20" placeholder="Enter Your Message"></textarea>
            <input type="submit" value="Submit" id="submit" name="button">
        </form>
    </section>
</body>
</html>

<script>
    const mobileNavbar =document.getElementById('mobile-navbar');
    const menuOpen =document.getElementById('menu-open');
    const menuClose =document.getElementById('menu-close');
    const mobileMenuItems =document.getElementById('mobile-menu-items');

    const homeLink =document.getElementById('home-link');
    const portfolioLink =document.getElementById('portfolio-link');
    const educationLink =document.getElementById('education-link');
    const aboutLink =document.getElementById('about-link');
    const contactLink =document.getElementById('contact-link');

    function toggleMobileNavBar(){
        menuOpen.classList.toggle('hidden');
        menuClose.classList.toggle('hidden');
        mobileMenuItems.classList.toggle('hidden');
        mobileNavbar.classList.toggle('mobile-nav-styling');
    }

    menuClose.addEventListener('click', toggleMobileNavBar);

    menuOpen.addEventListener('click', toggleMobileNavBar);

    homeLink.addEventListener('click', toggleMobileNavBar);

    portfolioLink.addEventListener('click', toggleMobileNavBar);

    educationLink.addEventListener('click', toggleMobileNavBar);

    aboutLink.addEventListener('click', toggleMobileNavBar);
    
    contactLink.addEventListener('click', toggleMobileNavBar);
    


</script>