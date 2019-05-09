<?php include_once './global/autoload.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DOWNLOADS</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12" style="text-align: center">
                    <hr>
                    DOWNLOADS
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php
                    $downDao = new \persistence\DownloadDao();
                    $lista   = $downDao->listar();
                    if (count($lista) > 0) {
                        echo "<BR>Quantidade de registros ->" . count($lista) . "<br>";
                        ?>                        
                        <table class="table table-bordered table-hover">
                            <tr style="background-color: #555555;color: #fff;">
                                <!--th>id</th-->
                                <th>Nome</th>
                                <th>tipo</th>
                                <th>link</th>
                            </tr>
                            <?php for ($i = 0; $i < count($lista); $i++) { ?>
                                <tr>
                                    <!--td><? = $lista[$i]['id'] ?></td--> 
                                    <td><?= $lista[$i]['nome'] ?></td> 
                                    <td><?= $lista[$i]['tipo'] ?></td> 
                                    <td style="text-align: center; width: 100px"><a href="<?= $lista[$i]['link'] ?>" target="_BLANK" class="btn btn-info">Download</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="text-align: center">
                    <hr>
                    JSON
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php
                    $downDao->testejson();
                    $arrayDownloadsJson = $downDao->testejson();
                    //DESCARREGANDO COMO ARRAY
                    echo "<hr>";
                    echo "<br>" . "DESCARREGANDO COMO ARRAY";
                    //var_dump(json_decode($arrayDownloadsJson, true));
                    $comoarray          = (json_decode($arrayDownloadsJson, true));
                    echo "<br>" . $comoarray[0]['nome'];
                    echo "<hr>";
                    echo "<hr>";
                    //DESCARREGANDO COMO OBJETO
                    echo "<br>" . "DESCARREGANDO COMO OBJETO";
                    //var_dump(json_decode($arrayDownloadsJson));
                    $comoobjeto         = (json_decode($arrayDownloadsJson));
                    echo "<br>" . $comoobjeto[0]->nome;
                    echo "<hr>";
                    for ($i = 0; $i < count($comoobjeto); $i++) {
                        echo $comoobjeto[$i]->nome."<br>";
                        echo $comoobjeto[$i]->link."<br><br>";                        
                    }
                    ?>
                </div>                
            </div>
        </div>
        <!--bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
