<?php require_once __DIR__ . '/../inicio-html.php'; ?>

            <form action="/realiza-login" method="POST">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="senha">senha :</label>
                    <input type="password" name="senha" id="senha" class="form-control" required>
                </div>

                <button class="btn btn-primary">
                    Entrar
                </button>
            </form>

<?php require_once __DIR__ . '/../fim-html.php'; ?>