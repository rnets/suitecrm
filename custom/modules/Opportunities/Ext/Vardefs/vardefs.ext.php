<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-12-07 11:13:38
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2016-12-07 11:13:38
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2016-12-07 11:13:38
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2016-12-07 11:13:38
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2016-12-07 11:28:02
$dictionary['Opportunity']['fields']['oid_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['oid_c']['labelValue']='OID';

 

 // created: 2016-12-07 11:29:31
$dictionary['Opportunity']['fields']['amount_usdollar']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2016-12-07 11:37:59
$dictionary['Opportunity']['fields']['rfs_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['rfs_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['rfs_c']['labelValue']='Deliver Date';
$dictionary['Opportunity']['fields']['rfs_c']['enable_range_search']='1';

 

// created: 2016-12-15 07:48:54
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1"] = array (
  'name' => 'accounts_opportunities_1',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_opportunities_1accounts_ida',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1_name"] = array (
  'name' => 'accounts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_opportunities_1accounts_ida',
  'link' => 'accounts_opportunities_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["accounts_opportunities_1accounts_ida"] = array (
  'name' => 'accounts_opportunities_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);

?>