<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nhà Sách 2T</title>

<link href="view/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="view/admin/css/datepicker3.css" rel="stylesheet">
<link href="View/admin/css/bootstrap-table.css" rel="stylesheet">
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
				<a class="navbar-brand" href="http://localhost/Project01/index.php?controller=admin"><span>Book</span>Store</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="http://localhost/Project01/index.php?controller=admin" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
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
                <li><a href="http://localhost/Project01/index.php?controller=book">Quản lý sản phẩm</a></li>
				<li class="active">Thêm sản phẩm</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm sản phẩm</h1>
			</div>
        </div><!--/.row-->
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                    <form role="form" method="post" enctype="multipart/form-data" action="index.php?controller=book&action=store">
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select name="cat_id" class="form-control">
                                                        <?php foreach($array['categories'] as $category ){ ?>
                                                            <option value=<?= $category['id']?>><?= $category['name']?></option>

                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tên sản phẩm</label>
                                                    <input required name="prd_name" class="form-control" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Giá sản phẩm</label>
                                                    <input required name="prd_price" type="number" min="1000" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Số lượng</label>
                                                    <input required name="prd_amount" type="number" class="form-control">
                                                </div>

                                            </div>

<!--                                            <div class="form-group">-->
<!--                                                <label>Ảnh sản phẩm</label>-->
<!---->
<!--                                                <input required name="prd_image" type="file">-->
<!--                                                <br>-->
<!--                                                <div>-->
<!--                                                    <img src="img/download.jpeg">-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"  name="pro_image"  type="file"  id="inputGroupFile04" >
                                                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                        </div>
                                                    </div>


                                                    <div>
                                                        <img src="\Project01\view\admin\images\" id="prdImage" style="width: 200px; height: 200px;">
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select name="prd_status" class="form-control">
                                                    <option value=1 selected>Còn hàng</option>
                                                    <option value=0>Hết hàng</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>nội dung</label>
                                                <textarea required name="prd_content" class="form-control" rows="3"></textarea>
                                            </div>
                                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                 </div><!-- /.col-->
            </div><!-- /.row -->
	</div>	<!--/.main-->
    <script>
        document.getElementById('inputGroupFile04').addEventListener('change', function() {

            var file = this.files[0];


            var imageUrl = URL.createObjectURL(file);


            document.getElementById('prdImage').src = imageUrl;
        });
    </script>
</body>

</html>
