<?php foreach($brands as $bd){ ?>
<span style="float:left;width:150px;overflow:hidden;margin:5px 10px 5px 10px;">
<a href="<?php echo  Yii::app()->createUrl('/Product/Index/').'/classify/'.Yii::app()->params['display_brand_classify_id'].'/brand/'.$bd->bid; ?>"><?php echo $bd->brand_name;?> </a>
</span>
<?php } ?>