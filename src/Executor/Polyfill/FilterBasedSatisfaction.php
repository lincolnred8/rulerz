<?php

namespace RulerZ\Executor\Polyfill;

use RulerZ\Context\ExecutionContext;

trait FilterBasedSatisfaction
{
    /**
     * {@inheritdoc}
     */
    abstract public function filter($target, array $parameters, array $operators, ExecutionContext $context);

    /**
     * {@inheritdoc}
     */
    public function satisfies($target, array $parameters, array $operators, ExecutionContext $context)
    {
        return count($this->filter($target, $parameters, $operators, $context)) !== 0;
    }
}
