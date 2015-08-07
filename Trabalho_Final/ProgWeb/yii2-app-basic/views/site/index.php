<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Instituto de Computação';
?>
<div class="site-index">

    <div class="jumbotron">
   <?= Html::jsFile('@web/js/index.js') ?>

    <?= Html::img('@web/images/m31.jpg', array('width' => '300', 'height' =>'200')) ?> 
        
        
        <h1 onmouseout="handleMouseOut(this)" onmouseover="handleMouseOver(this)" >Instituto de Computação!</h1>

        <p class="lead">Esta é a M31.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.ccvalg.pt/astronomia/galaxias/galaxias_espirais.htm">Mais informação sobre M31</a></p>
    </div>

<script type="text/javascript">
    
    function handleMouseOver(e) {

    e.style.color='red';
}

function handleMouseOut(e) {
    e.style.removeProperty('color');
    e.style.removeProperty('background');
   // e.style.color='black';
}
</script>
 <!--   <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>-->
</div>
