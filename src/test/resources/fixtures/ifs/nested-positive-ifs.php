<?php

function cases_holder() {
    if ($a) {
        if ($b) {}
    } else {
        /* alternative branch case */
    }

    if ($a) {
        if ($b) {}
        else    {}
    }

    if ($a) {
       <weak_warning descr="If construct can be merged with parent one.">if</weak_warning> ($b) {
       }
    }

    if ($a && $b) {
       <weak_warning descr="If construct can be merged with parent one.">if</weak_warning> ($c) {
       }
    }

    if ($a) {
       <weak_warning descr="If construct can be merged with parent one.">if</weak_warning> ($b && $c) {
       }
    }

    if ($a || $b) {
       if ($c || $d) {
       }
    }

    if ($a || $b) {
        if ($c) {
        }
    }

    if ($a) {
        if ($b || $c) {
        }
    }
}