<section class="footer-cta">

    <div class="footer-top">

        <div class="footer-box">
            <h2>
                LET'S BUILD YOUR <br>
                <span>NEXT FITNESS PROJECT</span>
            </h2>

            <p>
                Whether you're planning a commercial gym, hotel fitness center,
                corporate wellness facility, or educational institution gym,
                let's discuss your vision.
            </p>
        </div>

        <div class="footer-box footer-contact">

            <div class="info-item">
                <i class="fa-solid fa-phone" style="color:#FF0000;"></i>
                    <?php echo "$phone"?>
            </div>

            <div class="info-item">
                <i class="fa-solid fa-globe" style="color:#FF0000;"></i>
                    <?php echo "$email"?>
            </div>

            <div class="info-item" style="display:flex;">
                <i class="fa-solid fa-map-pin" style="color:#FF0000; margin-right:8px;"></i>
                <a href="https://maps.app.goo.gl/gmd4Naosohs2VARk9" style="text-decoration:none; color: #ddd;"> <?php echo "$address"?></a>
            </div>

        </div>

        <div class="footer-box">

            <a href="tel:9997666151" class="consult-btn"><i class="fa-solid fa-phone-volume"></i>
                BOOK A CONSULTATION
            </a>

            <h3>Pawan Kumar Rastogi</h3>

            <span>DIRECTOR, ENERGY WORLD</span>

        </div>

    </div>

    <div class="footer-bottom">
        <div>
            © 2026 Pawan Kumar Rastogi | Powered by <a href="https://www.worldomania.com" target="_blank" style="text-decoration:none; color:#FF0000;">Worldomania</a>
        </div>

        <div class="social-icons">
            <a href="https://www.facebook.com/energygymequipments/"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/energyworldindia/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://x.com/Energyworld7"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCG6xyDEugBabgCinV3NbG5w"><i class="fa-brands fa-youtube"></i></a>
        </div>

    </div>

</section>
</body>

<style>


.footer-cta{
    background:#000;
    color:#fff;
    border-top:2px solid #c00000;
}

.footer-top{
    max-width:1400px;
    width:95%;
    margin:auto;
    padding:50px 0;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:40px;
}

.footer-box{
    flex:1;
}

.footer-box h2{
    font-size:35px;
    line-height:1.2;
    margin-bottom:15px;
}

.footer-box h2 span{
    color:#e30613;
}

.footer-box p{
    color:#cfcfcf;
    line-height:1.8;
}

.footer-contact{
    border-left:1px solid #222;
    border-right:1px solid #222;
    padding:0 30px;
}

.info-item{
    margin:18px 0;
    color:#ddd;
    font-size:15px;
}

.consult-btn{
        display: inline-block;
    padding: 14px 28px;
    background: #e30613;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    margin-bottom: 20px;
    border-radius: 5px;
}

.footer-box h3{
    color: #e30613;
    font-size: 41px;
    margin-bottom: 10px;
    font-family: "Tangerine", cursive;
    font-weight: 800;
    line-height: 30px;
}

.footer-box span{
    color:#ccc;
}

.footer-bottom{
    border-top:1px solid #222;
    padding:20px 5%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:15px;
}

.footer-links{
    display:flex;
    gap:20px;
}

.footer-links a{
    color:#ccc;
    text-decoration:none;
}

.social-icons{
    display:flex;
    gap:10px;
}

.social-icons a{
    width:38px;
    height:38px;
    border:1px solid #444;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
    color:#fff;
}

.social-icons a:hover{
    background:#e30613;
    border-color:#e30613;
}

/* Tablet */

@media(max-width:991px){

    .footer-top{
        flex-direction:column;
        text-align:center;
    }

    .footer-contact{
        border:none;
        padding:0;
    }

    .footer-box{
        width:100%;
    }

}

/* Mobile */

@media(max-width:768px){

    .footer-top{
        text-align:justify;
        gap:30px;
        align-items:baseline;
    }

    .footer-box h2{
        font-size:28px;
        /* font-family: "Dancing Script", cursive; */
    }

    .footer-box h3{
        font-size:35px;
    }

    .footer-box p{
        max-width:100%;
        font-size: 11px;
    }

    .consult-btn{
        width:100%;
        max-width:260px;
        text-align:center;
    }

    .footer-bottom{
        flex-direction:column;
        text-align:center;
    }

    .footer-links{
        justify-content:center;
        flex-wrap:wrap;
    }

    .social-icons{
        justify-content:center;
    }

}

/* Small Mobile */

@media(max-width:480px){

    .footer-box h2{
        font-size:22px;
    }

    .info-item{
        font-size:15px;
    }

    .contact-left p {
    font-size: 11px;
}

}
</style>
<!-- ================= SWIPER JS ================= -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- ================= YOUR CUSTOM JS ================= -->
<script src="assets/js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 


<script>
    document.addEventListener("DOMContentLoaded", function () {
        /* =========================================================
        TESTIMONIAL SWIPER
        ========================================================= */

        const testimonialSlider = document.querySelector(".testimonialSwiper");

        if (testimonialSlider) {

            new Swiper(".testimonialSwiper", {

                loop: true,
                centeredSlides: true,
                speed: 800,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },

                navigation: {
                    nextEl: ".next-btn",
                    prevEl: ".prev-btn"
                },

                breakpoints: {

                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15
                    },

                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },

                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30
                    }

                }

            });

        }


        /* =========================================================
        COUNTER
        ========================================================= */

        const counters = document.querySelectorAll(".counter");

        counters.forEach(function (counter) {

            const target = parseInt(
                counter.getAttribute("data-target"),
                10
            );

            let count = 0;

            const updateCounter = function () {

                const increment = Math.ceil(target / 100);

                count += increment;

                if (count < target) {

                    counter.innerText = count;

                    setTimeout(updateCounter, 20);

                } else {

                    counter.innerText = target + "+";

                }

            };

            updateCounter();

        });


        /* =========================================================
        FAQ
        ========================================================= */

        const faqQuestions = document.querySelectorAll(".faq-question");

        faqQuestions.forEach(function (question) {

            question.addEventListener("click", function () {

                const currentItem = this.closest(".faq-item");

                if (!currentItem) return;


                /* Close other FAQ */

                document.querySelectorAll(".faq-item").forEach(function (item) {

                    if (item !== currentItem) {

                        item.classList.remove("active");

                    }

                });


                /* Toggle current FAQ */

                currentItem.classList.toggle("active");

            });

        });


        /* =========================================================
        MOBILE MENU
        ========================================================= */

        const menuToggle = document.getElementById("menuToggle");
        const navbar = document.getElementById("navbar");
        const closeBtn = document.getElementById("closeBtn");


        if (menuToggle && navbar) {

            menuToggle.addEventListener("click", function () {

                navbar.classList.add("active");

            });

        }


        if (closeBtn && navbar) {

            closeBtn.addEventListener("click", function () {

                navbar.classList.remove("active");

            });

        }


        /* Close menu when clicking a link */

        if (navbar) {

            navbar.querySelectorAll("a").forEach(function (link) {

                link.addEventListener("click", function () {

                    navbar.classList.remove("active");

                });

            });

        }
    });
</script>




<script>
    document.querySelectorAll('.nav-link[href^="#"]').forEach(function(link) {

    link.addEventListener("click", function(e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (!target) return;

        const headerHeight =
            document.querySelector(".main-header")?.offsetHeight || 0;

        const targetPosition =
            target.offsetTop - headerHeight - 20;

        window.scrollTo({
            top: targetPosition,
            behavior: "smooth"
        });

    });

});
</script>



     <script type="text/javascript">
    $("#submitsss").click(function(event) {
    event.preventDefault();

    var user = $("#conte_name").val().trim();
    var conte_email = $("#conte_email").val().trim();
    var conte_phone = $("#conte_phone").val().trim();
    var conte_city = $("#conte_city").val().trim();
    var conte_message = $("#conte_message").val().trim();
    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $("#usercontename").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (conte_email == "") {
        $("#userconteemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Phone validation
    if (conte_phone == "") {
        $("#usercontephone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(conte_phone)) {
        $("#usercontephone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (conte_phone.length != 10) {
        $("#usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // Email validation
    if (conte_city == "") {
        $("#usercontecity").html("Please fill the city").show();
        errorMsg += "• Please fill the city\n";
        error = true;
    }

     if (conte_message == "") {
        $("#usercontemessage").html("Please fill the message").show();
        errorMsg += "• Please fill the message\n";
        error = true;
    }


    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "mailer.php",
        data: {user,conte_email, conte_phone, conte_city, conte_message},
        dataType: 'json',
        success: function(data) {
    if (data.msg) {
        $('.contactt')[0].reset();

        $("#popupSuccess").fadeIn(); // popup show

    } else {
        alert("Something went wrong!");
    }
}
    });

});

$(document).on("click", "#closePopup", function(){
    $("#popupSuccess").fadeOut();
});
    </script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    const track = document.querySelector(".client-logo-track");
    track.innerHTML += track.innerHTML;
});
</script>
</html>