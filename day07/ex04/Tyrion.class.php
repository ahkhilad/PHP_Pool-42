<?php

class Tyrion extends Lannister {
    public function sleepWith($which) {
        if ($which instanceof Sansa)
            echo "Let's do this.\n";
        if ($which instanceof Jaime)
            echo "Not even if I'm drunk !\n";
        if ($which instanceof Cersei)
            echo "Not even if I'm drunk !\n";
    }
}

?>