<?php

function getNotes($select)
{
    if($select >= 0 && $select <= 10)
    {
        return "Special Abilities: Shape-shifting, karma";
    }
    else if($select >= 43 && $select <= 52)
    {
        return "Special Abilities: Infravision (60'), sling, sense fresh water, woodland and handling animals skills";

    }
    else if($select >= 83 && $select <= 92)
    {

        return "Special Abilities: Flight, mimicry";
    }
    else
    {
        return '';
    }


}


?>