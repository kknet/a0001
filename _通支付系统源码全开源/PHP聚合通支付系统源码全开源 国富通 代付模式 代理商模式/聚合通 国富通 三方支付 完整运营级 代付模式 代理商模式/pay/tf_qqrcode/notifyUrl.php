<?php
/*  $post= json_encode($_POST);
 $ppos = json_decode($post,true);
   $file = fopen("notifyurl.text",'w');
   fwrite($file,var_export($ppos,true));
   fclose($file);
   echo "SUCCESS";
  die; */
require_once 'inc.php';
//require_once 'yeepayCommon.php';
require_once '../../app/model/Handleorder.php';    

use WY\app\model\Handleorder;


			// $partner		=	$p1_MerId;  //商户号
            // $key			=	$merchantKey;		//MD5密钥，安全检验码
			
			
            // $orderstatus = $_GET["orderstatus"]; // 支付状态
            // $ordernumber = $_GET["ordernumber"]; // 订单号
            // $paymoney = number_format($_GET["paymoney"], 2); //付款金额
            // $sign = $_GET["sign"];	//字符加密串
            // $attach = $_GET["attach"];	//订单描述
           // $signSource = sprintf("partner=%s&ordernumber=%s&orderstatus=%s&paymoney=%s%s", $partner, $ordernumber, $orderstatus, $paymoney, $key); //连接字符串加密处理
           
		   // if ($sign == md5($signSource))//签名正确
            // {

			if ($_POST['platPayResultCode']=='PTN0004'){
				
				$post= json_encode($_POST);
				$ppos = json_decode($post,true);
				//$ppos['orderNum']="2017121720334550051";
				$orderid=$ppos['orderNum'];
				
				$money='';
				$handle=@new Handleorder($orderid,$money);
				$handle->updateUncard();
				
			}

			 echo "SUCCESS";
            // }
			
			// else {
			//验证失败
			// echo "签名验证失败";
			// echo $sign;
			// echo md5($signSource);
			// }
?>
