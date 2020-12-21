<?php

class ContatosController extends Controller
{

    /**
     * Exibe contatos
     */
    public function listar()
    {
        $contatos = Contato::all();
        return $this->view('grade', ['contatos' => $contatos]);
    }

    /**
     * Formulário para novo contato
     */
    public function criar()
    {
        return $this->view('form');
    }

    /**
     * Formulário para editar contato existente
     */
    public function editar($dados)
    {
        $id = (int) $dados['id'];
        $contato = Contato::find($id);

        return $this->view('form', ['contato' => $contato]);
    }

    /**
     * Salvar contato
     */
    public function salvar()
    {
        $contato = new Contato;
        $contato->nome = $this->request->nome;
        $contato->email = $this->request->email;
        $contato->ativo = $this->request->ativo;
        if ($contato->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar contato
     */
    public function atualizar($dados)
    {
        $id = (int) $dados['id'];
        $contato = Contato::find($id);
        $contato->nome = $this->request->nome;
        $contato->email = $this->request->email;
        $contato->ativo = $this->request->ativo;
        $contato->save();

        return $this->listar();
    }

    /**
     * Apagar contato a partir do ID
     */
    public function excluir($dados)
    {
        $id = (int) $dados['id'];
        $contato = Contato::destroy($id);
        return $this->listar();
    }
}