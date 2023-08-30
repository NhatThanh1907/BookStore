<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nhà Sách 2T</title>

<link href="view/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="view/admin/css/datepicker3.css" rel="stylesheet">
<link href="view/admin/css/bootstrap-table.css" rel="stylesheet">
<link href="view/admin/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="view/admin/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="view/admin/js/html5shiv.js"></script>
<script src="view/admin/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="http://localhost/Project01/index.php?controller=admin"><span>Mobile</span>Shop</a>
                        <ul class="user-menu">
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Hồ sơ</a></li>
                                    <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                                    
                </div><!-- /.container-fluid -->
            </nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="http://localhost/Project01/index.php?controller=admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="http://localhost/Project01/index.php?controller=user"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Quản lý thành viên</a></li>
			<li><a href="http://localhost/Project01/index.php?controller=categories"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý danh mục</a></li>
			<li class="active"><a href="http://localhost/Project01/index.php?controller=book"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý sản phẩm</a></li>
            <li><a href="http://localhost/Project01/index.php?controller=order"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý đơn hàng</a></li>
        </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="http://localhost/Project01/index.php?controller=admin"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
				<li class="active">Sản phẩm số 1</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm: Sản phẩm số 1</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" method="post" enctype="multipart/form-data" action="index.php?controller=book&action=update">

                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                        <?php foreach($array['categories'] as $category ){ ?>
                                            <option value=<?= $category['id']?>><?= $category['name']?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                                <?php foreach ($array['book'] as $boo){ ?>
                                        <input type="hidden" name="prd_id" value="<?= $boo['id']?>">
                                    <div class="form-group">
                                        <label>Tên sản phẩm</label>
                                        <input required name="prd_name" value="<?= $boo['name']?>" class="form-control" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label>Giá sản phẩm</label>
                                        <input required name="prd_price" value="<?= $boo['price']?>" type="text" min="1000" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input required name="prd_amount" value="<?= $boo['amount']?>" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="prd_status" class="form-control">
                                            <option selected value=0 >Hết hàng</option>
                                            <option value=1
                                                    <?php
                                                    if ($boo['status'] ==1){
                                                        echo'selected';
                                                    }
                                                    ?>
                                            >Còn hàng</option>
                                        </select>
                                    </div>

                                <?php } ?>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>nội dung</label>
                                <input required name="prd_content" value="<?= $boo['content']?>" type="text" class="form-control" rows="3">
                            </div>

                            <button name="sbm" type="submit" class="btn btn-success">Xác nhận</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    </div>

	</div>	<!--/.main-->	
</body>

</html>
