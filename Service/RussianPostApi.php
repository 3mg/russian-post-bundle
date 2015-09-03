<?php
namespace a3mg\RussianPostBundle\Service;

use a3mg\RussianPostBundle\Validator\TrackValidator;
use JMS\Serializer\SerializerInterface;
use a3mg\RussianPostBundle\Exception\RussianPostApiException;
use a3mg\RussianPostBundle\Exception\InvalidTrackException;
use a3mg\RussianPostBundle\Model\OperationHistoryData;

class RussianPostApi {
    protected $fullName;
    protected $shortName;
    protected $fcindex;
    protected $respMail;
    protected $respPerson;
    protected $inn;
    protected $typeUsersId;
    protected $url;

    protected $login;
    protected $password;
    protected $wsdlEndpoint;

    /** @var  SerializerInterface */
    protected $serializer;

    /**
     * RussianPostApi constructor.
     *
     * @param SerializerInterface $serializer
     * @param $login
     * @param $password
     * @param $wsdlEndpoint
     */
    public function __construct(
        $serializer,
        $login,
        $password,
        $wsdlEndpoint
    ) {
        $this->serializer = $serializer;
        $this->login = $login;
        $this->password = $password;
        $this->wsdlEndpoint = $wsdlEndpoint;
    }

    /**
     * @param $track
     * @param $debug
     *
     * @throws RussianPostApiException
     * @throws InvalidTrackException
     *
     * @return OperationHistoryData
     */
    public function getTrackOperationHistory($track, &$debug) {
        if (!TrackValidator::validateTrack($track)) {
            throw new InvalidTrackException();
        }
        $track = TrackValidator::filterTrack($track);

        $client = $this->initClient();

        $AuthorizationHeader = [
            "mustUnderstand" => "TRUE",
            "_" => [
                "login" => $this->login,
                "password" => $this->password,
            ],
        ];
        $historyRequest = [
            "Barcode" => $track,
            "MessageType" => 0,
        ];
        $parameters = [
            "AuthorizationHeader" => $AuthorizationHeader,
            "historyRequest" => $historyRequest,
        ];

        //($operation, $params=array(), $namespace='http://tempuri.org', $soapAction='', $headers=false, $rpcParams=null, $style='rpc', $use='encoded')
        $result = $client->call('GetOperationHistory', $parameters, 'http://russianpost.org/operationhistory');

        $debug = array(
            "Request" => /*htmlspecialchars*/($client->request/*, ENT_QUOTES*/),
            "Response" => /*htmlspecialchars*/($client->response/*, ENT_QUOTES*/),
            "Debug" => /*htmlspecialchars*/($client->debug_str/*, ENT_QUOTES*/),
        );

        if ($client->fault) {
            throw new RussianPostApiException(print_r($result, true));
        } else {
            $err = $client->getError();
            if ($err) {
                throw new RussianPostApiException($err);
            } else {
                /** @var OperationHistoryData $object */
                $object = $this->serializer->deserialize(
                    $result,
                    'a3mg\RussianPostBundle\Model\OperationHistoryData',
                    'array'
                );
                return $object;
            }
        }
    }

    /**
     * @throws RussianPostApiException
     * @return \nusoap_client
     */
    protected function initClient()
    {
        $cache = new \wsdlcache('.', 120);
        $wsdl = $cache->get($this->wsdlEndpoint);

        if (is_null($wsdl)) {
            $wsdl = new \wsdl($this->wsdlEndpoint);
            $cache->put($wsdl);
        } else {
            $wsdl->debug_str = '';
            $wsdl->debug('Retrieved from cache');
        }

        $client = new \nusoap_client($wsdl, true);
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;

        $err = $client->getError();
        if ($err) {
            throw new RussianPostApiException($err);
        }

        return $client;
    }
}