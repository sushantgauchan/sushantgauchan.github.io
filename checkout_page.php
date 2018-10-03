<?php
/**
 * Created by PhpStorm.
 * User: Sushant Gauchan
 * Date: 6/9/2018
 * Time: 5:22 PM
 */
include 'header.php' ?>

<div id="checkout-page">
    <section class="checkout-section">
        <div class="custom-container add-padding-top small-width-layout">
            <div class="section-content">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#cart" data-toggle="tab" aria-controls="cart" role="tab" title="Cart">
                                    <span class="round-tab">
                                        <i class="fa fa-shopping-cart"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#billing_address" data-toggle="tab" aria-controls="Billing Address" role="tab" title="Billing Address">
                                    <span class="round-tab">
                                        <i class="fa fa-truck" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#confirm_checkout" data-toggle="tab" aria-controls="Confirm Checkout" role="tab" title="Confirm Checkout">
                                    <span class="round-tab">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>


                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="cart">
                                <div class="wizard-content">
                                    <div class="title">
                                        <h2>Your Cart</h2>
                                    </div>

                                    <div class="content">
                                        <div class="cart-container">
                                            <div class="cart-table">
                                                <table>
                                                    <thead>
                                                    <tr>
                                                        <th>Remove</th>
                                                        <th>Product</th>
                                                        <th>Product Name</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td data-title="Remove"><i class="fa fa-close"></i></td>
                                                        <td data-title="Product"><span><img src="img/devices/acc/adidas_nmd.png"></span></td>
                                                        <td data-title="Name">Adidas NMB R1</td>
                                                        <td data-title="Price">15,000</td>
                                                        <td data-title="Quantity"><input type="number" min="1" value="1"></td>
                                                        <td data-title="Total">15,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-title="Remove"><i class="fa fa-close"></i></td>
                                                        <td data-title="Product"><span><img src="img/devices/laptop/mbp13.png"></span></td>
                                                        <td data-title="Name">Apple Macbook pro 13'</td>
                                                        <td data-title="Price">1,90,000</td>
                                                        <td data-title="Quantity"><input type="number" min="1" value="1"></td>
                                                        <td data-title="Total">1,90,000</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="cart-table-total">
                                                <!--<div class="coupon-field">
                                                    <div class="form-container">
                                                        <div class="fields">
                                                            <input placeholder="Coupon Code">
                                                        </div>
                                                        <div class="form-action">
                                                            <input type="submit" value="Apply Code" class="pr-btn square-border">
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="total-field">
                                                    <p>Subtotal: Rs 2,99,000</p>
                                                    <button type="button" class="pr-btn square-border next-step">Proceed to checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="billing_address">
                                <div class="wizard-content">
                                    <div class="title">
                                        <h2>Billing Address</h2>
                                    </div>
                                    <div class="content">
                                        <div class="billing-block-container">
                                            <div class="block-item billing-address">
                                                <div class="common-form">
                                                    <form>
                                                        <div class="fields">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="First Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Contact Number">
                                                            </div>
                                                            <div class="form-group">
                                                                <select>
                                                                    <option>Select Country</option>
                                                                    <option>Nepal</option>
                                                                    <option>China</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="City">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Address">
                                                            </div>

                                                            <div class="form-group">
                                                                Payment Option
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="radio" name="pay_option" value="Cash on Delivery" id="cash_on_delivery">
                                                                <label for="cash_on_delivery">Cash on delivery</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="radio" name="pay_option" value="Store Pickup" id="store_pick_up">
                                                                <label for="store_pick_up">Store Pickup</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-action">
                                                            <button type="button" class="pr-btn round-red next-step">Place Order</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="block-item your-order">
                                                <div class="common-order-list-table">
                                                    <div class="table-header">
                                                        <h2>Your Order</h2>
                                                    </div>
                                                    <div class="table-container">
                                                        <table>
                                                            <thead>
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Apple Macbook Pro 13' x 1</td>
                                                                    <td>Rs. 1,95,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Adidas NMD R1 x 2</td>
                                                                    <td>Rs. 15,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Razer Lancehead x 1</td>
                                                                    <td>Rs. 12,000</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td>Sub Total</td>
                                                                    <td>Rs. 2,10,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td>Rs. 2,10,000</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" role="tabpanel" id="confirm_checkout">
                                <div class="wizard-content">
                                    <div class="title conform">
                                        <h2>Thank you. Your order has been received.</h2>
                                    </div>

                                    <div class="content">
                                        <div class="conformation-container">
                                            <div class="order-number">
                                                <ul>
                                                    <li>
                                                        Order number:<strong>308</strong>
                                                    </li>

                                                    <li>
                                                        Date:<strong>July 25, 2018</strong>
                                                    </li>

                                                    <li>
                                                        Total:<strong>NRS </span>&nbsp;650.00</span></strong>
                                                    </li>


                                                    <li>
                                                        Payment method:<strong>Cash on delivery</strong>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="table-container">
                                                <div class="common-order-list-table">
                                                    <div class="table-header">
                                                        <h2>Your Order</h2>
                                                    </div>
                                                    <div class="table-container">
                                                        <table>
                                                            <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Total</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>Apple Macbook Pro 13' x 1</td>
                                                                <td>Rs. 1,95,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Adidas NMD R1 x 2</td>
                                                                <td>Rs. 15,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Razer Lancehead x 1</td>
                                                                <td>Rs. 12,000</td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <td>Sub Total</td>
                                                                <td>Rs. 2,10,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Total</td>
                                                                <td>Rs. 2,10,000</td>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
<?php include 'footer.php' ?>