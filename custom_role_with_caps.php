<?php



/*
Exemple de rol a mida,
agafant les caps de l'author
i afegint algunes de woocommerce
per poder veure només les orders

*/



function add_orders_role() {
    //remove_role("orders");
   //return;
    $role = get_role(  'author' );
    $caps=$role->capabilities;


    $new_caps=[
      'edit_shop_order','read_shop_order','delete_shop_order','edit_shop_orders',
    'edit_others_shop_orders','publish_shop_orders','read_private_shop_orders','delete_shop_orders',
    'delete_private_shop_orders','delete_published_shop_orders','delete_others_shop_orders','edit_private_shop_orders',
    'edit_published_shop_orders','manage_shop_order_terms','edit_shop_order_terms','delete_shop_order_terms','assign_shop_order_terms',

  ];
  //    'manage_woocommerce'
  for($i=0;$i<count($new_caps);$i++){
    $caps[$new_caps[$i]]=1;
  }
  //  print_r($caps);

  //$caps=array_merge($caps,$new_caps);

//print_r($caps);
    /*
    $caps['edit_products']=false;
    $caps['edit_others_products']=false;
  $caps['edit_posts']=false;
  $caps['edit_pages']=false;
*/
    add_role(
         'orders',
         'Gestor de comandes',
         $caps
    );
}
