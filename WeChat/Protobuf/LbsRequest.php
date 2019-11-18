<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LbsRequest message
 */
class LbsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPCODE = 2;
    const LOGITUDE = 3;
    const LATITUDE = 4;
    const PRECISION = 5;
    const MACADDR = 6;
    const CELLID = 7;
    const GPSSOURCE = 8;
    const CLIENTCHECKDATA = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OPCODE => array(
            'name' => 'opCode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOGITUDE => array(
            'name' => 'logitude',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::LATITUDE => array(
            'name' => 'latitude',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::PRECISION => array(
            'name' => 'precision',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MACADDR => array(
            'name' => 'macAddr',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CELLID => array(
            'name' => 'cellId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GPSSOURCE => array(
            'name' => 'gPSSource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTCHECKDATA => array(
            'name' => 'clientCheckData',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::OPCODE] = null;
        $this->values[self::LOGITUDE] = null;
        $this->values[self::LATITUDE] = null;
        $this->values[self::PRECISION] = null;
        $this->values[self::MACADDR] = null;
        $this->values[self::CELLID] = null;
        $this->values[self::GPSSOURCE] = null;
        $this->values[self::CLIENTCHECKDATA] = null;
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
     * Sets value of 'opCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opCode' property
     *
     * @return integer
     */
    public function getOpCode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'logitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLogitude($value)
    {
        return $this->set(self::LOGITUDE, $value);
    }

    /**
     * Returns value of 'logitude' property
     *
     * @return double
     */
    public function getLogitude()
    {
        $value = $this->get(self::LOGITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'logitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLogitude()
    {
        return $this->get(self::LOGITUDE) !== null;
    }

    /**
     * Sets value of 'latitude' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLatitude($value)
    {
        return $this->set(self::LATITUDE, $value);
    }

    /**
     * Returns value of 'latitude' property
     *
     * @return double
     */
    public function getLatitude()
    {
        $value = $this->get(self::LATITUDE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Returns true if 'latitude' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLatitude()
    {
        return $this->get(self::LATITUDE) !== null;
    }

    /**
     * Sets value of 'precision' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrecision($value)
    {
        return $this->set(self::PRECISION, $value);
    }

    /**
     * Returns value of 'precision' property
     *
     * @return integer
     */
    public function getPrecision()
    {
        $value = $this->get(self::PRECISION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'precision' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrecision()
    {
        return $this->get(self::PRECISION) !== null;
    }

    /**
     * Sets value of 'macAddr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMacAddr($value)
    {
        return $this->set(self::MACADDR, $value);
    }

    /**
     * Returns value of 'macAddr' property
     *
     * @return string
     */
    public function getMacAddr()
    {
        $value = $this->get(self::MACADDR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'macAddr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMacAddr()
    {
        return $this->get(self::MACADDR) !== null;
    }

    /**
     * Sets value of 'cellId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCellId($value)
    {
        return $this->set(self::CELLID, $value);
    }

    /**
     * Returns value of 'cellId' property
     *
     * @return string
     */
    public function getCellId()
    {
        $value = $this->get(self::CELLID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cellId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCellId()
    {
        return $this->get(self::CELLID) !== null;
    }

    /**
     * Sets value of 'gPSSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGPSSource($value)
    {
        return $this->set(self::GPSSOURCE, $value);
    }

    /**
     * Returns value of 'gPSSource' property
     *
     * @return integer
     */
    public function getGPSSource()
    {
        $value = $this->get(self::GPSSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'gPSSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGPSSource()
    {
        return $this->get(self::GPSSOURCE) !== null;
    }

    /**
     * Sets value of 'clientCheckData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientCheckData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTCHECKDATA, $value);
    }

    /**
     * Returns value of 'clientCheckData' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA);
    }

    /**
     * Returns true if 'clientCheckData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA) !== null;
    }
}
}