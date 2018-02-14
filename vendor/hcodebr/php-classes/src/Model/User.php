<?php

 namespace Hcode\Model;

 use \Hcode\DB\Sql;
 use \Hcode\Model;
 use \Hcode\Mailer;

    class User extends Model{

            const SESSION = "User";
            const SECRET = "HcodePhp7_secret";

        public static function login($login, $password){

            $sql = new sql();

            $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
                ":LOGIN"=>$login
            ));

            if(count($results) === 0){
                throw new \Exception("Erro encontrado no login", 1);
            }

            $data = $results[0];            

           if(password_verify($password, $data["despassword"]) === true){
                $user = new User();
                $user->setData($data);
                //var_dump($user);
                //exit;
                $_SESSION[User::SESSION] = $user->getValues();
                //return $user;
            }else{
                throw new \Exception("Usuario Inexsitente ou senha Invalida", 1); 
            }
        }

        public static function verifyLogin($inadmin = true)
        {
    
            if (
                !isset($_SESSION[User::SESSION])
                || 
                !$_SESSION[User::SESSION]
                ||
                !(int)$_SESSION[User::SESSION]["iduser"] > 0
                ||
                (bool)$_SESSION[User::SESSION]["iduser"] !== $inadmin

            ) {
                
                header("Location: /admin/login");
                exit;
    
            }
    
        }

        public static function logout()
        {

        
           $_SESSION[User::SESSION]=NULL;
            //$session = User::SESSION;
            //var_dump($session);
           //unset($session);
           //header("Location /admin/login");

        }

        public static function listAll(){
            $sql= new sql();
            return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY desperson");
        }

        public function save(){
            $sql = new Sql();

            $results = $sql->select("CALL sp_users_save(:desperson, :deslogin, :despassword, :desemail, :nrphone, 
            :inadmin )", array(
                ":desperson"=>$this->getdesperson(),
                ":deslogin"=>$this->getdeslogin(),
                ":despassword"=>$this->getdespassword(),
                ":desemail"=>$this->getdesemail(),
                ":nrphone"=>$this->getnrphone(),
                ":inadmin"=>$this->getinadmin()
                
            ));
            
            $this->setData($results[0]);
        }

        public function get($iduser){

            $sql = new sql();

            $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(

                ":iduser"=>$iduser
            ));

            $this->setData($results[0]);
        }

        public function update(){
            $sql = new Sql();

            $results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :deslogin, :despassword, :desemail, :nrphone, 
            :inadmin )", array(
                ":iduser"=>$this->getiduser(),
                ":desperson"=>$this->getdesperson(),
                ":deslogin"=>$this->getdeslogin(),
                ":despassword"=>$this->getdespassword(),
                ":desemail"=>$this->getdesemail(),
                ":nrphone"=>$this->getnrphone(),
                ":inadmin"=>$this->getinadmin()
                
            ));
            
            $this->setData($results[0]);
        }

        public function delete(){
            $sql = new Sql();

            $sql->query("CALL sp_users_delete(:iduser)", array(
                ":iduser"=>$this->getiduser()
            ));
        }

        public static function getForgot($email){

            $sql = new Sql();

            $results = $sql->select("SELECT * FROM tb_persons a INNER JOIN tb_users b USING(idperson) WHERE a.desemail = :email;", array(":email"=>$email));
            //var_dump($results);

            if(count($results) === 0){
                throw new \Exception("Não foi possivel recuperar a senha1");
            }else{
                $data = $results[0];
                $results2 = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :desip)", array(
                    "iduser"=>$data["iduser"],
                    "desip"=>$_SERVER["REMOTE_ADDR"]
                ));

                //var_dump($results2);

                if(count($results2) === 0){
                    throw new \Exception("Não foi possivel recuperar a senha2");
                }else{
                    $dataRecovery = $results2[0];
                    $teste = "[Redefinir Senha Karol]";
                    //$pagina = "forgot";

                    $code = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, User::SECRET, $dataRecovery["idrecovery"], MCRYPT_MODE_ECB));

                    $link = "http://www.karolecommerce.com.br/admin/forgot/reset?code=$code";

                    $mailer = new Mailer($data["desemail"], $data["desperson"], $teste, "forgot", 
                    array(
                        "name"=>$data["desperson"],
                        "link"=>$link
                    ));

                    $mailer->send();

                    return $data;
                }
            }

            
        }

        public static function validForgotDecrypt($code){

            $idrecovery = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, User::SECRET, base64_decode($code), MCRYPT_MODE_ECB);
var_dump($idrecovery);
            $sql = new sql();

            $results = $sql->select("SELECT *
                FROM tb_userspasswordsrecoveries a
                INNER JOIN tb_users b USING(iduser)
                INNER JOIN tb_persons c USING(idperson)
                WHERE 
                    a.idrecovery = 80
                    AND 
                    a.dtrecovery IS NULL
                    AND
                    date_add(a.dtregister, INTERVAL 1 HOUR) >= now();", array(":idrecovery"=>$idrecovery));
var_dump($results); 
                if(count($results) === 0){
                    throw new \Exception("não foi possivel recuperar a senha");
                }else{
                    return $results[0];
                }
                
        }
        
        public static function setForgotUsed($idrecovery){

            $sql = new Sql();
            $sql->query("UPDATE tb_userspasswordsrecoveries SET dtrecovery = NOW() WHERE idrecovery = :idrecovery", array(
                ":idrecovery"=>$idrecovery
            ));

        }

        public function setPassword($password){
            $sql = new sql();

            $sql->query("UPDATE tb_users SET despassword = :password WHERE iduser =:iduser", array(
                ":password"=>$password,
                ":iduser"=>$this->getiduser()
            ));
        }
    }
?>