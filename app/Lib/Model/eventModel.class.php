<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
* @Email:160780470@qq.com
*/
class eventModel extends Model {
	//获取一个活动
	public function getOneEvent($id){
		$result = $this->where(array('eventid'=>$id))->find();
		//获取街道
		$strdistrict = D('area')->getOneArea($result['district_id']);
		if($result['region_id']>0){
			$strregion = D('area')->getOneArea($result['region_id']);
			$result['region'] = $strregion['areaname'];
		}
		$result['district'] = $strdistrict['areaname'];
		//坐标经纬度
		$coordinate = explode(',', $result['coordinate']);
		$result['latitude'] = $coordinate[0];
		$result['longitude'] = $coordinate[1];
		//费用
		if($result['fee']==0){
			$result['fee'] = '免费';
		}elseif ($result['fee']==1){
			$fee = explode('||', $result['fee_detail']);
			$result['fee_detail'] = '';
			foreach ($fee as $item){
				$value = explode('==', $item); 
				$result['fee_detail'] .= $value[1].'元('.$value[0].')';
			}
		}
		//类型
		$cate = D('event_cate')->getOneCate($result['cateid']);
		if($result['subcateid']>0){
			$subcate = D('event_cate')->getOneCate($result['subcateid']);
			$result['subcate'] = $subcate;
		}
		$result['cate'] = $cate;
		//用户信息
		$result['user'] = D('user')->getOneUser($result['userid']);
		//描述
		$result['content'] = nl2br ( $result ['content']);
		//星期几
		$result['begin_week_day'] = getWeekName($result ['begin_date']);

		return $result;
	}
}