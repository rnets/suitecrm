<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class OpportunitiesOidLogicHook {

    var $Oid_Gen;

    const CODE_PREFIX = 'OID'; // Prefix (ie. LD represents the Leads prefix)
    const CODE_SEPARATOR = "-";  // Character(s) separating the prefix and the code
    const MIN_CODE_LENGTH = 7; // e.g. 0001, 0002, etc; used to dictate padding

    function __construct() {
        $this->Oid_Gen = get_module_info('opportunities');
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function OpportunitiesOidLogicHook(){
        self::__construct();
    }


    function generateAutoIncrementOid(&$bean, $event, $arguments) {
        // before_save
        global $sugar_config;

        $GLOBALS['log']->debug('Before Save generateAutoIncrementOID fired');

        $opp_save = BeanFactory::getBean('Opportunities',$bean->id);

        if (empty($opp_save->oid_c)  || $opp_save->new_with_id){
            if($sugar_config['dbconfig']['db_type'] == 'mssql'){
                $tmp_oid = $opp_save->db->getOne("SELECT RIGHT(MAX(oid_c),".self::MIN_CODE_LENGTH.") max_val FROM opportunities_cstm");
            } else {
                $tmp_oid = $opp_save->db->getOne("SELECT RIGHT(MAX(oid_c),".self::MIN_CODE_LENGTH.") max_val FROM opportunities_cstm");
				                $tmp_oid = $opp_save->db->getOne("SELECT RIGHT(MAX(oid_c),".self::MIN_CODE_LENGTH.") max_val FROM opportunities_cstm");
            }

            $GLOBALS['log']->debug('the readed oid is;', $tmp_oid);

            if($tmp_oid < $sugar_config['aos']['quotes']['initialNumber']){
               $code = str_pad($sugar_config['aos']['quotes']['initialNumber'],self::MIN_CODE_LENGTH, '0', STR_PAD_LEFT);
                $bean->oid_c = self::CODE_PREFIX . self::CODE_SEPARATOR . $code;
                $GLOBALS['log']->debug('the oid is;', $bean->oid_c);
            }else {
                $tmp_oid += 1;
                $code = str_pad($tmp_oid,self::MIN_CODE_LENGTH, '0', STR_PAD_LEFT);
                $bean->oid_c = self::CODE_PREFIX . self::CODE_SEPARATOR . $code;
                $GLOBALS['log']->debug('the increased oid is;', $bean->oid_c);
            }
        }
    }

}

?>

