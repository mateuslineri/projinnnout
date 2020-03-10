<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="pt-br">

    <title>IN N' OUT</title>

    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
</head>
<body id="app-body"> 
    <header class="header">
        <div class="logo">
            <i class="icofont-travelling mr-2"></i>

            <span class="font-weight-light">In </span>
            <span class="font-weight-bold mx-1">N'</span>
            <span class="font-weight-light">Out</span>
            
            <i class="icofont-runner-alt-1 ml-2"></i>
        </div>

        <div id="menu-toggle" class="mx-3">
            <i class="icofont-navigation-menu"></i>
        </div>

        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <img src="<?= "http://www.gravatar.com/avatar.php?gravatar_id=" 
                . md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="user" class="avatar">
                <span class="ml-3">
                    <?= $_SESSION['user']->name ?>
                </span>
                <i class="icofont-simple-down mx-2"></i>
            </div>

            <div class="dropdown-content">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="logout.php">
                            <i class="icofont-logout"></i>
                            Sair
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data_generator.php">
                            Zerar Banco
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </header>