<?php

 namespace Hcode\Model;

 use \Hcode\DB\Sql;
 use \Hcode\Model;
 use \Hcode\Mailer;

    class Category extends Model{

        public static function listAll(){
            $sql= new sql();
            return $sql->select("SELECT * FROM tb_categories ORDER BY descategory");
        }

        public function save(){

            $sql =  new sql();

            $results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)", array(
                ":idcategory"=>$this->getidcategory(),
                ":descategory"=>$this->getdescategory()
            ));

            Category::updateFile();

            $this->setData($results[0]);
        }

        public function get($idcategory){

            $sql = new Sql();
            $results = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", [
                    ":idcategory"=>$idcategory

            ]);
            $this->setData($results[0]);
        }
        public function delete(){
            $sql = new sql();

            $sql->query("DELETE FROM tb_categories WHERE idcategory = :idcategory", [
                ':idcategory'=>$this->getidcategory()
            ]);
            Category::updateFile();
        }
     
        public function updateFile(){

            $categories = Category::listAll();
            $html = [];

            foreach ($categories as $row) {
                array_push($html, '<li><a href="/categorias/'.$row['idcategory'].'">'.$row['descategory'].'</a></li>
                <li> |</li>');
            }
            file_put_contents($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."viwes".DIRECTORY_SEPARATOR."categories-menu.html", implode('', $html));
        }
    }
?>