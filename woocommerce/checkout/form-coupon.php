<?php

/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.4
 */

defined('ABSPATH') || exit;

if (!wc_coupons_enabled()) { // @codingStandardsIgnoreLine.
    return;
}

?>
<div class="woocommerce-form-coupon-toggle">
    <?php wc_print_notice(apply_filters('woocommerce_checkout_coupon_message', esc_html__('Have a coupon?', 'woocommerce') . ' <a href="#" title="Open coupon form" class="showcoupon" >' . esc_html__('Click here to enter your code', 'woocommerce') . '</a>'), 'notice'); ?>
</div>

<form id="coupon-form" class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">
    <p><?php esc_html_e('If you have a coupon code, please apply it below.', 'woocommerce'); ?></p>

    <div class="coupon stuffs-input has-label mxw-400px auto-margin">
        <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label>
        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('Coupon code', 'woocommerce'); ?>" />
        <button type="submit" class="button has-icon align-self-center" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>">
            <i class="stuffs-add_circle_outline"></i>
            <span class="tooltip__top">
                Apply coupon
            </span>
        </button>
        <?php do_action('woocommerce_cart_coupon'); ?>
    </div>

    <p class="form-row form-row-last">
        <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_html_e('Apply coupon', 'woocommerce'); ?></button>
    </p>

    <div class="clear"></div>
</form>