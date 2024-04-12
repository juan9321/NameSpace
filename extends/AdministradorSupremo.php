<?php

namespace Extends;

use Extends\Administrador;

class AdministradorSupremo extends Administrador
{
    public function autorizar(): array
    {
        $autorizacoes = parent::autorizar();
        $autorizacoes[] = 'configurar_sistema';
        $autorizacoes[] = 'gerenciar_backups';
        return $autorizacoes;
    }
}
