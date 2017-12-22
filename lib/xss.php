<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * To start with: this class should run against all input forms and return
 * a the function and its test result, e.g. function_name(), safe
 *
 */

//namespace seclibphp;

// Handle XSS checks
class Xss {

    // Properties
    protected $xss_results = ["func_name" => "pass|fail"];
    
    // Constructor
    public function __construct() {
        echo "[*] ..instantiating Xss checks.. \n";

    }

    public function test_xss() {
        echo "[*] ..running test_xss().. \n";
        $this->xss_results = [];

    }

}



?>
