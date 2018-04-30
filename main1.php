<?php

/*ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

namespace abc {

	class xyz {
		public function __construct() {
			echo "Hello From xyz class and abc namespace";
		}
	}
}

namespace {
	class xyz {
		public function __construct() {
			echo "Hello From xyz class and global namespace";
		}
	}

/*$gnsobj = new xyz();
echo "<br/>";*/
use abc\xyz as abc;
	$nsobj = new abc();
}

//output Hello From xyz class and global namespace Hello From xyz class and abc namespace

?>
