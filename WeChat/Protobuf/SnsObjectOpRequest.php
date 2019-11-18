<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectOpRequest message
 */
class SnsObjectOpRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPCOUNT = 2;
    const OPLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OPCOUNT => array(
            'name' => 'opCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPLIST => array(
            'name' => 'opList',
            'required' => true,
            'type' => '\SnsObjectOp'
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
        $this->values[self::OPCOUNT] = null;
        $this->values[self::OPLIST] = null;
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
     * Sets value of 'opCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCount($value)
    {
        return $this->set(self::OPCOUNT, $value);
    }

    /**
     * Returns value of 'opCount' property
     *
     * @return integer
     */
    public function getOpCount()
    {
        $value = $this->get(self::OPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCount()
    {
        return $this->get(self::OPCOUNT) !== null;
    }

    /**
     * Sets value of 'opList' property
     *
     * @param \SnsObjectOp $value Property value
     *
     * @return null
     */
    public function setOpList(\SnsObjectOp $value=null)
    {
        return $this->set(self::OPLIST, $value);
    }

    /**
     * Returns value of 'opList' property
     *
     * @return \SnsObjectOp
     */
    public function getOpList()
    {
        return $this->get(self::OPLIST);
    }

    /**
     * Returns true if 'opList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpList()
    {
        return $this->get(self::OPLIST) !== null;
    }
}
}