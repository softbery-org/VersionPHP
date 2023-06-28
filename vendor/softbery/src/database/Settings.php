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

class Settings
{
    protected $settings;
    
    public function __construct()
    {
        $config = new Config;
        $config->getConfig();
        $settings = $config->config;
        //$_db_config = $_db_config->config['database'];
    }
}
