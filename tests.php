
<?php


class Test{

    static private $Name = "Nabil";

    static public function FuncatioName()
    {
        return static::$Name;
    }
}




echo Test::FuncatioName();
