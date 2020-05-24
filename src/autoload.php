<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'configuration' => '/Configuration.php',
                'database' => '/Database.php',
                'factory' => '/Factory.php',
                'mysqldatabase' => '/MysqlDatabase.php',
                'orderlistaction' => '/OrderListAction.php',
                'ordermapper' => '/OrderMapper.php',
                'ordersinyearstatement' => '/OrdersInYearStatement.php',
                'response' => '/Response.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
