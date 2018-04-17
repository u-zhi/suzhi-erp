<?php include_once('header.php');?>
<link rel="stylesheet" href="/public_source/www/assets/css/dropzone.css" />
<link rel="stylesheet" href="/public_source/www/assets/css/ace.min.css" />
<link rel="stylesheet" type="text/css" href="/public_source/www/css/diyUpload.css">
<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<ul class="breadcrumb">
				<li><a href="<?=$admin_path;?>/welcome"><i class="icon-home home-icon"></i>首页</a></li>
				<li><a href="<?=$this->go_url;?>">任务管理</a></li>
				<li><a href="<?=$this->go_url;?>">实习列表</a></li>
				<li>编辑信息</li>
			</ul>
		</div>	
		<input type="hidden" name="message" id="message" value="<?=$message?>">
		<input type="hidden" name="admin_path" id="admin_path" value="<?=$admin_path?>">
		<input type="hidden" name="path" id="path" value="<?=$this->go_url;?>">
		<div class="page-content" style="margin-top:18px;">					
			<div class="page-header">
				<h1 class="blue"><i class="icon-edit"></i> 编辑信息</h1>
			</div>							
			<div class="row">
				<div class="col-xs-12">
					<form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" action="">
<!-- 						<div class="form-group">
							<label  class="col-sm-1 control-label">当前任务照片</label>
							<div class="col-sm-4">
								<img id="bigic" src="<?php echo $data['image_url'];?>" style="max-height:160px;max-width:835px;" />
							</div>
						</div> -->
						<div class="form-group">
							<label class="col-sm-1 control-label">任务名称</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="name" name="name" value="<?=$data['name']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">任务类型</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="task_type" name="task_type" value="<?=$data['task_type']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">所属公司</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="firm_id" name="firm_id" value="<?=$data['firm_name']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">工作地点</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="work_address" name="work_address" value="<?=$data['work_address']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">需求人数</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="person_demand" name="person_demand" value="<?=$data['person_demand']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">区域</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="county_id" name="county_id" value="<?=$data['county_name']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">佣金</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="commission" name="commission" value="<?=$data['commission']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">薪资</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="salary" name="salary" value="<?=$data['salary']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">工作类型</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="occupation_id" name="occupation_id" value="<?=$data['occupation_name']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">工作时间</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="work_time" name="work_time" value="<?=$data['work_time']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">上班时段</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="work_schedule" name="work_schedule" value="<?=$data['work_schedule']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">浏览次数</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="view_times" name="view_times" value="<?=$data['view_times']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">投递简历次数</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="recv_cv_times" name="recv_cv_times" value="<?=$data['recv_cv_times']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">虚假浏览次数</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="fake_view_times" name="fake_view_times" value="<?=$data['fake_view_times']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">虚假投递简历次数</label>
							<div class="col-sm-2">
								<input type="text" class="width-100" id="fake_recv_cv_times" name="fake_recv_cv_times" value="<?=$data['fake_recv_cv_times']?>" readonly="readonly">
							</div>
						</div>
						<div class="form-group">
							<label for="content" class="col-sm-1 control-label">工作描述</label>
							<div class="col-sm-10">
								<textarea id="editor" name="job_description" type="text/plain" readonly="readonly" style="width: 260px;height: 180px"><?=$data['job_description']?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="content" class="col-sm-1 control-label">任职资格</label>
							<div class="col-sm-10">
								<textarea id="editor" name="duty_description" type="text/plain" readonly="readonly" style="width: 260px;height: 180px"><?=$data['duty_description']?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="content" class="col-sm-1 control-label">福利待遇</label>
							<div class="col-sm-10">
								<textarea id="editor" name="benefits" type="text/plain" readonly="readonly" style="width: 260px;height: 180px"><?=$data['benefits']?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">状态</label>
							<div class="col-sm-3">
								<label style="margin-right:30px;"><input class="ace" type="radio" name="is_off_shelved" value="0" <?php if($data['is_off_shelved'] == 0){echo "checked='checked'";}?> /><span class="lbl"> 上架</span></label>
								<label><input class="ace" type="radio" name="is_off_shelved" value="1" <?php if($data['is_off_shelved'] == 1){echo "checked='checked'";}?>><span class="lbl"> 下架</span></label>
							</div>					
						</div>
						<div class="page-header"></div>
					 	<div class="form-group">
					   		<div class="col-sm-offset-1 col-sm-10">
								<a href="javascript:history.go(-1)" class="btn btn-sm btn-warning">返回上页</a>
							</div>
					  	</div>
					</form>
				</div>
			</div>					
		</div>															
	</div>
	<link href="/public_source/www/assets/css/fileinput.css" rel="stylesheet" type="text/css" />
    <script src="/public_source/www/assets/js/fileinput.js" type="text/javascript"></script> 
    <script src="/public_source/www/js/common.js" type="text/javascript"></script>    
    <script src="/public_source/www/js/form_check.js" type="text/javascript"></script>  
	<script src="/public_source/www/assets/ueditor/ueditor.config.js" type="text/javascript"></script>
    <script src="/public_source/www/assets/ueditor/ueditor.all.js" type="text/javascript"></script>  
    <script src="/public_source/www/assets/js/dropzone.min.js"></script>
	<link href="/public_source/www/css/style.css" rel="stylesheet" type="text/css"/>
	<script src="/public_source/www/js/jquey-bigic.js" type="text/javascript"></script>
	<style>
		.control {
		    padding: 4px 0px;
		    color: #858585;
		    font-size: 14px;
		}
		.price-td td {
			height:40px;
			border:1px solid #999;
			text-align: center;
		}
		*{ margin:0; padding:0;}
		#box{margin:50px auto; width:540px; min-height:400px; background:#FF9}
		.fileBoxUl { margin: 0 0 0 0;}
		.diyCancel {
			background:url(/public_source/www/images/x_alt.png) no-repeat;
		}
	</style>
<?php include_once('footer.php');?>