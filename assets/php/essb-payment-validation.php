<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/*
 * Plugin Name: sofizpay-qr-woocommerce
 * Plugin URI: https://sofizpay.com
 * Description: QR Payments for WooCommerce allows customers to pay using their preferred e-wallets through a QR code generated by SOFIZPAY. 
 * Version: 1.0.0
 * Requires PHP: 7.2
 * Copyright: c 2024 EURL sofizpay
 
 */
function qr_pay_gateway_process_custom_payment()
{
    // Check if the selected payment method is QR Payment Gateway
    if ($_POST['payment_method'] !== 'qr_pay_gateway') {


        return;
    }

                // Include the Stellar SDK
                require_once('./stellar-php-sdk/Soneso/StellarSDK/StellarSDK.php');

                // Initialize the Stellar client
                $server = new \Soneso\StellarSDK\Server('https://horizon.stellar.org');
            
                // Get the Stellar account
                $account = $server->getAccount('GCAZI7YBLIDJWIVEL7ETNAZGPP3LC24NO6KAOBWZHUERXQ7M5BC52DLV');
            
                // Get the payments for the account
                $payments = $account->getPayments();

            // Convert the payments object to a string
            $payments_string = print_r($payments, true);

            




}