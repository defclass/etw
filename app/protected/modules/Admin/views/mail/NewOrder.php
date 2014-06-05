<html>
  <head>
    <style>
     table{border:1px grey solid;}
     table td{border-left:1px solid grey;border-top:1px solid grey;}
    </style>
  </head>
  <body>
    订单如下：
    <hr>
    <br>
    公司名称：<?php echo $order_obj->company_name;?>
    <br>
    联系人：<?php echo $order_obj->contact_person;?>
    <br>
    email:<?php echo $order_obj->email;?>
    <br>
    电话：<?php echo $order_obj->tel;?>
    <br>
    咨询的内容:<?php echo $order_obj->inquiry_content;?>
    <br>
    订单详细情况:
    <br>
    <table>
      <tr>
        <td>产品名</td>
        <td>需求数量</td>
        <td>期望供应商</td>
        <td>期望价格</td>
      </tr>
      <tr>
        <td><?php echo $order_detail->model; ?></td>
        <td><?php echo $order_detail->quantity; ?></td>
        <td><?php echo $order_detail->brand; ?></td>
        <td><?php echo $order_detail->price; ?></td>
      </tr>
    </table>
    ------------------------------------------------------
    <br>
    您收到这封邮件是因为您注册了本站会员，如要退订此邮件请<a href='#'>点击</a>。
  </body>
</html>
