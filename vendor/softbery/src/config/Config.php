<?php
// Softbery Libraries (c) by Paweł Tobis
//
// Softbery Libraries is licensed under a
// Creative Commons Attribution-ShareAlike 4.0 International License.
//
// You should have received a copy of the license along with this
// work. If not, see <http://creativecommons.org/licenses/by-sa/4.0/>.

namespace Softbery\Config;

//use Softbery\Extension;

class Config
{
    private const APPLICATION_CONFIG = __ROOTDIR__."/application/config/config.php";
    private const APPLICATION_MODULES_CONFIG = __ROOTDIR__."/application/config/modules.config.php";

    protected $config = array();

    public function __construct()
    {
        $this->getConfig();
    }

    public function get()
    {
        //return $this->config;
    }

    public function merge($arrays = array())
    {
        foreach ($arrays as $key => $val) {
            var_dump($val);
            $this->config = array_merge($this->config, $val);
        }
        return $this->config;
    }

    public function getConfig()
    {
        $app_conf = require_once self::APPLICATION_CONFIG;
        $mod_conf = require_once self::APPLICATION_MODULES_CONFIG;
        $conf = $this->config;

        if (file_exists(self::APPLICATION_CONFIG) && file_exists(self::APPLICATION_MODULES_CONFIG)) {
            $arr = array($app_conf,$mod_conf);
            $conf = array_merge($conf, $arr);
            $this->config = $conf;
        } else {
            echo "Problem z plikami lub w plikach konfiguracyjnych. [File]: $app_conf, $mod_conf.";
        }
    }
    public function getConf()
    {
        return $this->config;
    }
}
