<?php
namespace Softbery;

/**
 *Configuration
 */
class Configuration
{
    public $Config = [];

    private $ini_config = [];

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    public function getIni($value = "")
    {
        if ($value != "") {
            $conf = require __ROOTDIR__ . "/config.php";
            if ($conf[$value] != null) {
                $val = $conf[$value];

                return $val;
            } else {
                return "Error: Value not exist;";
            }
        } else {
            return "Error: Value not exist;";
        }

    }

    /**
     * @param string $size
     * @return int
     * @author DevsrealmGuy
     */
    public function retBytes(string $size): int
    {
        $val = trim($size);
        preg_match('/([0-9]+)[\s]*([a-zA-Z]+)/', $val, $matches);
        $value  = (isset($matches[1])) ? intval($matches[1]) : 0;
        $metric = (isset($matches[2])) ? strtolower($matches[2]) : 'b';
        switch ($metric) {
            case 'tb':
            case 't':
                $value *= 1024;
            case 'gb':
            case 'g':
                $value *= 1024;
            case 'mb':
            case 'm':
                $value *= 1024;
            case 'kb':
            case 'k':
                $value *= 1024;
        }
        return (int) $value;
    }

    public function retBoolean($val)
    {
        static $map = ['on' => true, 'true' => true, 'off' => false, 'false' => false];

        return @($map[strtolower($val)] ?: (bool) $val);
    }
}
