<?php

namespace App\Models\Ejercicio1;

class Capitulo
{
    /** @var Parrafo[] */
    private array $parrafos = [];

    public function __construct(private string $titulo)
    {
    }

    public function agregarParrafo(): Parrafo
    {
        $parrafo = new Parrafo();
        $this->parrafos[] = $parrafo;

        return $parrafo;
    }

    /** @return Parrafo[] */
    public function parrafos(): array
    {
        return $this->parrafos;
    }

    public function titulo(): string
    {
        return $this->titulo;
    }
}