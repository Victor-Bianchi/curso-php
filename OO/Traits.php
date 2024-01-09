<div class="titulo">Traits</div>

<?php

/**
 * Com as traits podemos fazer do reúso de codigo nossa prioridade.
 * 
 * Uma observação é que pode ser que tenhamos conflitos entre Traits caso método criado em ambas tenham o mesmo nome. Para resolver isso basta fazer:
 * traitUsed::method insteadOf traiNotUsed
 * 
 * Podemos também usar um alias para se referenciar a um método especifico de uma trait específica através da keyword 'as'
 */

trait Gutenberg {
    public function Impress(mixed $data = 'GUTENBERG -> IMPRESS'): void {
        echo $data;
    }

    public function MoneyFormatter(float $value, string $currency): void {
        $numberFormatted = number_format($value, 2, ',', '.');

        switch ($currency) {
            case 'BRL':
                echo "R$ {$numberFormatted}";
                break;
            case 'USD':
                echo "US$ {$numberFormatted}";
                break;
            case 'CAD':
                echo "C$ {$numberFormatted}";
                break;
            default:
                echo "Cifra não identificada!";
                echo $numberFormatted;
                break;
        }
    }
}

class Banco {

    use Gutenberg;

    private $nomeCliente;
    private $agencia;
    private $contaCorrente;
    private $contaPoupança;
    public $saldo;

    public function __construct($nome, $ag, $cc, $cp, $saldo) {
        $this->nomeCliente = $nome;
        $this->agencia = $ag;
        $this->contaCorrente = $cc;
        $this->contaPoupança = $cp;
        $this->saldo = $saldo;
    }

    public function consultarSaldo() {
        echo $this->MoneyFormatter($this->saldo, 'BRL');
    }

    public function depositar(float $valor): bool {
        if(isset($valor) && is_numeric($valor)) {
            $this->saldo += $valor;
            return true;
        } else {
            return false;
        }
    }

    public function sacar(float $valor): bool {
        if (isset($valor) && is_numeric($valor)) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    public function resumo() {
    $this->Impress("CLIENTE: $this->nomeCliente <br> AGÊNCIA: $this->agencia <br> CONTA-CORRENTE: $this->contaCorrente <br> CONTA POUPANÇA: $this->contaPoupança <br> SALDO ATUAL: {$this->MoneyFormatter($this->saldo, 'BRL')}<br>");
}

}

$bank = new Banco('João', 2308, 388740, 266887, 2585.90);
$bank->depositar(10870);
$bank->consultarSaldo();
$bank->sacar(500);
echo '<br>';
$bank->consultarSaldo();
$bank->resumo();