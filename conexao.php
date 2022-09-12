<?php
 abstract class Conexao{
 protected function conectarDB(){
 try{
 return $conectar = new 
PDO("http://localhost/phpmyadmin/index.php?route=/table/change&db=mapabackend2&table=dbteste","root", "");
 }catch(PDOException $e){
 return $e->getMessage();
 }
 }
 }
?>
