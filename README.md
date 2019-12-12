# WooCommerce Lite Checkout

## Description

Checkout Lite provides an eCommerce merchants to offer finance option to their customers. Checkout Lite provides a quick and easy integration for merchants while keeping the customers within the purchase funnel. The Snap Finance banner on the PDP and Checkout page leads to a consumer loan application. When approved the customer will receive a virtual card to use at the checkout.
Snap Finance�s WooCommerce checkout plugin offers an easy way to enable your WooCommerce powered eCommerce store to offer Lease to Buy finance options.

## Installation

### From WordPress Admin

1.  Download the zip from Github.
2.  Login to WordPress admin and go to Add New Plugin.
3.  Then click on Upload Plugin and select the downloaded zip and click Install Now.

### Manual Installation

1.  Pull the code from the repository and paste/upload it to `<wordpress-root>/wp-content/plugins`folder.
2.  Login to WordPress admin and go to Plugins.
3.  Activate the plugin.

## Plugin Configuration

1.  Login to WordPress admin and open WooCommerce Settings.
2.  Click on payment tab and then on ‘Snap Finance’ plugin.

3.  Configure Plugin:-

    1.  Login to WordPress admin and open WooCommerce Settings.
    2.  Click on payment tab and then on 'Snap Finance Lite' plugin.
        1.  Enable/Disable – Tick to enable the module.
        2.  Title – Title you want to display at checkout page
        3.  Description – Enter appropriate description to display at checkout.
        4.  Mode - 'Stage' for sandbox/test operation and 'Live' for live operation.
        5.  Merchant Key URL - Configure Merchant Key URL for Snap Finance Lite.
        6.  Banner Style - Select Banner style you want to get appear on your website pages / product pages etc. just place this shortcode [snap_finance_lite_banner] on particular page / post to display it
        7.  Logo Style - There are 5 different logo style available, you can display it on checkout page.Now click save and customer will get Snap Finance Lite option during checkout process

4.  How to use banner on your WordPress website pages / post ?

    1.  Copy short code [snap_finance_lite_banner] and paste it on your WordPress website page like shown in below screenshot.
    2.  Click on publish button and then click on view page button
    3.  You will see banner on that page with your selected design from plugin settings
    4.  After Clicking on banner you will see a popup with Apply button on it
    5.  By Clicking Apply you will redirected to Snap Finance URL for further procedure.

**Note** : Always keep a backup of your existing WooCommerce installation including Mysql Database, before installing a new plugin.

## Changelog

### 1.0.0

-   Validation updated on payment settings page.
-   Change in plugin description.
-   Change in CSS of popup.
-   Read only field for plugin title and description.
-   Change in file naming convention.
