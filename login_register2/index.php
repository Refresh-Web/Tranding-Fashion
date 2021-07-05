
    <div class="langing_page" id="langing_page">
        <header>
            <div class="navbar">
                <div class="logo">
                    <h2>Tranding Fashion</h2>
                </div>
                <div class="menu">
                    <a href="#">TRANDING</a>
                   <a href="#">TOPS</a>
                    <a href="#">CLOTHING</a>
                    <a href="">THE TRANDING FASHION SHOP</a>
                    <a href="#">BACK IN STOCK</a>
                    <a href="#">BLOG</a>
                    <a href="#">ABOUT US</a>
                    <a href="login.php">LOGIN</a>
                    <a href="signin.php">SIGN IN</a>
                </div>
            </div>
        </header>
    </div>

    <section class="shoe">
        <div class="main">
            <div class="left">
                <h2>SHOE</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus quasi dignissimos nihil optio? Animi corrupti at quidem suscipit impedit modi fugit accusamus, optio similique architecto error illum in omnis? Dolorem architecto nemo deleniti similique, officia laborum quo. Fugit.</p>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="assetes/pic1.jpg"></div>
                    <div class="item"><img src="assetes/pic2.jpg"></div>
                    <div class="item"><img src="assetes/pic3.jpg"></div>
                    <div class="item"><img src="assetes/pic4.jpg"></div>
                    <div class="item"><img src="assetes/pic5.jpg"></div>
                    <div class="item"><img src="assetes/pic6.jpg"></div>
                    <div class="item"><img src="assetes/pic7.jpg"></div>
                    <div class="item"><img src="assetes/pic8.jpg"></div>
                </div>
            </div>
            <div class="right">
                <img src="assetes/irene-kredenets-dwKiHoqqxk8-unsplash.jpg">
            </div>
        </div>
    </section>
    
    <section class="tshirt">
        <div class="main">
            <div class="left">
                <img src="assetes/pic10.jpg">   
            </div>
            <div class="right">
                <h2>T-SHIRT</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus quasi dignissimos nihil optio? Animi corrupti at quidem sumpedit modi fugit accusamus, optio similique architecto error illum omnis? Dolorem architecto nemo deleniti similique, officia laborum omnis? Dolorem architecto nemo deleniti similique, officia laborum quo. nemo deleniti similique, officia laborum quo.</p>
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="assetes/pic11.png"></div>
                    <div class="item"><img src="assetes/pic12.png"></div>
                    <div class="item"><img src="assetes/pic13.png"></div>
                    <div class="item"><img src="assetes/pic14.jpg"></div>
                    <div class="item"><img src="assetes/pic15.png"></div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="col1">
            <h2>Tranding Fashion</h2>
            <div class="icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
            <p>TermsFeed © 2012 - 2021 </p>
        </div>
        <div class="col2">
            <a href="#">> Terms and Conditions</a>
            <a href="#">> Privacy Policy</a>
            <a href="#">> Shipping, Returns & Warranty</a>
            <a href="#">> Trademark and Copyright Guidelines</a>
            <a href="#">> Business Partner Code of Conduct</a>
        </div>
        <div class="col3">
            <div class="text">
                <h3>Design and developed by</h3>
                <a href="#">Ayoun Paul Neel</a>
            </div>
            <div class="top">
                <a href="#langing_page"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </footer>

    <!-- slider script Start-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
                var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:5,
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>

    <!-- slider script end -->
<?php
    include 'inc/footer.php';
?>
