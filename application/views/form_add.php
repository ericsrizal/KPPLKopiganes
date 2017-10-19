<!--<html>
	<head>
		<title>Tabel Barang</title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/Admin_menu/do_insert"; ?>" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					Nama
				</td>
				<td>
					<input type="text" name="nama" />
				</td>
			</tr>
			<tr>
				<td>
					Harga
				</td>
				<td>
					<input type="text" name="harga" />
				</td>
			</tr>
			<tr>
				<td>
					Jenis
				</td>
				<td>
					<input type="text" name="jenis" />
				</td>
			</tr>
            <tr>
				<td>
					Gambar
				</td>
				<td>
					<input type="file" name="images">
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="btnSubmit" value="Simpan" />
				</td>
			</tr>
		</table>
		</form>
	</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()."assets/css/sb-admin.css"?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()."assets/fonts/font-awesome.min.css"?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Page</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Selamat Datang, <?php echo $this->session->userdata('user'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                             <a href="<?php echo base_url()."index.php/Login/logout/"?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="#"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."index.php/Admin_comment/load/"?>"><i class="fa fa-fw fa-edit"></i> Comment</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Form Add
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url()."index.php/Admin_menu/load/"?>">Table</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Form Add
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
						<form method="POST" action="<?php echo base_url()."index.php/Admin_menu/do_insert"; ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" input type="text" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" input type="text" name="harga" required>
                            </div>

                            <div class="form-group">
                                <label>Jenis (makanan, minuman, atau snack)</label>
                                <input class="form-control" input type="text" name="jenis" required>
                            </div>

                            <input type="submit" class="btn btn-success" name="submit" value="Save" />
                            <a href="<?php echo base_url()."index.php/Admin_menu/load";?>" class="btn btn-danger" role="button">Back</a>
                        </form>

                        
                         

                

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()."assets/js/jquery.js"?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>

</body>

</html>

