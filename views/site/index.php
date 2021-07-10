<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Portal do aluno';
?>
<html>
    <head>
        <link href="<?= Url::base();?>/web/css/style.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    </head>
<div class="site-index">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="site/turmas">
                        <div class="ssb-icon"><i class="fa fa-paint-brush" aria-hidden="true"></i></div>
                        <h2 class="ssb-title">Turmas</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="site/calendario">
                        <div class="ssb-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                        <h2 class="ssb-title">Calendário</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                        <h2 class="ssb-title">Biblioteca</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                        <h2 class="ssb-title">Serviços</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></div>
                        <h2 class="ssb-title">Mensagens</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
                        <h2 class="ssb-title">Estatisticas</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-youtube" aria-hidden="true"></i> </div>
                        <h2 class="ssb-title">Video</h2>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="square-service-block">
                    <a href="#">
                        <div class="ssb-icon"><i class="fa fa-volume-up" aria-hidden="true"></i> </div>
                        <h2 class="ssb-title">Audio</h2>
                    </a>
                </div>
            </div>

        </div>
    </div>


</div>
</html>