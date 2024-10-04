<?php

class Calc
{
    public $num1;
    public $num2;
    public $operator;

    public function __construct(int $num1 , int $num2 , string $oper)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $oper;

    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
        
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            
            default:
                echo 'Error';
                break;
        }
    }
}