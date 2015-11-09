<?php
/**
 * Created by PhpStorm.
 * User: ruslan
 * Date: 06.11.15
 * Time: 21:43
 */

namespace Layer;


class Calculate
{
    /**
     * @param $a
     * @param $b
     * @param $c
     * @return array|bool
     */
    function eq_roots($a, $b, $c)
    {
        if ($a == 0) return false;

        if ($b == 0) {
            if ($c < 0) {
                $x1 = sqrt(abs($c / $a));
                $x2 = sqrt(abs($c / $a));
            } elseif ($c == 0) {
                $x1 = $x2 = 0;
            } else {
                $x1 = sqrt($c / $a) . 'i';
                $x2 = -sqrt($c / $a) . 'i';
            }
        } else {
            $d = $b * $b - 4 * $a * $c;
            if ($d > 0) {
                $x1 = (-$b + sqrt($d)) / 2 / $a;
                $x2 = (-$b - sqrt($d)) / 2 / $a;
            } elseif ($d == 0) {
                $x1 = $x2 = (-$b) / 2 / $a;
            } else {
                $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
                $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
            }
        }
        return array($x1, $x2);
    }

    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    function rectangle($width, $height)
    {
       return $width * $height;
    }

    /**
     * @param $radius
     * @return float
     */
    function round($radius)
    {
        return 3.14 * $radius * $radius;
    }

    /**
     * @param $a
     * @param $b
     * @param $h
     * @return float
     */
    function trapezoid($a, $b, $h)
    {
        return (1 / 2) * ($a + $b) * $h;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    function scripRow($a, $b)
    {
        $summ = 0;

        for($i = $a; $i <= $b; $i++)
        {
            $summ += $i;
        }

        return $summ;
    }
}