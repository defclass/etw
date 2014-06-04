<div class="detail_navigation">
  <p><a href="<?php echo Yii::app()->createUrl('/Site/Index/'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Product/Index');?>"><?php echo Yii::t('main','Products'); ?></a>  » <?php echo Yii::t('main','Product Details'); ?>
</div>

<!--右侧内容不同区域--> <!-- star-->
<div class="list_detail">
  <table class="round">
    <tbody>
      <tr>
        <td class="lt wlt">
          <div class="Newsshow">
            <div class="Newsshow_inner" style="float:left;margin-top:10px; width:375px;">
              <div><strong><?php echo Yii::t('main','Model');?>: </strong><a href="#" title="在线询价" target="_blank"><?php echo $product->model; ?></a></div>
              <div><strong><?php echo Yii::t('main','Package'); ?>: </strong>  <?php echo $product->package;?></div>
              <div><strong><?php echo Yii::t('main','Manufacturer'); ?>: </strong> <a href="#"><?php echo $product->m->manufacturer_name; ?> <img src="<?php echo $product->b->logo; ?>"  width=100 height=35 alt="ON" title="More parts Of ON" onerror="this.onerror='';this.src='<?php echo $product->b->logo; ?>'"></a></div>
              <div><strong>RoHS: </strong><?php echo $product->RoHS;?></div>
              <div><strong><?php echo Yii::t('main','Quantity'); ?>: </strong> <?php echo $product->quantity;?> pcs</div>
              <div>
                <strong><?php echo Yii::t('main','Feature'); ?>: </strong>
                <a href="http://www.alldatasheet.net/view.jsp?Searchword=<?php echo $product->model;?>">
                  <img title="DataSheet PDF" alt="Details" src="<?php echo Yii::app()->baseUrl.'/images/datasheet.gif';?>">
                  <?php echo $product->model;?></a> </div>
              <div><strong><?php echo Yii::t('main','Direction'); ?>: </strong><?php echo $product->direction;?></div>
              <div><strong style="vertical-align:middle;height:25px"><?php echo Yii::t('main','Online Inquiry'); ?>:</strong>
                <a href="#" title="<?php echo Yii::t('main','Online Inquiry'); ?>" target="_blank">
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/xunjiapng_03.png" alt="<?php echo Yii::t('main','Online Inquiry'); ?>" title="在线询价"></a></div>
              <p>* <?php echo Yii::t('main','Price based on quantity, market conditions and other factors vary. Please call or send a quick inquiry ... Thanks!'); ?>
                <div class="share">
                  <ul>
                    <li><a class="share1" href="javascript:;"></a></li>
                    <li><a class="share2" href="javascript:;"></a></li>
                    <li><a class="share3" href="javascript:;"></a></li>
                    <li><a class="share4" href="javascript:;"></a></li>
                    <li><a class="share5" href="javascript:;"></a></li>
                    <li><a class="share6" href="javascript:;"></a></li>
                  </ul>
                </div>
              </p>
            </div>
            <div style="float:right;width:175px;height:175px;border:1px solid #E2E3E3; float:right;">
              <img alt="" src="<?php
                               if(!empty($product->image_url)){
                                 echo $product->image_url;
                               }else{
                                 echo $product->b->logo;
                               }
                               ?>" style="max-width:175px;max-height:175px">
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
          <div>
            <p></p>
            <h4 class="relatedtitle"><?php echo Yii::t('main','Tips: Please fill in the following information to facilitate contact!'); ?></h4>
            <p></p>

            <?php if(Yii::app()->user->hasFlash('success')){ ?>
              <div style="font-size:15px;font-color:green;">
                <?php echo Yii::app()->user->getFlash('success'); ?>
              </div>
              <br />
            <?php } ?>
            
            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'form',
              'enableAjaxValidation'=>false,
              'htmlOptions'=>array(
                'class'=>'pageForm required-validate',
	          )
            )); ?>
              <table class="detail_table" width="620" cellpadding="6" cellspacing="0">
                <tbody>
                  <?php echo $form->errorSummary($order_detail); ?>
                  <?php echo $form->errorSummary($order); ?>
                  <?php echo $form->errorSummary($code); ?>
                  
                  <tr>
                    <td style="text-align: right;"><?php echo Yii::t('site','Quantity');?> : </td>
                    <td>
		              <?php echo $form->textField($order_detail,'quantity',array('size'=>20,'maxlength'=>38,'class'=>"inputbox required digits")); ?>
                    </td>
                    <td style="text-align: right;"><?php echo Yii::t('site','Price');?> : </td>
                    <td>
                      <?php echo $form->textField($order_detail,'price',array('size'=>16,'maxlength'=>38,'class'=>"inputbox number")); ?>  &nbsp;(USD)
                  </tr>
                  <tr>
                    <td style="text-align: right;"><?php echo Yii::t('site','Contact');?> *:  </td>
                    <td>
                      <?php echo $form->textField($order,'contact_person',array('size'=>20,'maxlength'=>80,'value'=>'','class'=>"inputbox required")); ?>
		              <?php echo $form->error($order,'contact_person'); ?>
                    </td>
                    <td style="text-align: right;"><?php echo Yii::t('site','Company');?>:  </td>
                    <td>
                      <?php echo $form->textField($order,'company_name',array('size'=>20,'maxlength'=>50,'value'=>'','class'=>"inputbox")); ?>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: right;">E-mail *:  </td>
                    <td colspan="3">
                      <?php echo $form->textField($order,'email',array('size'=>20,'maxlength'=>50,'value'=>'','class'=>"inputbox required email")); ?>
                      
                       <span style="color:Red"> </span>
		              <?php echo $form->error($order,'email'); ?>
                      
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: right;"><?php echo Yii::t('site','Telephone');?> : </td>
                    <td colspan="3">
                      <?php echo $form->textField($order,'tel',array('size'=>20,'maxlength'=>50,'value'=>'','class'=>"inputbox")); ?>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" style="text-align: right;">
                      <?php echo Yii::t('site','Content');?> : 
                    </td>
                    <td colspan="3"><!--834843202 -->
                      <?php echo $form->textArea($order,'inquiry_content',array('cols'=>"71",'rows'=>"2",'style'=>"width:450px",'class'=>"inputbox")); ?>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: right;">
                      <?php echo Yii::t('site','Captcha');?>:
                    </td>
                    <td height="30" colspan="3">
                       <?php echo $form->textField($code,'code',array('size'=>4,'maxlength'=>5,'value'=>'','class'=>"inputbox")); ?>
                      <?php $this->widget('CCaptcha',array(
                        'showRefreshButton'=>true,
                        'clickableImage'=>true,
                        'buttonLabel'=>"Can not see?",
                        'imageOptions'=>array(
                          'alt'=>"<?php echo Yii::t('site','Change Pic');?>",
                          'title'=>"<?php echo Yii::t('site','Click for Pic');?>",
                          'style'=>'cursor:pointer',
                          //'padding'=>'2')
                        )
                      )); ?>
		              <?php echo $form->error($code,'code'); ?>
                      

                    </td>
                  </tr>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td colspan="3">
                      <?php echo CHtml::submitButton('提交',array('id'=>"btnsubmit", 'name'=>"btnsubmit", 'class'=>"button")); ?>
                    </td>
                  </tr>
                </tbody></table>
              <?php $this->endWidget(); ?>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  
  <div style="width:100%;" class="detail_about_us">
    <h2><?php echo Yii::t('site','Contact Us');?></h2>
    <div class="f_left">
      <h4><?php echo Yii::t('site','Sales');?></h4>
      <p>
        Email: 
        <a href="#"><?php echo Yii::app()->params['sales_email']; ?></a><br>
        <?php echo Yii::t('site','Tel');?>:  +86-755-83343342<br>                                  
      </p>
      <br>
      <p>TradeManager: jotrin</p>
      <p>
        <a href="http://webatm.alibaba.com/atm_chat.htm?enemberId=enaliintjotrin" target="_blank"><img src="http://amos.us.alitalk.alibaba.com/online.aw?v=2&amp;uid=jotrin&amp;site=enaliint&amp;s=5" alt="Contact Us" border="0"></a>
      </p> 
    </div>                              
    <div class="f_left">
      <h4><?php echo Yii::t('site','Technical Support');?></h4>
      <p>
        <?php echo Yii::t('site','Tel');?>: +86-755-89515112<br>
        Email: <a href="#"><?php echo Yii::app()->params['sales_email']; ?></a>
      </p>
    </div>
    <div class="f_left">
      <h4><?php echo Yii::t('site','Customer Service');?></h4>
      <p>
        Email:  <a href="#"><?php echo Yii::app()->params['sales_email']; ?></a>
      </p>
    </div>
    <div class="clear"></div>
  </div>  
