<?php

namespace Kilian2402\RandomBool;

class Rand
{
    /**
     * @return bool A random bool
     */
    public function getBool(): bool
     {
         $gen = rand(0,1);
         // wenn 1 = 1, dann passt; wenn 0 dann ist falsch, also dann 0
         // === -> Datentyp wird auch überprüft
         return $gen === 1;
     }
}