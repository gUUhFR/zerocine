<?php

session_start();
require "./repository/FilmesRepositoryPDO.php";
require "./model/Filme.php";
require "./util/SimpleImage.php";

class FilmesController{

        public function index(){
                $filmesRepository = new FilmesRepositoryPDO();
                return $filmesRepository->listarTodos();
        }

    public function save($resquest){

        $filmesRepository = new  FilmesRepositoryPDO();   
        $filme = (object) $resquest;

        $upload = $this->savePoster($_FILES);

        if(gettype($upload)=="string"){
            $filme->poster = $upload;
        }
        
        if ($filmesRepository->salvar($filme))
                $_SESSION["msg"] = "Filme Cadastrado com Sucesso!";
        else
                $_SESSION["msg"] = "Erro ao Cadastrar Filme!";
        
        header("location: /");
        
    }

    private function savePoster($file){
        $posterDir = "imagens/poster/";
        $posterPath = $posterDir . basename($file["poster_file"]["name"]);
        $posterTmp = $file["poster_file"]["tmp_name"];

        $image = new SimpleImage();
        $image->load($posterTmp);
        $image->resize(200, 300);
        $image->save($posterPath);
        return $posterPath;
    }

    public function favorite(int $id){
        $filmesRepository = new FilmesRepositoryPDO();
        $result = ['success' => $filmesRepository->favoritar($id)];
        header('Content-type: application/json');
        echo json_encode($result);
    }
}
