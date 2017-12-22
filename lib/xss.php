<?php

namespace secrevphp;

/**
 * To start with: this class should run against all input forms and return
 * a the function and its test result, e.g. function_name(), safe
 *
 */

include_once ("lib/secreview.php");

// Handle XSS checks
class Xss extends SecurityReviewPHP {

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
