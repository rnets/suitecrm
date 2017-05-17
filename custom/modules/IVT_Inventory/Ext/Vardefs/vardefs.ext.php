<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-03-08 17:49:40
$dictionary["IVT_Inventory"]["fields"]["ivt_inventory_aos_products"] = array (
  'name' => 'ivt_inventory_aos_products',
  'type' => 'link',
  'relationship' => 'ivt_inventory_aos_products',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_IVT_INVENTORY_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'ivt_inventory_aos_productsaos_products_ida',
);
$dictionary["IVT_Inventory"]["fields"]["ivt_inventory_aos_products_name"] = array (
  'name' => 'ivt_inventory_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IVT_INVENTORY_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'ivt_inventory_aos_productsaos_products_ida',
  'link' => 'ivt_inventory_aos_products',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["IVT_Inventory"]["fields"]["ivt_inventory_aos_productsaos_products_ida"] = array (
  'name' => 'ivt_inventory_aos_productsaos_products_ida',
  'type' => 'link',
  'relationship' => 'ivt_inventory_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IVT_INVENTORY_AOS_PRODUCTS_FROM_IVT_INVENTORY_TITLE',
);

?>