<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>植鉴</title>
    <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>

  <body>
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<h1>
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							植鉴
							<small>后台管理系统</small>
						</h1>
					</div>
			</div>
		</header>
		
		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="list-group">
						    <a href="{{ url('user') }}" class="list-group-item active">
						  	    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						        植鉴
						    </a>
							<a href="{{ url('user') }}" class="list-group-item">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									用户信息
								<span class="badge">112</span>
							</a>
                            <a href="{{ url('plant') }}" class="list-group-item">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                    植物百科信息
                                <span class="badge">32</span>
                            </a>
                            <a href="{{ url('viewspot') }}" class="list-group-item">
                                <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                                    景点信息
                                <span class="badge">12</span>
                            </a>
                            <a href="{{ url('discuss') }}" class="list-group-item">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                    评论
                                <span class="badge">112</span>
                            </a>
                            <a href="{{ url('expand') }}" class="list-group-item">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    扩展植物图库
                                <span class="badge">112</span>
                            </a>															
						</div>					
					</div>

					<div class="col-md-9">
						<!-- Pages -->
						<div class="panel panel-primary">
						  <div class="panel-heading">
						    <h3 class="panel-title">内容</h3>
						  </div>
						  <div class="panel-body">

                            @section('content')
                            @show

								
						  </div>						  
						</div>
					</div>
				</div>
			</div>
		</section>

    <script src="{{ URL::asset('plugins/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
    	CKEDITOR.replace( 'editorPage' );
    </script>
  </body>
</html>
