<?php

class Wechat_payment_order_model extends HS_Model {
    //获取结果集
    public function getPaymentList($where=array(), $limit='20', $offset='0', $order_by='id desc',$fields="*")
    {
    	return $this->select($fields)->where($where)->limit($limit, $offset)->order_by($order_by)->find_all();
    }
    //获取所有结果集
    public function getPaymentAll($where=array(),$fields="*",$order_by='id desc',$fields="*")
    {
    	return $this->select($fields)->where($where)->order_by($order_by)->find_all();
    }   
    //获取一个结果集
    public function getPaymentOne($where=array(),$fields="*",$order_by='id desc',$fields="*")
    {
        return $this->select($fields)->where($where)->order_by($order_by)->find();
    }
    //计算行数
    public function getCount($where = array())
    {
    	return $this->where($where)->count();
    }  
     
    //获取单个
    public function checkPayment($where=array(),$fields="*")
    {
    	return $this->select($fields)->where($where)->find();
    }
	
    
    //删除
    public function deletePayment($where) 
    {
    	return $this->where($where)->delete();
    }
    
    //删除多行
    public function deleteAll($where)
    {
    	return $this->where_in('id',$where)->delete();
    }
    
    //添加
    public function addPayment($data)
    {
    	if ($this->add($data))
    	{
    		return $this->db->insert_id();
    	}
    }

    //编辑
    public function editPayment($where,$data)
    {
    	return $this->where($where)->edit($data);
    }
    
    //编辑多行
    public function editAll($where,$data)
    {
    	return $this->where_in('id',$where)->edit($data);
    }
    
    
}
?>
