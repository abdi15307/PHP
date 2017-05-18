<?php

/**
 * Created by PhpStorm.
 * User: Eigenaar
 * Date: 05-5-2017
 * Time: 22:04
 */
class AutoOverzicht {
    public $autos = array();
    /**
     * @param $autoSoort
     */
    function voegAutoToe($autos) {
        $this->autos[] = $autos;
    }
    /**
     * @return array
     */
    public function getAutoSoort() {
        return $this->autos;
    }
}
?>