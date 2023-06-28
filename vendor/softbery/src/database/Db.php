<?php
// Softbery Libraries (c) by Paweł Tobis
//
// Softbery Libraries is licensed under a
// Creative Commons Attribution-ShareAlike 4.0 International License.
//
// You should have received a copy of the license along with this
// work. If not, see <http://creativecommons.org/licenses/by-sa/4.0/>.

namespace Softbery\Database;

use mysqli;
use PDO;
use Softbery\Config\Config;

class Db extends Settings
{
    public function __construct()
    {
        $a = new Config();
        
        var_dump($a->getConf());
        //$_db_config = $_db_config->config['database'];
    }

    protected function run($name)
    {
    }

    public static function connect()
    {
        // $user = self::USER;
        // $pass = self::PASS;
        // $host = self::HOST;
        // $db   = self::DB;

        //$conn = new mysqli(Settings::class);
        //return $conn;
    }

    public static function dbConfig()
    {
        $this->DbConfig = $this->conf;
        return $this->DbConfig;
    }
}
