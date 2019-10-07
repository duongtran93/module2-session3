<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function get_a()
    {
        return $this->a;
    }

    public function get_b()
    {
        return $this->b;
    }

    public function get_c()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return ((pow($this->b, 2)) - 4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return (((-$this->b) + pow($this->getDiscriminant(), 0.5)) / 2 * $this->a);
    }

    public function getRoot2()
    {
        return (((-$this->b) - pow($this->getDiscriminant(), 0.5)) / 2 * $this->a);
    }

    public function getRoot()
    {
        return ((-$this->b) / (2 * $this->a));
    }
}