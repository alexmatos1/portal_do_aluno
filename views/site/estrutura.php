<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
?>

<html>
<head>
    <link href="../web/css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<h3>AULAS PARA ASSISTIR</h3>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <iframe id="areavideo" width="560" height="315" src="https://www.youtube.com/embed/y0B-vQI6Tiw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <ul class="col-md-3" id="playlist">
            <li movieurl="https://www.youtube.com/embed/y0B-vQI6Tiw">Aula 1 - Introdução</li>
            <li movieurl="https://www.youtube.com/embed/x2DwllnUZDg">Aula 2 - Criando Estrutura</li>
            <li movieurl="https://www.youtube.com/embed/g_nbG7L5ou0">Aula 3 - Lista Linear</li>
            <li movieurl="https://www.youtube.com/embed/iBoWPFDQC_I">Aula 4 - Lista Linear(continuação)</li>
            <li movieurl="https://www.youtube.com/embed/C6WOW0L1XO4">Aula 5 - Implementação Lista</li>
        </ul>
    </div>
</div>
<div class="row" style="margin-top: 30px;background-color: #e4e4e4; width: 100%; height: 100px; padding-top: 7px">

    <div class="col-md-3">
        <a href="<?= Url::base();?>/web/arquivos/estrutura.pdf" style="color: black" target="_blank">
            <div class="ssb-icon" style="margin-left: 42%"><i style="color: black"  class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
            <h2 class="ssb-title" style="color: black; text-align: center">PDF - aula</h2>
        </a>
    </div>

    <div class="col-md-3">
        <a href="<?= Url::base();?>/web/arquivos/Estrutura.pptx" style="color: black">
            <div class="ssb-icon" style="margin-left: 44%"><i style="color: black" class="fa fa-file-powerpoint-o" aria-hidden="true"></i></div>
            <h2 class="ssb-title" style="color: black; text-align: center">Slide</h2>
        </a>
    </div>

    <div class="col-md-3">
        <a href="<?= Url::base();?>/web/arquivos/exercicios-ed.pdf" style="color: black" target="_blank">
            <div class="ssb-icon" style="margin-left: 43%"><i style="color: black"  class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
            <h2 class="ssb-title" style="color: black; text-align: center">Exercícios</h2>
        </a>
    </div>

    <div class="col-md-3">
        <a href="site/turmas" style="color: black">
            <div class="ssb-icon" style="margin-left: 44%"><i style="color: black"  class="fa fa-file-text-o" aria-hidden="true"></i></div>
            <h2 class="ssb-title" style="color: black; text-align: center">Anotações</h2>
        </a>
    </div>


</div>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#playlist li").on("click", function() {
            $("#areavideo").attr({
                "src": $(this).attr("movieurl"),
                "poster": "",
                "autoplay": "autoplay"
            })
        })
        $("#videoarea").attr({
            "src": $("#playlist li").eq(0).attr("movieurl"),
            "poster": $("#playlist li").eq(0).attr("moviesposter")
        })
    })
</script>
