<div class="detail_main f_left">
  <div class="detail_navigation">
    <p><a href="javascript:;">首页</a> » <a href="javascript:;">产品中心</a> » 产品展示</p>
  </div>
  <!--右侧内容不同区域-->
  <div class="list_detail">
    <!--产品分类 star-->
    <div class="detail_dategories">
      <table class="round">
        <tbody><tr>
          <td class="lt">
            <div class="global_products">
              <p><strong>请选择产品分类：</strong></p>
              <div class="tabcate" style="width:550px;overflow:hidden;">
                <?php foreach($classifies as $cl) { ?>
                  <span style="float:left;width:150px;overflow:hidden;margin:5px 10px 5px 10px;">
                  <a href="#"><?php echo $cl->classify_name; ?></a>
                </span>
                
                <?php } ?>
              </div>
              <a name="details"></a>
              <p><strong>搜索产品型号</strong></p>
              <form name="product_search" method="get" action="">
                <table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tbody><tr>
                    <td align="right">关键字: </td>
                    <td style="line-height:25px">
                      <input name="keyword" type="text" class="inputbox" value="" size="40" maxlength="30">  &nbsp;
                      <select name="categoryId" class="inputbox" style="width:80px">
                        <option value="0" selected="selected">所有</option>
                        <?php foreach($classifies as $cl) { ?>
                        <option value="<?php echo $cl->cid; ?>"><?php echo $cl->classify_name; ?> </option>
                        <?php } ?>
                      </select>
                      &nbsp; <input name="submit" type="submit" class="button" value="搜索">
                    </td>
                  </tr>
                  <tr>
                    <td align="right">快捷库存索引: </td>
                    <td>
                      <div class="StockIndex">&nbsp;
                        <a href="/product/skey/A" title="A">
                          A</a> <a href="/product/skey/B" title="B">B</a><a href="/product/skey/C" title="C">C</a><a href="/product/skey/D" title="D">D</a><a href="/product/skey/E" title="E">E</a><a href="/product/skey/F" title="F">F</a><a href="/product/skey/G" title="G">G</a><a href="/product/skey/H" title="H">H</a><a href="/product/skey/I" title="I">I</a><a href="/product/skey/J" title="J">J</a><a href="/product/skey/K" title="K">K</a><a href="/product/skey/L" title="L">L</a><a href="/product/skey/M" title="M">M</a><a href="/product/skey/N" title="N">N</a><a href="/product/skey/O" title="O">O</a><a href="/product/skey/P" title="P">P</a><a href="/product/skey/Q" title="Q">Q</a><a href="/product/skey/R" title="R">R</a><a href="/product/skey/S" title="S">S</a><a href="/product/skey/T" title="T">T</a><a href="/product/skey/U" title="U">U</a><a href="/product/skey/V" title="V">V</a><a href="/product/skey/W" title="W">W</a><a href="/product/skey/X" title="X">X</a><a href="/product/skey/Y" title="Y">Y</a><a href="/product/skey/Z" title="Z">Z</a><a href="/product/skey/0" title="0">0</a><a href="/product/skey/1" title="1">1</a><a href="/product/skey/2" title="2">2</a><a href="/product/skey/3" title="3">3</a><a href="/product/skey/4" title="4">4</a><a href="/product/skey/5" title="5">5</a><a href="/product/skey/6" title="6">6</a><a href="/product/skey/7" title="7">7</a><a href="/product/skey/8" title="8">8</a><a href="/product/skey/9" title="9">9</a>
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
            <th style="text-align: left;">型号</th>
            <th width="80">数量</th>
            <th width="150">厂商</th>
            <th width="80">封装</th>
            <th width="120">备注</th>
            
          </tr>
          <?php foreach($products as $pro){  ?>
          <tr class="">
            <td style="width:10px" class="icon">&nbsp;</td>
            <td><div style="width:150px;text-overflow:ellipsis;white-space:nowrap; overflow:hidden;">
              <a href="#" title="B41866-S6107-M001"><u>
              <?php echo $pro->model; ?>
            </u></a></div></td>
            <td align="center"><?php echo $pro->quantity; ?></td>
            <td align="center"><a href="http://www.jotrin.com/product/mfg/EPCOS"><u><?php echo $pro->m->manufacturer_name; ?></u></a></td>
            <td align="center"><?php echo $pro->package; ?></td>
            <td align="center">
              <a href="#" target="_blank">
                <img src="images/xunjiapng_03.png" alt="在线询价"></a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div><!--产品分类 end-->
    <!--分页-->
    <div class="paging">
    
    <?php $this->widget('CLinkPager', array(
      'pages' => $pages,
    )) ?>
    </div>

    <!--分页 end-->
  </div>
</div> 
<div class="clear"></div>
</div><!-- detail end-->
