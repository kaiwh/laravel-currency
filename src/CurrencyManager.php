<?php

namespace Kaiwh\Currency;

class CurrencyManager
{
    private $currencies = array(
        'CNY'       => array(
            'symbol_left'       =>'¥ ',
            'symbol_right'      =>'',
            'decimal_place'     =>2,
        )
    );
    private $decimal_point = '.';
    private $thousand_point = ',';
    public function format($number,$code='CNY'){    

        if(!isset($this->currencies[$code])){
            return $number;
        }

        $string = '';
        
        $string .= $this->currencies[$code]['symbol_left'];
        
        $string .= number_format(round($number, (int)$this->currencies[$code]['decimal_place']), (int)$this->currencies[$code]['decimal_place'], $this->decimal_point, $this->thousand_point);

        $string .= $this->currencies[$code]['symbol_right'];

        return $string;
    }
}
