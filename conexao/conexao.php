<?php
   function Conectar() # Funcao de conectar
   {
        define('SERVER', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DB', 'login');
    
   try
   {
       $conexao =  new PDO("mysql:host=".SERVER.";dbname=".DB."", USER, PASS);
       return $conexao; # Retorna o valor da conexao
    
   }
   catch(PDOException $e){
        echo $e;
   }    
    
   }