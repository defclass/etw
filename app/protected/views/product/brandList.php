<div class="detail_navigation">
    <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Product/Index');?>"><?php echo Yii::t('main','Products'); ?></a> » <?php echo Yii::t('main','Distribution Brands'); ?></p>

</div>
<!--右侧内容不同区域-->
<div class="list_detail f_left">
  <table class="round">
    <tbody>
      <tr>
        <td class="lt wlt">
         
          <div class="distribution">
            <p>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Bairun has established more than 500 global components brands' channels of supply and distrubutd components of the United States, Europe, Asia these the three brand manufctures, the main lines including integrated circuits, two transistors, resistors and capacitors, connectors, modules, etc. with the famous brands such as XILINX,TI,ST,TOSHIBA,MOTOROLA ,CYPRESS,VISHAY,AVX,AD,MAXIM,NEC,NS,KEMET,ALTERA, EPCOS,ATMEL,IR,ON,AGILENT,LATTICE, SAMSUNG,HITACHI ,NXP,INTERSIL,INFINEON,FAIRCHILD,INTEL,SONY,FUJITSU.and othersemiconductor components.
            </p>
          </div>
            <div class="distribution_main">
              <ul>
                <?php foreach($brands as $brand){ ?>
                   <li><a href="<?php echo Yii::app()->createUrl('/Product/Index').'/brand/'.$brand->bid; ?>"><img alt="<?php echo $brand->brand_name; ?>" src="<?php echo $brand->logo; ?>" intdesc="undefined"></a></li>
                <?php } ?>
              </ul>
            </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class="clear"></div>

