<div class="header-wrapicon2">
    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
    <span class="header-icons-noti">0</span>

    <!-- Header cart noti -->
    <div class="header-cart header-dropdown">
        <ul class="header-cart-wrapitem">
            <?php
            if(!empty($products)){
                foreach ($products as $pr){
                    ?>
                    <li class="header-cart-item">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt">
                            <a href="#" class="header-cart-item-name">
                                <?= $pr['title'];?>
                            </a>

                            <span class="header-cart-item-info">
											1 x $17.00
										</span>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>

        </ul>
        <div class="header-cart-total">
            Total: $75.00
        </div>
        <div class="header-cart-buttons">
            <div class="header-cart-wrapbtn">
                <!-- Button -->
                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    View Cart
                </a>
            </div>

            <div class="header-cart-wrapbtn">
                <!-- Button -->
                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                    Check Out
                </a>
            </div>
        </div>
    </div>
</div>