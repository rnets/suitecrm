<?php
 // created: 2016-12-15 07:48:54
$layout_defs["Accounts"]["subpanel_setup"]['accounts_opportunities_1'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'accounts_opportunities_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
