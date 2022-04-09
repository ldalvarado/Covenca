<?php
    if (! function_exists('carcasa_promedio')) {
        function carcasa_promedio($calidad_carcasa_promedio)
        {   
            $result = [];
            $i = $calidad_carcasa_promedio;
            switch ($i) {
                case 0.25:
                    $result = [
                        'rendPorcentaje' => '8.33%',
                        'rendKilometro' => 3.43,
                    ];
                    break;
                case 0.333333333:
                    $result = [
                        'rendPorcentaje' => '11.11%',
                        'rendKilometro' => 41.15,
                    ];
                    break;
                case 0.5:
                    $result = [
                        'rendPorcentaje' => '16.67%',
                        'rendKilometro' => 370.37,
                    ];
                    break;
                case 0.666666667:
                    $result = [
                        'rendPorcentaje' => '22.22%',
                        'rendKilometro' => 2222.22,
                    ];
                    break;
                case 0.75:
                    $result = [
                        'rendPorcentaje' => '25.00%',
                        'rendKilometro' => 10000.00,
                    ];
                    break;
                case 1:
                    $result = [
                        'rendPorcentaje' => '80.00%',
                        'rendKilometro' => 40000.00,
                    ];
                    break;
                case 1.25:
                    $result = [
                        'rendPorcentaje' => '93.75%',
                        'rendKilometro' => 50000.00,
                    ];
                    break;
                case 1.333333333:
                    $result = [
                        'rendPorcentaje' => '88.89%',
                        'rendKilometro' => 53333.33,
                    ];
                    break;
                case 1.5:
                    $result = [
                        'rendPorcentaje' => '90.00%',
                        'rendKilometro' => 60000.00,
                    ];
                    break;
                case 1.666666667:
                    $result = [
                        'rendPorcentaje' => '95.24%',
                        'rendKilometro' => 66666.67,
                    ];
                    break;
                case 1.75:
                    $result = [
                        'rendPorcentaje' => '87.50%',
                        'rendKilometro' => 70000.00,
                    ];
                    break;
                case 2:
                    $result = [
                        'rendPorcentaje' => '88.89%',
                        'rendKilometro' => 80000.00,
                    ];
                    break;
                case 2.25:
                    $result = [
                        'rendPorcentaje' => '96.43%',
                        'rendKilometro' => 90000.00,
                    ];
                    break;
                case 2.333333333:
                    $result = [
                        'rendPorcentaje' => '93.33%',
                        'rendKilometro' => 93333.33,
                    ];
                    break;
                case 2.5:
                    $result = [
                        'rendPorcentaje' => '93.75%',
                        'rendKilometro' => 100000.00,
                    ];
                    break;
                case 2.666666667:
                    $result = [
                        'rendPorcentaje' => '96.97%',
                        'rendKilometro' => 106666.67,
                    ];
                    break;
                case 2.75:
                    $result = [
                        'rendPorcentaje' => '91.67%',
                        'rendKilometro' => 110000.00,
                    ];
                    break;
                case 3:
                    $result = [
                        'rendPorcentaje' => '100%',
                        'rendKilometro' => 120000.00,
                    ];
                    break;
            }

            return $result;
        }
    }