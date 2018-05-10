<?php

namespace tests\helpers;

class SqlliteHelper
{
    protected static $temp_name;

    public static function getTmpFile()
    {
        if (empty(self::$temp_name)) {
            self::$temp_name = tempnam(null, '/file0');
        }
        return self::$temp_name;
    }

    public static function connectionCount()
    {
        $path = self::$temp_name;
        $count = shell_exec("lsof -e /sys/kernel/debug/tracing {$path} | grep {$path} | wc -l");
        return (int)$count;
    }
}