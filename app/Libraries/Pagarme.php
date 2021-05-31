<?php

namespace App\Libraries;

use PagarMe\Client as PagarmeClient;
use Exception;

class Pagarme
{

    private $TOKEN;
    private $PAGARME;

    /**
     * Construct da classe
     * @param string $token Token do Pagarme
     */
    public function __construct(string $token = "")
    {
        // Verifica se ao carregar a library foi informado o token
        if (!empty($token)) {
            $this->TOKEN = $token;
        } else if (!empty(env("pagarme.key"))) {
            $this->TOKEN = env("pagarme.key");
        } else {
            throw new Exception('Token não encontrado', 401);
        }

        // Instancia a SDK do Pagarme
        try {
            $this->PAGARME = new PagarmeClient($this->TOKEN);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    //////////////////////////////////////
    //                                  //
    //        OPERAÇÕES BÁSICAS         //
    //                                  //
    //////////////////////////////////////

    /**
     * getApiKey - Retorna a API KEY que está em uso
     * @return string
     */
    public function getApiKey(): string
    {
        // Valida se o Serviço foi instanciado
        if (empty($this->PAGARME)) {
            throw new Exception('Serviço não carregado', 401);
        }

        try {
            return $this->PAGARME->getApiKey();
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    //////////////////////////////////////
    //                                  //
    //        OPERAÇÕES BÁSICAS         //
    //                                  //
    //////////////////////////////////////

    /**
     * getApiKey - Retorna a API KEY que está em uso
     * @return array|string
     */
    public function criarCartao(array $dados)
    {
        // Valida se o Serviço foi instanciado
        if (empty($this->PAGARME)) {
            throw new Exception('Serviço não carregado', 401);
        }

        // Realiza as validações obrigatórias
        if (empty($dados['nome'])) {
            return 'Nome do cartão vazio';
        }

        if (!is_string($dados['nome'])) {
            return 'Nome do cartão inválido';
        }

        if (empty($dados['numero'])) {
            return 'Número do cartão vazio';
        }

        if (!is_string($dados['numero'])) {
            return 'Número do cartão inválido';
        }

        if (empty($dados['validade'])) {
            return 'Validade do catão vazio';
        }

        if (!is_string($dados['validade'])) {
            return 'Validade do cartão inválido';
        }

        if (empty($dados['cvv'])) {
            return 'cvv vazio';
        }

        if (!is_string($dados['cvv'])) {
            return 'cvv inválido';
        }

        try {
            return (array) $this->PAGARME->cards()->create([
                'holder_name'     => (string) $dados['nome'],
                'number'          => (string) preg_replace('/\D/', '', $dados['numero']),
                'expiration_date' => (string) preg_replace('/\D/', '', $dados['validade']),
                'cvv'             => (string) preg_replace('/\D/', '', $dados['cvv'])
            ]);
        } catch (Exception $e) {
            return (string) $e->getMessage();
        }
    }

    /**
     * criarTransacao - Cria uma Transação de Pagamento
     * @return array|string
     */
    public function criarTransacao(array $dados)
    {
        // Inicializa as Variaveis Default
        $data = [];
        $data['payment_method'] = 'credit_card';
        $data['installments'] = 1; // Quantidade de parcelas

        // Realiza as validações obrigatórias
        if (empty($dados['cartao_id'])) {
            return 'id ausente';
        } else {
            $data['card_id'] = $dados['cartao_id'];
        }

        if (empty($dados['valor_total'])) {
            return 'Valor total ausente';
        } else {
            $data['amount'] = (int) preg_replace('/\D/', '', $dados['valor_total']);
        }

        if (empty($dados['descricao'])) {
            return 'Descrição ausente';
        } else {
            $data['soft_descriptor'] = substr($dados['descricao'], 0, 13); // Permite um máximo de 13 caracteres
        }

        // Valida os dados do Cliente da Transação
        if (empty($dados['cliente'])) {
            return 'Cliente ausente';
        } else {
            $data['customer'] = [
                'external_id'   => $dados['cliente']['id'],
                'name'          => $dados['cliente']['nome'],
                'email'         => $dados['cliente']['email'],
                'type'          => $dados['cliente']['tipo_pessoa'],
                'country'       => !empty($dados['cliente']['nacionalidade']) ? $dados['cliente']['nacionalidade'] : 'br'
            ];

            // Valida se veio o Telefone
            if (!empty($dados['cliente']['telefones'])) {
                $data['customer']['phone_numbers'] = $dados['cliente']['telefones'];
            } else {
                return 'Telefone ausente';
            }

            // Valida se veio a Data de Nascimento
            if (!empty($dados['cliente']['data_nascimento'])) {
                $data['customer']['birthday'] = $dados['cliente']['data_nascimento'];
            }

            // Preenche os Documentos (CPF, RG, Passaport)
            foreach ($dados['cliente']['documentos'] as $key => $value) {
                $data['customer']['documents'][] = [
                    'type'   => $value['tipo'],
                    'number' => $value['numero']
                ];
            }
        }

        // Valida os dados de Pagamento
        if (empty($dados['endereco_cobranca'])) {
            return  'Endereço ausente';
        } else {
            $data['billing'] = [
                'name' => $dados['cliente']['nome'], // Nome do responsável pelo pagamento da transação
                'address' => [
                    'country'       => !empty($dados['endereco_cobranca']['pais']) ? strtolower($dados['endereco_cobranca']['pais']) : 'br',
                    'street'        => $dados['endereco_cobranca']['rua'],
                    'street_number' => preg_replace('/\D/', '', $dados['endereco_cobranca']['numero']),
                    'state'         => $dados['endereco_cobranca']['estado'],
                    'city'          => $dados['endereco_cobranca']['cidade'],
                    'neighborhood'  => $dados['endereco_cobranca']['bairro'],
                    'zipcode'       => preg_replace('/\D/', '', $dados['endereco_cobranca']['cep'])
                ]
            ];

            // Valida se veio o complemento do Endereço (Não pode ser uma string vazia nem null)
            if (!empty($dados['endereco_cobranca']['complemento'])) {
                $data['billing']['address'] = $dados['endereco_cobranca']['complemento'];
            }
        }

        // Valida os dados da entrega
        if (!empty($dados['entrega'])) {
            $data['shipping'] = [
                'name'          => $dados['entrega']['nome'], // Nome da entidade de cobrança
                'fee'           => (int) preg_replace('/\D/', '', $dados['entrega']['valor']), // Taxa de envio cobrada do comprador
                'delivery_date' => $dados['entrega']['data'], //Estimativa da data de entrega
                'expedited'     => !empty($dados['entrega']['expresso']) ? $dados['entrega']['expresso'] : false, // Entrega expressa
                'address' => [
                    'country'       => !empty($dados['entrega']['pais']) ? strtolower($dados['entrega']['pais']) : 'br',
                    'street'        => $dados['entrega']['rua'],
                    'street_number' => preg_replace('/\D/', '', $dados['entrega']['numero']),
                    'state'         => $dados['entrega']['estado'],
                    'city'          => $dados['entrega']['cidade'],
                    'neighborhood'  => $dados['entrega']['bairro'],
                    'zipcode'       => preg_replace('/\D/', '', $dados['entrega']['cep'])
                ]
            ];
        }

        // Valida os itens de Compra
        if (empty($dados['itens'])) {
            return 'itens invádos';
        } else {
            foreach ($dados['itens'] as $key => $value) {
                $data['items'][] = [
                    'id'         => $value['id'],
                    'title'      => $value['descricao'],
                    'unit_price' => (int) preg_replace('/\D/', '', $value['valor_unitario']),
                    'quantity'   => $value['quantidade'],
                    'tangible'   => $value['bem_fisico']
                ];
            }
        }

        // Define a URL de Webhook
        if (!empty($dados['postback_url'])) $data['postback_url'] = $dados['postback_url'];

        // Define o método de pagamento
        if (!empty($dados['metodo_pagamento'])) $data['payment_method'] = $dados['metodo_pagamento'];

        // Define as Parcelas
        if (!empty($dados['parcelas'])) $data['installments'] = $dados['parcelas'];

        try {
            return (array) $this->PAGARME->transactions()->create($data);
        } catch (Exception $e) {
            return (string) $e->getMessage();
        }
    }
}
