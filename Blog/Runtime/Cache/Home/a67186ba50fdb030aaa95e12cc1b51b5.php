<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
	<link rel="stylesheet" type="text/css" href="./Blog/Public/css/bootstrap.min.css" /><link rel="stylesheet" type="text/css" href="./Blog/Public/css/css.css" />
	<script type="text/javascript" src="./Blog/Public/js/jquery-2.1.3.min.js"></script><script type="text/javascript" src="./Blog/Public/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<link rel="stylesheet" type="text/css" href="./Blog/Public/css/navbar.css" />
<script type="text/javascript">
$(function () {
    $('#accordion > li').hover(
        function () {
            var $this = $(this);
            $this.stop().animate({ 'width': '200px' }, 500);
            $('.heading', $this).stop(true, true).fadeOut();
            $('.bgDescription', $this).stop(true, true).slideDown(500);
            $('.description', $this).stop(true, true).fadeIn();
        },
        function () {
            var $this = $(this);
            $this.stop().animate({ 'width': '50px' }, 1000);
            $('.heading', $this).stop(true, true).fadeIn();
            $('.description', $this).stop(true, true).fadeOut(500);
            $('.bgDescription', $this).stop(true, true).slideUp(700);
        }
    );
});
</script>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img alt="logo" src="./Blog/Public/img/Iron Man.png" id="logo" />
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav accordion" id="accordion">
                <li>
                    <div class="heading"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></div>
                    <div class="description"><a href="#">最新文章</a>&nbsp;&nbsp;<a href="#">其他选项</a></div>
                </li>
                <li>
                    <div class="heading"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
                    <div class="description">
                    	<?php if($condition): ?><p><a href="#"><span class="glyphicon glyphicon-cog" id="set"></span></a><a href="#"><span class="glyphicon glyphicon-off" id="logoff"></span></a></p>
                    	<?php else: ?>
                        <button class="btn btn-block" data-toggle="modal" data-target=".login_reg">登录或注册</button><?php endif; ?>
                    </div>
                </li>
                <li>
                    <div class="heading"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                    <div class="description">
                        <form>
                            <div class="form-group">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" id="search" placeholder="输入搜索项">
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<?php if($condition): ?><!-- 用于登陆和注册的面板 -->
<div class="modal fade login_reg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div role="tabpanel" id="Tabs_reg_login">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs row" role="tablist" >
                    <li role="presentation" class="active col-md-6 col-sm-6 col-xs-6"><a href="#login" aria-controls="login" role="tab" data-toggle="tab" id="Nav-tab1">登陆</a></li>
                    <li role="presentation" class="col-md-6 col-sm-6"><a href="#reg" aria-controls="reg" role="tab" data-toggle="tab" id="Nav-tab2">注册</a></li>
                </ul>
                <!--nav tabs end-->
                <!-- Tab panes -->
                <div class="tab-content row">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                        <form method="post" action="index.php?controller=index&method=login" class="form-horizontal">
                            <div class="form-group">
                                <label for="username" class="col-sm-4 control-label">用户名：</label>
                                <div class="col-sm-6"><input type="text" class="form-control" id="username" placeholder="用户名" required="required" title="请填写用户名" name="username"></div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">密码：</label>
                                <div class="col-sm-6"><input type="password" class="form-control" id="password" placeholder="密码" required="required" title="请填写密码" name="password"></div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4"><input type="submit" class="btn btn-block btn-default" value="提交" /></div>
                            <div class="col-sm-2" id="checkbox"><input type="checkbox" id="remeber" />&nbsp;&nbsp;记住我</div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="reg">
                        <form method="post" action="index.php?controller=user&method=reg" class="form-horizontal">
                            <div class="form-group">
                                <label for="username" class="col-sm-4 control-label">用户名：</label>
                                <div class="col-sm-6"><input type="text" class="form-control" id="username" placeholder="用户名" required="required" title="请填写用户名" name="username"></div>
                                </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">密码：</label>
                                <div class="col-sm-6"><input type="password" class="form-control" id="password" placeholder="密码" required="required" title="请填写密码" name="password"></div>
                            </div>
                            <div class="form-group">
                                <label for="password-agn" class="col-sm-4 control-label">密码确认：</label>
                                <div class="col-sm-6"><input type="password" class="form-control" id="password" placeholder="密码确认" required="required" title="请再次输入密码" name="password-agn"></div>
                            </div>
                            <div class="col-sm-4 col-sm-offset-4"><input type="submit" class="btn btn-block btn-default" value="提交" /></div>
                        </form>
                    </div>
                </div>
                <!--Tab panes end-->
            </div>
        </div>
    </div>
</div><?php endif; ?>
	<div class="col-md-3 col-sm-3">
	<div class="panel panel-default back" id="userList">
<div class="panel-body">
<table class="table table-hover">
	<thead>
		<tr><th>其他人</th></tr>
	</thead>
	<?php if(!empty($users)): if(is_array($users)): foreach($users as $key=>$value): ?><tr><td><?php echo ($value); ?></td></tr><?php endforeach; endif; ?>
	<?php else: ?>
	<tr><td>这儿还没有人</td></tr><?php endif; ?>
</table>
</div>
</div>
	<div class="well">
<p><strong>Powered by ThinkPHP and Bootstrap</strong></p>
<p>Source Code:<br /><a href="https://github.com/NicholasStone/lab">github.com/NicholasStone/lab</a></p>
</div>
	</div>
	<div class="col-md-9 col-sm-9">
		<?php if(is_array($article)): foreach($article as $key=>$data): ?><div class="panel panel-default back block">
			<div class="panel-body">
			<h2><a href="index.php/home/index/show"><?php echo ($data["title"]); ?></a></h2>
			<h5><small>发表于：<?php echo (date("Y-m-d H:i",$data["timeline"])); ?>，作者<?php echo ($data["auther"]); ?>,出自<?php echo ($data["from"]); ?></small></h5>
				<p><?php echo ($data["content"]); ?></p>
			</div>
		</div><?php endforeach; endif; ?>
	</div>
</div>
</body>
</html>