<?php include ROOT. '/views/layouts/header.php';?>
    <div class="banner">
        <div class="container">
            <div class="banner-bottom">
                <div class="banner-bottom-left">
                    <h2>B<br>U<br>Y</h2>
                </div>
                <div class="banner-bottom-right">
                    <div  class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="banner-info">
                                    <h3>Smart But Casual</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Shop Online</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Pack your Bag</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    <script src="/template/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager:true,
                                nav:false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="shop">
                <a href="single.html">SHOP COLLECTION NOW</a>
            </div>
        </div>
    </div>
    <!-- content-section-starts-here -->
    <div class="container">
        <div class="main-content">
            <div class="online-strip">
                <div class="col-md-4 follow-us">
                    <h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
                </div>
                <div class="col-md-4 shipping-grid">
                    <div class="shipping">
                        <img src="/template/images/shipping.png" alt="" />
                    </div>
                    <div class="shipping-text">
                        <h3>Free Shipping</h3>
                        <p>on orders over $ 199</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <p>Order online</p>
                    <h3>Tel:999 4567 8902</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        <div class="products-grid">
            <header>
                <h3 class="head text-center">Latest Products</h3>
            </header>
            <?php foreach($products as $item): ?>
            <div class="col-md-4 product simpleCart_shelfItem text-center">
                <a href="single.html"><img src="/template/images/p1.jpg" alt="" /></a>
                <div class="mask">
                    <a href="/product/<?php echo $item['id'];?>">Quick View</a>
                </div>
                <a class="product_name" href="/product/<?php echo $item['id'];?>"><?php echo $item['name'];?></a>
                <p><a class="item_add" href="#"><i></i> <span class="item_price">$<?php echo $item['price'];?></span></a></p>
            </div>
            <?php endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php include ROOT. '/views/layouts/footer.php';?>