<div class="page">
	<div class="pageHeader">
		<?php
$this->breadcrumbs=array(
				'Users',
			);
		?>
		<h1>Users</h1>
	</div>
	<div class="pageContent" layoutH="28">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
</div>
</div>
