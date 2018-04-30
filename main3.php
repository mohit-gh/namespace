<?php

/*ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

namespace abc\mohit {

	class xyz {
		public function __construct() {
			echo "Hello From xyz class and abc namespace";
		}
	}
}

namespace {

class xyz {

}

//$nsobj = new abc\xyz(); // First way
/*use abc\xyz;
$nsobj = new xyz();*/ //Second way

use abc\mohit\xyz as def;
$nsobj = new def();


}

//Output : Hello From xyz class and abc namespace

?>
