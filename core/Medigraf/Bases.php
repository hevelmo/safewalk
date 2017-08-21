<?php
//namespace Medigraf;

/**
 * This class join all the constants previously declared in "core/enviroment/ WaxConfigSet.php" file,
 * in order to get them easyly like a group instead of one by one.
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class Bases
{
    private $constants;
    
    /**
     * This method is in charge to intialize the properties.
     * @return   void
     */
    function __construct()
    {
        $this->constants = array(
            "_host" => _HOST,
            "_max" => _MAX,
            "_loc" => _LOC,
            "_anio" => date("o")
        );
    }

    /**
     * Returns the constants
     * @return   array   The joined constants
     */
    public function getConstants()
    {
        return $this->constants;
    }
}