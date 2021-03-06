<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @Groups({"Vulns"})
     */
    protected $id;

    public function getId(): int
    {
        return $this->id;
    }
}
