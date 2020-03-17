<?php

$array = new ArrayObject();

class Basket
{
    function __construct()
    {
        echo "<p>made array</p><br>";
        $this->addToArray(intval($_GET['filmid']));
    }

    function getArray()
    {
        return $GLOBALS['array'];
    }

    function addToArray($filmid)
    {
        if ($this->getArray()[0] == null) {
            $this->getArray()[0] = $filmid;
        }
        else {
            $x = 1;
            while ($this->getArray()[$x] != null) {
                $x++;
            }

            $this->getArray()[$x] = $filmid;
        }
        echo "success";
    }
}

$basket = new Basket();

header('Location: ' . $_SERVER['HTTP_REFERER']);

