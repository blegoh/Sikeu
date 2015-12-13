<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 12/12/15
 * Time: 6:43
 */

namespace App\Models;


use Artisaninweb\SoapWrapper\Extension\SoapService;

class Soap extends SoapService
{
    /**
     * @var string
     */
    protected $name = 'currency';

    /**
     * @var string
     */
    protected $wsdl = 'http://localhost/wsdlsikeu/web/';

    /**
     * @var boolean
     */
    protected $trace = true;

    /**
     * Get all the available functions
     *
     * @return mixed
     */
    public function functions()
    {
        return $this->getFunctions();
    }
}