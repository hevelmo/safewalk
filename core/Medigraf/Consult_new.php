<?php
//namespace Medigraf;

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class Consult
{
    private $resultArray;
    private $packName;
    private $connection;
    private $sql;
    private $params;
    private $structure;
    private $typeQuery;
    
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct6("", array(), "", array(), array(), 0);
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
        $this->construct4($properties["packName"], $properties["connection"], $properties["sql"], $properties["params"]);
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @param type|array $structure 
     * @param type $typeQuery 
     * @return type
     */
    private function construct6($packName = "", $connection = array(), $sql = "", $params = array(), $structure = array(), $typeQuery = 0)
    {
        $this->packName   = $packName;
        $this->connection = $connection;
        $this->sql        = $sql;
        $this->params     = $params;
        $this->structure  = $structure;
        $this->typeQuery  = $typeQuery;
    }
    
    /**
     * Description
     * @return type
     */
    public function getSql()
    {
        return $this->sql;
    }
    
    /**
     * Description
     * @return type
     */
    public function getParams()
    {
        return $this->params;
    }
    
    /**
     * Description
     * @return type
     */
    public function getResultArray()
    {
        return $this->resultArray;
    }
    
    /**
     * Description
     * @return type
     */
    public function getStructure()
    {
        return $this->structure;
    }
    
    /**
     * Description
     * @return type
     */
    public function getTypeQuery()
    {
        return $this->typeQuery;
    }
    
    /**
     * Description
     * @param type $sql 
     * @return type
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }
    
    /**
     * Description
     * @param type $params 
     * @return type
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
    
    /**
     * Description
     * @param type $resultArray 
     * @return type
     */
    public function setResultArray($resultArray)
    {
        $this->resultArray = $resultArray;
    }
    
    /**
     * Description
     * @param type $structure 
     * @return type
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
    }
    
    /**
     * Description
     * @param type $typeQuery 
     * @return type
     */
    public function setTypeQuery($typeQuery)
    {
        $this->typeQuery = $typeQuery;
    }
    
    /**
     * Description
     * @param type $params 
     * @return type
     */
    public function makeParams($params)
    {
        foreach ($params as $key => $value) {
            if (array_key_exists($key, $params) && $params[$key] != "0") {
                $this->params[$key] = $params[$key];
            }
        }
    }
    
    /**
     * Description
     * @param type|string $baseCondition 
     * @param type $paramsConditions 
     * @param type $params 
     * @return type
     */
    public function makeWhere($baseCondition = "1=1", $paramsConditions, $params)
    {
        $where = $baseCondition;
        foreach ($paramsConditions as $key => $value) {
            if (array_key_exists($key, $params) && $params[$key] != "0" && $params[$key] != "") {
                foreach ($value as $condition) {
                    $where .= " {$condition[0]} {$condition[1]} {$condition[2]} :$key";
                }
            }
        }
        return $where;
    }
    
    /**
     * Description
     * @return type
     */
    public function addToParams()
    {
        //Get an array arguments to the method
        $args       = func_get_args();
        //Get number of arguments
        $numArgs    = func_num_args();
        //Make a method name
        $methodName = __FUNCTION__ . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            ksort($this->params);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @param type $params 
     * @return type
     */
    private function addToParams1($params)
    {
        $this->params = array_merge($this->params, $params);
    }
    
    /**
     * Description
     * @param type $key 
     * @param type $value 
     * @return type
     */
    private function addToParams2($key, $value)
    {
        $this->params[$key] = $value;
    }
    
    /**
     * Description
     * @return type
     */
    public function executeQuery()
    {
        $this->resultArray = generalQuery($this->connection, $this->sql, $this->params, $this->typeQuery, PDO::FETCH_ASSOC);
    }
    
    /**
     * Description
     * @return type
     */
    public function getResultJSON()
    {
        return trim(changeArrayIntoJSON($this->packName, $this->resultArray));
    }
    
    /**
     * Description
     * @return type
     */
    public function echoResultJSON()
    {
        echo trim(changeArrayIntoJSON($this->packName, $this->resultArray));
    }
}

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class UnstructuredConsult extends Consult
{
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct5("", array(), "", array(), 1);
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
        $this->construct5($properties["packName"], $properties["connection"], $properties["sql"], $properties["params"], $properties["typeQuery"]);
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @param type $typeQuery 
     * @return type
     */
    private function construct5($packName = "", $connection = array(), $sql = "", $params = array(), $typeQuery = 1)
    {
        parent::__construct($packName, $connection, $sql, $params, array(), $typeQuery);
    }
}

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class InsertConsult extends UnstructuredConsult
{
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct4("", array(), "", array());
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
        //$this->construct4($properties["packName"],$properties["connection"],$properties["sql"], $properties["params"]);
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @return type
     */
    private function construct4($packName = "", $connection = array(), $sql = "", $params = array())
    {
        parent::__construct($packName, $connection, $sql, $params, array(), 1);
    }
}

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class UpdateConsult extends UnstructuredConsult
{
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct4("", array(), "", array());
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
        //$this->construct4($properties["packName"], $properties["connection"], $properties["sql"], $properties["params"]);
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @return type
     */
    private function construct4($packName = "", $connection = array(), $sql = "", $params = array())
    {
        parent::__construct($packName, $connection, $sql, $params, array(), 1);
    }
}

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class DeleteConsult extends UnstructuredConsult
{
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct4("", array(), "", array());
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @return type
     */
    private function construct4($packName = "", $connection = array(), $sql = "", $params = array())
    {
        parent::__construct($packName, $connection, $sql, $params, array(), 1);
    }
}

/**
 * This class 
 * 
 * @author Francisco Javier Corona Sánchez <javier@medigraf.com.mx>
 * @copyright 2017
 */
class SelectConsult extends Consult
{
    private $multilevel;
    
    /**
     * Description
     * @return type
     */
    function __construct()
    {
        $this->resultArray = array();
        //Get an array arguments to the method
        $args              = func_get_args();
        //Get number of arguments
        $numArgs           = func_num_args();
        //Make a method name
        $methodName        = "construct" . $numArgs;
        //If the method exists called it 
        if (method_exists($this, $methodName)) {
            call_user_func_array(array(
                $this,
                $methodName
            ), $args);
            //Otherwise
        } else {
        }
    }
    
    /**
     * Description
     * @return type
     */
    private function construct0()
    {
        $this->construct6("", array(), "", array(), array(), false);
    }
    
    /**
     * Description
     * @param type $properties 
     * @return type
     */
    private function construct1($properties)
    {
        $this->construct6($properties["packName"], $properties["connection"], $properties["sql"], $properties["params"], $properties["structure"], $properties["multilevel"]);
    }
    
    /**
     * Description
     * @param type|string $packName 
     * @param type|array $connection 
     * @param type|string $sql 
     * @param type|array $params 
     * @param type|array $structure 
     * @param type|bool $multilevel 
     * @return type
     */
    private function construct6($packName = "", $connection = array(), $sql = "", $params = array(), $structure = array(), $multilevel = false)
    {
        $this->multilevel = $multilevel;
        parent::__construct($packName, $connection, $sql, $params, $structure, 0);
    }
    
    /**
     * Description
     * @return type
     */
    public function getMultilevel()
    {
        return $this->multilevel;
    }
    
    /**
     * Description
     * @param type $multilevel 
     * @return type
     */
    public function setMultilevel($multilevel)
    {
        $this->multilevel = $multilevel;
    }
    
    /**
     * Description
     * @return type
     */
    public function executeQuery()
    {
        parent::executeQuery();
        $restructured = ($this->multilevel === false) ? restructureArray(parent::getResultArray(), parent::getStructure()) : multiLevelJSON(parent::getResultArray(), parent::getStructure(), array());
        parent::setResultArray($restructured);
    }
}