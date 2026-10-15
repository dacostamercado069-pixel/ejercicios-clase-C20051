<?php

namespace App\Models\Ejercicio2;

class Vuelo
{
    private ?Aerolinea $aerolinea = null;
    private ?Avion $avion = null;

    public function __construct(
        private string $numero,
        private Aeropuerto $origen,
        private Aeropuerto $destino
    ) {}

    public function numero(): string
    {
        return $this->numero;
    }

    public function origen(): Aeropuerto
    {
        return $this->origen;
    }

    public function destino(): Aeropuerto
    {
        return $this->destino;
    }

    public function aerolinea(): ?Aerolinea
    {
        return $this->aerolinea;
    }

    public function asignarAerolinea(Aerolinea $aerolinea): void
    {
        $this->aerolinea = $aerolinea;
    }

    public function avion(): ?Avion
    {
        return $this->avion;
    }

    public function asignarAvion(Avion $avion): void
    {
        $this->avion = $avion;
    }
}