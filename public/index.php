<?php

use App\Kernel;
//
//class MyClass
//{
//    public $name;
//    protected $sex;
//    private $id;
//
//    public function __construct($name , $sex, $id)
//    {
//        $this->name == $name;
//        $this->sex == $sex;
//        $this-$id == $id;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getSex()
//    {
//        return $this->sex;
//    }
//
//    /**
//     * @param mixed $sex
//     */
//    public function setSex($sex): void
//    {
//        $this->sex = $sex;
//    }
//
//
//}
//
//$instance = new MyClass("Igor", "mail", 1);
//
//var_dump($instance->name);
//echo('<br>');
//var_dump($instance->getSex());

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};