<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTimeLineRequest message
 */
class SnsTimeLineRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const FIRSTPAGEMD5 = 2;
    const MAXID = 3;
    const MINFILTERID = 4;
    const LASTREQUESTTIME = 5;
    const CLIENTLASTESTID = 6;
    const SEESION = 7;
    const NETWORKTYPE = 8;
    const ADEXPINFO = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::FIRSTPAGEMD5 => array(
            'name' => 'firstPageMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAXID => array(
            'name' => 'maxId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINFILTERID => array(
            'name' => 'minFilterId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LASTREQUESTTIME => array(
            'name' => 'lastRequestTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTLASTESTID => array(
            'name' => 'clientLastestId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEESION => array(
            'name' => 'seesion',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::NETWORKTYPE => array(
            'name' => 'networkType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADEXPINFO => array(
            'name' => 'adexpinfo',
            'required' => true,
            'type' => '\SnsAdExpInfo'
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
        $this->values[self::FIRSTPAGEMD5] = null;
        $this->values[self::MAXID] = null;
        $this->values[self::MINFILTERID] = null;
        $this->values[self::LASTREQUESTTIME] = null;
        $this->values[self::CLIENTLASTESTID] = null;
        $this->values[self::SEESION] = null;
        $this->values[self::NETWORKTYPE] = null;
        $this->values[self::ADEXPINFO] = null;
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
     * Sets value of 'firstPageMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstPageMd5($value)
    {
        return $this->set(self::FIRSTPAGEMD5, $value);
    }

    /**
     * Returns value of 'firstPageMd5' property
     *
     * @return string
     */
    public function getFirstPageMd5()
    {
        $value = $this->get(self::FIRSTPAGEMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'firstPageMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFirstPageMd5()
    {
        return $this->get(self::FIRSTPAGEMD5) !== null;
    }

    /**
     * Sets value of 'maxId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxId($value)
    {
        return $this->set(self::MAXID, $value);
    }

    /**
     * Returns value of 'maxId' property
     *
     * @return integer
     */
    public function getMaxId()
    {
        $value = $this->get(self::MAXID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxId()
    {
        return $this->get(self::MAXID) !== null;
    }

    /**
     * Sets value of 'minFilterId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinFilterId($value)
    {
        return $this->set(self::MINFILTERID, $value);
    }

    /**
     * Returns value of 'minFilterId' property
     *
     * @return integer
     */
    public function getMinFilterId()
    {
        $value = $this->get(self::MINFILTERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'minFilterId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMinFilterId()
    {
        return $this->get(self::MINFILTERID) !== null;
    }

    /**
     * Sets value of 'lastRequestTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRequestTime($value)
    {
        return $this->set(self::LASTREQUESTTIME, $value);
    }

    /**
     * Returns value of 'lastRequestTime' property
     *
     * @return integer
     */
    public function getLastRequestTime()
    {
        $value = $this->get(self::LASTREQUESTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lastRequestTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLastRequestTime()
    {
        return $this->get(self::LASTREQUESTTIME) !== null;
    }

    /**
     * Sets value of 'clientLastestId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientLastestId($value)
    {
        return $this->set(self::CLIENTLASTESTID, $value);
    }

    /**
     * Returns value of 'clientLastestId' property
     *
     * @return integer
     */
    public function getClientLastestId()
    {
        $value = $this->get(self::CLIENTLASTESTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientLastestId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientLastestId()
    {
        return $this->get(self::CLIENTLASTESTID) !== null;
    }

    /**
     * Sets value of 'seesion' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setSeesion(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::SEESION, $value);
    }

    /**
     * Returns value of 'seesion' property
     *
     * @return \SKBuiltinString_
     */
    public function getSeesion()
    {
        return $this->get(self::SEESION);
    }

    /**
     * Returns true if 'seesion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeesion()
    {
        return $this->get(self::SEESION) !== null;
    }

    /**
     * Sets value of 'networkType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetworkType($value)
    {
        return $this->set(self::NETWORKTYPE, $value);
    }

    /**
     * Returns value of 'networkType' property
     *
     * @return integer
     */
    public function getNetworkType()
    {
        $value = $this->get(self::NETWORKTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'networkType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNetworkType()
    {
        return $this->get(self::NETWORKTYPE) !== null;
    }

    /**
     * Sets value of 'adexpinfo' property
     *
     * @param \SnsAdExpInfo $value Property value
     *
     * @return null
     */
    public function setAdexpinfo(\SnsAdExpInfo $value=null)
    {
        return $this->set(self::ADEXPINFO, $value);
    }

    /**
     * Returns value of 'adexpinfo' property
     *
     * @return \SnsAdExpInfo
     */
    public function getAdexpinfo()
    {
        return $this->get(self::ADEXPINFO);
    }

    /**
     * Returns true if 'adexpinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdexpinfo()
    {
        return $this->get(self::ADEXPINFO) !== null;
    }
}
}