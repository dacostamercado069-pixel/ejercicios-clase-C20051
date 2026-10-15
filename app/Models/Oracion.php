<?php


namespace App\Models\Ejercicio1;

class Oracion
{
    /** @var Palabra[] */
    private array $palabras = [];          // 1..*

   
    public function agregarPalabra(Palabra $palabra): void
    {
        $this->palabras[] = $palabra;
    }

    /** @return Palabra[] */
    public function palabras(): array
    {
        return $this->palabras;
    }
}