<?php 
require_once  '../vendor/autoload.php';
use Lohan\Estdosphp\app\models\Produto;
use Lohan\Estdosphp\app\models\ProdutoDao;

// $user = new Produto();

 
$Produto = new ProdutoDao();



for($i =2 ; $i < 25; $i++) {
    $Produto->delete($i);
}
// foreach ($Produto->read() as $Produto):
//     echo $Produto['name'].$Produto["descricao"]."<br>";

// endforeach; 