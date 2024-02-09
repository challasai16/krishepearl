<!-- footer starts here  -->
  <footer class="footer-main">
     <div class="footer-container p-container p-flex ">
        <!-- 1 -->
        <div class="footer-logo">
             <img src="./media/joint-logo.png" alt="">
             <p>Sri Krishna Developpers “Krishe Pearl” is a combination of next-gen design, stylish architecture & world-class amenities crafted to provide your loved ones with a life beyond the ordinary.</p>
        </div>
        <!-- 2 -->
        <div class="footer-head-office">
            <h4>HEAD OFFICE</h4>
            <p><strong>Sri Krishna Ventures Pvt Ltd</strong> <br>
               Sri Krishna House, 3rd floor, Rd. 10, Banjara Hills, Hyderabad – 500034, Telangana, India</p>
        </div>
        <!-- 3 -->
        <div class="footer-site-office">
            <h4>SITE OFFICE</h4>
            <p><strong>Krishe Pearl</strong> <br>
                Chengicherla, Hyderabad,
                Telangana 500092
            </p>
           
        </div>
        <!-- 4 -->
        <div class="social-media">
            <h4>FOLLOW US</h4>
            <ul class="p-flex">
                <li><a href="https://www.facebook.com/SriKrishnaaDeveloppers" target="_blank"><i class="bi bi-facebook"></i>  Facebook</a></li>
                <li><a href="https://www.instagram.com/srikrishnadeveloppers/" target="_blank"> <i class="bi bi-instagram"></i> Instagram</a></li>
                <li><a href="https://twitter.com/sk_developpers" target="_blank"><i class="bi bi-twitter"></i> Twitter</a></li>
                <li><a href="https://www.linkedin.com/company/27440292/admin/" target="_blank"><i class="bi bi-linkedin"></i> Linkedin</a></li>
                <li><a href="https://www.youtube.com/@srikrishnadeveloppers" target="_blank"><i class="bi bi-youtube"></i> Youtube</a></li>
                <li><a href="https://in.pinterest.com/srikrishna_developpers/" target="_blank"><i class="bi bi-pinterest"></i> Pinterest</a></li>
            </ul>
        </div>
        <!-- 5 -->
        <div class="copyright">
            <p>All Copyrights are reserved by Sri Krishna Developpers | Designed & Developed by <a href="https://www.madworks.in/" target="_blank">MAD Works</a></p>
        </div>
        <!-- container closed here  -->
     </div>
     <!-- whats app footer starts here  -->
     <section class="whatsapp">
        <a href="https://wa.me/8428468428?text=Need-Information"><i class="bi bi-whatsapp"></i> +91 9694 82 9694</a>
     </section>
     <!-- whats app footer ends here  -->

     <!-- enquire now btn starts here  -->
     <!--<a href="./#contact-form" class="enquire-btn">ENQUIRE NOW</a>-->

     <!-- qnquire now btn ends here  -->
  </footer>
  <!-- footer ends here  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.min.js" integrity="sha512-iSVaq9Huv1kxBDAOH7Il1rwIJD+uspMQC1r4Y73QquhbI2ia+PIXUoS5rBjWjYyD03S8t7gZmON+Dk6yPlWHXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
         <!-- Google Tag Manager (noscript) -->
         <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGG3634J"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
         <!-- End Google Tag Manager (noscript) -->
<script>
    $('.slider-main').slick( {
        // dots: true,
        arrows: true,
        speed: 300,
        autoplay: true,
        duration: 2000,
        prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
        nextArrow: '<i class="bi bi-chevron-right slick-next"></i>'
        
    });



    // responsive sliders 
    $('.floorplans').slick( {
        dots: true,
        arrows: true,
        speed: 300,
        autoplay: true,
        duration: 2000,
        prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
        nextArrow: '<i class="bi bi-chevron-right slick-next"></i>'
        
    });


    // unit plans 
            $('.unitplans').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',
        
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });

            // BANK PARTNERS 
            $('.bank-partners').slick({
            dots: true,
            infinite: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',
        
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });

            // $('.floorplans, .unitplans').slickLightbox({
            //     itemSelector        : 'a',
            //     navigateByKeyboard  : true
            // });
            // $('#masterplan, #location').slickLightbox({
            //     itemSelector        : 'a',
            //     navigateByKeyboard  : true
            // });
            
            // construction imges 
            $('.construction-img-wrapper').slick({
            dots: true,
            infinite: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<i class="bi bi-chevron-left slick-prev"></i>',
            nextArrow: '<i class="bi bi-chevron-right slick-next"></i>',
        
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
  </script>
  <script>
      Fancybox.bind('[data-fancybox="gallery"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="plans-2d"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="plans-3d"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="master"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="location"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="gallery"]', {
        hideScrollbar: false,
      });
      Fancybox.bind('[data-fancybox="construction"]', {
        hideScrollbar: false,
      });
    </script>
  <!-- aos  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!--chatbot -->
<script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="24364458"></script>
   
        <script>
            AOS.init();
        </script>
      <!--<script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://xbotic.cbots.live",{bot_key:"39cee41112b14bc5",welcome_msg:true,branding_key:"xbotic",server:"https://xbotic.cbots.live",e:"p" });</script>-->