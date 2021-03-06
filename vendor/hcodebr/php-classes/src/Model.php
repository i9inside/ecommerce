<?php
namespace Hcode;
    class model{
    
            private $values = [];

            public function __call($name, $args){

                    $method = substr($name, 0, 3);
                    $fildeName = substr($name, 3, strlen($name));
                   
                    switch($method){

                        case "get":
                            return (isset($this->values[$fildeName])) ? $this->values[$fildeName] : NULL;
                        break;

                        case "set":
                                $this->values[$fildeName] = $args[0];
                        break;
                    }
            }

            public function setData($data = array()){
                foreach($data as $key => $values){
                    $this->{"set".$key}($values);
                    //var_dump($values);
                }
            }

            public function getValues(){
                return $this->values;
           }

    }

?>