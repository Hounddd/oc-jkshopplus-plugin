<?php

return [
    'plugin' => [
        'name' => 'JKShop Plus',
        'description' => 'Extension pour le plugin JKShop.',
    ],
    'settings' => [
        'tab' => 'Extras',
        'jkplus_on' => 'Oui',
        'jkplus_off' => 'Non',
        'jkplus_global_qty' => 'Voulez-vous agréger les quantités ?',
        'jkplus_global_qty_comment' => 'Par défaut la propiété `global_qty` du panier corresponds au nombre d\'articles. En agrégeant les quantités, la propriété corresponds alors au nombre d\'article du panier multipliés par leur quantité respective.',
        'jkplus_countries' => 'Activer la limitation géographique des transporteurs ?',
        'jkplus_countries_comment' => 'En activant cette option, seuls les transporteurs associés à un pays seront listés en fonction de l\'adresse du client',
    ],
    'components_settings' => [
        'description' => 'Toutes les opérations de l\'ajout au panier à la commande finale',
        'gblqty' => 'Element "quantité totale"',
        'gblqty_desc' => 'Cet élément sera rafraîchi après un appel ajax - ajouter un produit, changer les quantités, etc... (débute avec # ou .)',
        'minicart' => 'ID de l\'élément du composant "mini panier"',
        'minicart_description' => 'Cet élément sera rafraîchi après un appel ajax - ajouter un produit, changer les quantités, etc... (débute avec # car unique)',
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
        'countries_label' => 'Pays associés',
        'countries_comment' => 'Pays pour lesquels ce transporteur est actif.',
        'new_from_template' => 'Nouveau à partir d\'un modéle'
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
