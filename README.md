# JkShop Plus plugin

This plugin add some features to <a href="https://octobercms.com/plugin/jiri-jkshop" target="_blank">Jiri.JKShop</a> plugin.  


#### Added features
 - Mini-cart and global cart item's quantity
 - Carriers limitation to countries (disabled by defaut)
 - New order for basket steps
 - Description field for payment gateway

## New settings
The plugin gives access to two new settings, accessible by the tab "extras" in the JkShop settings page.

![new settings](https://raw.githubusercontent.com/Hounddd/oc-jkshopplus-plugin/master/docs/images/settings.png)

### Aggregate the quantities
By default the plugin sets the `global_qty` basket's property with the number of products in the cart.  
By activating this option the plugin sets the property with the total number of items in the cart (products x thier own quantity)

| Basket products | Products quantities | global_qty |
|:-:|:-:|:-:|
| Product 1 | 2 |  |
| Product 2 | 1 |  |
| Product 3 | 2 |  |
| Aggregate **OFF** |  | 3 |
| Aggregate **ON** |  | 5 |

### Geographical limitation of carriers
By activating this property, you must associate a carrier with one or more countries.  
The delivery address entry form no longer shows the free field "country" but a drop-down list of countries for which a carrier is associated.

#### Carriers - list
Added a column with the iso-code(s) of the associated countries.

![new carriers list](https://raw.githubusercontent.com/Hounddd/oc-jkshopplus-plugin/master/docs/images/carriers-list.png)

#### Carrier - form
Added a manager for associated countries.

![new carrier form](https://raw.githubusercontent.com/Hounddd/oc-jkshopplus-plugin/master/docs/images/carriers-form.png)

## Basket component

![component settings](https://raw.githubusercontent.com/Hounddd/oc-jkshopplus-plugin/master/docs/images/component-settings.png)


### New basket steps order:   
0. Basket view (same as original)
1. Address form (with or without geo limitation)
2. Delivery 
3. Payment (with description)
4. Summary

<i class="icon-exclamation-circle"></i> **If your theme updates the basket component partials, you must update them to reflect the new steps.**

    # basket-0.htm
    # basket-1-address.htm
    # basket-1-country.htm
    # basket-1-shipping-payment.htm
    # basket-2-delivery.htm
    # basket-3-summary.htm

### Mini cart for views:  


    # basket-mini.htm
