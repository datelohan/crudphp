<?php
namespace Lohan\Estdosphp\app\models;

class ProdutoDao{

    public function create(Produto $p){
        $sql = "INSERT INTO produtos (name,descricao) VALUES(?,?)";

        $stmt = conexao::getCon()->prepare($sql);
        $stmt->bindValue(1,$p->getNome());
        $stmt->bindValue(2,$p->getDescricao());

        $stmt->execute();
    }
    public function delete($id_produto){
        $sql = "DELETE FROM produtos WHERE id = ?  ";

        $smt = conexao::getCon()->prepare($sql);
        $smt->bindValue(1,$id_produto);
        $smt->execute();    
    }
    public function update(){
    }
    public function read(){
        $sql = "SELECT * FROM produtos";

        $stmt = conexao::getCon()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0):
            $resl = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resl;
        endif;

        

        
    }
}