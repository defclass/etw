<p><strong><?php echo Yii::t('site','Please select a manufacturers:');?></strong></p>
<div class="tabcate" style="width:550px;overflow:hidden;">
  <?php foreach($brands as $bd){ ?>
    <span style="float:left;overflow:hidden;margin:5px 10px 5px 10px;">
         <a href="<?php echo  $nav_href.$bd->bid; ?>"><?php echo $bd->brand_name;?> </a>
    </span>
  <?php } ?>
</div>
