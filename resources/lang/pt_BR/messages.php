<?php

return [
    'daemon-no-mock-response'         => 'Não foi possível achar pedido-falso para caminho :path',
    'daemon-no-steam-contact'         => 'Não foi possível comunicar com os servidores da Steam: :message',
    'daemon-no-steam-contact-unknown' => 'Não foi possível comunicar com os servidores da Steam: Unknown error message',

    'email-new-order-created-subject'   => 'Novo pedido criado!',
    'email-new-order-created-preheader' => 'Você acabou de criar um pedido com ID: #:id',
    'email-new-order-created-prelink'   => 'Você acabou de criar um pedido com ID: #:id',
    'email-new-order-created-link'      => 'Detalhes do pedido',
    'email-new-order-created-postlink'  => 'Clique no link para ver mais detalhes no VIP-Admin',

    'email-new-token-created-subject'   => 'Novo Token gerado!',
    'email-new-token-created-preheader' => 'Você acabou de gerar um novo Token: :id',
    'email-new-token-created-prelink'   => 'Você acabou de gerar um novo Token: :id',
    'email-new-token-created-link'      => 'Detalhes do Token',
    'email-new-token-created-postlink'  => 'Clique no link para ver mais detalhes no VIP-Admin',

    'email-token-used-subject'   => 'Token usado!',
    'email-token-used-preheader' => 'Seu Token :token foi usado por :user',
    'email-token-used-prelink'   => 'Seu Token :token foi usado por :user',
    'email-token-used-link'      => 'Detalhes do Token',
    'email-token-used-postlink'  => 'Clique no link para ver mais detalhes no VIP-Admin',

    'email-tradeoffer-sent-subject'   => 'Pedido de troca para pedido #:id enviado!',
    'email-tradeoffer-sent-preheader' => 'Acabamos de enviar um pedido de troca para seu pedido #:id!',
    'email-tradeoffer-sent-prelink'   => 'Acabamos de enviar um pedido de troca para seu pedido #:id!',
    'email-tradeoffer-sent-link'      => 'Detalhes do pedido',
    'email-tradeoffer-sent-postlink'  => 'Clique no link para ver mais detalhes no VIP-Admin',

    'email-user-created-subject'   => ':username acabou de registrar!',
    'email-user-created-preheader' => ':username acabou de registrar!',
    'email-user-created-prelink'   => ':username acabou de registrar!',
    'email-user-created-link'      => 'Lista de usuários',
    'email-user-created-postlink'  => 'Clique no link para ver mais detalhes no VIP-Admin',

    'form-confirmation-starting-period-help' => 'Quando a confirmação começa a ser válida.',
    'form-confirmation-ending-period-help'   => 'Quando a confirmação para de ser válida.',
    'form-app-public-id-size'                => 'Tamanho da ID pública',
    'form-app-public-id-size-help'           => 'Quantos caracteres as IDs públicas devem ter.',
    'form-app-extra-tokens-expiration'       => 'Expiração dos Tokens extras',
    'form-app-extra-tokens-expiration-help'  => 'Por quanto tempo os Tokens extras ficarão válidos.',
    'form-app-extra-tokens-duration'         => 'Duração dos Tokens extras',
    'form-app-extra-tokens-duration-help'    => 'Quantos dias um Token extras deve fornecer.',
    'form-app-duration-per-token'            => 'Quantos dias de pedido para cada Token extra',
    'form-app-duration-per-token-help'       => 'Quantos dias um pedido deve ter para dar 1 Token extra.',
    'form-app-token-size'                    => 'Tamanho do Token',
    'form-app-token-size-help'               => 'Quantos caracteres um Token deve ter.',
    'form-app-max-order-price'               => 'Valor máximo do pedido',
    'form-app-max-order-price-help'          => 'Qual o valor máximo permitido pelo sistema.',
    'form-app-max-order-duration'            => 'Duração máxima do pedido',
    'form-app-max-order-duration-help'       => 'Qual a duração máxima permitida pelo sistema.',
    'form-app-min-order-duration'            => 'Duração mínima do pedido',
    'form-app-min-order-duration-help'       => 'Qual a duração mínima permitida pelo sistema.',
    'form-app-max-order-date'                => 'Data limite dos pedidos',
    'form-app-max-order-date-help'           => 'Qual a data limite para duração dos pedidos.',
    'form-app-order-expiration-time'         => 'Tempo de expiração dos pedidos',
    'form-app-order-expiration-time-help'    => 'Quanto tempo o sistema deve esperar para que os pedidos de troca sejam aceitos.',
    'form-app-cost-per-day'                  => 'Custo por dia',
    'form-app-cost-per-day-help'             => 'O custo diário de um VIP.',
    'form-app-global-home'                   => 'Página inicial global',
    'form-app-not-accepted-home'             => 'Página inicial para usuários que não aceitaram os termos',
    'form-app-accepted-home'                 => 'Página inicial para usuários que aceitaram os termos',

    'form-order-duration-help'     => 'Quantos dias de VIP esse pedido dará.',
    'form-order-extra-tokens-help' => 'Quantos tokens extras o usuário receberá.',

    'form-server-name-help'         => 'Uma forma de identificar o servidor.',
    'form-server-ip-help'           => 'Endereço de IP do servidor.',
    'form-server-port-help'         => 'Port utilizada para comunicar com o servidor.',
    'form-server-password-help'     => 'Senha do RCON.',
    'form-server-ftp-host-help'     => 'Hostname ou IP do FTP para sincronizar arquivos.',
    'form-server-ftp-user-help'     => 'Usuário do FTP para sincronizar arquivos.',
    'form-server-ftp-password-help' => 'Senha a ser utilizada no FTP.',
    'form-server-ftp-root-help'     => 'Qual a pasta, com relação a base, que devemos enviar os arquivos.',

    'form-token-value'           => 'Código do Token',
    'form-token-value-help'      => 'Os caracteres que representam o Token.',
    'form-token-duration'        => 'Duração',
    'form-token-duration-help'   => 'A duração que o Token dará.',
    'form-token-expiration-help' => 'Por quanto tempo o Token ficará válido.',
    'form-token-note-help'       => 'Uma nota amiga :).',

    'controller-auth-banned' => 'Você está permanentemente banido do VIP-Admin! :D',

    'controller-confirmation-already-exists'   => 'Já possuímos uma confirmação para este pedido em nosso sistema!',
    'controller-confirmation-creation-success' => 'Confirmação criada com sucesso!',
    'controller-confirmation-creation-error'   => 'Erro ao salvar confirmação no sistema!',
    'controller-confirmation-update-success'   => 'Confirmação :id foi atualizada!',
    'controller-confirmation-update-error'     => 'Erro ao atualizar confirmação :id!',
    'controller-confirmation-delete-success'   => 'Confirmação :id deletada com sucesso!',
    'controller-confirmation-delete-error'     => 'Erro ao deletar confirmação :id!',
    'controller-confirmation-restore-success'  => 'Confirmação :id restaurada com sucesso!',
    'controller-confirmation-restore-error'    => 'Erro restaurando confirmação :id!',

    'controller-opskins-invalid-data'   => 'Informação inválida foi passada para o atualizador do OPSkins!',
    'controller-opskins-update-success' => 'Cache do OPSkins foi atualizado com sucesso. Foram adicionados :amount itens ao sistema!',

    'controller-order-update-success' => 'Pedido :id foi atualizado!',
    'controller-order-update-error'   => 'Pedido :id não pode ser atualizado!',
    'controller-order-delete-success' => 'Pedido :id foi deletado!',
    'controller-order-delete-error'   => 'Pedido :id não pode ser deletado!',

    'controller-server-delete-success'   => 'Servidor deletado!',
    'controller-server-delete-error'     => 'Erro ao deletar servidor',
    'controller-server-update-success'   => 'Servidor atualizado com sucesso!',
    'controller-server-update-error'     => 'Erro ao atualizar servidor!',
    'controller-server-creation-success' => 'Servidor adicionado ao sistema com sucesso!',
    'controller-server-creation-error'   => 'Erro ao adicionar servidor!',

    'controller-steam-order-too-many-items'             => 'Seu pedido tem mais de :max itens, <strong>por favor tente novamente com menos itens</strong> (isso é exigido para evitar problemas de comunicação com a Steam)',
    'controller-steam-order-above-max-price'            => 'Seu pedido está acima do valor máximo de $:value!',
    'controller-steam-order-below-min-duration'         => 'Seu pedido está abaixo da quantidade mínima de :days dias',
    'controller-steam-order-above-max-duration'         => 'Seu pedido está acima da quantidade máxima de :days dias!',
    'controller-steam-order-creation-success'           => 'Pedido criado com sucesso!',
    'controller-steam-order-creation-error'             => 'Erro ao salvar pedido!',
    'controller-steam-order-missing'                    => 'Não foi possível achar esse pedido',
    'controller-steam-order-missing-details'            => 'Não foi possível achar informações do pedido #:id!',
    'controller-steam-order-tradeoffer-exists'          => 'Você já tem um pedido de troca pendente para esse pedido!',
    'controller-steam-order-tradeoffer-message'         => 'Pedido com ID #:id para VIP de :duration dias.',
    'controller-steam-order-tradeoffer-message-admin'   => ' Esse pedido de troca foi enviado por um Admin!',
    'controller-steam-order-admin-will-sent'            => 'Não foi possível enviar um pedido de troca para este pedido pois não tivemos uma resposta dos servidores da Steam. <br><strong>Um Admin poderá enviar o pedido manualmente (pelo VIP-Admin) nas próximas 24 horas</strong>, lembre-se de olhar seus pedidos de trocas e <strong>VERIFICAR a identificação do pedido na mensagem do pedido de troca!</strong><br>Se você tem seu email salvo na página de <strong><a href=":settings">Configurações</a></strong>, <strong>poderemos enviar uma notificação assim que enviarmos o pedido de troca!</strong>',
    'controller-steam-order-tradeoffer-error'           => 'Erro ao enviar pedido de troca!',
    'controller-steam-order-tradeoffer-details-success' => 'Pedido de troca ENVIADO! Note que você tem :time minutos para aceitar antes que o pedido expire!',
    'controller-steam-order-tradeoffer-details-error'   => 'Não foi possível salvar detalhes do pedido de troca no sistema! <strong>Se você recebeu algum pedido de troca NÃO ACEITE</strong> já que não teremos como saber se você a aceitou!',

    'controller-token-cannot-generate-extra'          => 'Você não pode gerar mais Tokens extras!',
    'controller-token-extra-token-note'               => 'Esse token Extra foi gerado por :user',
    'controller-token-extra-token-generation-success' => 'Token extra gerado: :token',
    'controller-token-cannot-edit-used'               => 'Você não pode editar um Token que já foi usado',
    'controller-token-update-success'                 => 'Token :token atualizado com sucesso',
    'controller-token-update-error'                   => 'Token :token não pode ser atualizado!',
    'controller-token-delete-success'                 => 'Token :id deletado com sucesso!',
    'controller-token-delete-error'                   => 'Erro ao deletar token :id!',
    'controller-token-restore-success'                => 'Token :id restaurado com sucesso!',
    'controller-token-restore-error'                  => 'Erro ao restaurar Token :id!',

    'controller-token-store-not-valid'        => 'Token fornecido não é válido!',
    'controller-token-store-not-specified'    => 'Nenhum Token especificado!',
    'controller-token-store-creation-success' => 'Token :id criado!',
    'controller-token-store-creation-error'   => 'Não foi possível salvar token :id no sistema!',

    'controller-user-admins-cannot-be-banned' => 'Admins não podem ser banidos!',
    'controller-user-banned-success'          => 'Usuário :user foi banido!',
    'controller-user-banned-error'            => 'Erro ao banir :user!',
    'controller-user-unbanned-success'        => 'Usuário :user foi desbanido!',
    'controller-user-unbanned-error'          => 'Erro ao desbanir :user!',
    'controller-user-settings-update-success' => 'Configurações salvas com sucesso!',
    'controller-user-settings-update-error'   => 'Erro ao salvar configurações!',

    'middleware-must-accept'        => 'Você precisa aceitar os termos antes de utilizar nossa plataforma.',
    'middleware-daemon-not-logged'  => 'Nosso servidor Daemon não está conectado aos servidores da Steam.',
    'middleware-daemon-not-online'  => 'Nosso servidor Daemon não está online, não é possível acessar servidores da Steam!',
    'middleware-tradelink-missing'  => 'Você precisa nos fornecer seu link de pedidos de troca antes de continuar!',
    'middleware-not-allowed-to-see' => 'Você não pode acessar: :url',

    'model-server-uploaded-updating-error' => 'Erro ao marcar confirmação como enviada aos servidores!.',
    'model-server-sync-error'              => 'Erro sincronizando servidor: :message',

    'model-steam-orders-cannot-generate-confirmation' => 'Seu pedido deve ter um Token válido associado para poder gerar uma confirmação!',

    'time.days'    => 'dia|dias',
    'time.hours'   => 'hora|horas',
    'time.minutes' => 'minuto|minutos',

    'confirmation-form'            => 'Formulário da confirmação',
    'confirmation-show-trashed'    => 'Mostrar confirmações deletadas',
    'confirmation-public-id '      => 'Identificação pública da confirmação',
    'confirmation-starting-period' => 'Período de início',
    'confirmation-ending-period'   => 'Período de término',
    'confirmation-highlight-from'  => 'Destacar confirmações do usuário :user',
    'confirmation-create'          => 'Criar confirmação',

    'token-show-trashed' => 'Mostrar tokens deletados',

    'order-show-trashed' => 'Mostrar pedidos deletados',
    'order-form'         => 'Formulário do pedido',
    'order-public-id'    => 'Identificação pública do pedido',
    'order-type'         => 'Tipo de pedido',
    'order-details'      => 'Detalhes do pedido',

    'server-form'         => 'Formulário de servidor',
    'server-name'         => 'Nome do servidor',
    'server-ip'           => 'Endereço de IP do servidor',
    'server-port'         => 'Porta do servidor',
    'server-password'     => 'Senha RCON',
    'server-ftp-host'     => 'Hostname do FTP',
    'server-ftp-user'     => 'Usuário do FTP',
    'server-ftp-password' => 'Senha do FTP',
    'server-ftp-root'     => 'Pasta root do FTP',

    'steam-order-select-items'     => 'Selecione os itens que você deseja trocar',
    'steam-order-use-in-trade'     => 'Usar esse item na troca',
    'steam-order-finish-selection' => 'Terminar seleção!',
    'steam-order-submit-items'     => 'Enviar itens para troca',
    'steam-order-total-value'      => 'Valor Total: $:value',
    'steam-order-total-days'       => 'Período Total: :days days',
    'steam-order-step-1'           => 'Selecionar seus itens para troca',
    'steam-order-step-2'           => 'Enviar pedido de troca',
    'steam-order-step-3'           => 'Aceitar pedido de troca',
    'steam-order-step-4'           => 'Gerar confirmação do pedido',
    'steam-order-step-5'           => 'Arquivos enviados ao servidor',

    'characters'            => 'dígito|digitos',
    'currency-dollar-cents' => 'centavo de dólar|centavos de dólar',
    'save'                  => 'Salvar',
    'restore'               => 'Restaurar',
    'delete'                => 'Deletar',
    'edit'                  => 'Editar',
    'username'              => 'Nome de usuário',
    'state'                 => 'Estado',
    'actions'               => 'Ações',
    'settings'              => 'Configurações',
    'account'               => 'Conta',
    'home'                  => 'Início',
    'help'                  => 'Ajuda',
    'logout'                => 'Sair',
    'duration'              => 'Duração',
    'sync'                  => 'Sincronizar',
    'never'                 => 'Nunca',
    'items'                 => 'Itens',
    'expiration'            => 'Expiração',
    'note'                  => 'Nota',
    'step'                  => 'Passo :step',
    'details'               => 'Detalhes',
    'custom'                => 'Custom',
    'infinite'              => 'Infinito',
    'generate'              => 'Gerar',
    'token'                 => 'Token|Tokens',
    'user'                  => 'Usuário|Usuários',
    'administrative'        => 'Administrativo',
    'owner'                 => 'Dono',
    'system'                => 'Sistema',
    'expired'               => 'Expirado',
    'name'                  => 'Nome',
    'terms'                 => 'Termos',
    'accepted'              => 'Aceitou',
    'not-accepted'          => 'Não aceitou',
    'ban'                   => 'Banir',
    'login'                 => 'Login',
    'unban'                 => 'Unban',
    'email'                 => 'Email',
    'lang'                  => 'Idioma',
    'english'               => 'Inglês',
    'portuguese'            => 'Português',

    'token-order'        => 'Pedido por Token',
    'token-order-step-1' => 'Criar pedido por Token',
    'token-order-step-2' => 'Submeter um token válido',
    'token-order-step-3' => 'Gerar a confirmação',
    'token-order-step-4' => 'Arquivos sincronizados com o servidor',

    'token-form'                   => 'Formulários de Token',
    'token-form-confirmation'      => 'Confirmação de detalhes do Token',
    'token-custom-duration-help'   => 'Quantidade de dias que o token dará',
    'token-custom-expiration-help' => 'Por quantas horas o Token ficará válido',

    'user-settings'                => 'Configurações do Usuário',
    'user-settings-name-help'      => 'Se você quiser que a gente utilize seu nome real, digite ele aqui. Apenas será usado na dashboard e para emails :)',
    'user-settings-tradelink-help' => 'Esse é o link que utilizamos para enviar os pedidos de troca. Você pode achar sua URL <a target="_blank" href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url">clicando aqui.</a>',
    'user-settings-email-help'     => 'Utilizaremos esse email para enviar notificações de todos acontecimentos dentro da sua conta no VIP-Admin. <strong>(recomendado)</strong>',
    'user-settings-lang-help'      => 'Qual idioma você deseja que o sistema utilize',

    'daemon-login'        => 'Login do Daemon',
    'order-count'         => 'Quantidade de pedidos',
    'confirmation-count'  => 'Quantidade de confirmações',
    'opskins-update-data' => 'Atualizar dados do OPskins',

    'already-used'          => 'Já usado',
    'order-view-details'    => 'Ver detalhes do pedido',
    'generate-extra-tokens' => 'Gerar Tokens extras',
    'redeem-user'           => 'Redentor',
    'custom-duration'       => 'Duração customizada',
    'custom-expiration'     => 'Expiração customizada',
    'viewing-token'         => 'Vendo Token',
    'confirm-token'         => 'Confirmar Token',
    'expiration-date'       => 'Expiration Date',
    'expiration-remaining'  => 'Expiration Remaining',
    'use-token'             => 'Usar token',
    'current-state'         => 'Estado atual',
    'joined-date'           => 'Data de entrada',
    'trade-link'            => 'Link de troca',
    'last-update'           => 'Última atualização',
    'last-sync'             => 'Última sincronização',
    'extra-tokens'          => 'Tokens extras',
    'view-order'            => 'Ver pedido',
    'toggle-navigation'     => 'Alterar navegação',
    'navbar-brand'          => 'Painel do VIP Admin',
    'daemon-online'         => 'Daemon está online',
    'daemon-offline'        => 'Daemon está offline',
    'daemon-connected'      => 'Daemon está connectado à Steam',
    'daemon-disconnected'   => 'Daemon está desconectado da Steam',
    'buy-vip-with-skins'    => 'Comprar VIP com Skins',
    'buy-vip-with-tokens'   => 'Comprar VIP com Token',
    'buy-vip-with-mp'       => 'Comprar VIP com MercadoPago',
    'order'                 => 'Pedido|Pedidos',
    'confirmation'          => 'Confirmação|Confirmações',
    'generate-tokens'       => 'Gerar Token|Gerar Tokens',
    'server-list'           => 'Lista de servidores',
    'opskins-updater'       => 'Atualizador do OPSkins',
    'applications-settings' => 'Configurações da Aplicação',
    'send-tradeoffer'       => 'Enviar pedido de troca',
    'open-tradeoffer'       => 'Abrir pedido de troca',
    'recheck'               => 'Verificar',

];
