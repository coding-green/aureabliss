<?php
include_once("header.php")
?>
<div style="background-color:#020101;backdrop-filter: blur(30px);height:135px">

</div>
<!-- breadcrumb section strats here -->
<div class="skin-care-breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="banner-content text-center">
                    <h1>CHECKOUT</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.html">Home</a></li>
                        <li>CHECKOUT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends here -->

<!-- Start CheckOut Page -->
<div class="checkout-page pt-120 mb-120">
    <div class="container-lg container-fluid">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-7">
                <div class="checkout-form-wrapper">
                    <div class="checkout-form-title style-2">
                        <h5>Billing Information</h5>
                    </div>
                    <div class="checkout-form style-2">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Full Name*</label>
                                        <input type="text" placeholder="Daniel Scoot">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Phone Number*</label>
                                        <input type="text" placeholder="(212)+ 455 645 678">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Email Address <span>(Optional)</span></label>
                                        <input type="email" placeholder="info@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Your Location</label>
                                        <input type="text" placeholder="Type Location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Street Address*</label>
                                        <input type="text" placeholder="Street address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Postal Code*</label>
                                        <input type="text" placeholder="Postal code">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-25">
                                        <label class="style-2">Short Notes*</label>
                                        <textarea placeholder="checkout-page"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="contactCheck">
                                            <label class="form-check-label" for="contactCheck">
                                                Save my information for next time when I purchased
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="checkout-form-wrapper">
                    <div class="checkout-form-title style-2">
                        <h5>Order Summary</h5>
                    </div>
                    <div class="order-sum-area style-2">
                        <form>
                            <div class="cart-menu">
                                <div class="cart-body">
                                    <ul>
                                        <li class="single-item">
                                            <div class="item-area">
                                                <div class="main-item">
                                                    <div class="item-img">
                                                        <img src="assets/image/beauty-spa/checkout/sb-product.png"
                                                            alt="">
                                                    </div>
                                                    <div class="content-and-quantity">
                                                        <div class="content">
                                                            <h6><a href="product-details.html">opi nail envy nail strengthener</a></h6>
                                                            <span>2 x $190.00</span>
                                                        </div>
                                                        <div class="quantity-area">
                                                            <div class="quantity">
                                                                <a class="quantity__minus"><span><i
                                                                            class="bi bi-dash"></i></span></a>
                                                                <input name="quantity" type="text"
                                                                    class="quantity__input" value="01">
                                                                <a class="quantity__plus"><span><i
                                                                            class="bi bi-plus"></i></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="reset" class="close-btn"><i
                                                        class="bi bi-x"></i></button>
                                            </div>
                                        </li>
                                        <li class="single-item">
                                            <div class="item-area">
                                                <div class="main-item">
                                                    <div class="item-img">
                                                        <img src="assets/image/beauty-spa/cart-page/cart-image2.png" alt="">
                                                    </div>
                                                    <div class="content-and-quantity">
                                                        <div class="content">
                                                            <h6><a href="product-details.html">cerave hydrating facial cleanser</a></h6>
                                                            <span>2 x $150</span>
                                                        </div>
                                                        <div class="quantity-area">
                                                            <div class="quantity">
                                                                <a class="quantity__minus"><span><i
                                                                            class="bi bi-dash"></i></span></a>
                                                                <input name="quantity" type="text"
                                                                    class="quantity__input" value="01">
                                                                <a class="quantity__plus"><span><i
                                                                            class="bi bi-plus"></i></span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="reset" class="close-btn"><i
                                                        class="bi bi-x"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cart-footer">
                                    <div class="pricing-area mb-40">
                                        <ul>
                                            <li>
                                                <strong>Sub Total</strong>
                                                <strong>$348.00</strong>
                                            </li>
                                            <li>
                                                <strong>Shipping</strong>
                                                <div class="order-info">
                                                    <p>Shipping Free*</p>
                                                    <span> Pickup fee $10.00</span>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Total</strong>
                                                <strong>$214.00</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="choose-payment-method style-2">
                                        <h6>Select Payment Method</h6>
                                        <div class="payment-option">
                                            <ul>
                                                <li class="paypal active">
                                                    <img src="assets/image/hair-salon/product/payPal.svg" alt="">
                                                    <div class="checked">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                </li>
                                                <li class="stripe">
                                                    <img src="assets/image/hair-salon/product/stripe.svg" alt="">
                                                    <div class="checked">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                </li>
                                                <li class="offline">
                                                    <img src="assets/image/hair-salon/product/offline.svg" alt="">
                                                    <div class="checked">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pt-25" id="StripePayment" style="display: none;">
                                            <div class="row g-4">
                                                <div class="col-md-12">
                                                    <div class="form-inner">
                                                        <label>Card Number</label>
                                                        <input type="text" placeholder="1234 1234 1234 1234">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner">
                                                        <label>Expiry</label>
                                                        <input type="text" placeholder="MM/YY">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-inner">
                                                        <label>CVC</label>
                                                        <input type="text" placeholder="CVC">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn1">
                                        Place Your Order
                                        <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End CheckOut Page -->

<!-- footer section strats here -->
<footer class="footer-section spa-footer">
    <div class="container">
        <div class="row g-lg-4 gy-5 mb-70">
            <div class="col-lg-4 col-md-6">
                <div class="footer-logo-section">
                    <div class="footer-top-section">
                        <a href="index.html" class="footer-logo">
                            <img src="assets/image/icon/light-logo.png" alt="">
                        </a>
                        <p>Barkinghum, 42 Elm Street Windsor Berkshire, SL4 1NF</p>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/">
                                    <svg width="6" height="12" viewBox="0 0 6 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.81526 11.2483V6.46735H5.42818L5.66793 4.59543H3.81526V3.4031C3.81526 2.86293 3.96576 2.4931 4.74101 2.4931H5.72334V0.824182C5.24538 0.77296 4.76495 0.748228 4.28426 0.750099C2.85859 0.750099 1.87976 1.62043 1.87976 3.21818V4.59193H0.277344V6.46385H1.88326V11.2483H3.81526Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtube.com/">
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.04462 1.74902H7.1225C7.84175 1.75165 11.4861 1.7779 12.4688 2.04215C12.7658 2.1228 13.0365 2.27999 13.2538 2.49803C13.471 2.71607 13.6273 2.98731 13.7069 3.28465C13.7952 3.61715 13.8574 4.05727 13.8994 4.5114L13.9081 4.6024L13.9274 4.8299L13.9344 4.9209C13.9913 5.72065 13.9983 6.46965 13.9991 6.63327V6.6989C13.9983 6.86865 13.9904 7.6684 13.9274 8.5014L13.9204 8.59327L13.9125 8.68427C13.8687 9.18477 13.804 9.68177 13.7069 10.0475C13.6273 10.3449 13.471 10.6161 13.2538 10.8341C13.0365 11.0522 12.7658 11.2094 12.4688 11.29C11.4537 11.563 7.59587 11.5823 7.06125 11.5831H6.937C6.66663 11.5831 5.54838 11.5779 4.37587 11.5376L4.22712 11.5324L4.151 11.5289L4.00138 11.5228L3.85175 11.5166C2.8805 11.4738 1.95563 11.4046 1.5295 11.2891C1.23255 11.2086 0.961931 11.0515 0.74467 10.8336C0.527409 10.6158 0.371108 10.3447 0.291375 10.0475C0.19425 9.68265 0.1295 9.18477 0.08575 8.68427L0.07875 8.5924L0.07175 8.5014C0.028318 7.90851 0.0043884 7.31436 0 6.7199L0 6.61227C0.00175 6.42415 0.00875 5.77402 0.056 5.05652L0.062125 4.9664L0.06475 4.9209L0.07175 4.8299L0.091 4.6024L0.09975 4.5114C0.14175 4.05727 0.203875 3.61627 0.29225 3.28465C0.371849 2.98731 0.528091 2.71607 0.74536 2.49803C0.96263 2.27999 1.23332 2.1228 1.53038 2.04215C1.9565 1.9284 2.88137 1.8584 3.85262 1.81465L4.00138 1.80852L4.15188 1.80327L4.22712 1.80065L4.37675 1.79452C5.2095 1.76775 6.04258 1.75287 6.87575 1.7499L7.04462 1.74902ZM5.6 4.55777V8.77352L9.23738 6.66652L5.6 4.55777Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/">
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M11.025 0.65625H13.1722L8.48225 6.0305L14 13.3438H9.68012L6.2965 8.9075L2.42462 13.3438H0.2765L5.29287 7.595L0 0.65625H4.43013L7.48825 4.71012L11.025 0.65625ZM10.2725 12.0557H11.4625L3.78262 1.87687H2.50688L10.2725 12.0557Z" />
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/">
                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.90719 4.1972C3.61209 4.1972 4.18353 3.62576 4.18353 2.92086C4.18353 2.21597 3.61209 1.64453 2.90719 1.64453C2.20229 1.64453 1.63086 2.21597 1.63086 2.92086C1.63086 3.62576 2.20229 4.1972 2.90719 4.1972Z" />
                                        <path
                                            d="M5.38752 5.16523V12.2463H7.5861V8.74457C7.5861 7.82057 7.75994 6.92573 8.9056 6.92573C10.0355 6.92573 10.0495 7.98215 10.0495 8.8029V12.2469H12.2493V8.36365C12.2493 6.45615 11.8386 4.99023 9.60911 4.99023C8.53869 4.99023 7.82119 5.57765 7.52777 6.13357H7.49802V5.16523H5.38752ZM1.80469 5.16523H4.00677V12.2463H1.80469V5.16523Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-contact-section">
                        <div class="call-now-section">
                            <span>Call Now</span>
                            <h4><a href="tel:990737621432">+990-737621432</a></h4>
                        </div>
                        <p>N:B - Sunday Closed,<span> otherswsie you can call anytime within opening hours.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex justify-content-xl-end justify-content-lg-center justify-content-md-end">
                <div class="footer-list">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>OUR SERVICES</h4>
                        </div>
                        <ul class="widget-list">
                            <li>
                                <a href="services01.html">
                                    Facial Treatments
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    Microneedling
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    Laser Treatments
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    LED Light Therapy
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    Injectables
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    Body Treatments
                                </a>
                            </li>
                            <li>
                                <a href="services01.html">
                                    Consultations
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end">
                <div class="footer-list">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4>OPENING HOURS</h4>
                        </div>
                        <ul>
                            <li>
                                SAT - TUE <span>(9AM - 7PM)</span>
                            </li>
                            <li>
                                WED - THU <span>(8AM - 6PM)</span>
                            </li>
                            <li>
                                SUNDAY- <span>CLOSED</span>
                            </li>
                        </ul>
                        <p class="star-text"><span class="star-icon">*</span>Visit our Buret & take your favourite beauty & spa.</p>
                        <div class="map-area">
                            <h6>
                                <a href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3631117,17z/data=!3m1!4b1!4m6!3m5!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866!16s%2Fg%2F11rs9vlwsk?entry=ttu&amp;g_ep=EgoyMDI0MDkxNi4wIKXMDSoASAFQAw%3D%3D">
                                    Get Direction
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                            stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </h6>
                            <div class="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.5647631857846!2d90.36311167605992!3d23.83407118555764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c8682a473%3A0xa6c74743d52adb88!2sEgens%20Lab!5e0!3m2!1sen!2sbd!4v1700138349574!5m2!1sen!2sbd"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-btm-content">
                        <div class="copyright-area">
                            <p> © Copyright 2024 <a href="https://www.egenslab.com/"> Egens Lab </a> | All Right
                                Reserved </p>
                        </div>
                        <div class="right-area">
                            <svg width="12" height="12" viewBox="0 0 12 12"
                                xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 5.99981C0 5.83405 0.0632157 5.67508 0.17574 5.55787C0.288264 5.44066 0.44088 5.37481 0.600014 5.37481H8.7518L6.17534 2.69231C6.06267 2.57496 5.99938 2.41578 5.99938 2.24981C5.99938 2.08384 6.06267 1.92467 6.17534 1.80731C6.28801 1.68995 6.44081 1.62402 6.60015 1.62402C6.75948 1.62402 6.91229 1.68995 7.02496 1.80731L10.625 5.55731C10.6809 5.61537 10.7252 5.68434 10.7555 5.76027C10.7857 5.8362 10.8013 5.9176 10.8013 5.99981C10.8013 6.08202 10.7857 6.16342 10.7555 6.23935C10.7252 6.31529 10.6809 6.38426 10.625 6.44231L7.02496 10.1923C6.91229 10.3097 6.75948 10.3756 6.60015 10.3756C6.44081 10.3756 6.28801 10.3097 6.17534 10.1923C6.06267 10.075 5.99938 9.91578 5.99938 9.74981C5.99938 9.58384 6.06267 9.42467 6.17534 9.30731L8.7518 6.62481H0.600014C0.44088 6.62481 0.288264 6.55897 0.17574 6.44176C0.0632157 6.32455 0 6.16557 0 5.99981Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.3998 1C11.559 1 11.7116 1.06585 11.8241 1.18306C11.9366 1.30027 11.9998 1.45924 11.9998 1.625V10.375C11.9998 10.5408 11.9366 10.6997 11.8241 10.8169C11.7116 10.9342 11.559 11 11.3998 11C11.2407 11 11.0881 10.9342 10.9755 10.8169C10.863 10.6997 10.7998 10.5408 10.7998 10.375V1.625C10.7998 1.45924 10.863 1.30027 10.9755 1.18306C11.0881 1.06585 11.2407 1 11.3998 1Z" />
                                </g>
                            </svg>
                            <p>Our Business <a href="#"> Policy, Terms & Condition</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section ends here -->


<!-- jquery js link -->
<script data-cfasync="false" src="https://demo.egenslab.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<!-- counterup js -->
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/jquery.counterup.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- marquee js -->
<script src="assets/js/jquery.marquee.min.js"></script>
<!-- poper js -->
<script src="assets/js/popper.min.js"></script>
<!-- swiper js -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- fancybox js -->
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>
    $(".marquee_text2").marquee({
        direction: "left",
        duration: 25000,
        gap: 50,
        delayBeforeStart: 0,
        duplicated: true,
        startVisible: true,
    });
</script>
</body>


<!-- Mirrored from demo.egenslab.com/html/buret/preview/skin-care/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 12:36:56 GMT -->

</html>