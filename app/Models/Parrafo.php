<?php

namespace App\Models\Ejercicio1;

class Parrafo
{
    /** @var Oracion[] */
    private array $oraciones = [];         // 1..*

   
    public function agregarOracion(): Oracion
    {
        $oracion = new Oracion();
        $this->oraciones[] = $oracion;

        return $oracion;
    }

    /** @return Oracion[] */
    public function oraciones(): array
    {
        return $this->oraciones;
    }
}