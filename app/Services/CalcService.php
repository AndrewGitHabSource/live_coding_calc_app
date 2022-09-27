<?php

namespace App\Services;

use Illuminate\Http\Request;

class CalcService {
    public function calc($first, $second, $operation) {
        $result = 0;

        switch ($operation) {
            case 'plus':
                $result = $first + $second;
                break;
            case 'minus':
                $result = $first - $second;
                break;
            case 'divide':
                $result = $first / $second;
                break;
            case 'multiply':
                $result = $first * $second;
                break;
        }

        return $result;
    }
}
