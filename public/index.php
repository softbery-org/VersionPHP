<?php
// Softbery Libraries (c) by Paweł Tobis
//
// Softbery Libraries is licensed under a
// Creative Commons Attribution-ShareAlike 4.0 International License.
//
// You should have received a copy of the license along with this
// work. If not, see <http://creativecommons.org/licenses/by-sa/4.0/>.

define('__ROOTDIR__', __DIR__ . '/../');

include __ROOTDIR__ . '/vendor/autoload.php';

use Softbery\Configuration;
use Softbery\Config\Config;
use Softbery\Database\Db;
use Softbery\Module;
use Softbery\MVC\Controller;

$controller = new Controller();
$mod        = new Module();
$conf       = new Config();
$db         = new Db();
$config_ini = new Configuration();

var_dump($db);
var_dump($controller);
var_dump($mod->Modules);

echo $config_ini->getIni("display_errors");
echo "<br>";
echo $config_ini->retBytes("1,44mb");
echo "<br>";
echo $config_ini->retBoolean("aff");
