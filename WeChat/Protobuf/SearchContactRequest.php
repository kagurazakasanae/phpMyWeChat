<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SearchContactRequest message
 */
class SearchContactRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const OPCODE = 3;
    const FROMSCENE = 5;
    const SEARCHSCENE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::OPCODE => array(
            'name' => 'opCode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMSCENE => array(
            'name' => 'fromScene',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEARCHSCENE => array(
            'name' => 'searchScene',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::OPCODE] = null;
        $this->values[self::FROMSCENE] = null;
        $this->values[self::SEARCHSCENE] = null;
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
     * Sets value of 'userName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return \SKBuiltinString
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
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
     * Sets value of 'fromScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFromScene($value)
    {
        return $this->set(self::FROMSCENE, $value);
    }

    /**
     * Returns value of 'fromScene' property
     *
     * @return integer
     */
    public function getFromScene()
    {
        $value = $this->get(self::FROMSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fromScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromScene()
    {
        return $this->get(self::FROMSCENE) !== null;
    }

    /**
     * Sets value of 'searchScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSearchScene($value)
    {
        return $this->set(self::SEARCHSCENE, $value);
    }

    /**
     * Returns value of 'searchScene' property
     *
     * @return integer
     */
    public function getSearchScene()
    {
        $value = $this->get(self::SEARCHSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'searchScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSearchScene()
    {
        return $this->get(self::SEARCHSCENE) !== null;
    }
}
}