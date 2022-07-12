<?php
namespace Includes\Admin;
class AxpluginAdmin{
    public static $actions;
    public static $filters;

    public static function actions()
    {
        self::$actions = array();
        return self::$actions;
    }

    public static function filters()
    {
        self::$filters = array();
        return self::$filters;
    }
}