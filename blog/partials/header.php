<?php
/**
 * Espera $pageTitle e $pageDescription definidos antes do include.
 */
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
	<meta name="author" content="ADALINE sistemas & tecnologia">

	<title><?php echo htmlspecialchars($pageTitle); ?></title>

	<link rel="shortcut icon" type="image/ico" href="../favicon.ico" />

	<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.css" />
	<link rel="stylesheet" href="../vendor/metisMenu/dist/metisMenu.css" />
	<link rel="stylesheet" href="../vendor/animate.css/animate.css" />
	<link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.css" />

	<link rel="stylesheet" href="../styles/style.css">
	<link rel="stylesheet" href="../styles/custom.css">
	<link rel="stylesheet" href="../styles/blog.css">

</head>
<body class="landing-page sc-blog-body">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://syscontainer.azurewebsites.net" class="navbar-brand">JÁ SOU CLIENTE</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php#page-top">INÍCIO</a></li>
                <li><a href="../index.php#features">FUNCIONALIDADES</a></li>
                <li><a href="../index.php#pricing">PLANOS</a></li>
                <li class="active"><a href="index.php">BLOG</a></li>
                <li><a href="../index.php#contact">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>
