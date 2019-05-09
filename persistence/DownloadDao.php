<?php

namespace persistence;

use model\Download;

class DownloadDao extends Dao {

    public function listar() {
        //TRAZER COMO ARRAY
        try {
            $this->open();
            $stmt  = $this->con->prepare("select id, nome, tipo, link from downloads");
            $stmt->execute();
            $lista = [];
            $lista = $stmt->fetchAll();
            $this->close();
            return $lista;
        } catch (\Exception $ex) {
            echo "ERRO:" . $ex->getMessage();
            $this->close();
            return false;
        }
    }

    public function testejson() {
        //TRAZER COMO ARRAY
        try {
            $this->open();
            $stmt  = $this->con->prepare("select id, nome, tipo, link from downloads");
            $stmt->execute();
            $lista = [];
            $lista = $stmt->fetchAll();
            //var_dump($lista);
            for ($i = 0; $i < count($lista); $i++) {
                $arrayDownloads[] = array(
                    "nome" => $lista[$i]['nome'],
                    "link" => $lista[$i]['link']
                );
            }
            return json_encode($arrayDownloads);
            
            //descarregando objeto
            //var_dump(json_decode($arrayDownloadsJson));
            
            //descarregando array
            //var_dump(json_decode($arrayDownloadsJson, true));
            
        } catch (\Exception $ex) {
            echo "ERRO:" . $ex->getMessage();
            $this->close();
            return false;
        }
    }

}
