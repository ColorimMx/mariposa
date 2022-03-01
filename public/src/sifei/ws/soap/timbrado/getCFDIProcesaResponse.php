<?php

namespace DHF\Sifei\Ws\Soap\Timbrado;

class getCFDIProcesaResponse
{

    /**
     * @var string[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param string[] $return
     * @return \DHF\Sifei\Ws\Soap\Timbrado\getCFDIProcesaResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
