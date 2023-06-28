<?php
// Softbery Libraries (c) by Paweł Tobis
//
// Softbery Libraries is licensed under a
// Creative Commons Attribution-ShareAlike 4.0 International License.
//
// You should have received a copy of the license along with this
// work. If not, see <http://creativecommons.org/licenses/by-sa/4.0/>.

define('__ROOTDIR__', __DIR__.'/../');

include __ROOTDIR__.'/vendor/autoload.php';

use Softbery\Database\Db;
use Softbery\Config\Config;

$conf = new Config();

$db = new Db();


var_dump($db);
