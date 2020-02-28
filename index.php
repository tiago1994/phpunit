<?
    include 'class/Consumo.php';

    $consumo = new Consumo();
    $dados = json_decode($consumo->consomeDados());
    foreach($dados as $d){
        echo 'id: '.$d->id.'<br>';
        echo 'name: '.$d->name.'<br>';
        echo 'username: '.$d->username.'<br>';
        echo 'email: '.$d->email.'<br>';

        echo '<br>======================================<br><br>';
    }
?>