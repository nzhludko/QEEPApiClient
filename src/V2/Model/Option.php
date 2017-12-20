<?php

namespace QEEP\QEEPApiClient\V2\Model;


class Option
{
    protected $id;

    protected $feature;

    protected $value;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function setId(int $id) : Option
    {
        $this->id = $id;

        return $this;
    }

    public function getFeature() : ?string
    {
        return $this->feature;
    }

    public function setFeature(?string $feature) : Option
    {
        $this->feature = $feature;

        return $this;
    }

    public function getValue() : ?string
    {
        return $this->value;
    }

    public function setValue(?string $value) : Option
    {
        $this->value = $value;

        return $this;
    }
}