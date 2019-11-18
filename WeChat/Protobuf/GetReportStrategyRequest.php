<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetReportStrategyRequest message
 */
class GetReportStrategyRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const BASERDEVICEMODEL = 2;
    const DEVICEBRAND = 3;
    const OSNAME = 4;
    const OSVERSION = 5;
    const LANGUAGEVER = 6;
    const LOGID = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::BASERDEVICEMODEL => array(
            'name' => 'baseRdeviceModel',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICEBRAND => array(
            'name' => 'deviceBrand',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OSNAME => array(
            'name' => 'osName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OSVERSION => array(
            'name' => 'osVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LANGUAGEVER => array(
            'name' => 'languageVer',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOGID => array(
            'name' => 'logid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::BASERDEVICEMODEL] = null;
        $this->values[self::DEVICEBRAND] = null;
        $this->values[self::OSNAME] = null;
        $this->values[self::OSVERSION] = null;
        $this->values[self::LANGUAGEVER] = null;
        $this->values[self::LOGID] = null;
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
     * Sets value of 'baseRdeviceModel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBaseRdeviceModel($value)
    {
        return $this->set(self::BASERDEVICEMODEL, $value);
    }

    /**
     * Returns value of 'baseRdeviceModel' property
     *
     * @return string
     */
    public function getBaseRdeviceModel()
    {
        $value = $this->get(self::BASERDEVICEMODEL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'baseRdeviceModel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRdeviceModel()
    {
        return $this->get(self::BASERDEVICEMODEL) !== null;
    }

    /**
     * Sets value of 'deviceBrand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceBrand($value)
    {
        return $this->set(self::DEVICEBRAND, $value);
    }

    /**
     * Returns value of 'deviceBrand' property
     *
     * @return string
     */
    public function getDeviceBrand()
    {
        $value = $this->get(self::DEVICEBRAND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceBrand' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceBrand()
    {
        return $this->get(self::DEVICEBRAND) !== null;
    }

    /**
     * Sets value of 'osName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsName($value)
    {
        return $this->set(self::OSNAME, $value);
    }

    /**
     * Returns value of 'osName' property
     *
     * @return string
     */
    public function getOsName()
    {
        $value = $this->get(self::OSNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'osName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsName()
    {
        return $this->get(self::OSNAME) !== null;
    }

    /**
     * Sets value of 'osVersion' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsVersion($value)
    {
        return $this->set(self::OSVERSION, $value);
    }

    /**
     * Returns value of 'osVersion' property
     *
     * @return string
     */
    public function getOsVersion()
    {
        $value = $this->get(self::OSVERSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'osVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsVersion()
    {
        return $this->get(self::OSVERSION) !== null;
    }

    /**
     * Sets value of 'languageVer' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguageVer($value)
    {
        return $this->set(self::LANGUAGEVER, $value);
    }

    /**
     * Returns value of 'languageVer' property
     *
     * @return string
     */
    public function getLanguageVer()
    {
        $value = $this->get(self::LANGUAGEVER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'languageVer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguageVer()
    {
        return $this->get(self::LANGUAGEVER) !== null;
    }

    /**
     * Sets value of 'logid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLogid($value)
    {
        return $this->set(self::LOGID, $value);
    }

    /**
     * Returns value of 'logid' property
     *
     * @return integer
     */
    public function getLogid()
    {
        $value = $this->get(self::LOGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'logid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogid()
    {
        return $this->get(self::LOGID) !== null;
    }
}
}