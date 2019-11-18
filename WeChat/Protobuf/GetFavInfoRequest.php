<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetFavInfoRequest message
 */
class GetFavInfoRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baserequest',
            'required' => true,
            'type' => '\BaseRequest'
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
     * Sets value of 'baserequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaserequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baserequest' property
     *
     * @return \BaseRequest
     */
    public function getBaserequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baserequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaserequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }
}
}