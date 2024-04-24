<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Models\Calculadora;


class CalculadoraTest extends TestCase {

    public function testSomaApenasNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $this->expectException(TypeError::class);
        $calculadora->soma(1.2, 1.2);
    }

    public function testSomaNaoDeveSerExecutadaSemParametros()
    {
        $calculadora = new Calculadora;
        $this->expectException(ArgumentCountError::class);

        $calculadora->soma();
    }

    public function testMetodoSomaDeveSomarDoisNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $valorEsperado = 4;
        $atual = $calculadora->soma(1,3);

        $this->assertEquals($atual, $valorEsperado);
    }

    public function testSubtraiApenasNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $this->expectException(TypeError::class);
        $calculadora->subtracao(1.2, 1.2);
    }

    public function testSubtracaoNaoDeveSerExecutadaSemParametros()
    {
        $calculadora = new Calculadora;
        $this->expectException(ArgumentCountError::class);

        $calculadora->subtracao();
    }

    public function testMetodoSubtracaoDeveSubtrairDoisNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $valorEsperado = 2;
        $atual = $calculadora->subtracao(3,1);

        $this->assertEquals($atual, $valorEsperado);
    }

    public function testMultiplicaApenasNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $this->expectException(TypeError::class);
        $calculadora->multiplicacao(1.2, 1.2);
    }

    public function testMultiplicacaoNaoDeveSerExecutadaSemParametros()
    {
        $calculadora = new Calculadora;
        $this->expectException(ArgumentCountError::class);

        $calculadora->multiplicacao();
    }

    public function testMultiplicacaoDeveMultiplicarDoisNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $valorEsperado = 6;
        $atual = $calculadora->multiplicacao(2,3);

        $this->assertEquals($atual, $valorEsperado);
    }

    public function testDividirApenasNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $this->expectException(TypeError::class);
        $calculadora->divisao(1.2, 1.2);
    }

    public function testDivisaoNaoDeveSerExecutadaSemParametros()
    {
        $calculadora = new Calculadora;
        $this->expectException(ArgumentCountError::class);

        $calculadora->divisao();
    }

    public function testNaoEPossivelDividirNumeroPorZero()
    {
        $calculadora = new Calculadora;

        $this->expectException(DivisionByZeroError::class);
        $calculadora->divisao(2,0);
    }

    public function testDivisaoDeveDividirDoisNumerosInteiros()
    {
        $calculadora = new Calculadora;

        $valorEsperado = 2;
        $atual = $calculadora->divisao(4,2);

        $this->assertEquals($atual, $valorEsperado);
    }
}

