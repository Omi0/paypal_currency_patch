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
    }