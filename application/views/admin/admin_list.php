<?php include_once('header.php');?>
<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<ul class="breadcrumb">
				<li><a href="/user_admin/welcome"><i class="icon-home home-icon"></i>首页</a></li>
				<li>管理员管理</li>
				<li>管理员列表</li>
			</ul>
		</div>	
		<input type="hidden" name="message" id="message" value="<?=$message?>">
		<input type="hidden" name="admin_path" id="admin_path" value="<?=$admin_path?>">
		<input type="hidden" name="path" id="path" value="<?=$this->go_url;?>">	
		<div class="page-content" style="margin-top:8px;">
			<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
				<div style="float:left;margin-right:8px;">
					<?php if($authority['add_status'] == 2) {?>
					<a href="add_page"><span class="btn btn-xs btn-pink">添加管理员</span></a>
					<?php }?>	
				</div>
				<div style="float:right;">		
						<form action="<?=$this->go_url;?>" method="post">	
							<div style="float:left;margin-right:10px;">
								<select style="width:100px;" id="role_id" name="role_id">
									<option value="">所有分类</option>
									<?php foreach($rid_list as $key => $value) { ?>
										<option value="<?=$value['role_id'];?>" <?php if($role_id == $value['role_id']) echo 'selected="selected;"';?>><?=$value['role_name'];?></option>
									<?php }?>
								</select>
								<input type="text" id="search_field" name="search_field" placeholder="输入管理员名称搜索"  value="<?=$search_field;?>">
							</div>								
							<a style="padding-left:10px;float:left;margin-top:1px;" id="search">
								<button type="submit" class="btn btn-xs btn-success">
									<i class="icon-search nav-search-icon "></i>查询
								</button>
							</a>					
						</form>
				</div>
				<div class="page-header" style="height:40px;"></div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						管理员列表
					</div>
					<div class="table-responsive">
						<table id="sample-table-2" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>选择</th>
									<th>id</th>
									<th>管理员账号</th>
									<th>管理员姓名</th>
									<th>管理角色</th>
									<th>操作</th>
								</tr>
							</thead>
						</table>
					</div><!-- /.table-responsive -->
				</div><!-- /span -->
			</div>
		</div>														
	</div>
	<script src="/public_source/www/assets/js/jquery.dataTables.min.js"></script>
	<script src="/public_source/www/assets/js/jquery.dataTables.bootstrap.js"></script>
	<script src="/public_source/www/js/common.js"></script>
	<link href="/public_source/www/css/style.css" rel="stylesheet" type="text/css"/>
	<script src="/public_source/www/js/jquey-bigic.js" type="text/javascript"></script>
	<?php include_once('footer.php');?>	
	<script type="text/javascript">
		jQuery(function($) {
			var admin_path = $("#admin_path").val();
			var search_field = $("#search_field").val(); 
			var role_id = $("#role_id").val();
			var bStateSave = true;
			if(search_field || role_id) {
				bStateSave = false;
			}
			var oTable1 = $('#sample-table-2').dataTable({ 
		        "oLanguage": {
		                "sUrl": "/public_source/www/assets/language/zh_CN.json"
		         },			     	
				"aaSorting": [[ 0, "desc" ]],
				"bAutoWidth": false, 
				"bStateSave": bStateSave,//加载记忆页码
				"bProcessing": true, //开启读取服务器数据时显示正在加载中……特别是大数据量的时候，开启此功能比较好
	            "bServerSide": true, //开启服务器模式，使用服务器端处理配置datatable。注意：sAjaxSource参数也必须被给予为了给datatable源代码来获取所需的数据对于每个画。 这个翻译有点别扭。开启此模式后，你对datatables的每个操作 每页显示多少条记录、下一页、上一页、排序（表头）、搜索，这些都会传给服务器相应的值。 
	            "sAjaxSource": "/user_admin/admin/ajax_admin_list?search_field="+search_field+"&role_id="+role_id, //给服务器发请求的url
	            "aoColumns": [ //这个属性下的设置会应用到所有列，按顺序没有是空
	                {"mData": 'check'},
	                {"mData": 'id'}, //mData 表示发请求时候本列的列明，返回的数据中相同下标名字的数据会填充到这一列
	                {"mData": 'username'},
	                {"mData": 'realname'}, //mData 表示发请求时候本列的列明，返回的数据中相同下标名字的数据会填充到这一列
	                {"mData": 'role_name'},
	                {"mData": 'operate'},
	            ],
	            "aoColumnDefs": [//和aoColums类似，但他可以给指定列附近爱属性
	               {"bSortable": false, "aTargets": [0,4]},//这句话意思是第1,3,6,7,8,9列（从0开始算） 不能排序
	        	]
			});
		});
	</script>
