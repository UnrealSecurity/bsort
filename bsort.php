<?php

    function bsort($items, $comparer=null) {
        $flag = true;
        while ($flag) {
            $flag = false;
            for ($i=0; $i<count($items)-1; $i++) {
                if (($comparer==null && $items[$i] > $items[$i+1]) || ($comparer!=null && $comparer($items[$i], $items[$i+1]))) {
                    $flag = true;
                    $temp = $items[$i+1];
                    $items[$i+1] = $items[$i];
                    $items[$i] = $temp;
                }
            }
        }
        return $items;
    }

?>
