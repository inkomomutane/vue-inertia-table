<?php

namespace Mutane\VueTable\Support;

use Mutane\VueTable\Contracts\Column;

class BooleanColumn extends Column
{
    public function setTrueLabel(string $label): static {
        $this->label = $label;
        return $this;
    }

    public function setFalseLabel(string $label): static {
        $this->label = $label;
        return $this;
    }
}
