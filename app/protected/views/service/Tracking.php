<div class="detail_main f_left">
  <div class="detail_navigation">
     <p><a href="<?php echo $this->createUrl('/Site/Index'); ?>"><?php echo Yii::t('main','Home'); ?></a> » <a href="<?php echo $this->createUrl('/Service/Index'); ?>"><?php echo Yii::t('main','Service'); ?></a> » <?php echo Yii::t('main','Order Tracking'); ?></p>

  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail service_tracking f_left">
    <table class="round">
      <tbody>
        <tr>
          <td class="lt">
            <div>
              <form name="tracking" onsubmit="return checkKinkosOrders(document.tracking.tracknumbers)" action="http://fedex.com/Tracking" method="get">
                <input type="hidden" value="1" name="ascend_header">
                <input type="hidden" value="dotcom" name="clienttype">
                <input type="hidden" value="us" name="cntry_code">
                <input type="hidden" value="english" name="language">
                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td align="left" valign="top">
                        <table cellspacing="0" cellpadding="5" width="100%" border="0">
                          <tbody>
                            <tr>
                              <td height="25" colspan="2">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                  <tbody><tr>
                                    <td>
                                      <img src="<?php echo Yii::app()->baseUrl;?>/images//fedex.gif" width="82" height="25"> Enter&nbsp;Tracking&nbsp;and/or&nbsp;Door&nbsp;Tag&nbsp;numbers
                                    </td>
                                  </tr>
                                  </tbody></table>
                              </td>
                            </tr>
                            <tr>
                              <td width="50%" valign="center">
                                <textarea name="tracknumbers" class="inputbox required" style="width: 330px; height: 50px;" id="content"></textarea>
                              </td>
                              <td width="50%" valign="center">
                                <input name="submit" type="submit" id="Btn2" value="Track" class="button">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
            
            <hr size="1" style="color:#DAE1E7">

            <div>
              <form action="http://www.dhl-usa.com/content/us/en/express/tracking.shtml" method="get" name="frmTrackByNbr" id="frmTrackByNbr">
                <div class="pT15">
                  
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr valign="top">
                      <td>
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                          <tbody><tr>
                            <td colspan="2">
                              <img src="<?php echo Yii::app()->baseUrl;?>/images//dhl.gif">Enter up to 25 tracking numbers, one per line, and click Track.
                            </td>
                          </tr>
                          <tr>
                            <td width="50%" height="68">
                              <textarea name="AWB" class="inputbox required" cols="40" rows="5" wrap="on" style="width: 330px;
                                        height: 50px;"></textarea>
                            </td>
                            <td width="50%" height="68" align="left" valign="middle">
                              <input type="hidden" name="brand" value="DHL">
                              <input type="submit" class="button" value="Track">
                            </td>
                          </tr>
                          </tbody></table>
                      </td>
                    </tr>
                    </tbody></table>
                </div>
              </form>
            </div>

            <hr size="1" style="color:#DAE1E7">

            <div>
              <form action="http://wwwapps.ups.com/WebTracking/processInputRequest" method="get" name="trackMod" id="trackMod" style="margin-top: 0px; margin-left: 0px; margin-right: 0px">
                <script language="JavaScript" type="text/javascript">

                 function wrapperCheckTerms(formName) {
                   if (checkTermsBox(formName)) {
                     return true;
                   }
                   else {
                     return false;
                   }
                 }

                 function checkTermsBox(formName) {
                   var alertMsg = "To track shipments, you must select the UPS Tracking Terms and Conditions.";
                   if (formName.AgreeToTermsAndConditions.checked) {
                     
                     return true;
                   }
                   else {
                     alert(alertMsg);
                     return false;
                   }
                 }
                </script>
                <input type="hidden" value="5.0" name="HTMLVersion">
                <input type="hidden" value="en_US" name="loc">
                <input type="hidden" value="UPSHome" name="Requester">
                
                <table cellspacing="0" cellpadding="5" width="100%" border="0">
                  <tbody>
                    <tr>
                      <td class="pi-utl-track-header">
                        <div class="modulepad">
                          <img src="<?php echo Yii::app()->baseUrl;?>/images//ups.gif" width="32" height="40"> Enter a Tracking or InfoNotice Number:
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td height="63">
                        <span>
                          <textarea class="inputbox required" style="width: 330px; height: 50px;" name="tracknum"></textarea>
                          &nbsp;&nbsp;<input name="track" style="margin-top:15px" type="submit" onclick="return wrapperCheckTerms(trackMod);" value="Track" class="button"><br>
                        </span>
                        <div class="modulepad">
                          <table width="0" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top">
                                  <input class="rad" type="checkbox" value="yes" name="AgreeToTermsAndConditions">
                                </td>
                                <td class="more">
                                  <font color="#333333">By selecting this box and the <span>Track</span> button, I agree
                                    to these</font>&nbsp;<a href="http://wwwapps.ups.com/WebTracking/terms?loc=en_US" target="_blank">Terms
                                    and Conditions</a>.
                                  <input style="display: none; visibility: hidden" border="0" name="ignore">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                
              </form>
            </div>
            
          </td>
          <td class="rt ">
          </td>
        </tr>
        <tr>
          <td class="lb ">
            <!--<div align="right"><a href="#top"><img src="/Themes/StyleJotrin/<?php echo Yii::app()->baseUrl;?>/images//common/gototop0.gif" alt="go to top" width="36" height="13" border="0" /></a></div>-->
          </td>
          <td class="rb ">
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div> 
<div class="clear"></div>
