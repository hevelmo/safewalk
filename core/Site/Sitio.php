<?php
/**
 * Sitio
 */
class Sitio
{
    /**
     * Sitio
     */
    private $var;
    function __construct() {
    }
    // VAR
	public function getVar() {
		return $this->var;
	}
    // VAR DETAILS
    public function getVarDetails($key) {
        $vars = array();
        if (array_key_exists($key, $this->var)) {
            $vars = $this->var[$key];
            //echo "<pre>", print_r($vars), "</pre>";
        }
        return $vars;
    }
	// BLOG DETAILS
	public function getVars($key) {
		$vars = array();
		$condition = false;
		for ($idx = 0; $idx < count($this->var) && $condition == false;  $idx++) {
			$condition = ($key == $this->var[$idx]['key']);
			if ( $condition == true ) {
				$vars = $this->var[$idx];
			}
		}
		return $vars;
	}
}