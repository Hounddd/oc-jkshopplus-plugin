<?php

return [
    'plugin' => [
        'name' => 'JKShop Plus',
        'description' => 'Extension for JKShop plugin.',
    ],
    'settings' => [
        'tab' => 'Extras',
        'jkplus_on' => 'Yes',
        'jkplus_off' => 'No',
        'jkplus_global_qty' => 'Do you want to aggregate the quantities?',
        'jkplus_global_qty_comment' => 'By default the `global_qty` property of the cart corresponds to the number of items. By aggregating the quantities, the property then corresponds to the number of items in the basket multiplied by their respective quantity.',
        'jkplus_countries' => 'Activate the geographical limitation of carriers?',
        'jkplus_countries_comment' => 'By enabling this option, only carriers associated with a country will be listed according to the customer\'s address.',
    ],
    'components_settings' => [
        'description' => 'All operations from adding to cart to final order',
        'gblqty' => 'Total quantity DOM selector',
        'gblqty_desc' => 'This Element will be refresh after ajax call - add product, change quantities, etc..  (start with # or .)',
        'minicart' => 'Mini-Cart ID\'s',
        'minicart_description' => 'This Element will be refresh after ajax call - add product, change quantities, etc..  (start with #)',
    ],
    'components' => [
        'order_confirmed' => 'Votre commande est confirmée.',
        'order_thanks' => 'Merci, --name--.',
        'order_wait_payment' => 'Votre commande est validée, nous attendons confirmation du règlement pour procéder à sa préparation et son envoi.',
        'order_cheque_send' => 'Merci de nous faire parvenir votre chèque bancaire rédigé à l\'ordre de <b>--recipient--</b> à l\'adresse suivante :',
    ],
    'orders' => [
    ],
    'products' => [
    ],   
    'categories' => [
    ],   
    'brands' => [
    ],   
    'carriers' => [
        'countries_label' => 'Associated countries',
        'countries_comment' => 'Countries for which this carrier is active.',
        'new_from_template' => 'New from template'
    ],     
    'taxes' => [
    ],     
    'orderstatuses' => [
    ],
    'form' => [
    ],
    'properties' => [
    ], 
    'coupons' => [
    ],     
    'paymentgateways' => [
        'description' => 'Description',
        'description_comment' => 'Aidez vos acheteurs avec une description du moyen de payement.'
    ],
    'countries' => [
        'iso_code' => 'Code Iso',
        'name' => 'Nom courant',
    ]
];
