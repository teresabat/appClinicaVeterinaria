<?php 

    class AnimalController{

        function Listar()
        {
            $host = 'mysql:host=localhost;dbname=prontuario_vet';
            $user = 'root';
            $pass = '';
            $lista = [];

           try
           {
            $pdo = new PDO($host, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $cSQL = $pdo->prepare('SELECT cd_animal, nm_animal, cd_especie FROM animal');
            $cSQL->execute();

            while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC))
            {
                $codigo = $dados['cd_animal'];
                $nome = $dados['nm_animal'];
                $codigoEspecie = $dados['cd_especie'];

                $animal = new animal($codigo, $nome);
                array_push($lista, $animal);
            }

            $pdo = null;
           
        }
           catch(PDOException $e)
           {
            echo 'Erro: ' . $e->getMessage();
           }
           return $lista;
        }
    }