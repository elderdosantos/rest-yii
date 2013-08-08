<?php

class UsuarioController extends Controller {

    public function actionInsert() {
        $usuario = new Usuario();
        $usuario->setAttributes($this->getRequestPayload());
        $usuario->save();

        $this->send($usuario->attributes);
    }

    public function actionUpdate($id) {
        $usuario = Usuario::model()->findByPk($id);
        $usuario->setAttributes($this->getRequestPayload());

        $usuario->save();

        $this->send('Atualizado com sucesso');
    }

    public function actionDelete($id) {
        $usuario = Usuario::model()->findByPk($id);
        $usuario->delete();

        $this->send('Deletado com sucesso');
    }

    public function actionGet($id) {
        $usuario = Usuario::model()->findByPk($id);

        $this->send($usuario->attributes);
    }

    public function actionList() {
        $usuario = new Usuario();

        $this->send($usuario->search()->getData());
    }

}