<?
    declare(strict_types=1);
    require_once('./vendor/autoload.php');
    require_once('./class/Consumo.php');
    use PHPUnit\Framework\TestCase;

    class ConsumoTeste extends TestCase{
        function test_consome(){
            $dados = new Consumo();
            $info = $dados->consomeDados();
            $mock = file_get_contents('./mock/mock.json');
            $this->assertEquals($mock, $info);
        }
    }
?>