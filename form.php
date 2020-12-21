<div class="container">
    <form action="?controller=ContatosController&<?php echo isset($contato->id) ? "method=atualizar&id={$contato->id}" : "method=salvar"; ?>" method="post" >
        <div class="">
            <div class="">
                <span class="">Contatos</span>
            </div>
            <div class="">
            </div>
            <div class="">
                <label class="">Nome:</label>
                <input type="text" class="" name="nome" id="nome" value="<?php
                echo isset($contato->nome) ? $contato->nome : null;
                ?>" />
            </div>
            <div class="">
                <label class="">Email:</label>
                <input type="text" class="" name="email" id="email" value="<?php
                echo isset($contato->email) ? $contato->email : null;
                ?>" />
            </div>
            <div class="">
                <label class="">Ativo:</label>
                <input type="text" class="" name="ativo" id="ativo" value="<?php
                echo isset($contato->telefone) ? $contato->telefone : null;
                ?>" />
            </div>
            <br>
            <div class="">
                <input type="hidden" name="id" id="id" value="<?php echo isset($contato->id) ? $contato->id : null; ?>" />
                <button class="button" type="submit">Salvar</button>
                <a class="" href="?controller=ContatosController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>