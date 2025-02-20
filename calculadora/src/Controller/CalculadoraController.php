<?php
declare(strict_types=1);

namespace App\Controller;

class CalculadoraController extends AppController
{
    public function index()
    {
        $this->set('resultado', null);

        if ($this->request->is('post')) {
            $num1 = (float)$this->request->getData('num1');
            $num2 = (float)$this->request->getData('num2');
            $operacao = $this->request->getData('operacao');

            switch ($operacao) {
                case 'soma':
                    $resultado = $num1 + $num2;
                    break;
                case 'subtracao':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    break;
                case 'divisao':
                    $resultado = ($num2 != 0) ? $num1 / $num2 : 'Erro: divisão por zero!';
                    break;
                default:
                    $resultado = 'Operação inválida!';
            }

            $this->set('resultado', $resultado);
        }
    }
}
