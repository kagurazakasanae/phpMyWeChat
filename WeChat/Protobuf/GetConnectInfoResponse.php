<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetConnectInfoResponse message
 */
class GetConnectInfoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const ID = 2;
    const KEY = 3;
    const HELLO = 4;
    const OK = 5;
    const TYPE = 6;
    const ADDRCOUNT = 7;
    const ADDRLIST = 8;
    const RESOURCE = 9;
    const PCNAME = 10;
    const PCACCTNAME = 11;
    const ENCRYFLAG = 12;
    const SCENE = 13;
    const DATASIZE = 14;
    const WIFINAME = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::ID => array(
            'name' => 'Id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KEY => array(
            'name' => 'Key',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::HELLO => array(
            'name' => 'Hello',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OK => array(
            'name' => 'Ok',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'Type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDRCOUNT => array(
            'name' => 'Addrcount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADDRLIST => array(
            'name' => 'AddrList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESOURCE => array(
            'name' => 'Resource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PCNAME => array(
            'name' => 'Pcname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PCACCTNAME => array(
            'name' => 'Pcacctname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYFLAG => array(
            'name' => 'EncryFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCENE => array(
            'name' => 'Scene',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATASIZE => array(
            'name' => 'Datasize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WIFINAME => array(
            'name' => 'Wifiname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::ID] = null;
        $this->values[self::KEY] = null;
        $this->values[self::HELLO] = null;
        $this->values[self::OK] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::ADDRCOUNT] = null;
        $this->values[self::ADDRLIST] = null;
        $this->values[self::RESOURCE] = null;
        $this->values[self::PCNAME] = null;
        $this->values[self::PCACCTNAME] = null;
        $this->values[self::ENCRYFLAG] = null;
        $this->values[self::SCENE] = null;
        $this->values[self::DATASIZE] = null;
        $this->values[self::WIFINAME] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'Id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'Id' property
     *
     * @return string
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'Key' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setKey(\AesKey $value=null)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'Key' property
     *
     * @return \AesKey
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Returns true if 'Key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }

    /**
     * Sets value of 'Hello' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHello($value)
    {
        return $this->set(self::HELLO, $value);
    }

    /**
     * Returns value of 'Hello' property
     *
     * @return string
     */
    public function getHello()
    {
        $value = $this->get(self::HELLO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Hello' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHello()
    {
        return $this->get(self::HELLO) !== null;
    }

    /**
     * Sets value of 'Ok' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOk($value)
    {
        return $this->set(self::OK, $value);
    }

    /**
     * Returns value of 'Ok' property
     *
     * @return string
     */
    public function getOk()
    {
        $value = $this->get(self::OK);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Ok' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOk()
    {
        return $this->get(self::OK) !== null;
    }

    /**
     * Sets value of 'Type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'Type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'Addrcount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddrcount($value)
    {
        return $this->set(self::ADDRCOUNT, $value);
    }

    /**
     * Returns value of 'Addrcount' property
     *
     * @return integer
     */
    public function getAddrcount()
    {
        $value = $this->get(self::ADDRCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Addrcount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddrcount()
    {
        return $this->get(self::ADDRCOUNT) !== null;
    }

    /**
     * Sets value of 'AddrList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddrList($value)
    {
        return $this->set(self::ADDRLIST, $value);
    }

    /**
     * Returns value of 'AddrList' property
     *
     * @return string
     */
    public function getAddrList()
    {
        $value = $this->get(self::ADDRLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'AddrList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddrList()
    {
        return $this->get(self::ADDRLIST) !== null;
    }

    /**
     * Sets value of 'Resource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResource($value)
    {
        return $this->set(self::RESOURCE, $value);
    }

    /**
     * Returns value of 'Resource' property
     *
     * @return string
     */
    public function getResource()
    {
        $value = $this->get(self::RESOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Resource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResource()
    {
        return $this->get(self::RESOURCE) !== null;
    }

    /**
     * Sets value of 'Pcname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPcname($value)
    {
        return $this->set(self::PCNAME, $value);
    }

    /**
     * Returns value of 'Pcname' property
     *
     * @return string
     */
    public function getPcname()
    {
        $value = $this->get(self::PCNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Pcname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPcname()
    {
        return $this->get(self::PCNAME) !== null;
    }

    /**
     * Sets value of 'Pcacctname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPcacctname($value)
    {
        return $this->set(self::PCACCTNAME, $value);
    }

    /**
     * Returns value of 'Pcacctname' property
     *
     * @return string
     */
    public function getPcacctname()
    {
        $value = $this->get(self::PCACCTNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Pcacctname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPcacctname()
    {
        return $this->get(self::PCACCTNAME) !== null;
    }

    /**
     * Sets value of 'EncryFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEncryFlag($value)
    {
        return $this->set(self::ENCRYFLAG, $value);
    }

    /**
     * Returns value of 'EncryFlag' property
     *
     * @return integer
     */
    public function getEncryFlag()
    {
        $value = $this->get(self::ENCRYFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'EncryFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryFlag()
    {
        return $this->get(self::ENCRYFLAG) !== null;
    }

    /**
     * Sets value of 'Scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'Scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }

    /**
     * Sets value of 'Datasize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDatasize($value)
    {
        return $this->set(self::DATASIZE, $value);
    }

    /**
     * Returns value of 'Datasize' property
     *
     * @return integer
     */
    public function getDatasize()
    {
        $value = $this->get(self::DATASIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Datasize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDatasize()
    {
        return $this->get(self::DATASIZE) !== null;
    }

    /**
     * Sets value of 'Wifiname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWifiname($value)
    {
        return $this->set(self::WIFINAME, $value);
    }

    /**
     * Returns value of 'Wifiname' property
     *
     * @return string
     */
    public function getWifiname()
    {
        $value = $this->get(self::WIFINAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Wifiname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWifiname()
    {
        return $this->get(self::WIFINAME) !== null;
    }
}
}