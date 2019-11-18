<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsActionGroup message
 */
class SnsActionGroup extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const PARENTID = 2;
    const CURRENTACTION = 3;
    const REFERACTION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARENTID => array(
            'name' => 'parentId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENTACTION => array(
            'name' => 'currentAction',
            'required' => true,
            'type' => '\SnsAction'
        ),
        self::REFERACTION => array(
            'name' => 'referAction',
            'required' => true,
            'type' => '\SnsAction'
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
        $this->values[self::ID] = null;
        $this->values[self::PARENTID] = null;
        $this->values[self::CURRENTACTION] = null;
        $this->values[self::REFERACTION] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'parentId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setParentId($value)
    {
        return $this->set(self::PARENTID, $value);
    }

    /**
     * Returns value of 'parentId' property
     *
     * @return integer
     */
    public function getParentId()
    {
        $value = $this->get(self::PARENTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'parentId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasParentId()
    {
        return $this->get(self::PARENTID) !== null;
    }

    /**
     * Sets value of 'currentAction' property
     *
     * @param \SnsAction $value Property value
     *
     * @return null
     */
    public function setCurrentAction(\SnsAction $value=null)
    {
        return $this->set(self::CURRENTACTION, $value);
    }

    /**
     * Returns value of 'currentAction' property
     *
     * @return \SnsAction
     */
    public function getCurrentAction()
    {
        return $this->get(self::CURRENTACTION);
    }

    /**
     * Returns true if 'currentAction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentAction()
    {
        return $this->get(self::CURRENTACTION) !== null;
    }

    /**
     * Sets value of 'referAction' property
     *
     * @param \SnsAction $value Property value
     *
     * @return null
     */
    public function setReferAction(\SnsAction $value=null)
    {
        return $this->set(self::REFERACTION, $value);
    }

    /**
     * Returns value of 'referAction' property
     *
     * @return \SnsAction
     */
    public function getReferAction()
    {
        return $this->get(self::REFERACTION);
    }

    /**
     * Returns true if 'referAction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferAction()
    {
        return $this->get(self::REFERACTION) !== null;
    }
}
}