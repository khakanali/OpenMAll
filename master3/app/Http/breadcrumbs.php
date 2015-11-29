<?php
/**
 * Created by PhpStorm.
 * User: sadia
 * Date: 11/5/2015
 * Time: 11:42 PM
 */


// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Category
Breadcrumbs::register('category', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Category', route('category'));
});

// Home > Brand
Breadcrumbs::register('brand', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Brand', route('brand'));
});

// Home > AboutUs
Breadcrumbs::register('about_us', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About Us', route('about_us'));
});
// Home > buyerregistration
Breadcrumbs::register('buyerregistration', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Buyer Registration', route('buyerregistration'));
});
// Home > buyerinformation
Breadcrumbs::register('buyerinformation', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Buyer Information', route('buyerinformation'));
});
// Home > productconsumer
Breadcrumbs::register('productconsumer', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product Consumer', route('productconsumer'));
});

// Home > productsupplier
Breadcrumbs::register('productsupplier', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product Supplier', route('productsupplier'));
});
// Home > profilesettingcertificate
Breadcrumbs::register('profilesettingcertificate', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile Setting Certificate', route('profilesettingcertificate'));
});
// Home > profilesettingaboutus
Breadcrumbs::register('profilesettingaboutus', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile Setting About Us', route('profilesettingaboutus'));
});

// Home > profilesetting
Breadcrumbs::register('profilesetting', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile Setting', route('profilesetting'));
});

// Home > payment
Breadcrumbs::register('payment', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Payment', route('payment'));
});
// Home > album
Breadcrumbs::register('album', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Album', route('album'));
});

// Home > merchantdashboard
Breadcrumbs::register('merchantdashboard', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Merchant Dashboard', route('merchantdashboard'));
});

// Home > SMM
Breadcrumbs::register('SMM', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('SMM', route('SMM'));
});
// Home > oshopsmsone
Breadcrumbs::register('oshopsmsone', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Shop SMS One', route('oshopsmsone'));
});
// Home > oshopsmsoneoem
Breadcrumbs::register('oshopsmsoneoem', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Shop SMS One OEM', route('oshopsmsoneoem'));
});
// Home > oshoplist
Breadcrumbs::register('oshoplist', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Shop List', route('oshoplist'));
});
// Home > oshopcertificate
Breadcrumbs::register('oshopcertificate', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Shop Certificate', route('oshopcertificate'));
});

// Home > oshopaboutus
Breadcrumbs::register('oshopaboutus', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Shop About Us', route('oshopaboutus'));
});

// Home > howtosell
Breadcrumbs::register('howtosell', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('How To Sell', route('howtosell'));
});

// Home > howtobuy
Breadcrumbs::register('howtobuy', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('How To Buy', route('howtobuy'));
});

// Home > newsletter
Breadcrumbs::register('newsletter.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Newsletter', route('newsletter.index'));
});

// Home > downloads
Breadcrumbs::register('downloads.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Download Apps', route('downloads.index'));
});

// Home > advertise
Breadcrumbs::register('advertise.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Advertise With Us', route('advertise.index'));
});

// Home > terms_cond
Breadcrumbs::register('terms_cond.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Terms and Condition', route('terms_cond.index'));
});

// Home > privacy
Breadcrumbs::register('privacy.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Privacy Policy', route('privacy.index'));
});

// Home > job
Breadcrumbs::register('job.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Job Portal', route('job.index'));
});

// Home > contactus
Breadcrumbs::register('contactus.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact Us', route('contactus.index'));
});

// Home > buyerhelp
Breadcrumbs::register('buyerhelp.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Help the Buyer', route('buyerhelp.index'));
});

// Home > sellerhelp
Breadcrumbs::register('sellerhelp.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Help the Seller', route('sellerhelp.index'));
});

// Home > feedback
Breadcrumbs::register('feedback.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Feedback', route('feedback.index'));
});

// Home > directory
Breadcrumbs::register('directory.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Directory', route('directory.index'));
});
// Home > buildings
Breadcrumbs::register('buildings', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Buildings', route('buildings'));
});

// Home > create_new_voucher
Breadcrumbs::register('create_new_voucher', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Create New Voucher', route('create_new_voucher'));
});

// Home > create_new_product
Breadcrumbs::register('create_new_product', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Create New Product', route('create_new_product'));
});
// Home > create_new_user
Breadcrumbs::register('create-new-user', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Create New User', route('create-new-user'));
});

// Home > sub-cat-details/{id}/{sid}
Breadcrumbs::register('sub-cat-details/{id}/{sid}', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Subcat Details', route('sub-cat-details/{id}/{sid}'));
});
// Home > sub-cat-details/{id}/{sid}
Breadcrumbs::register('brand-details/{id}', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Brand Details', route('brand-details/{id}'));
});
//search
Breadcrumbs::register('search', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Search', route('search'));
});

Breadcrumbs::register('create-merchant', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('create-merchant', route('create-merchant'));
});
Breadcrumbs::register('edit-merchant', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Merchant Registration', route('edit-merchant'));
});
// O-warehouse
Breadcrumbs::register('owarehouse', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('O-Warehouse', route('owarehouse'));
});


