<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetProfileResponse message
 */
class GetProfileResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const USERINFO = 2;
    const USERINFOEXT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::USERINFO => array(
            'name' => 'userInfo',
            'required' => true,
            'type' => '\ModUserInfo'
        ),
        self::USERINFOEXT => array(
            'name' => 'userInfoExt',
            'required' => true,
            'type' => '\UserInfoExt'
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
        $this->values[self::USERINFO] = null;
        $this->values[self::USERINFOEXT] = null;
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
     * Sets value of 'userInfo' property
     *
     * @param \ModUserInfo $value Property value
     *
     * @return null
     */
    public function setUserInfo(\ModUserInfo $value=null)
    {
        return $this->set(self::USERINFO, $value);
    }

    /**
     * Returns value of 'userInfo' property
     *
     * @return \ModUserInfo
     */
    public function getUserInfo()
    {
        return $this->get(self::USERINFO);
    }

    /**
     * Returns true if 'userInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserInfo()
    {
        return $this->get(self::USERINFO) !== null;
    }

    /**
     * Sets value of 'userInfoExt' property
     *
     * @param \UserInfoExt $value Property value
     *
     * @return null
     */
    public function setUserInfoExt(\UserInfoExt $value=null)
    {
        return $this->set(self::USERINFOEXT, $value);
    }

    /**
     * Returns value of 'userInfoExt' property
     *
     * @return \UserInfoExt
     */
    public function getUserInfoExt()
    {
        return $this->get(self::USERINFOEXT);
    }

    /**
     * Returns true if 'userInfoExt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserInfoExt()
    {
        return $this->get(self::USERINFOEXT) !== null;
    }
}
}