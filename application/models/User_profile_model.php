<?php

class User_profile_model extends HS_Model {
    //获取结果集
    public function getProfileList($where=array(), $limit='20', $offset='0', $order_by='id desc',$fields="*",$join=false)
    {
        if($join){
            return $this->select($fields)
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_jobhunter_extra_info','user_jobhunter_extra_info.user_id = user_profile.id','left')
                ->where($where)->limit($limit, $offset)->order_by($order_by)->find_all();
        }
    	return $this->select($fields)->where($where)->limit($limit, $offset)->order_by($order_by)->find_all();
    }
    public function getProfileLists($where=array(), $limit='20', $offset='0', $order_by='id desc',$fields="*",$join=false)
    {
        if($join){
            return $this->select($fields)
                ->join('id_verfication','id_verfication.user_id = user_profile.id','left')
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_headhunter_extra_info','user_headhunter_extra_info.user_id = user_profile.id','left')
                ->join('user_balance','user_balance.user_id = user_profile.id','left')
                ->where($where)->limit($limit, $offset)->order_by($order_by)->find_all();
        }
        return $this->select($fields)->where($where)->limit($limit, $offset)->order_by($order_by)->find_all();
    }
    //获取所有结果集
    public function getProfileAll($where=array(),$fields="*",$order_by='id desc',$fields="*")
    {
    	return $this->select($fields)->where($where)->order_by($order_by)->find_all();
    }   
    //获取一个结果集
    public function getProfileOne($where=array(),$fields="*",$order_by='id desc',$fields="*")
    {
        return $this->select($fields)->where($where)->order_by($order_by)->find();
    }
    //计算行数
    public function getCount($where = array(),$join=false,$joins=false)
    {
        if($join){
            return $this->where($where)
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_jobhunter_extra_info','user_jobhunter_extra_info.user_id = user_profile.id','left')
                ->count();
        }
        if($joins){
            return $this->where($where)
                ->join('id_verfication','id_verfication.user_id = user_profile.id','left')
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_headhunter_extra_info','user_headhunter_extra_info.user_id = user_profile.id','left')
                ->join('user_balance','user_balance.user_id = user_profile.id','left')
                ->count();
        }
    	return $this->where($where)->count();
    }  
     
    //获取单个
    public function checkProfile($where=array(),$fields="*",$join=false,$joins=false)
    {
        if($join){
            return $this->select($fields)
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_jobhunter_extra_info','user_jobhunter_extra_info.user_id = user_profile.id','left')
                ->where($where)->find();
        }
        if($joins){
            return $this->select($fields)
                ->join('id_verfication','id_verfication.user_id = user_profile.id','left')
                ->join('user_message','user_message.user_id = user_profile.id','left')
                ->join('user_headhunter_extra_info','user_headhunter_extra_info.user_id = user_profile.id','left')
                ->join('user_balance','user_balance.user_id = user_profile.id','left')
                ->where($where)->find();
        }
    	return $this->select($fields)->where($where)->find();
    }
	
    
    //删除
    public function deleteProfile($where) 
    {
    	return $this->where($where)->delete();
    }
    
    //删除多行
    public function deleteAll($where)
    {
    	return $this->where_in('id',$where)->delete();
    }
    
    //添加
    public function addProfile($data)
    {
    	if ($this->add($data))
    	{
    		return $this->db->insert_id();
    	}
    }

    //编辑
    public function editProfile($where,$data)
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
