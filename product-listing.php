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
                    <h1>PRODUCT</h1>
                    <ul class="breadcrumb-list">
                        <li><a href="index.html">Home</a></li>
                        <li>PRODUCT</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb section ends here -->

<div class="modal product-view-modal" id="product-view">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="close-btn" data-bs-dismiss="modal">
                </div>
                <div class="product-details-page">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-img-wrap">
                                <div class="slider-btn-groups">
                                    <div class="slider-btn product-prev">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.0039 13.0034C10.0037 10.503 5.00286 8.00255 2.00234 7.00237C5.00286 6.0022 9.50364 4.50194 11.0039 1.00133"
                                                stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                    <div class="slider-btn product-next">
                                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.998047 12.9995C1.99805 10.4995 6.99805 7.99951 9.99805 6.99951C6.99805 5.99951 2.49805 4.49951 0.998047 0.999512"
                                                stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="swiper product-image-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-img product-img--main" data-scale="1.4"
                                                data-image="assets/image/hair-salon/product/product-dt-01.png">
                                                <img src="assets/image/hair-salon/product/product-dt-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-img product-img--main" data-scale="1.4"
                                                data-image="assets/image/hair-salon/product/product-dt-01.png">
                                                <img src="assets/image/hair-salon/product/product-dt-01.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-img product-img--main" data-scale="1.4"
                                                data-image="assets/image/hair-salon/product/product-dt-01.png">
                                                <img src="assets/image/hair-salon/product/product-dt-01.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content style-2">
                                <div class="rating">
                                    <div class="star">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <a href="#reviews">(2 REVIEWS)</a>
                                </div>
                                <h2>Toning Shampoo</h2>
                                <p>It provides an opportunity for people to connect with friends or family members
                                    while receiving treatments together.</p>
                                <span class="price">$150.00 <del>$200.00</del></span>
                                <div class="quantity-bag">
                                    <div class="quantity-counter">
                                        <a href="#" class="quantity__minus"><i class='bi bi-dash'></i></a>
                                        <input name="quantity" type="text" class="quantity__input" value="01">
                                        <a href="#" class="quantity__plus"><i class='bi bi-plus'></i></a>
                                    </div>
                                    <a class="primary-btn1" href="cart.html">ADD TO BAG</a>
                                </div>

                                <ul class="product-info-list">
                                    <li> <span>SKU:</span> D32-5H23</li>
                                    <li> <span>Category:</span> <a href="shop-list.html">Sun Care</a></li>
                                    <li> <span>Tags:</span> <a href="product-listing.php">Skin Care</a>, <a
                                            href="product-listing.php">Sun Care</a></li>
                                </ul>

                                <div class="payment-method">
                                    <h6>Safe Checkout</h6>
                                    <ul class="payment-card-list">
                                        <li><img src="assets/image/hair-salon/product/visa.png" alt=""></li>
                                        <li><img src="assets/image/hair-salon/product/discover.png" alt=""></li>
                                        <li><img src="assets/image/hair-salon/product/master-card.png" alt=""></li>
                                        <li><img src="assets/image/hair-salon/product/stripe.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="product-page pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-30">
                <div class="category-and-select-area">
                    <p> Showing <span>09</span> Results of <span>20</span> Products</p>
                    <div class="select-area">
                        <h6>Sort By:</h6>
                        <select>
                            <option value="1">POPULAR</option>
                            <option value="2">Populer Post</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-xl-4 gy-5">
            <div class="col-xl-3 col-lg-4 order-lg-1 order-2">
                <div class="shop-sidebar wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="single-widgets widget_search mb-25">
                        <form>
                            <div class="wp-block-search__inside-wrapper ">
                                <input type="search" id="wp-block-search__input-1" class="wp-block-search__input"
                                    name="s" value="" placeholder="Search Product" required="">
                                <button type="submit" class="wp-block-search__button">
                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.7425 10.3418C12.7107 9.0205 13.1444 7.38236 12.9567 5.75508C12.769 4.1278 11.9739 2.63139 10.7303 1.56522C9.48666 0.49905 7.88635 -0.0582469 6.2495 0.0048239C4.61265 0.0678947 3.05997 0.746681 1.90209 1.90538C0.744221 3.06409 0.0665459 4.61725 0.00464636 6.25415C-0.0572531 7.89104 0.501188 9.49095 1.56825 10.7338C2.63531 11.9766 4.13229 12.7707 5.7597 12.9572C7.38711 13.1438 9.02494 12.7089 10.3455 11.7397H10.3445C10.3745 11.7797 10.4065 11.8177 10.4425 11.8547L14.2924 15.7046C14.4799 15.8922 14.7342 15.9977 14.9995 15.9977C15.2647 15.9978 15.5192 15.8926 15.7068 15.7051C15.8944 15.5176 15.9999 15.2632 16 14.9979C16.0001 14.7327 15.8948 14.4782 15.7073 14.2906L11.8575 10.4408C11.8217 10.4046 11.7833 10.3711 11.7425 10.3408V10.3418ZM12.0004 6.4979C12.0004 7.22015 11.8582 7.93532 11.5818 8.60258C11.3054 9.26985 10.9003 9.87614 10.3896 10.3868C9.87889 10.8975 9.2726 11.3027 8.60533 11.5791C7.93807 11.8554 7.2229 11.9977 6.50065 11.9977C5.77841 11.9977 5.06324 11.8554 4.39597 11.5791C3.72871 11.3027 3.12242 10.8975 2.61171 10.3868C2.10101 9.87614 1.6959 9.26985 1.41951 8.60258C1.14312 7.93532 1.00086 7.22015 1.00086 6.4979C1.00086 5.03927 1.5803 3.64037 2.61171 2.60896C3.64312 1.57755 5.04202 0.99811 6.50065 0.99811C7.95929 0.99811 9.35818 1.57755 10.3896 2.60896C11.421 3.64037 12.0004 5.03927 12.0004 6.4979Z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="single-widgets style-2 mb-25">
                        <div class="widget-title">
                            <h5>Cart</h5>
                        </div>
                        <div class="cart-menu">
                            <ul class="product-list">
                                <li class="single-product">
                                    <div class="product-img">
                                        <img src="assets/image/beauty-spa/product-page-sidebar/sidebar-image.png"
                                            alt="">
                                        <button type="reset" class="close-btn"><i class="bi bi-x"></i></button>
                                    </div>
                                    <div class="content">
                                        <h6><a href="product-details.php">ordinary niacinamide 10% + zinc 1%</a>
                                        </h6>
                                        <span>2 x $190.00</span>
                                    </div>
                                </li>
                                <li class="single-product">
                                    <div class="product-img">
                                        <img src="assets/image/beauty-spa/product-page-sidebar/sidebar-image2.png"
                                            alt="">
                                        <button type="reset" class="close-btn"><i class="bi bi-x"></i></button>
                                    </div>
                                    <div class="content">
                                        <h6><a href="product-details.php">ordinary niacinamide 10% + zinc 1%</a>
                                        </h6>
                                        <span>1 x $148.00</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="total-price">
                                <span>Subtotal</span>
                                <strong>$528.00</strong>
                            </div>
                            <div class="btn-area">
                                <a href="cart.html" class="primary-btn1 black mb-20">View Cart
                                    <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                            stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                                <a href="checkout.html" class="primary-btn1">
                                    Processed Checkout
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <div class="main">

                        <div class="price-input-container">
                            <div class="price-input">
                                <div class="price-field">
                                    <input type="number"
                                        class="min-input"
                                        value="2500">
                                </div>
                                <div class="price-field">
                                    <input type="number"
                                        class="max-input"
                                        value="8500">
                                </div>
                            </div>
                            <div class="slider-container">
                                <div class="price-slider">
                                </div>
                            </div>
                        </div>

                        <!-- Slider -->
                        <div class="range-input">
                            <input type="range"
                                class="min-range"
                                min="0"
                                max="10000"
                                value="2500"
                                step="1">
                            <input type="range"
                                class="max-range"
                                min="0"
                                max="10000"
                                value="8500"
                                step="1">
                        </div>
                    </div>
                    <div class="single-widgets style-2 mb-25">
                        <div class="widget-title">
                            <h5>Category</h5>
                        </div>
                        <div class="checkbox-container">
                            <ul>
                                <li>
                                    <label class="containerss">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>skincare (05)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerss">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>makeup (10)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerss">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>hair oil (06)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerss">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>spa serum (03)</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="containerss">
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                        <span>sun care (10)</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widgets style-2">
                        <div class="widget-title">
                            <h5>Tag:</h5>
                        </div>
                        <p class="wp-block-tag-cloud">
                            <a href="product.html">Shoe,</a>
                            <a href="product.html">Watch,</a>
                            <a href="product.html">Fashion,</a>
                            <a href="product.html">Perfume,</a>
                            <a href="product.html">Printing,</a>
                            <a href="product.html">sun care</a>
                        </p>
                    </div>
                </div>


            </div>
            <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                <div class="row gy-5 mb-70">
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/spa-product-image.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">Ordinary Niacinamide
                                        10% + Zinc 1%</a></h4>
                                <span>$545.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/spa-product-image2.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">EltaMD UV Clear Broad-Spectrum SPF 46</a></h4>
                                <span>$545.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/spa-product-image3.png" alt="">
                                </a>
                                <span class="batch">SALE!</span>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">Cerave Hydrating Facial Cleanser</a></h4>
                                <span>$767.0 <del>$837.0</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/product-page/spa-product-image5.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">olaplex hair perfector repairing treatment</a></h4>
                                <span>$345.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/product-page/spa-product-image6.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">skinActive micellar cleansing water</a></h4>
                                <span>$588.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product-details.php">
                                    <img src="assets/image/beauty-spa/spa-product-image4.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">SkinActive Micellar
                                        Cleansing Water</a></h4>
                                <span>$234.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product.html">
                                    <img src="assets/image/beauty-spa/product-page/spa-product-image7.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">cerave hydrating facial cleanser</a></h4>
                                <span>$234.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product.html">
                                    <img src="assets/image/beauty-spa/product-page/spa-product-image8.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">opi nail envy nail strengthener</a></h4>
                                <span>$200.0 <del>$234.0</del></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="spa-product-card hover-img">
                            <div class="spa-product-image">
                                <a href="product.html">
                                    <img src="assets/image/beauty-spa/product-page/spa-product-image9.png" alt="">
                                </a>
                                <div class="view-and-cart-area">
                                    <ul>
                                        <li><span>Quick View</span>
                                            <a class="view" data-bs-toggle="modal" data-bs-target="#product-view">

                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18 9C18 9 14.625 2.8125 9 2.8125C3.375 2.8125 0 9 0 9C0 9 3.375 15.1875 9 15.1875C14.625 15.1875 18 9 18 9ZM1.31963 9C1.86275 8.17266 2.48846 7.40259 3.18712 6.70162C4.635 5.2515 6.615 3.9375 9 3.9375C11.385 3.9375 13.3639 5.2515 14.814 6.70162C15.5127 7.40259 16.1384 8.17266 16.6815 9C16.617 9.0975 16.5439 9.2055 16.4621 9.324C16.0853 9.864 15.5284 10.584 14.814 11.2984C13.3639 12.7485 11.3839 14.0625 9 14.0625C6.61613 14.0625 4.63613 12.7485 3.186 11.2984C2.48734 10.5974 1.86275 9.82734 1.31963 9Z"></path>
                                                    <path d="M9 6.1875C8.25408 6.1875 7.53871 6.48382 7.01126 7.01126C6.48382 7.53871 6.1875 8.25408 6.1875 9C6.1875 9.74592 6.48382 10.4613 7.01126 10.9887C7.53871 11.5162 8.25408 11.8125 9 11.8125C9.74592 11.8125 10.4613 11.5162 10.9887 10.9887C11.5162 10.4613 11.8125 9.74592 11.8125 9C11.8125 8.25408 11.5162 7.53871 10.9887 7.01126C10.4613 6.48382 9.74592 6.1875 9 6.1875ZM5.0625 9C5.0625 7.95571 5.47734 6.95419 6.21577 6.21577C6.95419 5.47734 7.95571 5.0625 9 5.0625C10.0443 5.0625 11.0458 5.47734 11.7842 6.21577C12.5227 6.95419 12.9375 7.95571 12.9375 9C12.9375 10.0443 12.5227 11.0458 11.7842 11.7842C11.0458 12.5227 10.0443 12.9375 9 12.9375C7.95571 12.9375 6.95419 12.5227 6.21577 11.7842C5.47734 11.0458 5.0625 10.0443 5.0625 9Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="whistlist.html">
                                                <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3883 16.875H4.61328C2.75703 16.875 1.23828 15.3562 1.23828 13.5V13.3875L1.57578 4.3875C1.63203 2.53125 3.15078 1.125 4.95078 1.125H13.0508C14.8508 1.125 16.3695 2.53125 16.4258 4.3875L16.7633 13.3875C16.8195 14.2875 16.482 15.1313 15.8633 15.8063C15.2445 16.4812 14.4008 16.875 13.5008 16.875H13.3883ZM4.95078 2.25C3.71328 2.25 2.75703 3.20625 2.70078 4.3875L2.36328 13.5C2.36328 14.7375 3.37578 15.75 4.61328 15.75H13.5008C14.1195 15.75 14.682 15.4688 15.0758 15.0188C15.4695 14.5688 15.6945 14.0062 15.6945 13.3875L15.357 4.3875C15.3008 3.15 14.3445 2.25 13.107 2.25H4.95078Z"></path>
                                                    <path d="M9 7.875C6.80625 7.875 5.0625 6.13125 5.0625 3.9375C5.0625 3.6 5.2875 3.375 5.625 3.375C5.9625 3.375 6.1875 3.6 6.1875 3.9375C6.1875 5.5125 7.425 6.75 9 6.75C10.575 6.75 11.8125 5.5125 11.8125 3.9375C11.8125 3.6 12.0375 3.375 12.375 3.375C12.7125 3.375 12.9375 3.6 12.9375 3.9375C12.9375 6.13125 11.1937 7.875 9 7.875Z"></path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="spa-product-content text-center">
                                <ul class="star">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                                <h4><a href="product-details.php">kiehl's creamy eye treatment with avocado</a></h4>
                                <span>$345.0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div
                            class="page-navigation-area d-flex flex-wrap align-items-center justify-content-between">
                            <div class="prev-next-btn">
                                <a href="#">
                                    <svg width="7" height="14" viewBox="0 0 7 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                    </svg>
                                    prev
                                </a>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a href="#">01</a></li>
                                <li><a href="#">02</a></li>
                                <li><a href="#">03</a></li>
                            </ul>
                            <div class="prev-next-btn">
                                <a href="#">
                                    next
                                    <svg width="7" height="14" viewBox="0 0 7 14"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

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


<!-- Mirrored from demo.egenslab.com/html/buret/preview/skin-care/product-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 12:36:56 GMT -->

</html>