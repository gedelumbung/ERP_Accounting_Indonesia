<?php
$this->breadcrumbs=array(
		'User'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Update',
);

$this->menu=array(
		array('label'=>'Home', 'icon'=>'home','url'=>array('/sUser')),
		array('label'=>'View', 'icon'=>'edit','url'=>array('view','id'=>$model->id)),
);

$this->menu2=sUser::getTopCreated();

?>

<div class="page-header">
	<h1>
		<i class="icon-fa-user"></i>
		<?php echo $model->username; ?>
	</h1>
</div>

<?php echo $this->renderPartial('_formNoPassword', array('model'=>$model)); ?>