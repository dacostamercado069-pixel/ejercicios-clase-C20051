<?php

namespace App\Models;

class Libro
{
    /** @var Capitulo[] */
    private array $capitulos = [];         // 1..*

    public function __construct(private string $titulo)
    {
    }

   
    public function agregarCapitulo(string $titulo): Capitulo
    {
        $capitulo = new Capitulo($titulo);
        $this->capitulos[] = $capitulo;

        return $capitulo;
    }

    /** @return Capitulo[] */
    public function capitulos(): array
    {
        return $this->capitulos;
    }

    public function titulo(): string
    {
        return $this->titulo;
    }
}