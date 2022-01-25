<?php require_once __DIR__ . '/../inicio-html.php'; ?>

            <a href="/novo-curso" class="btn btn-primary mb-2">
                Novo Curso
            </a>

            <?php if (isset($_SESSION['tipoMensagem']) ) : ?>

            <div class="alert alert-<?= $_SESSION['tipoMensagem'] ?>">
                <?= $_SESSION['mensagem'] ?>
            </div>

            <?php 
            unset($_SESSION['tipoMensagem']);
            unset($_SESSION['mensagem']);
            endif;
            ?>

            <ul class="list-group">
                <?php foreach ($cursos as $curso): ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $curso->getDescricao(); ?>

                        <span>
                            <a href="/alterar-curso?id=<?= $curso->getId(); ?>" class="btn btn-info btn-sm">
                                Alterar
                            </a>

                            <a href="/excluir-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">
                                Excluir
                            </a>
                        </span>

                    </li>
                <?php endforeach; ?>
            </ul>

<?php require_once __DIR__ . '/../fim-html.php'; ?>