<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsCommentRequest message
 */
class SnsCommentRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const ACTION = 2;
    const CLIENTID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::ACTION => array(
            'name' => 'action',
            'required' => true,
            'type' => '\SnsActionGroup'
        ),
        self::CLIENTID => array(
            'name' => 'clientid',
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
        $this->values[self::ACTION] = null;
        $this->values[self::CLIENTID] = null;
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
     * Sets value of 'action' property
     *
     * @param \SnsActionGroup $value Property value
     *
     * @return null
     */
    public function setAction(\SnsActionGroup $value=null)
    {
        return $this->set(self::ACTION, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return \SnsActionGroup
     */
    public function getAction()
    {
        return $this->get(self::ACTION);
    }

    /**
     * Returns true if 'action' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAction()
    {
        return $this->get(self::ACTION) !== null;
    }

    /**
     * Sets value of 'clientid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientid($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'clientid' property
     *
     * @return string
     */
    public function getClientid()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientid()
    {
        return $this->get(self::CLIENTID) !== null;
    }
}
}