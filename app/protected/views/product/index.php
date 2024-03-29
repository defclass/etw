<div class="detail_main f_left">
  <div class="detail_navigation">
    <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Product/Index');?>"><?php echo Yii::t('main','Products'); ?></a> 
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail f_left">
    <!--产品分类 star-->
    <div class="detail_dategories">
      <table class="round">
        <tbody><tr>
          <td class="lt">
            <div class="global_products">
              <?php 
              if(!empty($brands))
                echo $this->renderPartial('_brand_index',array('brands'=>$brands->getData(),'nav_href'=>$nav_href));
              else
                echo $this->renderPartial('_classify_index',array('classifies'=>$classifies));
              ?>
              
              <a name="details"></a>
              <p><strong><?php echo Yii::t('site','Search Model:');?></strong></p>
              <form name="product_search" method="get" action="">
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tbody><tr>
                    <td align="right"><?php echo Yii::t('site','Keyword');?>: </td>
                    <td style="line-height:25px">
                      <input name="keyword" type="text" class="inputbox" value="<?php if(isset($_GET['keyword'])){ echo $_GET['keyword'];} ?>" size="20" maxlength="30">  &nbsp;
                      <select name="classify" class="inputbox" style="width:80px">
                        <option value="0" selected="selected"><?php echo Yii::t('site','All');?></option>


                        <?php foreach($classifies as $cl) { ?>
                          <option value="<?php echo $cl->cid; ?>"><?php echo $cl->classify_name; ?> </option>
                        <?php } ?>
                      </select>
                      &nbsp; <input name="submit" type="submit" class="button" value="<?php echo Yii::t('site','Search');?>">
                    </td>
                  </tr>
                  <tr>
                    <td align="right"><?php echo Yii::t('site','Index');?>: </td>
                    <td>
                      <div class="StockIndex">&nbsp;
                        <a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/A" title="A">A</a> <a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/B" title="B">B</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/C" title="C">C</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/D" title="D">D</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/E" title="E">E</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/F" title="F">F</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/G" title="G">G</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/H" title="H">H</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/I" title="I">I</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/J" title="J">J</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/K" title="K">K</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/L" title="L">L</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/M" title="M">M</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/N" title="N">N</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/O" title="O">O</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/P" title="P">P</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/Q" title="Q">Q</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/R" title="R">R</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/S" title="S">S</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/T" title="T">T</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/U" title="U">U</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/V" title="V">V</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/W" title="W">W</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/X" title="X">X</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/Y" title="Y">Y</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/Z" title="Z">Z</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/0" title="0">0</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/1" title="1">1</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/2" title="2">2</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/3" title="3">3</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/4" title="4">4</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/5" title="5">5</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/6" title="6">6</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/7" title="7">7</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/8" title="8">8</a><a href="<?php echo Yii::app()->createUrl('/Product/Index');?>/index/9" title="9">9</a>
                      </div>
                    </td>
                  </tr>
                  </tbody></table>
              </form>
            </div>
          </td><td class="rt"></td>
        </tr>
        </tbody></table>
      <!-- 分类 -->
      <table width="660" class="dategories_style">
        <tbody>
          <tr class="dategories_nav">
            <th></th>
            <th style="text-align: left;"><?php echo Yii::t('site','Model');?></th>
            <th width="220"><?php echo Yii::t('site','Classify');?></th>
            <th width="150"><?php echo Yii::t('main','Manufacturer');?></th>
            <th width="80"><?php echo Yii::t('site','Package');?></th>
            <th width="120"><?php echo Yii::t('site','Direction');?></th>
          </tr>
          <?php foreach($products as $pro){  ?>
            <tr class="">
              <td style="width:10px" class="icon">&nbsp;</td>
              <td><div style="width:180px;text-overflow:ellipsis;white-space:nowrap; overflow:hidden;">
                <a href="<?php echo Yii::app()->createUrl('/Product/ProductDetails/'); ?>/id/<?php echo $pro->pid; ?>" title="<?php echo $pro->model; ?>"><u>
                  <?php echo $pro->model; ?>
                </u></a></div></td>
              <td align="center"><?php echo $pro->c->classify_name; ?></td>
              <td align="center"><a href="<?php echo Yii::app()->createUrl('/Product/Index').'/brand/'.$pro->b->bid; ?>"><u><?php echo $pro->b->brand_name; ?></u></a></td>
              <td align="center"><?php echo $pro->package; ?></td>
              <td align="center">
                <a href="mailto:dreamdu@163.com?subject=<?php echo $pro->model; ?>" target="_blank">
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/xunjiapng_03.png" alt="<?php echo Yii::t('site','Online Inquiry');?>"></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><!--产品分类 end-->
    <!--分页-->
    <div class="paging">
      
      <?php $this->widget('LinkPager', array(
        'pages' => $pages,
      )) ?>
    </div>

    <!--分页 end-->
  </div>

<div class="clear"></div>
</div><!-- detail end-->
