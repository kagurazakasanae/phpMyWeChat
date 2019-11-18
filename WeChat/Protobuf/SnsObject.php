<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObject message
 */
class SnsObject extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const USERNAME = 2;
    const NICKNAME = 3;
    const CREATETIME = 4;
    const OBJECTDESC = 5;
    const LIKEFLAG = 6;
    const LIKECOUNT = 7;
    const LIKEUSERLISTNUM = 8;
    const LIKEUSERLIST = 9;
    const COMMENTCOUNT = 10;
    const COMMENTUSERLISTCOUNT = 11;
    const COMMENTUSERLIST = 12;
    const WITHUSERCOUNT = 13;
    const WITHUSERLISTNUM = 14;
    const WITHUSERLIST = 15;
    const EXTFLAG = 16;
    const NOCHANGE = 17;
    const GROUPCOUNT = 18;
    const GROUPLIST = 19;
    const ISNOTRICHTEXT = 20;
    const REFERUSERNAME = 21;
    const REFERID = 22;
    const BLACKLISTCOUNT = 23;
    const BLACKLIST = 24;
    const DELETEFLAG = 25;
    const GROUPUSERCOUNT = 26;
    const GROUPUSER = 27;
    const OBJECTOPERATIONS = 28;
    const SNSREDENVELOPS = 29;
    const PREDOWNLOADINFO = 30;
    const WEAPPINFO = 31;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OBJECTDESC => array(
            'name' => 'objectDesc',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::LIKEFLAG => array(
            'name' => 'likeFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIKECOUNT => array(
            'name' => 'likeCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIKEUSERLISTNUM => array(
            'name' => 'likeUserListNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIKEUSERLIST => array(
            'name' => 'likeUserList',
            'repeated' => true,
            'type' => '\SnsCommentInfo'
        ),
        self::COMMENTCOUNT => array(
            'name' => 'commentCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENTUSERLISTCOUNT => array(
            'name' => 'commentUserListCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMMENTUSERLIST => array(
            'name' => 'commentUserList',
            'repeated' => true,
            'type' => '\SnsCommentInfo'
        ),
        self::WITHUSERCOUNT => array(
            'name' => 'withUserCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WITHUSERLISTNUM => array(
            'name' => 'withUserListNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WITHUSERLIST => array(
            'name' => 'withUserList',
            'repeated' => true,
            'type' => '\SnsCommentInfo'
        ),
        self::EXTFLAG => array(
            'name' => 'extFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOCHANGE => array(
            'name' => 'noChange',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPCOUNT => array(
            'name' => 'groupCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPLIST => array(
            'name' => 'groupList',
            'repeated' => true,
            'type' => '\SnsGroup'
        ),
        self::ISNOTRICHTEXT => array(
            'name' => 'isNotRichText',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFERUSERNAME => array(
            'name' => 'referUsername',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REFERID => array(
            'name' => 'referId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLACKLISTCOUNT => array(
            'name' => 'blackListCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLACKLIST => array(
            'name' => 'blackList',
            'repeated' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::DELETEFLAG => array(
            'name' => 'deleteFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPUSERCOUNT => array(
            'name' => 'groupUserCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPUSER => array(
            'name' => 'groupUser',
            'repeated' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::OBJECTOPERATIONS => array(
            'name' => 'objectOperations',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::SNSREDENVELOPS => array(
            'name' => 'snsRedEnvelops',
            'required' => true,
            'type' => '\SnsRedEnvelops'
        ),
        self::PREDOWNLOADINFO => array(
            'name' => 'preDownloadInfo',
            'required' => true,
            'type' => '\PreDownloadInfo'
        ),
        self::WEAPPINFO => array(
            'name' => 'weAppInfo',
            'required' => true,
            'type' => '\SnsWeAppInfo'
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
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::OBJECTDESC] = null;
        $this->values[self::LIKEFLAG] = null;
        $this->values[self::LIKECOUNT] = null;
        $this->values[self::LIKEUSERLISTNUM] = null;
        $this->values[self::LIKEUSERLIST] = array();
        $this->values[self::COMMENTCOUNT] = null;
        $this->values[self::COMMENTUSERLISTCOUNT] = null;
        $this->values[self::COMMENTUSERLIST] = array();
        $this->values[self::WITHUSERCOUNT] = null;
        $this->values[self::WITHUSERLISTNUM] = null;
        $this->values[self::WITHUSERLIST] = array();
        $this->values[self::EXTFLAG] = null;
        $this->values[self::NOCHANGE] = null;
        $this->values[self::GROUPCOUNT] = null;
        $this->values[self::GROUPLIST] = array();
        $this->values[self::ISNOTRICHTEXT] = null;
        $this->values[self::REFERUSERNAME] = null;
        $this->values[self::REFERID] = null;
        $this->values[self::BLACKLISTCOUNT] = null;
        $this->values[self::BLACKLIST] = array();
        $this->values[self::DELETEFLAG] = null;
        $this->values[self::GROUPUSERCOUNT] = null;
        $this->values[self::GROUPUSER] = array();
        $this->values[self::OBJECTOPERATIONS] = null;
        $this->values[self::SNSREDENVELOPS] = null;
        $this->values[self::PREDOWNLOADINFO] = null;
        $this->values[self::WEAPPINFO] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'nickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickname($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickname' property
     *
     * @return string
     */
    public function getNickname()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickname()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
    }

    /**
     * Sets value of 'objectDesc' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setObjectDesc(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::OBJECTDESC, $value);
    }

    /**
     * Returns value of 'objectDesc' property
     *
     * @return \SKBuiltinString_S
     */
    public function getObjectDesc()
    {
        return $this->get(self::OBJECTDESC);
    }

    /**
     * Returns true if 'objectDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectDesc()
    {
        return $this->get(self::OBJECTDESC) !== null;
    }

    /**
     * Sets value of 'likeFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLikeFlag($value)
    {
        return $this->set(self::LIKEFLAG, $value);
    }

    /**
     * Returns value of 'likeFlag' property
     *
     * @return integer
     */
    public function getLikeFlag()
    {
        $value = $this->get(self::LIKEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'likeFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikeFlag()
    {
        return $this->get(self::LIKEFLAG) !== null;
    }

    /**
     * Sets value of 'likeCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLikeCount($value)
    {
        return $this->set(self::LIKECOUNT, $value);
    }

    /**
     * Returns value of 'likeCount' property
     *
     * @return integer
     */
    public function getLikeCount()
    {
        $value = $this->get(self::LIKECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'likeCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikeCount()
    {
        return $this->get(self::LIKECOUNT) !== null;
    }

    /**
     * Sets value of 'likeUserListNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLikeUserListNum($value)
    {
        return $this->set(self::LIKEUSERLISTNUM, $value);
    }

    /**
     * Returns value of 'likeUserListNum' property
     *
     * @return integer
     */
    public function getLikeUserListNum()
    {
        $value = $this->get(self::LIKEUSERLISTNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'likeUserListNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikeUserListNum()
    {
        return $this->get(self::LIKEUSERLISTNUM) !== null;
    }

    /**
     * Appends value to 'likeUserList' list
     *
     * @param \SnsCommentInfo $value Value to append
     *
     * @return null
     */
    public function appendLikeUserList(\SnsCommentInfo $value)
    {
        return $this->append(self::LIKEUSERLIST, $value);
    }

    /**
     * Clears 'likeUserList' list
     *
     * @return null
     */
    public function clearLikeUserList()
    {
        return $this->clear(self::LIKEUSERLIST);
    }

    /**
     * Returns 'likeUserList' list
     *
     * @return \SnsCommentInfo[]
     */
    public function getLikeUserList()
    {
        return $this->get(self::LIKEUSERLIST);
    }

    /**
     * Returns true if 'likeUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLikeUserList()
    {
        return count($this->get(self::LIKEUSERLIST)) !== 0;
    }

    /**
     * Returns 'likeUserList' iterator
     *
     * @return \ArrayIterator
     */
    public function getLikeUserListIterator()
    {
        return new \ArrayIterator($this->get(self::LIKEUSERLIST));
    }

    /**
     * Returns element from 'likeUserList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsCommentInfo
     */
    public function getLikeUserListAt($offset)
    {
        return $this->get(self::LIKEUSERLIST, $offset);
    }

    /**
     * Returns count of 'likeUserList' list
     *
     * @return int
     */
    public function getLikeUserListCount()
    {
        return $this->count(self::LIKEUSERLIST);
    }

    /**
     * Sets value of 'commentCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentCount($value)
    {
        return $this->set(self::COMMENTCOUNT, $value);
    }

    /**
     * Returns value of 'commentCount' property
     *
     * @return integer
     */
    public function getCommentCount()
    {
        $value = $this->get(self::COMMENTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commentCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentCount()
    {
        return $this->get(self::COMMENTCOUNT) !== null;
    }

    /**
     * Sets value of 'commentUserListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCommentUserListCount($value)
    {
        return $this->set(self::COMMENTUSERLISTCOUNT, $value);
    }

    /**
     * Returns value of 'commentUserListCount' property
     *
     * @return integer
     */
    public function getCommentUserListCount()
    {
        $value = $this->get(self::COMMENTUSERLISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'commentUserListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentUserListCount()
    {
        return $this->get(self::COMMENTUSERLISTCOUNT) !== null;
    }

    /**
     * Appends value to 'commentUserList' list
     *
     * @param \SnsCommentInfo $value Value to append
     *
     * @return null
     */
    public function appendCommentUserList(\SnsCommentInfo $value)
    {
        return $this->append(self::COMMENTUSERLIST, $value);
    }

    /**
     * Clears 'commentUserList' list
     *
     * @return null
     */
    public function clearCommentUserList()
    {
        return $this->clear(self::COMMENTUSERLIST);
    }

    /**
     * Returns 'commentUserList' list
     *
     * @return \SnsCommentInfo[]
     */
    public function getCommentUserList()
    {
        return $this->get(self::COMMENTUSERLIST);
    }

    /**
     * Returns true if 'commentUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentUserList()
    {
        return count($this->get(self::COMMENTUSERLIST)) !== 0;
    }

    /**
     * Returns 'commentUserList' iterator
     *
     * @return \ArrayIterator
     */
    public function getCommentUserListIterator()
    {
        return new \ArrayIterator($this->get(self::COMMENTUSERLIST));
    }

    /**
     * Returns element from 'commentUserList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsCommentInfo
     */
    public function getCommentUserListAt($offset)
    {
        return $this->get(self::COMMENTUSERLIST, $offset);
    }

    /**
     * Sets value of 'withUserCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWithUserCount($value)
    {
        return $this->set(self::WITHUSERCOUNT, $value);
    }

    /**
     * Returns value of 'withUserCount' property
     *
     * @return integer
     */
    public function getWithUserCount()
    {
        $value = $this->get(self::WITHUSERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'withUserCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWithUserCount()
    {
        return $this->get(self::WITHUSERCOUNT) !== null;
    }

    /**
     * Sets value of 'withUserListNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWithUserListNum($value)
    {
        return $this->set(self::WITHUSERLISTNUM, $value);
    }

    /**
     * Returns value of 'withUserListNum' property
     *
     * @return integer
     */
    public function getWithUserListNum()
    {
        $value = $this->get(self::WITHUSERLISTNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'withUserListNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWithUserListNum()
    {
        return $this->get(self::WITHUSERLISTNUM) !== null;
    }

    /**
     * Appends value to 'withUserList' list
     *
     * @param \SnsCommentInfo $value Value to append
     *
     * @return null
     */
    public function appendWithUserList(\SnsCommentInfo $value)
    {
        return $this->append(self::WITHUSERLIST, $value);
    }

    /**
     * Clears 'withUserList' list
     *
     * @return null
     */
    public function clearWithUserList()
    {
        return $this->clear(self::WITHUSERLIST);
    }

    /**
     * Returns 'withUserList' list
     *
     * @return \SnsCommentInfo[]
     */
    public function getWithUserList()
    {
        return $this->get(self::WITHUSERLIST);
    }

    /**
     * Returns true if 'withUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWithUserList()
    {
        return count($this->get(self::WITHUSERLIST)) !== 0;
    }

    /**
     * Returns 'withUserList' iterator
     *
     * @return \ArrayIterator
     */
    public function getWithUserListIterator()
    {
        return new \ArrayIterator($this->get(self::WITHUSERLIST));
    }

    /**
     * Returns element from 'withUserList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsCommentInfo
     */
    public function getWithUserListAt($offset)
    {
        return $this->get(self::WITHUSERLIST, $offset);
    }

    /**
     * Returns count of 'withUserList' list
     *
     * @return int
     */
    public function getWithUserListCount()
    {
        return $this->count(self::WITHUSERLIST);
    }

    /**
     * Sets value of 'extFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtFlag($value)
    {
        return $this->set(self::EXTFLAG, $value);
    }

    /**
     * Returns value of 'extFlag' property
     *
     * @return integer
     */
    public function getExtFlag()
    {
        $value = $this->get(self::EXTFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtFlag()
    {
        return $this->get(self::EXTFLAG) !== null;
    }

    /**
     * Sets value of 'noChange' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNoChange($value)
    {
        return $this->set(self::NOCHANGE, $value);
    }

    /**
     * Returns value of 'noChange' property
     *
     * @return integer
     */
    public function getNoChange()
    {
        $value = $this->get(self::NOCHANGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'noChange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNoChange()
    {
        return $this->get(self::NOCHANGE) !== null;
    }

    /**
     * Sets value of 'groupCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupCount($value)
    {
        return $this->set(self::GROUPCOUNT, $value);
    }

    /**
     * Returns value of 'groupCount' property
     *
     * @return integer
     */
    public function getGroupCount()
    {
        $value = $this->get(self::GROUPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupCount()
    {
        return $this->get(self::GROUPCOUNT) !== null;
    }

    /**
     * Appends value to 'groupList' list
     *
     * @param \SnsGroup $value Value to append
     *
     * @return null
     */
    public function appendGroupList(\SnsGroup $value)
    {
        return $this->append(self::GROUPLIST, $value);
    }

    /**
     * Clears 'groupList' list
     *
     * @return null
     */
    public function clearGroupList()
    {
        return $this->clear(self::GROUPLIST);
    }

    /**
     * Returns 'groupList' list
     *
     * @return \SnsGroup[]
     */
    public function getGroupList()
    {
        return $this->get(self::GROUPLIST);
    }

    /**
     * Returns true if 'groupList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupList()
    {
        return count($this->get(self::GROUPLIST)) !== 0;
    }

    /**
     * Returns 'groupList' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupListIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPLIST));
    }

    /**
     * Returns element from 'groupList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsGroup
     */
    public function getGroupListAt($offset)
    {
        return $this->get(self::GROUPLIST, $offset);
    }

    /**
     * Returns count of 'groupList' list
     *
     * @return int
     */
    public function getGroupListCount()
    {
        return $this->count(self::GROUPLIST);
    }

    /**
     * Sets value of 'isNotRichText' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsNotRichText($value)
    {
        return $this->set(self::ISNOTRICHTEXT, $value);
    }

    /**
     * Returns value of 'isNotRichText' property
     *
     * @return integer
     */
    public function getIsNotRichText()
    {
        $value = $this->get(self::ISNOTRICHTEXT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'isNotRichText' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsNotRichText()
    {
        return $this->get(self::ISNOTRICHTEXT) !== null;
    }

    /**
     * Sets value of 'referUsername' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReferUsername($value)
    {
        return $this->set(self::REFERUSERNAME, $value);
    }

    /**
     * Returns value of 'referUsername' property
     *
     * @return string
     */
    public function getReferUsername()
    {
        $value = $this->get(self::REFERUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'referUsername' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferUsername()
    {
        return $this->get(self::REFERUSERNAME) !== null;
    }

    /**
     * Sets value of 'referId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReferId($value)
    {
        return $this->set(self::REFERID, $value);
    }

    /**
     * Returns value of 'referId' property
     *
     * @return integer
     */
    public function getReferId()
    {
        $value = $this->get(self::REFERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'referId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferId()
    {
        return $this->get(self::REFERID) !== null;
    }

    /**
     * Sets value of 'blackListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBlackListCount($value)
    {
        return $this->set(self::BLACKLISTCOUNT, $value);
    }

    /**
     * Returns value of 'blackListCount' property
     *
     * @return integer
     */
    public function getBlackListCount()
    {
        $value = $this->get(self::BLACKLISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'blackListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlackListCount()
    {
        return $this->get(self::BLACKLISTCOUNT) !== null;
    }

    /**
     * Appends value to 'blackList' list
     *
     * @param \SKBuiltinString_ $value Value to append
     *
     * @return null
     */
    public function appendBlackList(\SKBuiltinString_ $value)
    {
        return $this->append(self::BLACKLIST, $value);
    }

    /**
     * Clears 'blackList' list
     *
     * @return null
     */
    public function clearBlackList()
    {
        return $this->clear(self::BLACKLIST);
    }

    /**
     * Returns 'blackList' list
     *
     * @return \SKBuiltinString_[]
     */
    public function getBlackList()
    {
        return $this->get(self::BLACKLIST);
    }

    /**
     * Returns true if 'blackList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlackList()
    {
        return count($this->get(self::BLACKLIST)) !== 0;
    }

    /**
     * Returns 'blackList' iterator
     *
     * @return \ArrayIterator
     */
    public function getBlackListIterator()
    {
        return new \ArrayIterator($this->get(self::BLACKLIST));
    }

    /**
     * Returns element from 'blackList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString_
     */
    public function getBlackListAt($offset)
    {
        return $this->get(self::BLACKLIST, $offset);
    }

    /**
     * Sets value of 'deleteFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteFlag($value)
    {
        return $this->set(self::DELETEFLAG, $value);
    }

    /**
     * Returns value of 'deleteFlag' property
     *
     * @return integer
     */
    public function getDeleteFlag()
    {
        $value = $this->get(self::DELETEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deleteFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeleteFlag()
    {
        return $this->get(self::DELETEFLAG) !== null;
    }

    /**
     * Sets value of 'groupUserCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupUserCount($value)
    {
        return $this->set(self::GROUPUSERCOUNT, $value);
    }

    /**
     * Returns value of 'groupUserCount' property
     *
     * @return integer
     */
    public function getGroupUserCount()
    {
        $value = $this->get(self::GROUPUSERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupUserCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupUserCount()
    {
        return $this->get(self::GROUPUSERCOUNT) !== null;
    }

    /**
     * Appends value to 'groupUser' list
     *
     * @param \SKBuiltinString_ $value Value to append
     *
     * @return null
     */
    public function appendGroupUser(\SKBuiltinString_ $value)
    {
        return $this->append(self::GROUPUSER, $value);
    }

    /**
     * Clears 'groupUser' list
     *
     * @return null
     */
    public function clearGroupUser()
    {
        return $this->clear(self::GROUPUSER);
    }

    /**
     * Returns 'groupUser' list
     *
     * @return \SKBuiltinString_[]
     */
    public function getGroupUser()
    {
        return $this->get(self::GROUPUSER);
    }

    /**
     * Returns true if 'groupUser' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupUser()
    {
        return count($this->get(self::GROUPUSER)) !== 0;
    }

    /**
     * Returns 'groupUser' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupUserIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPUSER));
    }

    /**
     * Returns element from 'groupUser' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString_
     */
    public function getGroupUserAt($offset)
    {
        return $this->get(self::GROUPUSER, $offset);
    }

    /**
     * Sets value of 'objectOperations' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setObjectOperations(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::OBJECTOPERATIONS, $value);
    }

    /**
     * Returns value of 'objectOperations' property
     *
     * @return \SKBuiltinString_
     */
    public function getObjectOperations()
    {
        return $this->get(self::OBJECTOPERATIONS);
    }

    /**
     * Returns true if 'objectOperations' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectOperations()
    {
        return $this->get(self::OBJECTOPERATIONS) !== null;
    }

    /**
     * Sets value of 'snsRedEnvelops' property
     *
     * @param \SnsRedEnvelops $value Property value
     *
     * @return null
     */
    public function setSnsRedEnvelops(\SnsRedEnvelops $value=null)
    {
        return $this->set(self::SNSREDENVELOPS, $value);
    }

    /**
     * Returns value of 'snsRedEnvelops' property
     *
     * @return \SnsRedEnvelops
     */
    public function getSnsRedEnvelops()
    {
        return $this->get(self::SNSREDENVELOPS);
    }

    /**
     * Returns true if 'snsRedEnvelops' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsRedEnvelops()
    {
        return $this->get(self::SNSREDENVELOPS) !== null;
    }

    /**
     * Sets value of 'preDownloadInfo' property
     *
     * @param \PreDownloadInfo $value Property value
     *
     * @return null
     */
    public function setPreDownloadInfo(\PreDownloadInfo $value=null)
    {
        return $this->set(self::PREDOWNLOADINFO, $value);
    }

    /**
     * Returns value of 'preDownloadInfo' property
     *
     * @return \PreDownloadInfo
     */
    public function getPreDownloadInfo()
    {
        return $this->get(self::PREDOWNLOADINFO);
    }

    /**
     * Returns true if 'preDownloadInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPreDownloadInfo()
    {
        return $this->get(self::PREDOWNLOADINFO) !== null;
    }

    /**
     * Sets value of 'weAppInfo' property
     *
     * @param \SnsWeAppInfo $value Property value
     *
     * @return null
     */
    public function setWeAppInfo(\SnsWeAppInfo $value=null)
    {
        return $this->set(self::WEAPPINFO, $value);
    }

    /**
     * Returns value of 'weAppInfo' property
     *
     * @return \SnsWeAppInfo
     */
    public function getWeAppInfo()
    {
        return $this->get(self::WEAPPINFO);
    }

    /**
     * Returns true if 'weAppInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeAppInfo()
    {
        return $this->get(self::WEAPPINFO) !== null;
    }
}
}