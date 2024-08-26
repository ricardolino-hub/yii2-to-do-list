<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Todos $model */

$this->title = 'Create Todos';
$this->params['breadcrumbs'][] = ['label' => 'Todos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
