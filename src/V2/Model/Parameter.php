<?php

namespace QEEP\QEEPApiClient\V2\Model;


class Parameter
{
    protected $id;

    protected $name;

    protected $characteristic;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(?int $id) : Parameter
    {
        $this->id = $id;

        return $this;
    }

    public function getName() : ?string
    {
        return $this->name;
    }

    public function setName(?string $name) : Parameter
    {
        $this->name = $name;

        return $this;
    }

    public function getCharacteristic() : ?string
    {
        return $this->characteristic;
    }

    public function setCharacteristic(?string $characteristic) : Parameter
    {
        $this->characteristic = $characteristic;

        return $this;
    }
}