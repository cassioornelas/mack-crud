<h1>Contatos</h1>
<hr>
<div class="">
    <table class="">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ativo</th>
                <th><a href="?controller=ContatosController&method=criar" class="cadastrar">Cadastrar</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($contatos) {
                foreach ($contatos as $contato) {
                    ?>
                    <tr>
                        <td><?php echo $contato->nome; ?></td>
                        <td><?php echo $contato->email; ?></td>
                        <td><?php echo $contato->ativo; ?></td>
                        <td>
                            <a href="?controller=ContatosController&method=editar&id=<?php echo $contato->id; ?>" class="">Editar</a>
                            <a href="?controller=ContatosController&method=excluir&id=<?php echo $contato->id; ?>" class="">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>