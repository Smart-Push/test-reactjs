<?php

namespace App\DTO;

class TrunkedTransactionDTO
{
    private int $id;
    private string $label;

    public function __construct(
        int $id,
        string $label
    ) {
        $this->id = $id;
        $this->label = $label;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }
}