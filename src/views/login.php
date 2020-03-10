<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IN N' OUT</title>

    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <i class="icofont-travelling mr-2"></i>

                <span class="font-weight-light">In </span>
                <span class="font-weight-bold mx-1">N'</span>
                <span class="font-weight-light">Out</span>
                
                <i class="icofont-runner-alt-1 ml-2"></i>
            </div>

            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">
                        Email
                    </label>
                    
                    <input type="email" 
                        name="email" 
                        id="email" 
                        class="form-control 
                        <?= $errors['email'] ? 'is-invalid' : ''?>" 
                        value="<?= $email ? $email : '' ?>"
                        placeholder="Informe o email" 
                        autocomplete="off"
                        autofocus>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">
                        Senha
                    </label>
                    
                    <input type="password" 
                        name="password" 
                        id="password" 
                        class="form-control
                        <?= $errors['password'] ? 'is-invalid' : ''?>"
                        autocomplete="off" 
                        placeholder="Informe a senha">
                    
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-lg btn-primary">
                    Entrar
                </button>
            </div>
        </div>
    </form>
</body>
</html>