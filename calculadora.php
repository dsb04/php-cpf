<?php
class Calculadora
{
    /**
     * Calcula soma de dois numeros
     * 
     * @param float $x
     * @param float $y
     * 
     * @return int
     */
    public soma($x, $y)
    {
        return $x = $y;
    }
/**
 * Calcula a subtração de dois numeros
 * 
 * @param float $x
 * @param float $y
 * 
 * return float
 */
public function mult ($x, $Y){
    return $x * $y;
}
public function div ($x, $y)
 {
if ($y ==0) {
    return 0;
}
return $x / $y;
}
public function pot ($x, $Y){
    return pow($x, $y);
}
public function adi ($x, $Y){
    return $x + $y;
}
public function sub ($x, $Y){
    return $x - $y;
}

?>