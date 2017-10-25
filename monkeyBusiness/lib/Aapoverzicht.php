<?php

/**
 * Created by PhpStorm.
 * User: S.A.Mohamed
 * Date: 01-5-2017
 * Time: 13:25
 */
class AapOverzicht {
    public $apen = array();

    /**
     * @param $apen
     * @internal param $aapSoort
     */
    function voegAapToe($apen) {
        $this->apen[] = $apen;
    }
    /**
     * @return array
     */
    function getAapSoort() {
        sort($this->apen);
        return $this->apen;
    }
}
?>