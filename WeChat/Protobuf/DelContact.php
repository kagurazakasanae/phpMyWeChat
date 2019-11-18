<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelContact message
 */
class DelContact extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const DELETECONTACTSCENE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::DELETECONTACTSCENE => array(
            'default' => 0,
            'name' => 'deleteContactScene',
            'required' => false,
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
        $this->values[self::USERNAME] = null;
        $this->values[self::DELETECONTACTSCENE] = self::$fields[self::DELETECONTACTSCENE]['default'];
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
     * Sets value of 'deleteContactScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteContactScene($value)
    {
        return $this->set(self::DELETECONTACTSCENE, $value);
    }

    /**
     * Returns value of 'deleteContactScene' property
     *
     * @return integer
     */
    public function getDeleteContactScene()
    {
        $value = $this->get(self::DELETECONTACTSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deleteContactScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeleteContactScene()
    {
        return $this->get(self::DELETECONTACTSCENE) !== null;
    }
}
}