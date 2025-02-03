<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosJFBM")]
class TablaJFBM
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;
    #[ORM\Column(type: "string", length: 255)]
    private string $fraseJFBM;
    public function getId(): int
    {
        return $this->id;
    }
    public function getContent(): string
    {
        return $this->fraseJFBM;
    }
    public function setContent(string $fraseJFBM): self
    {
        $this->fraseJFBM = $fraseJFBM;
        return $this;
    }
}
