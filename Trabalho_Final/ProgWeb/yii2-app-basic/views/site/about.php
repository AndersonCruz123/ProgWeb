<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>
<?= Html::encode("Este exercício faz parte do trabalho final 
	da disciplina de Programação Web, utilizando o ICOMP como modelo para ir modificando o framework.") ?>    
    </h3>
    <h3> <?= Html::encode($date) ?>
    </h3>
    <code><?= __FILE__ ?></code>
</div>
