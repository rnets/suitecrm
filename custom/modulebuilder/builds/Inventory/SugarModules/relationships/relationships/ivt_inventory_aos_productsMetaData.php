<?php
// created: 2017-03-08 17:49:40
$dictionary["ivt_inventory_aos_products"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ivt_inventory_aos_products' => 
    array (
      'lhs_module' => 'AOS_Products',
      'lhs_table' => 'aos_products',
      'lhs_key' => 'id',
      'rhs_module' => 'IVT_Inventory',
      'rhs_table' => 'ivt_inventory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ivt_inventory_aos_products_c',
      'join_key_lhs' => 'ivt_inventory_aos_productsaos_products_ida',
      'join_key_rhs' => 'ivt_inventory_aos_productsivt_inventory_idb',
    ),
  ),
  'table' => 'ivt_inventory_aos_products_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ivt_inventory_aos_productsaos_products_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ivt_inventory_aos_productsivt_inventory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ivt_inventory_aos_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ivt_inventory_aos_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ivt_inventory_aos_productsaos_products_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ivt_inventory_aos_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ivt_inventory_aos_productsivt_inventory_idb',
      ),
    ),
  ),
);