<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 7/12/2018
 * Time: 7:22 AM
 */
include 'header.php' ?>

<div id="shop-page">
    <section class="shop-section">
        <div class="custom-container add-padding-top">
            <div class="product-shop-container">
                <div class="shop-block side-block">
                    <div class="inner">
                        <div class="common-close-container">
                            <i class="fa fa-times"></i>
                        </div>
                        <div class="filter-item">
                            <div class="title">
                                <h4>Brand</h4>
                            </div>
                            <div class="content">
                                <div class="common-form">
                                    <form>
                                        <div class="fields">
                                            <div class="form-group">
                                                <input type="checkbox" value="Apple" id="Apple">
                                                <label for="Apple">Apple</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="Samsung" id="Samsung">
                                                <label for="Samsung">Samsung</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="LG" id="LG">
                                                <label for="LG">LG</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="onePlus" id="onePlus">
                                                <label for="onePlus">1+</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="Oppo" id="Oppo">
                                                <label for="Oppo">Oppo</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="Vivo" id="Vivo">
                                                <label for="Vivo">Vivo</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" value="Mi" id="Mi">
                                                <label for="Mi">Mi</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="title">
                                <h4>Price</h4>
                            </div>
                            <div class="content">
                                <div class="common-form">
                                    <form>
                                        <div class="fields">
                                <div class="form-group">
                                    <input type="checkbox" value="Samsung" id="Samsunga">
                                    <label for="Samsunga">Below 80,000</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" value="Apple" id="Appleb">
                                    <label for="Appleb">Below 20000</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" value="LG" id="LGc">
                                    <label for="LGc">10,0000</label>
                                </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="title">
                                <h4>Size</h4>
                            </div>
                            <div class="content">
                                <div class="size-chart">
                                    <ul>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#">6.5</a></li>
                                        <li><a href="#">7</a></li>
                                        <li><a href="#">7.5</a></li>
                                        <li><a href="#">8</a></li>
                                        <li><a href="#">8.5</a></li>
                                        <li><a href="#">9</a></li>
                                        <li><a href="#">9.5</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#">10.5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<div class="filter-item">
                            <div class="title">
                                <h4>Color</h4>
                            </div>
                            <div class="content">
                                <div class="color">
                                    <ul>
                                        <li><a href="#" style="background-color: #ffeaa7"></a></li>
                                        <li><a href="#" style="background-color: #00b894"></a></li>
                                        <li><a href="#" style="background-color: #ff7675"></a></li>
                                        <li><a href="#" style="background-color: #74b9ff"></a></li>
                                        <li><a href="#" style="background-color: #636e72"></a></li>
                                        <li><a href="#" style="background-color: #81ecec"></a></li>
                                        <li><a href="#" style="background-color: #dfe6e9"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="shop-block main-block">
                    <div class="filer-toggle"> <!-- Filter toggle for mobile menu -->
                        <p><img src="img/logo_icons/filter.svg"> Filters</p>
                    </div>
                    <div class="common-product-container">
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="product-sale-stock">
                                        <span class="sale">Sale - 10%</span>
                                        <!--<span>Out of Stock</span>-->
                                    </div>

                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/hoodie.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Tshirt</h5>
                                        </div>
                                        <div class="common-price add-sale-price">
                                            <p>Rs: 2,500</p>
                                            <p>Rs: 2,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/adidas_nmd.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Adidas Nmd R1</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 10,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/airpods.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Apple Air Pod</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 20,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="product-sale-stock">
                                        <!--<span class="sale">Sale - 10%</span>-->
                                        <span>Out of Stock</span>
                                    </div>

                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/laptop/mbp13.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Macbook Pro 13(Touch Bar)</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/razer_lancehead.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Razer Lancehead</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/razer-backpack.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Backpack</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="product-sale-stock">
                                        <!--<span class="sale">Sale - 10%</span>-->
                                        <span>Out of Stock</span>
                                    </div>

                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/razer_core.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Razer Core</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/laptop/razer_blade_15.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Blade 15</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="product-sale-stock">
                                        <span class="sale">Sale - 10%</span>
                                        <!--<span>Out of Stock</span>-->
                                    </div>

                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/watch.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Watch</h5>
                                        </div>
                                        <div class="common-price add-sale-price">
                                            <p>Rs:91,000</p>
                                            <p>Rs:60,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="product-sale-stock">
                                        <!--<span class="sale">Sale - 10%</span>-->
                                        <span>Out of Stock</span>
                                    </div>

                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/wireless_charger.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Samsung  Chi Wireless Pad</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/huawei_p10.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Huawei P10</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 91,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item normal">
                            <div class="product-inner">
                                <div class="image-container">
                                    <div class="image-inner">
                                        <a href="product_detail.php">
                                            <img src="img/devices/acc/tv.png">
                                        </a>
                                        <div class="add-to-cart">
                                            <div class="inner">
                                                <i class="fa fa-shopping-cart"></i> Add to cart
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-container">
                                    <a href="product_detail.php">
                                        <div class="name">
                                            <h5>Samsung Curved Tv</h5>
                                        </div>
                                        <div class="common-price">
                                            <p>Rs: 2,30,000</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php'?>
