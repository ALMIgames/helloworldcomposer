<?php

use Com\Iesebre\Dam2\albertmayor\hellowordlcomposer\Hello;

require __DIR__ . "/src/Hello.php";

$greetings = new Hello();
$greetings->sayHello();