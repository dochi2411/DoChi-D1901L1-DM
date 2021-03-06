<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/lost-password-confirmation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();
wc_print_notice( __( 'Password reset email has been sent.', 'soma' ) );
?>

<div class="row padding-top_md padding-bottom_xl">

	<div class="padding-bottom_sm col-12">
		<h1 class="margin-bottom_0 heading-title text-align_center"><?php echo esc_html__('My Account', 'soma') ?></h1>
	</div>

	<div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
		<p class="text-align_center"><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'A password reset email has been sent to the email address on file for your account, but may take several minutes to show up in your inbox. Please wait at least 10 minutes before attempting another reset.', 'soma' ) ); ?></p>
	</div>

</div>
