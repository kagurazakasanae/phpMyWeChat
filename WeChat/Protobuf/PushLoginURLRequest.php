<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PushLoginURLRequest message
 */
class PushLoginURLRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const AUTOAUTHTICKET = 3;
    const CLIENTID = 4;
    const RANDOMENCRYKEY = 5;
    const OPCODE = 6;
    const DEVICENAME = 7;
    const AUTOAUTHKEY = 8;
    const RSA = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTOAUTHTICKET => array(
            'name' => 'Autoauthticket',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTID => array(
            'name' => 'ClientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RANDOMENCRYKEY => array(
            'name' => 'randomEncryKey',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::OPCODE => array(
            'name' => 'opcode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICENAME => array(
            'name' => 'Devicename',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTOAUTHKEY => array(
            'name' => 'Autoauthkey',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::RSA => array(
            'name' => 'rsa',
            'required' => true,
            'type' => '\RSAPem'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::AUTOAUTHTICKET] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::RANDOMENCRYKEY] = null;
        $this->values[self::OPCODE] = null;
        $this->values[self::DEVICENAME] = null;
        $this->values[self::AUTOAUTHKEY] = null;
        $this->values[self::RSA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'Autoauthticket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAutoauthticket($value)
    {
        return $this->set(self::AUTOAUTHTICKET, $value);
    }

    /**
     * Returns value of 'Autoauthticket' property
     *
     * @return string
     */
    public function getAutoauthticket()
    {
        $value = $this->get(self::AUTOAUTHTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Autoauthticket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAutoauthticket()
    {
        return $this->get(self::AUTOAUTHTICKET) !== null;
    }

    /**
     * Sets value of 'ClientId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'ClientId' property
     *
     * @return string
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ClientId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENTID) !== null;
    }

    /**
     * Sets value of 'randomEncryKey' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setRandomEncryKey(\AesKey $value=null)
    {
        return $this->set(self::RANDOMENCRYKEY, $value);
    }

    /**
     * Returns value of 'randomEncryKey' property
     *
     * @return \AesKey
     */
    public function getRandomEncryKey()
    {
        return $this->get(self::RANDOMENCRYKEY);
    }

    /**
     * Returns true if 'randomEncryKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRandomEncryKey()
    {
        return $this->get(self::RANDOMENCRYKEY) !== null;
    }

    /**
     * Sets value of 'opcode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpcode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opcode' property
     *
     * @return integer
     */
    public function getOpcode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpcode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'Devicename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDevicename($value)
    {
        return $this->set(self::DEVICENAME, $value);
    }

    /**
     * Returns value of 'Devicename' property
     *
     * @return string
     */
    public function getDevicename()
    {
        $value = $this->get(self::DEVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Devicename' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDevicename()
    {
        return $this->get(self::DEVICENAME) !== null;
    }

    /**
     * Sets value of 'Autoauthkey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setAutoauthkey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::AUTOAUTHKEY, $value);
    }

    /**
     * Returns value of 'Autoauthkey' property
     *
     * @return \SKBuiltinString_
     */
    public function getAutoauthkey()
    {
        return $this->get(self::AUTOAUTHKEY);
    }

    /**
     * Returns true if 'Autoauthkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAutoauthkey()
    {
        return $this->get(self::AUTOAUTHKEY) !== null;
    }

    /**
     * Sets value of 'rsa' property
     *
     * @param \RSAPem $value Property value
     *
     * @return null
     */
    public function setRsa(\RSAPem $value=null)
    {
        return $this->set(self::RSA, $value);
    }

    /**
     * Returns value of 'rsa' property
     *
     * @return \RSAPem
     */
    public function getRsa()
    {
        return $this->get(self::RSA);
    }

    /**
     * Returns true if 'rsa' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRsa()
    {
        return $this->get(self::RSA) !== null;
    }
}
}