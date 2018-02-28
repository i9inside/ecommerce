<?php

 namespace Hcode\Model;

 use \Hcode\DB\Sql;
 use \Hcode\Model;
 use \Hcode\Mailer;

    class Product extends Model{

        public static function listAll(){
            $sql= new sql();
            return $sql->select("SELECT * FROM tb_products ORDER BY desproduct");
        }

        public function save(){

            $sql =  new sql();

            $results = $sql->select("CALL sp_products_save(:idproduct, :desproduct, :vlprice, :vlwidth, :vlheigth, :vllenght, :vlweight, :desurl)", array(
                ":idproduct"=>$this->getidproduct(),
                ":desproduct"=>$this->getdesproduct(),
                ":vlprice"=>$this->getvlprice(),
                ":vlwidth"=>$this->getvlwidth(),
                ":vlheigth"=>$this->getvlheigth(),
                ":vllenght"=>$this->getvllenght(),
                ":vlweight"=>$this->getvlweight(),
                ":desurl"=>$this->getdesurl()
            ));
            
           $this->setData($results[0]);
            
        }

        public function get($idproduct){

            $sql = new Sql();
            $results = $sql->select("SELECT * FROM tb_products WHERE idproduct = :idproduct", [
                    ':idproduct'=>$idproduct

            ]);
            $this->setData($results[0]);
        }
        public function delete(){
            $sql = new sql();

            $sql->query("DELETE FROM tb_products WHERE idproduct = :idproduct", [
                ':idproduct'=>$this->getidproduct()
            ]);

        }
     
    }
?>