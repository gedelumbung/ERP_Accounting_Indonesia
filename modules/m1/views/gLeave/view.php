<?php
$this->breadcrumbs=array(
		'G people'=>array('index'),
		$model->id,
);

$this->menu4=array(
		array('label'=>'Home', 'icon'=>'home', 'url'=>array('/m1/gLeave')),

);

$this->menu=array(
		array('label'=>'AGL '.date('Y'), 'icon'=>'barcode', 'url'=>array('/m1/gLeave/autoGeneratedLeave',"id"=>$model->id)),
		array('label'=>'Mass Leave Lebaran '.date('Y'), 'icon'=>'barcode', 'url'=>array('/m1/gLeave/massLeaveLebaran',"id"=>$model->id)),
		array('label'=>'Mass Leave Christmas '.date('Y'), 'icon'=>'barcode', 'url'=>array('/m1/gLeave/massLeaveChristmas',"id"=>$model->id)),
);

$this->menu1=array(
		array('label'=>'Print Summary', 'icon'=>'print', 'url'=>array('/m1/gEss/summaryLeave',"pid"=>$model->id)),

);

//$this->menu1=gLeave::getTopUpdated();
//$this->menu2=gLeave::getTopCreated();
$this->menu5=array('Leave');

?>

<div class="row">
	<div class="span8">
		<div class="page-header">
			<h1>
				<i class="icon-fa-suitcase"></i>
				<?php echo $model->employee_name; ?>
			</h1>
		</div>

		<?php
			echo $this->renderPartial("/gLeave/_LeaveBalance", array("model"=>$model), true);
		?>
	</div>
</div>

<div class="row">
<div class="span9">
<?php
$this->widget('bootstrap.widgets.TbTabs', array(
		'type'=>'tabs', // 'tabs' or 'pills'
		'tabs'=>array(
				array('label'=>'Leave History','content'=>$this->renderPartial("_tabList", array("model"=>$model), true),'active'=>true),
				array('label'=>'Profile','content'=>$this->renderPartial("/gPerson/_personalInfo", array("model"=>$model), true)),
				array('label'=>'Temporary Action','content'=>$this->renderPartial("_tabTemporaryAction", array("model"=>$model), true)),
		),
));
?>
</div>
</div>

