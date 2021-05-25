<?php

/**
 * Este arquivo foi criado para padronização dos erros da Assinale
 */

// Configurações de Errors.php
return [
    'assinatura' => [
        'buscaAssinatura' => 'Assinatura não encontrada.',
        'buscaPastaUsuario' => 'Nenhuma Pasta pertencente a este usuário.',
        'listaAssinatura' => 'Nenhuma assinatura cadastrada neste usuario.',
        'validaAssinatura' => 'Assinatura não existe',
        'validaUuid' => 'Parâmetro de uuid incorreto.',
        'gerarHistorico' => 'Erro ao gerar histórico da assinatura',
        'gerarTransacao' => 'Erro ao gerar a transação da assinatura',
        'buscaPlano' => 'Plano não encontrado.',
    ],
    'aws' => [
        'validaServicos' => 'Não foi informado ao menos um serviço AWS.',
        'servicoNaoCarregadoS3' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o S3',
        'servicoNaoCarregadoDynamoDB' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o DynamoDB',
        'servicoNaoCarregadoSES' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o SES',
        'servicoNaoCarregadoSQS' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o SQS',
        'servicoNaoCarregadoSNS' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o SNS',
        'chaveInvalida' => 'Chave do objeto inválida ou no formato incorreto',
        'bucketInvalido' => 'Bucket fornecido no .env é inválido.',
        'rootFolderInvalido' => 'Pasta raiz fornecida no .env é inválido.',
        'accessKeyInvalida' => 'AWS Access Key fornecida no .env é invalida.',
        'secretKeyInvalida' => 'AWS Secret Key fornecida no .env é invalida.',
        'regionInvalida' => 'AWS Region fornecida no .env é invalida.',
        'servicosInvalidos' => 'Array de servicos está vazio.',
        'corpoObjetoInvalido' => 'O body do objeto está em um formato inválido.',
        'empresaIdInvalido' => 'O parametro de empresaId é inválido ou nulo.',
        'erroUploadS3' => 'Ocorreu um erro ao tentar inserir o objeto no S3.'
    ],
    'banco' => [
        'validaInsercao' => 'Não foi possível inserir ao banco de dados.',
        'validaUpdate' => 'Não foi possível atualizar no banco o dados.',
        'validaDelete' => 'Não foi possível deletar no banco o dados.',
    ],
    'cupomdesconto' => [
        'buscaCupomDesconto' => 'Cupom de Desconto não encontrado.',
        'quantidadeExcedida' => 'Esse Cupom de Desconto não é mais válido.',
        'listaCupomDesconto' => 'Não há Cupom de Desconto cadastrado no sistema',
        'validaCupomDesconto' => 'Cupom de Desconto já cadastrado no sistema.',
        'validaUuid' => 'Parâmetro uuid incorreto.',
    ],
    'documento' => [
        'buscaDocumento' => 'Documento não encontrado.',
        'buscaDocumentos' => 'Documentos não encontrado.',
        'buscaPasta' => 'Pasta não foi encontrada.',
        'buscaPastaPai' => 'Pasta pai não foi encontrada.',
        'comparaPastaPai' => 'Pasta pai inválida',
        'pastaRaizInválida' => 'Pasta raiz inválida.',
        'validaUuid' => 'Parâmetro de uuid incorreto.',
        'verificaDocumento' => 'Documento selecionado não é uma pasta.',
        'verificaPasta' => 'Documento selecionado é uma pasta',
        'verificaMimeDocumento' => 'Tipo de documento não permitido',
        'verificaExtensao' => 'Erro ao verificar a extensão do arquivo.',
        'buscaDocumentoEventos' => 'Eventos não encontrados para este documento.',
        'dataRetroativa' => 'A data limite não pode ser retroativa.'
    ],
    'documentoSig' => [
        'validaJson' => 'Erro ao gerar o JSON de assinar via e autenticar via.'
    ],
    'docConfig' => [
        'configNaoEncontrada' => 'Configuração de documento não encontrada.',
        'jaExisteConfig' => 'Já existe uma configuração para este documento.'
    ],
    'email' => [
        'enviaEmail' => 'Não foi possivel enviar email',
        'validaEmail' => 'As credencias informadas são inválidas.',
    ],
    'empresa' => [
        'criarEmpresa' => 'Erro ao criar empresa',
        'buscaEmpresa' => 'Empresa não encontrada.',
        'buscaEmpresaGrupo' => 'Empresa grupo não encontrado.',
        'buscaEmpresaUsuario' => 'Não foram encontrada empresas para este usuário',
        'buscaUsuario' => 'Usuario não encontrado.',
        'validaEmail' => 'E-mail já cadastrado no sistema.',
        'validaUuid' => 'Parâmetro de uuid incorreto.',
        'buscaCartao' => 'Cartão não encontrado.',
        'buscaCartoes' => 'Cartões não encontrado.',
        'validaCartao' => 'Não foi possivel criar cartao.'
    ],
    'filters' => [
        'headerEmpresaInvalido' => 'Header "Empresa" inválido.',
    ],
    'geral' => [
        'validaUuid' => 'Parâmetro de uuid incorreto.',
    ],
    'http' => [
        '401' => 'Não autorizado.',
        '404' => 'Não encontrado.',
    ],
    'pagarme' => [
        'nomeCartaoVazio' => 'Você deve preencher o nome do cartão.',
        'nomeCartaoInvalido' => 'O nome do cartão deve ser uma string válida',
        'numeroCartaoVazio' => 'Você deve preencher o número do cartão.',
        'numeroCartaoInvalido' => 'O número do cartão deve ser uma string válida',
        'validadeCartaoVazio' => 'Você deve preencher a validade do cartão.',
        'validadeCartaoInvalido' => 'O validade do cartão deve ser uma string válida',
        'cvvCartaoVazio' => 'Você deve preencher o CVV do cartão.',
        'cvvCartaoInvalido' => 'O CVV do cartão deve ser uma string válida',
        'transacaoRecusada' => 'A transação foi recusada pela operadora de cartões.',
        'tokenNaoEncontrado' => 'O Token do Serviço PagarMe não foi encontrado.',
        'servicoNaoCarregado' => 'O serviço não foi ligado. Uma ou mais configurações não foram encontradas para o PAGARME.',
        'transacaoCartaoAusente' => 'Cartão não encontrado.',
        'transacaoValorTotalAusente' => 'O Valor da Transação deve ser informado.',
        'transacaoDescricaoAusente' => 'A Descrição da Transação deve ser informado.',
        'transacaoClienteAusente' => 'O Cliente deve ser informado.',
        'transacaoClienteTelefoneAusente' => 'É obrigatório informar ao menos um Telefone do cliente',
        'transacaoEnderecoCobranca' => 'O Endereço de Cobrança deve ser informado.',
        'transacaoEntrega' => 'Os dados da Entrega devem ser informado.',
        'transacaoItens' => 'Os itens devem ser informado.',
    ],
    'signatario' => [
        'buscaSignatario' => 'Signatário não encontrado.',
        'validaSignatario' => 'Signatário já cadastrado no sistema.',
        'validaUuid' => 'Parâmetro uuid incorreto.',
        'validaAutenticarComo' => 'Método de autenticação não encontrado.',
        'validaAssinarComo' => 'Método de assinatura não encontrado.',
    ],
    'usuario' => [
        'buscaUsuario' => 'Usuario não encontrado.',
        'senhaAntigaNaoBate' => 'Senha antiga incorreta.',
        'novaSenhaIgualAntiga' => 'A nova senha não pode ser igual a senha antiga.',
        'confirmaSenha' => 'Confirmar senha deve ser igual a senha.',
        'criarEmpresaUsuario' => 'Erro ao gerar empresa do usuario.',
        'criarPastaRaiz' => 'Erro ao gerar pasta raíz do usuario.',
        'adicionarPastaEmpresa' => 'Erro ao adicionar pasta empresa.',
        'adicionarEmpresaPadrao' => 'Erro ao adicionar empresa padrão.',
        'empresaUsuarioRelacao' => 'Erro ao gerar relação Empresa-Usuario.',
        'geraPastaRaiz' => 'Erro ao gerar pasta raiz da empresa.',
        'listaUsuario' => 'Não há usuario cadastrado no sistema',
        'validaEmail' => 'E-mail já cadastrado no sistema.',
        'validaUsuario' => 'Usuário já cadastrado no sistema.',
        'validaUuid' => 'Parâmetro uuid incorreto.',
        'buscaUsuarioGrupo' => 'Grupo do usuário não encontrado.',
        'tokenExpirado' => 'Token expirado, não foi possivel alterar a senha.',
        'dataEmailVazio' => 'Erro ao redefinir senha, por favor solicite e-mail de recuperação novamente',
        'naoPodeAlterarGrupoUsuario' => 'Você não pode alterar seu grupo de usuário',
        'buscaEmail' => 'Por favor, insira o e-mail para recuperar sua conta.',
        'comparaHash' => 'Não foi possível redefinir a senha. Hash fornecida e inválida'
    ]
];
