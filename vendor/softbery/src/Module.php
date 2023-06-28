<?php
namespace Softbery;

class Module
{
    public $Modules = [];

    public function __construct()
    {
        try {
            $this->Modules = include __ROOTDIR__ . "/application/config/modules.config.php";
        } catch (Exception $e) {
            echo $e->Message;
        }
    }

    private function get_directory_as_module()
    {

    }
}
