<div class="detail_navigation">
  <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
</div>

<!--右侧内容不同区域--> <!-- star-->
<div class="list_detail">
  <table class="round">
    <tbody>
      <tr>
        <td class="lt wlt">
          <div class="Newsshow">
            <div class="Newsshow_inner" style="float:left;margin-top:10px; width:375px;">
              <div><strong>型号: </strong><a href="#" title="在线询价" target="_blank"><?php echo $product->model; ?></a></div>
              <div><strong>封装: </strong>  <?php echo $product->package;?></div>
              <div><strong>厂商: </strong> <a href="#"><?php echo $product->m->manufacturer_name; ?> <img src="<?php echo $product->b->logo; ?>"  width=100 height=35 alt="ON" title="More parts Of ON" onerror="this.onerror='';this.src='<?php echo $product->b->logo; ?>'"></a></div>
              <div><strong>RoHS: </strong><?php echo $product->RoHS;?></div>
              <div><strong>数量: </strong> <?php echo $product->quantity;?> pcs</div>
              <div><strong>注释: </strong><?php echo $product->direction;?></div>
              <div><strong style="vertical-align:middle;height:25px">在线询价:</strong>
                <a href="#" title="在线询价" target="_blank">
                  <img src="<?php echo Yii::app()->baseUrl; ?>/images/xunjiapng_03.png" alt="在线询价" title="在线询价"></a></div>
              <p>* 价格根据数量，市场条件和其他因素而有所不同。请致电或发送一个快速询价...谢谢！
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
            <h4 class="relatedtitle">温馨提示: 请填写以下信息, 方便取得联系！</h4>
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
                    <td style="text-align: right;">选购数量 : </td>
                    <td>
		              <?php echo $form->textField($order_detail,'quantity',array('size'=>20,'maxlength'=>38,'class'=>"inputbox required digits")); ?>
                    </td>
                    <td style="text-align: right;">目标价格 : </td>
                    <td>
                      <?php echo $form->textField($order_detail,'price',array('size'=>16,'maxlength'=>38,'class'=>"inputbox number")); ?>  &nbsp;(USD)
                  </tr>
                  <tr>
                    <td style="text-align: right;">联系人 *:  </td>
                    <td>
                      <?php echo $form->textField($order,'contact_person',array('size'=>20,'maxlength'=>80,'value'=>'','class'=>"inputbox required")); ?>
		              <?php echo $form->error($order,'contact_person'); ?>
                    </td>
                    <td style="text-align: right;">公司名称 :  </td>
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
                    <td style="text-align: right;">电话 : </td>
                    <td colspan="3">
                      <?php echo $form->textField($order,'tel',array('size'=>20,'maxlength'=>50,'value'=>'','class'=>"inputbox")); ?>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" style="text-align: right;">
                      询价内容 : 
                    </td>
                    <td colspan="3"><!--834843202 -->
                      <?php echo $form->textArea($order,'inquiry_content',array('cols'=>"71",'rows'=>"2",'style'=>"width:450px",'class'=>"inputbox")); ?>
                    </td>
                  </tr>
                  <tr>
                    <td style="text-align: right;">
                      验证码:
                    </td>
                    <td height="30" colspan="3">
                       <?php echo $form->textField($code,'code',array('size'=>4,'maxlength'=>5,'value'=>'','class'=>"inputbox")); ?>
                      <?php $this->widget('CCaptcha',array(
                        'showRefreshButton'=>true,
                        'clickableImage'=>true,
                        'buttonLabel'=>'看不清？',
                        'imageOptions'=>array(
                          'alt'=>'点击换图',
                          'title'=>'点击换图',
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
    <h2>联系我们</h2>
    <div class="f_left">
      <h4>销售部</h4>
      <p>
        Email: 
        <a href="#">sales@jotrin.com</a><br>
        电话:  +86-755-83343342<br>                                  
      </p>
      <br>
      <p>TradeManager: jotrin</p>
      <p>
        <a href="http://webatm.alibaba.com/atm_chat.htm?enemberId=enaliintjotrin" target="_blank"><img src="http://amos.us.alitalk.alibaba.com/online.aw?v=2&amp;uid=jotrin&amp;site=enaliint&amp;s=5" alt="Contact Us" border="0"></a>
      </p> 
    </div>                              
    <div class="f_left">
      <h4>技术支持</h4>
      <p>
        电话: +86-755-89515112<br>
        Email: <a href="#">support@jotrin.com</a>
      </p>
    </div>
    <div class="f_left">
      <h4>客户服务</h4>
      <p>
        Email:  <a href="#">service@jotrin.com</a>
      </p>
    </div>
    <div class="clear"></div>
  </div>  
