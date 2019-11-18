<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetQRCodeRequest message
 */
class GetQRCodeRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const STYLE = 3;
    const OPCODE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::STYLE => array(
            'name' => 'style',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPCODE => array(
            'name' => 'opcode',
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
        $this->values[self::USERNAME] = array();
        $this->values[self::STYLE] = null;
        $this->values[self::OPCODE] = null;
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
     * Appends value to 'userName' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendUserName(\SKBuiltinString $value)
    {
        return $this->append(self::USERNAME, $value);
    }

    /**
     * Clears 'userName' list
     *
     * @return null
     */
    public function clearUserName()
    {
        return $this->clear(self::USERNAME);
    }

    /**
     * Returns 'userName' list
     *
     * @return \SKBuiltinString[]
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
        return count($this->get(self::USERNAME)) !== 0;
    }

    /**
     * Returns 'userName' iterator
     *
     * @return \ArrayIterator
     */
    public function getUserNameIterator()
    {
        return new \ArrayIterator($this->get(self::USERNAME));
    }

    /**
     * Returns element from 'userName' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getUserNameAt($offset)
    {
        return $this->get(self::USERNAME, $offset);
    }

    /**
     * Returns count of 'userName' list
     *
     * @return int
     */
    public function getUserNameCount()
    {
        return $this->count(self::USERNAME);
    }

    /**
     * Sets value of 'style' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStyle($value)
    {
        return $this->set(self::STYLE, $value);
    }

    /**
     * Returns value of 'style' property
     *
     * @return integer
     */
    public function getStyle()
    {
        $value = $this->get(self::STYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'style' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle()
    {
        return $this->get(self::STYLE) !== null;
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
}
}