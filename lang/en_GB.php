<?php

/**
 * English (United Kingdom) language pack
 * @package modules: ecommerce
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('en_GB', $lang) && is_array($lang['en_GB'])) {
	$lang['en_GB'] = array_merge($lang['en_US'], $lang['en_GB']);
} else {
	$lang['en_GB'] = $lang['en_US'];
}

$lang['en_GB']['AccountPage']['Message'] = 'You\'ll need to login before you can access the account page. If you are not registered, you won\'t be able to access it until you\'ll make your first order, otherwise please enter your details below.';
$lang['en_GB']['AccountPage']['NOPAGE'] = 'No AccountPage on this site - please create one !';
$lang['en_GB']['AccountPage.ss']['COMPLETED'] = 'Completed Orders';
$lang['en_GB']['AccountPage.ss']['HISTORY'] = 'Your Order History';
$lang['en_GB']['AccountPage.ss']['INCOMPLETE'] = 'Incomplete Orders';
$lang['en_GB']['AccountPage.ss']['Message'] = 'Please enter your details to login to the account page.<br />This page is only accessible after your first order, when you are assigned a password.';
$lang['en_GB']['AccountPage.ss']['NOCOMPLETED'] = 'No completed orders were found.';
$lang['en_GB']['AccountPage.ss']['NOINCOMPLETE'] = 'No incomplete orders were found.';
$lang['en_GB']['AccountPage.ss']['ORDER'] = 'Order #';
$lang['en_GB']['AccountPage.ss']['READMORE'] = 'Read more on Order #%s';
$lang['en_GB']['AccountPage_order.ss']['BACKTOCHECKOUT'] = 'Click here to go to the checkout page';
$lang['en_GB']['AccountPage_order.ss']['EMAILDETAILS'] = 'A copy of this has been sent to your email address confirming the order details.';
$lang['en_GB']['Cart.ss']['ADDONE'] = 'Add one more of &quot;%s&quot; to your cart';
$lang['en_GB']['Cart.ss']['CheckoutClick'] = 'Click here to go to the checkout';
$lang['en_GB']['Cart.ss']['CheckoutGoTo'] = 'Go to checkout';
$lang['en_GB']['Cart.ss']['HEADLINE'] = 'My Cart';
$lang['en_GB']['Cart.ss']['NOITEMS'] = 'There are no items in your cart';
$lang['en_GB']['Cart.ss']['PRICE'] = 'Price';
$lang['en_GB']['Cart.ss']['READMORE'] = 'Click here to read more on &quot;%s&quot;';
$lang['en_GB']['Cart.ss']['Remove'] = 'Remove &quot;%s&quot; from your cart';
$lang['en_GB']['Cart.ss']['REMOVEALL'] = 'Remove all of &quot;%s&quot; from your cart';
$lang['en_GB']['Cart.ss']['RemoveAlt'] = 'Remove';
$lang['en_GB']['Cart.ss']['REMOVEONE'] = 'Remove one of &quot;%s&quot; from your cart';
$lang['en_GB']['Cart.ss']['SHIPPING'] = 'Shipping';
$lang['en_GB']['Cart.ss']['SUBTOTAL'] = 'Subtotal';
$lang['en_GB']['Cart.ss']['TOTAL'] = 'Total';
$lang['en_GB']['CheckoutPage']['NOPAGE'] = 'No CheckoutPage on this site - please create one !';
$lang['en_GB']['CheckoutPage.ss']['CHECKOUT'] = 'Checkout';
$lang['en_GB']['CheckoutPage.ss']['ORDERSTATUS'] = 'Order Status';
$lang['en_GB']['CheckoutPage.ss']['PROCESS'] = 'Process';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'Click here to go back to the Checkout';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'Checkout';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'If you ordered by cheque you will receive an email with instructions.';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Here are the details you submitted';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Order Incomplete';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['ORDERSTATUS'] = 'Order Status';
$lang['en_GB']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'Process';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'Click here to go back to the Checkout';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'Checkout';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'A copy of this has been sent to your email address confirming the order details.';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['ORDERSTATUS'] = 'Order Status';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'Process';
$lang['en_GB']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Order Successful';
$lang['en_GB']['ChequePayment']['MESSAGE'] = 'Payment accepted via Cheque. Please note : products will not be shipped until payment has been received.';
$lang['en_GB']['FindOrderReport']['DATERANGE'] = 'Date Range';
$lang['en_GB']['MemberForm']['DETAILSSAVED'] = 'Your details have been saved';
$lang['en_GB']['MemberForm']['LOGGEDIN'] = 'You are currently logged in as';
$lang['en_GB']['Order']['INCOMPLETE'] = 'Order Incomplete';
$lang['en_GB']['Order']['SUCCESSFULL'] = 'Order Successful';
$lang['en_GB']['OrderInformation.ss']['ADDRESS'] = 'Address';
$lang['en_GB']['OrderInformation.ss']['AMOUNT'] = 'Amount';
$lang['en_GB']['OrderInformation.ss']['BUYERSADDRESS'] = 'Buyer\'s Address';
$lang['en_GB']['OrderInformation.ss']['CITY'] = 'City';
$lang['en_GB']['OrderInformation.ss']['COUNTRY'] = 'Country';
$lang['en_GB']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Customer Details';
$lang['en_GB']['OrderInformation.ss']['DATE'] = 'Date';
$lang['en_GB']['OrderInformation.ss']['DETAILS'] = 'Details';
$lang['en_GB']['OrderInformation.ss']['EMAIL'] = 'Email';
$lang['en_GB']['OrderInformation.ss']['MOBILE'] = 'Mobile';
$lang['en_GB']['OrderInformation.ss']['NAME'] = 'Name';
$lang['en_GB']['OrderInformation.ss']['ORDERSUMMARY'] = 'Order Summary';
$lang['en_GB']['OrderInformation.ss']['PAYMENTID'] = 'Payment ID';
$lang['en_GB']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Payment Information';
$lang['en_GB']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Method';
$lang['en_GB']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Payment Status';
$lang['en_GB']['OrderInformation.ss']['PHONE'] = 'Phone';
$lang['en_GB']['OrderInformation.ss']['PRICE'] = 'Price';
$lang['en_GB']['OrderInformation.ss']['PRODUCT'] = 'Product';
$lang['en_GB']['OrderInformation.ss']['QUANTITY'] = 'Quantity';
$lang['en_GB']['OrderInformation.ss']['READMORE'] = 'Click here to read more on &quot;%s&quot;';
$lang['en_GB']['OrderInformation.ss']['SHIPPING'] = 'Shipping';
$lang['en_GB']['OrderInformation.ss']['SHIPPINGDETAILS'] = 'Shipping Details';
$lang['en_GB']['OrderInformation.ss']['SHIPPINGTO'] = 'to';
$lang['en_GB']['OrderInformation.ss']['SUBTOTAL'] = 'Sub-total';
$lang['en_GB']['OrderInformation.ss']['TABLESUMMARY'] = 'The contents of your cart are displayed in this form and summary of all fees associated with an order and a rundown of payments options.';
$lang['en_GB']['OrderInformation.ss']['TOTAL'] = 'Total';
$lang['en_GB']['OrderInformation.ss']['TOTALl'] = 'Total';
$lang['en_GB']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'Total outstanding';
$lang['en_GB']['OrderInformation.ss']['TOTALPRICE'] = 'Total Price';
$lang['en_GB']['OrderInformation_Editable.ss']['ADDONE'] = 'Add one more of &quot;%s&quot; to your cart';
$lang['en_GB']['OrderInformation_Editable.ss']['NOITEMS'] = 'There are <strong>no</strong> items in your cart.';
$lang['en_GB']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Order Information';
$lang['en_GB']['OrderInformation_Editable.ss']['PRICE'] = 'Price';
$lang['en_GB']['OrderInformation_Editable.ss']['PRODUCT'] = 'Product';
$lang['en_GB']['OrderInformation_Editable.ss']['QUANTITY'] = 'Quantity';
$lang['en_GB']['OrderInformation_Editable.ss']['READMORE'] = 'Click here to read more on &quot;%s&quot;';
$lang['en_GB']['OrderInformation_Editable.ss']['REMOVEALL'] = 'Remove all of &quot;%s&quot; from your cart';
$lang['en_GB']['OrderInformation_Editable.ss']['REMOVEONE'] = 'Remove one of &quot;%s&quot; from your cart';
$lang['en_GB']['OrderInformation_Editable.ss']['SHIPPING'] = 'Shipping';
$lang['en_GB']['OrderInformation_Editable.ss']['SHIPPINGTO'] = 'to';
$lang['en_GB']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Sub-total';
$lang['en_GB']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'The contents of your cart are displayed in this form and summary of all fees associated with an order and a rundown of payments options.';
$lang['en_GB']['OrderInformation_Editable.ss']['TOTAL'] = 'Total';
$lang['en_GB']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Total Price';
$lang['en_GB']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Address';
$lang['en_GB']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Buyer\'s Address';
$lang['en_GB']['OrderInformation_NoPricing.ss']['CITY'] = 'City';
$lang['en_GB']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'Country';
$lang['en_GB']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Customer Details';
$lang['en_GB']['OrderInformation_NoPricing.ss']['EMAIL'] = 'Email';
$lang['en_GB']['OrderInformation_NoPricing.ss']['MOBILE'] = 'Mobile';
$lang['en_GB']['OrderInformation_NoPricing.ss']['NAME'] = 'Name';
$lang['en_GB']['OrderInformation_NoPricing.ss']['ORDERINFO'] = 'Information for Order #';
$lang['en_GB']['OrderInformation_NoPricing.ss']['PHONE'] = 'Phone';
$lang['en_GB']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'The contents of your cart are displayed in this form and summary of all fees associated with an order and a rundown of payments options.';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Description';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Item';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Order Date';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Order Number';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['PAGETITLE'] = 'Shop Print Orders';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Quantity';
$lang['en_GB']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'The contents of your cart are displayed in this form and summary of all fees associated with an order and a rundown of payments options.';
$lang['en_GB']['OrderInformation_Print.ss']['PAGETITLE'] = 'Print Orders';
$lang['en_GB']['OrderReport']['CHANGESTATUS'] = 'Change Order Status';
$lang['en_GB']['OrderReport']['NOTEEMAIL'] = 'Note/Email';
$lang['en_GB']['OrderReport']['PRINTEACHORDER'] = 'Print all orders shown';
$lang['en_GB']['OrderReport']['SENDNOTETO'] = 'Send this note to %s (%s)';
$lang['en_GB']['Order_receiptEmail.ss']['HEADLINE'] = 'Shop Order Receipt';
$lang['en_GB']['Order_ReceiptEmail.ss']['HEADLINE'] = 'Shop Order Receipt';
$lang['en_GB']['Order_receiptEmail.ss']['TITLE'] = 'Shop Receipt';
$lang['en_GB']['Order_ReceiptEmail.ss']['TITLE'] = 'Shop Receipt';
$lang['en_GB']['Order_statusEmail.ss']['HEADLINE'] = 'Shop Status Change';
$lang['en_GB']['Order_StatusEmail.ss']['HEADLINE'] = 'Shop Status Change';
$lang['en_GB']['Order_statusEmail.ss']['STATUSCHANGE'] = 'Status changed to "%s" for Order #';
$lang['en_GB']['Order_StatusEmail.ss']['STATUSCHANGE'] = 'Status changed to "%s" for Order #';
$lang['en_GB']['Order_statusEmail.ss']['TITLE'] = 'Shop Status Change';
$lang['en_GB']['Order_StatusEmail.ss']['TITLE'] = 'Shop Status Change';
$lang['en_GB']['PaymentInformation.ss']['AMOUNT'] = 'Amount';
$lang['en_GB']['PaymentInformation.ss']['DATE'] = 'Date';
$lang['en_GB']['PaymentInformation.ss']['DETAILS'] = 'Details';
$lang['en_GB']['PaymentInformation.ss']['PAYMENTID'] = 'Payment ID';
$lang['en_GB']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Payment Information';
$lang['en_GB']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Method';
$lang['en_GB']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Payment Status';
$lang['en_GB']['PaymentInformation.ss']['TABLESUMMARY'] = 'The contents of your cart are displayed in this form and summary of all fees associated with an order and a rundown of payments options.';
$lang['en_GB']['Product.ss']['ADD'] = 'Add &quot;%s&quot; to your cart';
$lang['en_GB']['Product.ss']['ADDLINK'] = 'Add this item to cart';
$lang['en_GB']['Product.ss']['ADDONE'] = 'Add one more of &quot;%s&quot; to your cart';
$lang['en_GB']['Product.ss']['AUTHOR'] = 'Author';
$lang['en_GB']['Product.ss']['MODEL'] = 'Model';
$lang['en_GB']['Product.ss']['FEATURED'] = 'This is a featured product.';
$lang['en_GB']['Product.ss']['GOTOCHECKOUT'] = 'Go to the checkout now';
$lang['en_GB']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; Go to the checkout';
$lang['en_GB']['Product.ss']['IMAGE'] = '%s image';
$lang['en_GB']['Product.ss']['ItemID'] = 'Item #';
$lang['en_GB']['Product.ss']['NOIMAGE'] = 'Sorry, no product image for &quot;%s&quot;';
$lang['en_GB']['Product.ss']['QUANTITYCART'] = 'Quantity in cart';
$lang['en_GB']['Product.ss']['REMOVE'] = 'Remove &quot;%s&quot; from your cart';
$lang['en_GB']['Product.ss']['REMOVEALL'] = 'Remove one of &quot;%s&quot; from your cart';
$lang['en_GB']['Product.ss']['REMOVELINK'] = '&raquo; Remove from cart';
$lang['en_GB']['Product.ss']['SIZE'] = 'Size';
$lang['en_GB']['ProductGroup.ss']['FEATURED'] = 'Featured Products';
$lang['en_GB']['ProductGroup.ss']['VIEWGROUP'] = 'View the product group &quot;%s&quot;';
$lang['en_GB']['ProductGroupItem.ss']['ADD'] = 'Add &quot;%s&quot; to your cart';
$lang['en_GB']['ProductGroupItem.ss']['ADDLINK'] = 'Add this item to cart';
$lang['en_GB']['ProductGroupItem.ss']['ADDONE'] = 'Add one more of &quot;%s&quot; to your cart';
$lang['en_GB']['ProductGroupItem.ss']['AUTHOR'] = 'Author';
$lang['en_GB']['ProductGroupItem.ss']['GOTOCHECKOUT'] = 'Go to the checkout now';
$lang['en_GB']['ProductGroupItem.ss']['GOTOCHECKOUTLINK'] = '&raquo; Go to the checkout';
$lang['en_GB']['ProductGroupItem.ss']['IMAGE'] = '%s image';
$lang['en_GB']['ProductGroupItem.ss']['NOIMAGE'] = 'Sorry, no product image for &quot;%s&quot;';
$lang['en_GB']['ProductGroupItem.ss']['QUANTITY'] = 'Quantity';
$lang['en_GB']['ProductGroupItem.ss']['QUANTITYCART'] = 'Quantity in cart';
$lang['en_GB']['ProductGroupItem.ss']['READMORE'] = 'Click here to read more on &quot;%s&quot;';
$lang['en_GB']['ProductGroupItem.ss']['READMORECONTENT'] = 'Click to read more &raquo;';
$lang['en_GB']['ProductGroupItem.ss']['REMOVE'] = 'Remove &quot;%s&quot; from your cart';
$lang['en_GB']['ProductGroupItem.ss']['REMOVEALL'] = 'Remove one of &quot;%s&quot; from your cart';
$lang['en_GB']['ProductGroupItem.ss']['REMOVELINK'] = '&raquo; Remove from cart';
$lang['en_GB']['ProductGroupItem.ss']['REMOVEONE'] = 'Remove one of &quot;%s&quot; from your cart';
$lang['en_GB']['ProductMenu.ss']['GOTOPAGE'] = 'Go to the %s page';
$lang['en_GB']['SSReport']['ALLCLICKHERE'] = 'Click here to view all products';
$lang['en_GB']['SSReport']['INVOICE'] = 'invoice';
$lang['en_GB']['SSReport']['PRINT'] = 'print';
$lang['en_GB']['SSReport']['VIEW'] = 'view';
$lang['en_GB']['ViewAllProducts.ss']['AUTHOR'] = 'Author';
$lang['en_GB']['ViewAllProducts.ss']['CATEGORIES'] = 'Categories';
$lang['en_GB']['ViewAllProducts.ss']['IMAGE'] = '%s image';
$lang['en_GB']['ViewAllProducts.ss']['LASTEDIT'] = 'Last edited';
$lang['en_GB']['ViewAllProducts.ss']['LINK'] = 'Link';
$lang['en_GB']['ViewAllProducts.ss']['NOCONTENT'] = 'No content set.';
$lang['en_GB']['ViewAllProducts.ss']['NOIMAGE'] = 'Sorry, no image for &quot;%s&quot;';
$lang['en_GB']['ViewAllProducts.ss']['NOSUBJECTS'] = 'No Subjects Set';
$lang['en_GB']['ViewAllProducts.ss']['PRICE'] = 'Price';
$lang['en_GB']['ViewAllProducts.ss']['PRODUCTID'] = 'Product ID';
$lang['en_GB']['ViewAllProducts.ss']['WEIGHT'] = 'Weight';

?>