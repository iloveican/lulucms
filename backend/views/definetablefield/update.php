<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\DefineTableField $model
 */

$this->title = '修改字段: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '字段管理', 'url' => ['index','tb'=>$table]];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="define-table-field-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>

</div>
