<?php 
$phone="+91-9997666151";
$email="energyworldgym@gmail.com";
$address="NEAR PANCHSHEEL NAGAR, 44, PILIBHIT BYPASS ROAD, KRISHNA NAGAR, Bareilly,
Uttar Pradesh, 243006";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pawan Kumar Rastogi | Director, Energy World</title>
<meta name="description" content="Official website of Pawan Kumar Rastogi, Director of Energy World, Gym Setup Consultant and Fitness Infrastructure Specialist.">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="shortcut icon" href="assets/img/logo/favicon.png" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
</head>
<body>

<header class="main-header">

    <a href="#hero" class="logo" >
        <img src="assets/img/logo/logo.gif" alt="">
    </a>

    <nav class="navbar" id="navbar">
    <div class="close-btn" id="closeBtn">✕</div>

    <a href="#about" class="nav-link">About</a>
    <a href="#projects" class="nav-link">Projects</a>
    <a href="#gallery" class="nav-link">Gallery</a>
    <a href="#contact" class="nav-link">Contact</a>
</nav>

    <div class="menu-toggle" id="menuToggle">
        ☰
    </div>

</header>

<style>
.main-header{
    position:sticky;
    top:0;
    left:0;
    width:100%;
    z-index:9999;
    transition:transform 0.4s ease;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.main-header.hide{
    transform:translateY(-100%);
}

/* Mobile Menu */
@media (max-width: 768px) {

    .main-header{
        padding: 15px 20px;
        position: sticky;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
    }

    .logo img{
        max-height: 50px;
    }

    .menu-toggle{
        display: block;
        font-size: 30px;
        cursor: pointer;
        color: #fff;
    }

    .navbar{
        position: fixed;
        top: 0;
        right: -100%;
        width: 280px;
        height: 100vh;
        background: #111;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 20px;
        padding: 80px 30px;
        transition: 0.4s ease;
        z-index: 1000;
    }

    .navbar.active{
        right: 0;
    }

    .navbar a{
        font-size: 18px;
        color: #fff;
        text-decoration: none;
        width: 100%;
        padding: 10px 0;
        border-bottom: 1px solid rgba(255,255,255,.1);
    }

    .close-btn{
        position: absolute;
        top: 20px;
        right: 25px;
        font-size: 28px;
        color: #fff;
        cursor: pointer;
    }
}

/* Desktop */
@media (min-width: 769px){

    .menu-toggle,
    .close-btn{
        display: none;
    }

    .navbar{
        display: flex;
        gap: 30px;
        align-items: center;
    }
}
</style>

