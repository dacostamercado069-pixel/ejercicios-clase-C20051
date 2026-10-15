<?php


namespace App\Models\Ejercicio1;

class Palabra
{
    public function __construct(private string $texto)
    {
    }

    public function texto(): string
    {
        return $this->texto;
    }
}