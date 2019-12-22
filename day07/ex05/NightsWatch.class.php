<?php

class NightsWatch {
    private $patrol = array();
    public function recruit($warrior) {
        $this->patrol[] = $warrior;
    }
    public function fight() {
        foreach ($this->patrol as $nightguard) {
            if ($nightguard instanceof IFighter)
                $nightguard->fight();
        }
    }
}

?>