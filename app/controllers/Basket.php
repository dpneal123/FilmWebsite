<?php


class Basket
{
    function getArray() {
        return array();
    }

    function add() {
        $filmid = $_POST['filmid'];
        if ($filmid != null) {
            $basketid = 0;
            while ($this->getArray()[$basketid] != null) {
                $basketid++;
            }
            echo "success";
        }
        else {
            echo "error";
        }
    }

    function remove() {

    }

}