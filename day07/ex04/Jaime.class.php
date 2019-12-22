<?php

class Jaime extends Lannister {
    public function sleepWith($which) {
        if ($which instanceof Sansa)
            echo "Let's do this.\n";
        if ($which instanceof Tyrion)
            echo "Not even if I'm drunk !\n";
        if ($which instanceof Cersei)
            echo "With pleasure, but only in a tower in Winterfell, then.\n";
    }
}

?>