<main class="content">
    <?php
        renderTitle(
            'Cadastro de Usuário',
            'Crie e atualize os dados de um usuário',
            'icofont-user'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" 
                    name="name" 
                    id="name" 
                    class="form-control 
                    <?= $errors['name'] ? 'is-invalid' : '' ?>" 
                    placeholder="Informe o Nome"
                    value="<?= $name ? $name : ''?>">
                
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" 
                    name="email" 
                    id="email" 
                    class="form-control 
                    <?= $errors['email'] ? 'is-invalid' : '' ?>" 
                    placeholder="Informe o Email"
                    value="<?= $email ? $email : ''?>">
                
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" 
                    name="password" 
                    id="password" 
                    class="form-control 
                    <?= $errors['password'] ? 'is-invalid' : '' ?>" 
                    placeholder="Informe a Senha">
                
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="confirm_password">Confirme a Senha</label>
                <input type="password" 
                    name="confirm_password" 
                    id="confirm_password" 
                    class="form-control 
                    <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>" 
                    placeholder="Confirme a Senha">
                
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Admissão</label>
                <input type="date" 
                    name="start_date" 
                    id="start_date" 
                    class="form-control 
                    <?= $errors['start_date'] ? 'is-invalid' : '' ?>"
                    value="<?= $start_date ? $start_date : ''?>">
                
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>

            <div class="form-group col-md-6">
                <label for="end_date">Desligamento</label>
                <input type="date" 
                    name="end_date" 
                    id="end_date" 
                    class="form-control 
                    <?= $errors['end_date'] ? 'is-invalid' : '' ?>"
                    value="<?= $end_date ? $end_date : ''?>">
                
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="is_admin">Administrador</label>
                <input type="checkbox" 
                    name="is_admin" 
                    id="is_admin"
                    class="form-control
                    <?= $errors['is_admin'] ? 'is-invalid' : '' ?>"
                    <?= $is_admin ? 'checked' : '' ?> >
                
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
             </div>
        </div>

        <div>
            <button class="btn btn-primary btn-lg">
                Salvar
            </button>
            <a href="/users.php" class="btn btn-secondary btn-lg">
                Cancelar
            </a>
        </div>
    </form>
</main>