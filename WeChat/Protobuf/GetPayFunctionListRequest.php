<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetPayFunctionListRequest message
 */
class GetPayFunctionListRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const TELEPHONYNETISO = 2;
    const TICKETCOUNT = 3;
    const TICKETLIST = 4;
    const EXINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::TELEPHONYNETISO => array(
            'name' => 'telephonyNetIso',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TICKETCOUNT => array(
            'name' => 'ticketCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TICKETLIST => array(
            'name' => 'ticketList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXINFO => array(
            'name' => 'exInfo',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::TELEPHONYNETISO] = null;
        $this->values[self::TICKETCOUNT] = null;
        $this->values[self::TICKETLIST] = null;
        $this->values[self::EXINFO] = null;
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
     * Sets value of 'telephonyNetIso' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTelephonyNetIso($value)
    {
        return $this->set(self::TELEPHONYNETISO, $value);
    }

    /**
     * Returns value of 'telephonyNetIso' property
     *
     * @return string
     */
    public function getTelephonyNetIso()
    {
        $value = $this->get(self::TELEPHONYNETISO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'telephonyNetIso' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTelephonyNetIso()
    {
        return $this->get(self::TELEPHONYNETISO) !== null;
    }

    /**
     * Sets value of 'ticketCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTicketCount($value)
    {
        return $this->set(self::TICKETCOUNT, $value);
    }

    /**
     * Returns value of 'ticketCount' property
     *
     * @return integer
     */
    public function getTicketCount()
    {
        $value = $this->get(self::TICKETCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ticketCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicketCount()
    {
        return $this->get(self::TICKETCOUNT) !== null;
    }

    /**
     * Sets value of 'ticketList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTicketList($value)
    {
        return $this->set(self::TICKETLIST, $value);
    }

    /**
     * Returns value of 'ticketList' property
     *
     * @return string
     */
    public function getTicketList()
    {
        $value = $this->get(self::TICKETLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ticketList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicketList()
    {
        return $this->get(self::TICKETLIST) !== null;
    }

    /**
     * Sets value of 'exInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExInfo($value)
    {
        return $this->set(self::EXINFO, $value);
    }

    /**
     * Returns value of 'exInfo' property
     *
     * @return string
     */
    public function getExInfo()
    {
        $value = $this->get(self::EXINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'exInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExInfo()
    {
        return $this->get(self::EXINFO) !== null;
    }
}
}