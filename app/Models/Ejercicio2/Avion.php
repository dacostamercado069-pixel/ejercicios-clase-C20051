<?php

namespace App\Models\Ejercicio2;

class Avion
{
    public function __construct(
        private string $matricula,
        private string $modelo,
        private int $capacidad
    ) {}

    public function matricula(): string
    {
        return $this->matricula;
    }

    public function modelo(): string
    {
        return $this->modelo;
    }

    public function capacidad(): int
    {
        return $this->capacidad;
    }
}