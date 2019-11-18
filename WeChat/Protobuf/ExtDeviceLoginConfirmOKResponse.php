<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmOKResponse message
 */
class ExtDeviceLoginConfirmOKResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const MSGCONTEXTPUBKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::MSGCONTEXTPUBKEY => array(
            'name' => 'msgContextPubKey',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::MSGCONTEXTPUBKEY] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'msgContextPubKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgContextPubKey($value)
    {
        return $this->set(self::MSGCONTEXTPUBKEY, $value);
    }

    /**
     * Returns value of 'msgContextPubKey' property
     *
     * @return string
     */
    public function getMsgContextPubKey()
    {
        $value = $this->get(self::MSGCONTEXTPUBKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgContextPubKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgContextPubKey()
    {
        return $this->get(self::MSGCONTEXTPUBKEY) !== null;
    }
}
}