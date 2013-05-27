<?php
class Calculator
{
    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 2) != 4
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (3, 1) == 3
     */
    public function multiply($a, $b) {
        return $a * $b;
    }

    /**
     * @assert (4, 2) == 2
	 * @assert (1, 0) throws Exception
     */
    public function divide($a, $b) {
        if(!$b) {
            throw new Exception("Division by zero");
        }
        return $a / $b;
    }

    /**
     * @assert (1, 0) == 1
     * @assert (0, 1) == -1
     */
    public function subtract($a, $b) {
        return $a - $b;
    }
}
?>