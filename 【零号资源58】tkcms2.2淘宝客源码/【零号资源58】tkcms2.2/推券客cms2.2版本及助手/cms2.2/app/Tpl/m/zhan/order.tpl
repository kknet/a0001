<include file="public:head_nosearch" />
<header data-am-widget="header" class="am-header am-header-default am-header-fixed white-nav">
	      	<div class="am-header-left am-header-nav">
			    <a href="javascript:history.go(-1);" class="iconfont icon-left"></a>
			</div>
			<h1 class="am-header-title">订单列表</h1>
 			<include file="public:navright" />
		</header>
	<main>
		<div class="sort" data-am-sticky>
			<div class="am-g">
				<div class="am-u-sm-3 am-padding-0 am-text-center">
					<input type="radio" id="all" name="details" class="am-hide" <if condition="$s eq 0">checked="checked"</if> />
					<label for="all"><a href="{:U('zhan/order')}">所有状态</a></label>
				</div>
				<div class="am-u-sm-3 am-padding-0 am-text-center">
					<input type="radio" id="all" name="details" class="am-hide" <if condition="$s eq 1">checked="checked"</if> />
					<label for="all"><a href="{:U('zhan/order',array('status'=>'1'))}">已付款</a></label>
				</div>
				<div class="am-u-sm-3 am-padding-0 am-text-center">
					<input type="radio" id="all" name="details" class="am-hide" <if condition="$s eq 3">checked="checked"</if> />
					<label for="all"><a href="{:U('zhan/order',array('status'=>'3'))}">已结算</a></label>
				</div>
				<div class="am-u-sm-3 am-padding-0 am-text-center">
					<input type="radio" id="all" name="details" class="am-hide" <if condition="$s eq 2">checked="checked"</if> />
					<label for="all"><a href="{:U('zhan/order',array('status'=>'2'))}">已失效</a></label>
				</div>
			</div>
		</div>
		<div class="order-detail">
			
			<if condition="$list">	
			<volist name="list" id="vo">
				<div class="order-item">
					<div class="order-tit">
						<p>订单编号：{$vo.orderid}</p>
						<span class="state state-primary">{$vo.status}</span>
					</div>
					<div class="order-con">
						<p class="ellipsis-2">{$vo.goods_title}</p>
						<div class="am-g">
							<div class="am-u-sm-4">
								<span>付款金额</span>
								<p>{$vo.price}</p>
							</div>
							<div class="am-u-sm-4">
								<span>客户返利</span>
								<p>{:$vo['cashback']?$vo['cashback']:'0.00'}</p>
							</div>
							<div class="am-u-sm-4">
								<span>客户昵称</span>
								<p>{:$vo['nickname']?$vo['nickname']:'--'}</p>
							</div>
						</div>
					</div>
					<div class="order-bot flexbox am-text-center">
						<div class="order-num flex">预估奖励：<span class="am-text-primary"><em>￥</em>{$vo.income}</span></div>
						<div class="order-num flex">实际奖励：<span class="am-text-danger"><em>￥</em>{$vo.payment}</span></div>
					</div>
					<div class="order-time am-cf">
						<p class="am-fl">下单时间 {$vo.add_time}</p>
						<p class="am-fr">结算时间 {:$vo['up_time']?$vo['up_time']:'--'} </p>
					</div>
				</div>
			</volist>
			
			<else/>
			<div class="no-order">
				<i class="iconfont icon-order"></i>
				<p>您还没有订单！</p>
			</div>
		</if>
			
			<div class="page am-margin-bottom-lg">
				<if condition="$total_item gt 10">
				{$page}
				</if>
			</div>
		</div>
	</main>
<include file="public:amz_foot" />	
</body></html>
	