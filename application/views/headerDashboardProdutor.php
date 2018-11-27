<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/imagens/tree.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Produtor</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/estilo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color = "red">
    
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">

            <ul class="nav">
                <li class="active">
                    <a href="<?= base_url()?>Produtor/index">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
               <!--  <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li> -->
                <!-- <li>
                    <a href="<?= base_url()?>Admin/cadastroCesta">
                        <i class="pe-7s-bell"></i>
                        <p>Cadastro Cesta</p>
                    </a>
                </li> -->
                <li>
                    <a href="<?= base_url()?>Produtor/cadastroProduto">
                        <i class="pe-7s-bell"></i>
                        <p>Cadastro Produto</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="<?= base_url()?>Admin/cadastrarProdutor">
                        <i class="pe-7s-bell"></i>
                        <p>Cadastrar Produtor</p>
                    </a>
                </li>
 -->
				<!-- <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>