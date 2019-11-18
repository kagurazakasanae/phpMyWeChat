<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsUserPageRequest message
 */
class SnsUserPageRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const FRISTPAGEMD5 = 2;
    const USERNAME = 3;
    const MAXID = 4;
    const SOURCE = 5;
    const MINFILTERID = 6;
    const LASTREQUESTTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::FRISTPAGEMD5 => array(
            'name' => 'fristPageMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAXID => array(
            'name' => 'maxid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
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
        $this->values[self::FRISTPAGEMD5] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::MAXID] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::MINFILTERID] = null;
        $this->values[self::LASTREQUESTTIME] = null;
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
     * Sets value of 'fristPageMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFristPageMd5($value)
    {
        return $this->set(self::FRISTPAGEMD5, $value);
    }

    /**
     * Returns value of 'fristPageMd5' property
     *
     * @return string
     */
    public function getFristPageMd5()
    {
        $value = $this->get(self::FRISTPAGEMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fristPageMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFristPageMd5()
    {
        return $this->get(self::FRISTPAGEMD5) !== null;
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
     * Sets value of 'maxid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxid($value)
    {
        return $this->set(self::MAXID, $value);
    }

    /**
     * Returns value of 'maxid' property
     *
     * @return integer
     */
    public function getMaxid()
    {
        $value = $this->get(self::MAXID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxid()
    {
        return $this->get(self::MAXID) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
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
}
}