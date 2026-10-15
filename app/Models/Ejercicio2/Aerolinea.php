<?php

namespace App\Models\Ejercicio2;

class Aerolinea
{
    private array $vuelos = [];

    public function __construct(private string $nombre) {}

    public function nombre(): string
    {
        return $this->nombre;
    }

    public function agregarVuelo(Vuelo $vuelo): static
    {
        $this->vuelos[] = $vuelo;
        $vuelo->asignarAerolinea($this);
        return $this;
    }

    public function vuelos(): array
    {
        return $this->vuelos;
    }
}