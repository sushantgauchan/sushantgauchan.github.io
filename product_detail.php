<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 7/15/2018
 * Time: 8:03 AM
 */
include ('header.php') ?>

<div id="product-detail-page">
    <section class="product-detail-section">
        <div class="custom-container small-width-layout add-padding-top">
            <div class="section-content">
                <div class="product-summary-gallery-wrapper">
                    <div class="product-gallery-container">
                        <div class="product-gallery-slider">
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/new_dimension/Product%20Ratio.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-2.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-3.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-4.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-5.png">
                                </div>
                            </div>
                        </div>

                        <div class="product-gallery-nav">
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-2.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-3.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-4.png">
                                </div>
                            </div>
                            <div class="product-gallery-item">
                                <div class="inner">
                                    <img src="img/devices/laptop/mbp13-5.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-summary-container">
                        <div class="summary-block">
                            <div class="product-name">
                                <h2>Macbook pro 2017 13inch</h2>
                            </div>

                            <div class="product-rating-price">
                                <div class="common-price">
                                    <p>Rs:91,000</p>
                                </div>
                            </div>

                            <div class="product-description">
                                <p>Maecenas lacus urna, rutrum at ligula a, lacinia fermentum lorem. Quisque ut pellentesque velit, eget dictum augue. Sed faucibus congue eros, sed egestas ligula. Nulla facilisi. Praesent interdum, est in ullamcorper sodales, velit lacus volutpat nisl, at placerat leo lacus id mauris.</p>
                            </div>

                            <div class="product-action">
                                <div class="action-item">
                                    <div class="common-quantity-btn">
                                        <div class="input-group plus-minus-input">
                                            <span class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</span>
                                            <input type="number" id="number" value="0" />
                                            <span class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="action-item">
                                    <button class="pr-btn">Add To Cart</button>
                                </div>
                            </div>

                        </div>

                        <div class="stock-block">
                            <div class="product-stock-table">
                                <table>
                                    <tr>
                                        <td>Stock</td>
                                        <td>Available</td>
                                    </tr>

                                    <tr>
                                        <td>Sku</td>
                                        <td>PR034</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>Laptops</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="product-share-option">
                                <ul>
                                    <li><i class="fa fa-share-alt" aria-hidden="true"></i>Share</li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="additional-detail-section">
        <div class="custom-container add-padding-top smaller-width-layout">
            <div class="section-title">
                <!-- This is for mobile screen -->
                <div class="common-select-nav">
                    <select>
                        <option data-target="#product-more-info">Description</option>
                        <option data-target="#product-specification">Specification</option>
                        <option data-target="#product-review">Review</option>
                    </select>
                </div>

                <!-- This is laptop screen -->
                <ul class="nav nav-tabs common-remove-tab-style" role="tablist">
                    <li class="active">
                        <a href="#product-more-info" role="tab" data-toggle="tab">
                            Description
                        </a>
                    </li>
                    <li>
                        <a href="#product-specification" role="tab" data-toggle="tab">
                            Specification
                        </a>
                    </li>
                    <li>
                        <a href="#product-review" role="tab" data-toggle="tab">
                            Review(2)
                        </a>
                    </li>
                </ul>
            </div>

            <div class="section-content">
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="product-more-info">
                        <p>Fusce non lectus mollis, ullamcorper ante ac, consectetur elit. Maecenas vitae lorem ullamcorper, suscipit orci eu, malesuada risus. Curabitur in magna vitae elit eleifend ultricies. Pellentesque semper elit lacus, vitae tincidunt nibh imperdiet eget. Sed bibendum leo et elit feugiat lobortis. Duis risus metus, laoreet vel finibus vitae, viverra vitae nulla. Etiam dolor dolor, tempus in cursus ac, tincidunt quis dolor.</p><br>
                        <p><strong>1. Curabitur efficitur ante arcu</strong>, vel aliquam eros hendrerit vitae. Fusce mauris urna, sollicitudin quis tempor id, vestibulum a nisl.</p>
                        <p><strong>2. Aliquam sollicitudin tempus massa</strong>, eu accumsan odio efficitur non. Maecenas egestas congue nisl sed ultricies. Aliquam dignissim lobortis augue, nec dapibus dui laoreet ac.</p>
                        <p><strong>3.&nbsp;Phasellus quis libero ante.</strong> Proin scelerisque euismod lacus molestie egestas.</p>
                        <p><em>Aenean dignissim mauris fringilla libero venenatis, tempor condimentum massa efficitur.</em></p>
                    </div>

                    <div class="tab-pane fade" id="product-specification">
                        <div class="specification-table">
                            <table>
                                <tbody>
                                <tbody>
                                <tr>
                                    <td>Technology</td>
                                    <td>GSM / HSPA / LTE </td>
                                </tr>
                                <tr>
                                    <td>ChipSet</td>
                                    <td>Mediatek MT6762 Helio P22</td>
                                </tr>
                                <tr>
                                    <td>weight</td>
                                    <td>	146.5 g </td>
                                </tr>
                                <tr>
                                    <td>Sim Type</td>
                                    <td>dual sim</td>
                                </tr>
                                <tr>
                                    <td>Resolution</td>
                                    <td>720 x 1520 pixels,</td>
                                </tr>
                                <tr>
                                    <td>Display Size</td>
                                    <td>6inch</td>
                                </tr>
                                <tr>
                                    <td>Operating System</td>
                                    <td>Android 8.1 (Oreo)</td>
                                </tr>
                                <tr>
                                    <td>CPU/Processor</td>
                                    <td>	Octa-core 2.0 GHz Cortex-A53</td>
                                </tr>
                                <tr>
                                    <td>Card Slot</td>
                                    <td>microSD, up to 256 GB</td>
                                </tr>
                                <tr>
                                    <td>RAM</td>
                                    <td>3GB</td>
                                </tr>
                                <tr>
                                    <td>Internal Memory</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>Primary Camera</td>
                                    <td>13MP</td>
                                </tr>
                                <tr>
                                    <td>Secondary Camera</td>
                                    <td>5 MP</td>
                                </tr>
                                <tr>
                                    <td>Battery</td>
                                    <td>3260mAh</td>
                                </tr>
                                <tr>
                                    <td>Color</td>
                                    <td>Black Gold</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="product-review">
                        <div class="review-container">
                            <div class="comment-count-container">
                                <h4>Comments (2)</h4>
                            </div>
                            <div class="review-form-container">
                                <form>
                                    <div class="fields">
                                        <div class="form-group">
                                            <textarea placeholder="Your Review"></textarea>
                                        </div>
                                        <div class="common-rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>

                                    <div class="form-action">
                                        <input type="Submit" value="Post Review" class="pr-btn square-border">
                                    </div>
                                </form>
                            </div>

                            <div class="review-list-container">
                                <div class="review-item">
                                    <div class="image-container">
                                        <div class="image" style="background-image: url('img/placeholder/placeholder-person.jpg')"></div>
                                    </div>
                                    <div class="text-container">
                                        <div class="name">
                                            <h4>Steven Gerrard</h4>
                                        </div>
                                        <div class="rating-time">
                                            <div class="common-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="time">
                                                <p>4month ago</p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <p>This is a very nice product. The fit and finish is excellent. Trualy a pro device.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="image-container">
                                        <div class="image" style="background-image: url('img/placeholder/placeholder-person.jpg')"></div>
                                    </div>
                                    <div class="text-container">
                                        <div class="name">
                                            <h4>Adam Lalana</h4>
                                        </div>
                                        <div class="rating-time">
                                            <div class="common-rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="time">
                                                <p>4month ago</p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <p>Maecenas lacus urna, rutrum at ligula a, lacinia fermentum lorem. Quisque ut pellentesque velit, eget dictum augue. Sed faucibus congue eros, sed egestas ligula. Nulla facilisi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="common-products-section">
        <div class="custom-container">
            <div class="section-title">
                <h3>Related Products</h3>
            </div>
            <div class="section-content">
                <div class="common-product-container">
                    <div class="product-item">
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
                    <div class="product-item">
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
                    <div class="product-item">
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
                    <div class="product-item">
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
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }

    function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('number').value = value;
    }

</script>
<?php include ('footer.php')?>






