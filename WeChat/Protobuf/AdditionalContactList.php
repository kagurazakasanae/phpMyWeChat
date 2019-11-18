<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AdditionalContactList message
 */
class AdditionalContactList extends \ProtobufMessage
{
    /* Field index constants */
    const LINKEDINCONTACTITEM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LINKEDINCONTACTITEM => array(
            'name' => 'linkedinContactItem',
            'required' => true,
            'type' => '\LinkedinContactItem'
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
        $this->values[self::LINKEDINCONTACTITEM] = null;
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
     * Sets value of 'linkedinContactItem' property
     *
     * @param \LinkedinContactItem $value Property value
     *
     * @return null
     */
    public function setLinkedinContactItem(\LinkedinContactItem $value=null)
    {
        return $this->set(self::LINKEDINCONTACTITEM, $value);
    }

    /**
     * Returns value of 'linkedinContactItem' property
     *
     * @return \LinkedinContactItem
     */
    public function getLinkedinContactItem()
    {
        return $this->get(self::LINKEDINCONTACTITEM);
    }

    /**
     * Returns true if 'linkedinContactItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLinkedinContactItem()
    {
        return $this->get(self::LINKEDINCONTACTITEM) !== null;
    }
}
}