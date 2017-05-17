<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class QuotesidLogicHook{

    var $Qid_Gen;

    const DATE_FORMAT = 'ymd';
    const CODE_SEPARATOR = "";  // Character(s) separating the prefix and the code
    const MIN_CODE_LENGTH = 8; // e.g. 0001, 0002, etc; used to dictate padding

    function __construct() {
        $this->Qid_Gen = get_module_info('AOS_Quotes');
    }

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function QuotesidLogicHook(){
        self::__construct();
    }


    function generateQuoteNumber(&$bean, $event, $arguments) {
        // before_save
        global $sugar_config;

        $GLOBALS['log']->debug('Before Save Quotes ID fired');

        $quote_number = BeanFactory::getBean('AOS_Quotes',$bean->id);

		$interval = strtotime($quote_number->date_modified) - strtotime($quote_number->date_entered);

		$GLOBALS['log']->debug("value of date differ are", $interval);

        if (($quote_number->number < 100)  || $quote_number->new_with_id || ($interval < 2)){
			
			if($sugar_config['dbconfig']['db_type'] == 'mssql'){
            	$tmpnumber = $quote_number->db->getOne("SELECT MAX(CAST(number as INT)) from aos_quotes");
			} else {
            	$tmpnumber = $quote_number->db->getOne("SELECT MAX(CAST(number as UNSIGNED)) from aos_quotes");
			}

			$GLOBALS['log']->debug("AOS_RNETS_QUOTES::save() maximum current number =". $tmpnumber);
	
			$tmpdate = new DateTime();
            $datestr = $tmpdate->format('ymd');
        	$GLOBALS['log']->debug("AOS_CUSTOMIZED::save() datestr =". $datestr, $tmpdate); 
            
			/* Add by PXU for change the quotation number to R ~Nets format as ymdnn, e.g 16052601               
            y: 2 digital of year, m: 2 digital of month, d: 2 digital of Day, nn: Seq start from 1*/        

			if (floor($datestr) == floor($tmpnumber/100)) { 
				$quote_number->number = $tmpnumber +1; 		
			} elseif (floor($datestr) > floor($tmpnumber/100)) { 
				$quote_number->number = $datestr*100 + $sugar_config['aos']['quotes']['initialNumber'];
			} else {
				$GLOBALS['log']->error("AOS_RNETS_QUOTES::save() Quote Number abnormal =". $tmpnumber);
			}

			$GLOBALS['log']->debug("AOS_RNETS_QUOTES::save() generated number =". $quote_numbe->number);	
        }
    }

}

?>

