<?php

namespace App\Libraries;

use Aws\Exception\AwsException;
use Exception;

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\SessionHandler;

use Aws\Ses\SesClient;
use Aws\Ses\Exception\SesException;

use Aws\Sqs\SqsClient;
use Aws\Sqs\Exception\SqsException;

use Aws\Sns\SnsClient;
use Aws\Sns\Exception\SnsException;

class Aws
{

    private $S3;
    private $s3_key;
    private $s3_secret;
    private $s3_region;
    private $s3_bucket;
    private $s3_root;

    private $DYNAMODB;
    private $dynamodb_key;
    private $dynamodb_secret;
    private $dynamodb_region;
    private $dynamodb_session_handler;

    private $SES;
    private $ses_key;
    private $ses_secret;
    private $ses_region;

    private $SQS;
    private $sqs_key;
    private $sqs_secret;
    private $sqs_region;

    private $SNS;
    private $sns_key;
    private $sns_secret;
    private $sns_region;

    /**
     * Construct da classe
     *
     * @param array $servicos ['s3','sqs','ses'] Nome dos serviços da AWS
     * @param array $config [ "sqs" => ["aws_sqs_key" => "", "aws_sqs_secret" => "", "aws_sqs_region" => "sa-east-1"] ] Configurações para o Serviço
     */
    public function __construct(array $servicos = [], array $config = [])
    {
        // Verifica se ao carregar a library foi informado algum serviço
        if (!empty($servicos)) {
            // Chama o método construtor dos serviços
            $this->load($servicos, $config);
        } else {
            throw new Exception(lang('Errors.aws.validaServicos'), 401);
        }
    }

    /**
     * Load - realiza o Carregamento dos Serviços
     * @param array $servicos Nome dos serviços da AWS
     * Exemplos  =>
     *              1) Para carregar um serviço S3 utilizando uma configuração por array:
     *                 array('s3' => array('aws_s3_key' => 'KEY', 'aws_s3_secret' => 'SECRET', 'aws_s3_region' => 'REGIAO', 'aws_s3_bucket' => 'BUCKET', 'aws_s3_root' => 'ROOT (pode ser em branco)'))
     *
     *              2) Para carregar um serviço DynamoDB utilizando uma configuração por array:
     *                 array('dynamodb' => array('aws_dynamodb_key' => 'KEY', 'aws_dynamodb_secret' => 'SECRET', 'aws_dynamodb_region' => 'REGIAO'))
     *
     *              3) Para carregar um serviço SES utilizando uma configuração por array:
     *                 array('ses' => array('aws_ses_key' => 'KEY', 'aws_ses_secret' => 'SECRET', 'aws_ses_region' => 'REGIAO'))
     *
     *              4) Para carregar um serviço SQS utilizando uma configuração por array:
     *                 array('sqs' => array('aws_sqs_key' => 'KEY', 'aws_sqs_secret' => 'SECRET', 'aws_sqs_region' => 'REGIAO'))
     *
     *              5) Para carregar um serviço SNS utilizando uma configuração por array:
     *                 array('sns' => array('aws_sns_key' => 'KEY', 'aws_sns_secret' => 'SECRET', 'aws_sns_region' => 'REGIAO'))
     */
    public function load(array $servicos, array $config = array())
    {

        //--------------------------------------------------------------------

        // Verifica se deve construir o S3
        if (in_array('s3', $servicos)) {

            $this->s3_key    = empty($config) ? env('aws_s3_key')    : (isset($config['s3']) ? (isset($config['s3']['aws_s3_key'])    ? $config['s3']['aws_s3_key']    : env('aws_s3_key'))    : env('aws_s3_key'));
            $this->s3_secret = empty($config) ? env('aws_s3_secret') : (isset($config['s3']) ? (isset($config['s3']['aws_s3_secret']) ? $config['s3']['aws_s3_secret'] : env('aws_s3_secret')) : env('aws_s3_secret'));
            $this->s3_region = empty($config) ? env('aws_s3_region') : (isset($config['s3']) ? (isset($config['s3']['aws_s3_region']) ? $config['s3']['aws_s3_region'] : env('aws_s3_region')) : env('aws_s3_region'));
            $this->s3_bucket = empty($config) ? env('aws_s3_bucket') : (isset($config['s3']) ? (isset($config['s3']['aws_s3_bucket']) ? $config['s3']['aws_s3_bucket'] : env('aws_s3_bucket')) : env('aws_s3_bucket'));
            $this->s3_root   = empty($config) ? env('aws_s3_root')   : (isset($config['s3']) ? (isset($config['s3']['aws_s3_root'])   ? $config['s3']['aws_s3_root']   : env('aws_s3_root'))   : env('aws_s3_root'));

            if (empty($this->s3_key) || empty($this->s3_secret) || empty($this->s3_region) || empty($this->s3_bucket)  || empty($this->s3_root)) {
                throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
            }

            // Cria o cliente s3
            try {
                $this->S3 = new S3Client([
                    'region'      => $this->s3_region,
                    'credentials' => ['key' => $this->s3_key, 'secret' => $this->s3_secret],
                    'version'     => 'latest'
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage(), 401);
            }
        }

        //--------------------------------------------------------------------

        // Verifica se deve construir o DynamoDB
        if (in_array('dynamodb', $servicos)) {
            $this->dynamodb_key    = empty($config) ? env('aws_dynamodb_key')    : (isset($config['dynamodb']) ? (isset($config['dynamodb']['aws_dynamodb_key'])    ? $config['dynamodb']['aws_dynamodb_key']    : env('aws_dynamodb_key'))    : env('aws_dynamodb_key'));
            $this->dynamodb_secret = empty($config) ? env('aws_dynamodb_secret') : (isset($config['dynamodb']) ? (isset($config['dynamodb']['aws_dynamodb_secret']) ? $config['dynamodb']['aws_dynamodb_secret'] : env('aws_dynamodb_secret')) : env('aws_dynamodb_secret'));
            $this->dynamodb_region = empty($config) ? env('aws_dynamodb_region') : (isset($config['dynamodb']) ? (isset($config['dynamodb']['aws_dynamodb_region']) ? $config['dynamodb']['aws_dynamodb_region'] : env('aws_dynamodb_region')) : env('aws_dynamodb_region'));

            if (empty($this->dynamodb_key) || empty($this->dynamodb_secret) || empty($this->dynamodb_region)) {
                throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
            }

            // Cria o cliente dynamodb
            try {
                $this->DYNAMODB = new DynamoDbClient([
                    'region'      => $this->dynamodb_region,
                    'credentials' => ['key' => $this->dynamodb_key, 'secret' => $this->dynamodb_secret],
                    'version'     => 'latest'
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage(), 401);
            }
        }

        //--------------------------------------------------------------------

        // Verifica se deve construir o SES
        if (in_array('ses', $servicos)) {
            $this->ses_key    = empty($config) ? env('aws_ses_key')    : (isset($config['ses']) ? (isset($config['ses']['aws_ses_key'])    ? $config['ses']['aws_ses_key']    : env('aws_ses_key'))    : env('aws_ses_key'));
            $this->ses_secret = empty($config) ? env('aws_ses_secret') : (isset($config['ses']) ? (isset($config['ses']['aws_ses_secret']) ? $config['ses']['aws_ses_secret'] : env('aws_ses_secret')) : env('aws_ses_secret'));
            $this->ses_region = empty($config) ? env('aws_ses_region') : (isset($config['ses']) ? (isset($config['ses']['aws_ses_region']) ? $config['ses']['aws_ses_region'] : env('aws_ses_region')) : env('aws_ses_region'));

            if (empty($this->ses_key) || empty($this->ses_secret) || empty($this->ses_region)) {
                throw new Exception(lang('Errors.aws.servicoNaoCarregadoSES'), 401);
            }

            // Cria o cliente SES
            try {
                $this->SES = new SesClient([
                    'region'      => $this->ses_region,
                    'credentials' => ['key' => $this->ses_key, 'secret' => $this->ses_secret],
                    'version'     => 'latest'
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage(), 401);
            }
        }

        //--------------------------------------------------------------------

        // Verifica se deve construir o SQS
        if (in_array('sqs', $servicos)) {
            $this->sqs_key    = empty($config) ? env('aws_sqs_key')    : (isset($config['sqs']) ? (isset($config['sqs']['aws_sqs_key'])    ? $config['sqs']['aws_sqs_key']    : env('aws_sqs_key'))    : env('aws_sqs_key'));
            $this->sqs_secret = empty($config) ? env('aws_sqs_secret') : (isset($config['sqs']) ? (isset($config['sqs']['aws_sqs_secret']) ? $config['sqs']['aws_sqs_secret'] : env('aws_sqs_secret')) : env('aws_sqs_secret'));
            $this->sqs_region = empty($config) ? env('aws_sqs_region') : (isset($config['sqs']) ? (isset($config['sqs']['aws_sqs_region']) ? $config['sqs']['aws_sqs_region'] : env('aws_sqs_region')) : env('aws_sqs_region'));

            if (empty($this->sqs_key) || empty($this->sqs_secret) || empty($this->sqs_region)) {
                throw new Exception(lang('Errors.aws.servicoNaoCarregadoSQS'), 401);
            }

            // Cria o cliente SQS
            try {
                $this->SQS = new SqsClient([
                    'region'      => $this->sqs_region,
                    'credentials' => ['key' => $this->sqs_key, 'secret' => $this->sqs_secret],
                    'version'     => 'latest'
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage(), 401);
            }
        }

        //--------------------------------------------------------------------

        // Verifica se deve construir o SNS
        if (in_array('sns', $servicos)) {
            $this->sns_key    = empty($config) ? env('aws_sns_key')    : (isset($config['sns']) ? (isset($config['sns']['aws_sns_key'])    ? $config['sns']['aws_sns_key']    : env('aws_sns_key'))    : env('aws_sns_key'));
            $this->sns_secret = empty($config) ? env('aws_sns_secret') : (isset($config['sns']) ? (isset($config['sns']['aws_sns_secret']) ? $config['sns']['aws_sns_secret'] : env('aws_sns_secret')) : env('aws_sns_secret'));
            $this->sns_region = empty($config) ? env('aws_sns_region') : (isset($config['sns']) ? (isset($config['sns']['aws_sns_region']) ? $config['sns']['aws_sns_region'] : env('aws_sns_region')) : env('aws_sns_region'));

            if (empty($this->sns_key) || empty($this->sns_secret) || empty($this->sns_region)) {
                throw new Exception(lang('Errors.aws.servicoNaoCarregadoSNS'), 401);
            }

            // Cria o cliente SNS
            try {
                $this->SNS = new SnsClient([
                    'region'      => $this->sns_region,
                    'credentials' => ['key' => $this->sns_key, 'secret' => $this->sns_secret],
                    'version'     => 'latest'
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage(), 401);
            }
        }
    }


    //////////////////////////////////////
    //                                  //
    //         OPERAÇÕES DO S3          //
    //                                  //
    //////////////////////////////////////

    /**
     * s3ListBucket - Lista os Bucket do S3
     * @return array
     */
    public function s3ListBucket()
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->listObjects(['Bucket' => $this->s3_bucket]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * s3GetObject - Retorna o arquivo de um bucket
     * @param string $key
     * @return
     */
    public function s3GetObject(string $key)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->getObject([
                'Bucket' => $this->s3_bucket,
                'Key'    => empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}"
            ]);
        } catch (S3Exception $e) {
            throw new Exception($e->getStatusCode());
        }
    }

    /**
     * s3GetBucketPolicy - Retorna as permissões do bucket
     * @return
     */
    public function s3GetBucketPolicy()
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->getBucketPolicy(['Bucket' => $this->s3_bucket]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * s3GetBucketLocation - Retorna a localização do servidor onde está o bucket
     * @return
     */
    public function s3GetBucketLocation()
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->getBucketLocation(['Bucket' => $this->s3_bucket]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * s3GetObjectUrl - Retorna a url para download de um arquivo de um bucket
     * @param string $key
     * @return string
     */
    public function s3GetObjectUrl(string $key)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->getObjectUrl($this->s3_bucket, empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}");
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * s3PutObject - Coloca um arquivo em um bucket (pode ser o arquivo ou o binário)
     * @param string $key
     * @param object $flie
     * @return
     */
    public function s3PutObject(string $key, $file, $contentType = null)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            $options = [
                'Bucket' => $this->s3_bucket,
                'Key'    => empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}",
                'Body'   => is_array($file) ? fopen($file['tmp_name'], 'r+') : $file
            ];

            if (!empty($contentType)) $options["ContentType"] = $contentType;

            return $this->S3->putObject($options);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * Deleta um arquivo de um bucket
     * @param string $key
     * @return
     */
    public function s3DeleteObject(string $key)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->deleteObject([
                'Bucket' => $this->s3_bucket,
                'Key'    => empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}"
            ]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * Copia um arquivo de um bucket
     * @param string $copySource
     * @param string $key
     */
    public function s3CopyObject(string $copySource, string $key)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {
            return $this->S3->copyObject([
                'Bucket'     => $this->s3_bucket,
                'CopySource' => "{$this->s3_bucket}/" . (empty($this->s3_root) ? $copySource : "{$this->s3_root}/{$copySource}"),
                'Key'        => empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}"
            ]);
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 401);
        }
    }

    /**
     * Retorna uma URL pré assinada para realizar download do um objeto do s3
     * @param string $key
     * @return string $url
     */
    public function s3CreatePreSignedUrl(string $key)
    {
        // Valida se existe o serviço desejado
        if (empty($this->S3)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoS3'), 401);
        }

        try {

            $cmd = $this->S3->getCommand('GetObject', [
                'Bucket' => $this->s3_bucket,
                'Key' => empty($this->s3_root) ? $key : "{$this->s3_root}/{$key}"
            ]);

            $expirationTime = '+' . env('s3_expiration_time') . ' minutes';

            $presignedUrl = $this->S3->createPresignedRequest($cmd, $expirationTime);

            $presignedUrl = (string) $presignedUrl->getUri();

            return !empty($presignedUrl) ? $presignedUrl : '';

        } catch (S3Exception $e) {
            throw new Exception($e->getStatusCode());
        }
    }

    //////////////////////////////////////
    //                                  //
    //      OPERAÇÕES DO DYNAMODB       //
    //                                  //
    //////////////////////////////////////

    /**
     * dynamodbCriarHandler - Cria um handler de sessão
     * @param string $table_name
     * @param string $hash_key
     */
    public function dynamodbCriarHandler($table_name = 'sessions', $hash_key = 'id')
    {
        // Valida se existe o serviço desejado
        if (empty($this->DYNAMODB)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
        }

        // Cria o session handler (tabela de sessão)
        $this->dynamodb_session_handler = SessionHandler::fromClient($this->DYNAMODB, [
            'table_name'                    => $table_name,
            'hash_key'                      => $hash_key,
            'session_lifetime'              => 28800,
            'consistent_read'               => true,
            'locking'                       => false,
            'batch_config'                  => [],
            'max_lock_wait_time'            => 100,
            'min_lock_retry_microtime'      => 5000,
            'max_lock_retry_microtime'      => 50000,
        ]);
    }

    /**
     * dynamodbRegistrarHandler - Registra o handler para atuar como banco de sessão
     */
    public function dynamodbRegistrarHandler()
    {
        // Valida se o Handler foi criado
        if (empty($this->dynamodb_session_handler)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
        }

        try {
            // Registra o session handler para o php ficar nativo
            $this->dynamodb_session_handler->register();
        } catch (\Exception $e) {
            //Faz nada
        }
    }

    /**
     * Executa uma query
     * @param string $query
     * @return
     */
    public function dynamodbQuery(string $query)
    {
        // Valida se existe o serviço desejado
        if (empty($this->DYNAMODB)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
        }

        return $this->DYNAMODB->query($query);
    }

    /**
     * Executa um scan
     *  @param string $scan
     *  @return
     */
    public function dynamodbScan($scan)
    {
        // Valida se existe o serviço desejado
        if (empty($this->DYNAMODB)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
        }

        return $this->DYNAMODB->scan($scan);
    }

    /**
     * Efetua uma limpeza de sessões expiradas
     */
    public function dynamodbGarbageCollect()
    {
        // Valida se existe o serviço desejado
        if (empty($this->DYNAMODB)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoDynamoDB'), 401);
        }

        $this->dynamodbCriarHandler();
        $this->dynamodb_session_handler->garbageCollect();
    }

    //////////////////////////////////////
    //                                  //
    //        OPERAÇÕES DO SES          //
    //                                  //
    //////////////////////////////////////

    /**
     * Envia e-mail
     * @param
     * @return
     */
    public function sesSendEmail($email)
    {
        // Valida se existe o serviço desejado
        if (empty($this->SES)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoSES'), 401);
        }

        return $this->SES->sendEmail($email);
    }

    /**
     * Envia e-mail
     * @param
     * @return
     */
    public function sesSendRawEmail($email)
    {
        // Valida se existe o serviço desejado
        if (empty($this->SES)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoSES'), 401);
        }

        // Verifica se o destinatário é um array ou uma string
        if (is_array($email['destinatario'])) {
            // é um array, converte em uma string separada por vírgula
            $destinatario                   = rtrim(implode(',', $email['destinatario']), ',');
        } else {
            // é uma string
            $destinatario                   = $email['destinatario'];
        }

        $msg                                = "To: {$destinatario}\n";
        $msg                               .= "From: {$email['remetente_nome']} <{$email['remetente_email']}>\n";

        // verifica se deve colocar o reply to
        if (!empty($email['responder_para'])) {
            $msg                           .= "Reply-To: {$email['responder_para']}\n";
        }

        $boundary                           = uniqid("_Part_" . time(), true);
        $boundary2                          = uniqid("_Part2_" . time(), true);

        // in case you have funny characters in the subject
        $assunto                            = mb_encode_mimeheader($email['assunto'], 'UTF-8');
        $msg                               .= "Subject: $assunto\n";
        $msg                               .= "MIME-Version: 1.0\n";
        $msg                               .= "Content-Type: multipart/mixed;\n";
        $msg                               .= " boundary=\"$boundary\"\n";
        $msg                               .= "\n";

        // now the actual body
        $msg                               .= "--$boundary\n";

        //since we are sending text and html emails with multiple attachments
        //we must use a combination of mixed and alternative boundaries
        //hence the use of boundary and boundary2
        $msg                               .= "Content-Type: multipart/alternative;\n";
        $msg                               .= " boundary=\"$boundary2\"\n";
        $msg                               .= "\n";
        $msg                               .= "--$boundary2\n";

        // first, the plain text
        $msg                               .= "Content-Type: text/plain; charset=utf-8\n";
        $msg                               .= "Content-Transfer-Encoding: 7bit\n";
        $msg                               .= "\n";
        $msg                               .= strip_tags($email['mensagem']);
        $msg                               .= "\n";

        // now, the html text
        $msg                               .= "--$boundary2\n";
        $msg                               .= "Content-Type: text/html; charset=utf-8\n";
        $msg                               .= "Content-Transfer-Encoding: 7bit\n";
        $msg                               .= "\n";
        $msg                               .= $email['mensagem'];
        $msg                               .= "\n";
        $msg                               .= "--$boundary2--\n";

        return $this->SES->sendRawEmail(['RawMessage' => ['Data' => $msg]], ['Source' => $email['remetente_email'], 'Destinations' => $destinatario]);
    }


    //////////////////////////////////////
    //                                  //
    //        OPERAÇÕES DO SQS          //
    //                                  //
    //////////////////////////////////////

    /**
     * sqsSendMessage - Envia uma Mensagem para a Fila da AWS
     * @param string $urlFila URL da Fila na AWS
     * @param string|object $mensagem Mensagem a ser enviada
     */
    public function sqsSendMessage($urlFila, $mensagem)
    {
        // Valida se existe o serviço desejado
        if (empty($this->SQS)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoSQS'), 401);
        }

        return $this->SQS->sendMessage(['DelaySeconds' => 0, 'MessageBody' => $mensagem, 'QueueUrl' => $urlFila]);
    }

    /**
     * sqsSendMessageBatch - Envia uma Mensagem em massa para a Fila da AWS
     * @param string $urlFila URL da Fila na AWS
     * @param string|object $mensagem Mensagem a ser enviada
     */
    public function sqsSendMessageBatch($fila, $mensagens)
    {
        // Valida se existe o serviço desejado
        if (empty($this->SQS)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoSQS'), 401);
        }

        $dadosEnvio = ['Entries'  => [], 'QueueUrl' => $fila];

        foreach ($mensagens as $key => $value) {
            $dadosEnvio['Entries'][] = ['DelaySeconds' => 0, 'Id' => $key, 'MessageBody' => $value];
        }

        return $this->SQS->sendMessageBatch($dadosEnvio);
    }

    //////////////////////////////////////
    //                                  //
    //        OPERAÇÕES DO SNS          //
    //                                  //
    //////////////////////////////////////

    /**
     * snsSendSMS - Envia um SMS
     * @param string $numero Numero de telefone
     * @param string $mensagem Mensagem a ser enviada
     */
    public function snsSendSMS($numero, $mensagem)
    {
        // Valida se existe o serviço desejado
        if (empty($this->SNS)) {
            throw new Exception(lang('Errors.aws.servicoNaoCarregadoSNS'), 401);
        }

        try {
            return $this->SNS->publish(['PhoneNumber' => $numero, 'Message' => $mensagem]);
        } catch (SnsException $e) {
            throw new Exception($e);
        }
    }
}
