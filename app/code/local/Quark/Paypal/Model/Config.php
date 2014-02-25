<?php
    class Quark_Paypal_Model_Config extends Mage_Paypal_Model_Config{
        /**
         * Currency codes supported by PayPal methods
         * 
         * @var array
         * 
         * Overridden to add more currencies supported by paypal 
         * Philippine Peso(PHP) And Russian Ruble(RUB)
         */
        protected $_supportedCurrencyCodes = array('AUD', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'ILS', 'JPY', 'MXN',
            'NOK', 'NZD', 'PHP', 'PLN', 'GBP', 'RUB', 'SGD', 'SEK', 'CHF', 'USD', 'TWD', 'THB');
        
        /**
         * Countries supported by PayPal methods
         * 
         * @var array
         * 
         * Overridden to add more countries supported by paypal 
         * Russia (RU)
         */
        protected $_supportedCountryCodes = array(
        'AE','AR','AT','AU','BE','BG','BR','CA','CH','CL','CR','CY','CZ','DE','DK','DO','EC','EE','ES','FI','FR','GB',
        'GF','GI','GP','GR','HK','HU','ID','IE','IL','IN','IS','IT','JM','JP','KR','LI','LT','LU','LV','MQ','MT','MX',
        'MY','NL','NO','NZ','PH','PL','PT','RE','RO','RU','SE','SG','SI','SK','SM','TH','TR','TW','US','UY','VE','VN','ZA');
    }
