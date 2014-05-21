<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Orders',
			);
		?>
		<h1>Orders</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('ext.dwz.DwzListView'/*'zii.widgets.CListView'*/, array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
    </div>
</div>
