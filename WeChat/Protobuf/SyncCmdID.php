<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SyncCmdID enum
 */
final class SyncCmdID
{
    const CmdInvalid = 0;
    const CmdIdModUserInfo = 1;
    const CmdIdModContact = 2;
    const CmdIdDelContact = 4;
    const CmdIdAddMsg = 5;
    const CmdIdModMsgStatus = 6;
    const CmdIdDelChatContact = 7;
    const CmdIdDelContactMsg = 8;
    const CmdIdDelMsg = 9;
    const CmdIdReport = 10;
    const CmdIdOpenQQMicroBlog = 11;
    const CmdIdCloseMicroBlog = 12;
    const CmdIdModMicroBlog = 13;
    const CmdIdModNotifyStatus = 14;
    const CmdIdModChatRoomMember = 15;
    const CmdIdQuitChatRoom = 16;
    const CmdIdModContactDomainEmail = 17;
    const CmdIdModUserDomainEmail = 18;
    const CmdIdDelUserDomainEmail = 19;
    const CmdIdModChatRoomNotify = 20;
    const CmdIdPossibleFriend = 21;
    const CmdIdInviteFriendOpen = 22;
    const CmdIdFunctionSwitch = 23;
    const CmdIdModQContact = 24;
    const CmdIdModTContact = 25;
    const CmdIdPsmStat = 26;
    const CmdIdModChatRoomTopic = 27;
    const MM_SYNCCMD_UPDATESTAT = 30;
    const MM_SYNCCMD_MODDISTURBSETTING = 31;
    const MM_SYNCCMD_DELETEBOTTLE = 32;
    const MM_SYNCCMD_MODBOTTLECONTACT = 33;
    const MM_SYNCCMD_DELBOTTLECONTACT = 34;
    const MM_SYNCCMD_MODUSERIMG = 35;
    const MM_SYNCCMD_KVSTAT = 36;
    const NN_SYNCCMD_THEMESTAT = 37;
    const MM_SYNCCMD_USERINFOEXT = 44;
    const MM_SNS_SYNCCMD_OBJECT = 45;
    const MM_SNS_SYNCCMD_ACTION = 46;
    const MM_SYNCCMD_BRAND_SETTING = 47;
    const MM_SYNCCMD_MODCHATROOMMEMBERDISPLAYNAME = 48;
    const MM_SYNCCMD_MODCHATROOMMEMBERFLAG = 49;
    const MM_SYNCCMD_WEBWXFUNCTIONSWITCH = 50;
    const MM_SYNCCMD_MODSNSUSERINFO = 51;
    const MM_SYNCCMD_MODSNSBLACKLIST = 52;
    const MM_SYNCCMD_NEWDELMSG = 53;
    const MM_SYNCCMD_MODDESCRIPTION = 54;
    const MM_SYNCCMD_KVCMD = 55;
    const MM_SYNCCMD_DELETE_SNS_OLDGROUP = 56;
    const MM_FAV_SYNCCMD_ADDITEM = 200;
    const MM_GAME_SYNCCMD_ADDMSG = 201;
    const CmdIdMax = 201;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'CmdInvalid' => self::CmdInvalid,
            'CmdIdModUserInfo' => self::CmdIdModUserInfo,
            'CmdIdModContact' => self::CmdIdModContact,
            'CmdIdDelContact' => self::CmdIdDelContact,
            'CmdIdAddMsg' => self::CmdIdAddMsg,
            'CmdIdModMsgStatus' => self::CmdIdModMsgStatus,
            'CmdIdDelChatContact' => self::CmdIdDelChatContact,
            'CmdIdDelContactMsg' => self::CmdIdDelContactMsg,
            'CmdIdDelMsg' => self::CmdIdDelMsg,
            'CmdIdReport' => self::CmdIdReport,
            'CmdIdOpenQQMicroBlog' => self::CmdIdOpenQQMicroBlog,
            'CmdIdCloseMicroBlog' => self::CmdIdCloseMicroBlog,
            'CmdIdModMicroBlog' => self::CmdIdModMicroBlog,
            'CmdIdModNotifyStatus' => self::CmdIdModNotifyStatus,
            'CmdIdModChatRoomMember' => self::CmdIdModChatRoomMember,
            'CmdIdQuitChatRoom' => self::CmdIdQuitChatRoom,
            'CmdIdModContactDomainEmail' => self::CmdIdModContactDomainEmail,
            'CmdIdModUserDomainEmail' => self::CmdIdModUserDomainEmail,
            'CmdIdDelUserDomainEmail' => self::CmdIdDelUserDomainEmail,
            'CmdIdModChatRoomNotify' => self::CmdIdModChatRoomNotify,
            'CmdIdPossibleFriend' => self::CmdIdPossibleFriend,
            'CmdIdInviteFriendOpen' => self::CmdIdInviteFriendOpen,
            'CmdIdFunctionSwitch' => self::CmdIdFunctionSwitch,
            'CmdIdModQContact' => self::CmdIdModQContact,
            'CmdIdModTContact' => self::CmdIdModTContact,
            'CmdIdPsmStat' => self::CmdIdPsmStat,
            'CmdIdModChatRoomTopic' => self::CmdIdModChatRoomTopic,
            'MM_SYNCCMD_UPDATESTAT' => self::MM_SYNCCMD_UPDATESTAT,
            'MM_SYNCCMD_MODDISTURBSETTING' => self::MM_SYNCCMD_MODDISTURBSETTING,
            'MM_SYNCCMD_DELETEBOTTLE' => self::MM_SYNCCMD_DELETEBOTTLE,
            'MM_SYNCCMD_MODBOTTLECONTACT' => self::MM_SYNCCMD_MODBOTTLECONTACT,
            'MM_SYNCCMD_DELBOTTLECONTACT' => self::MM_SYNCCMD_DELBOTTLECONTACT,
            'MM_SYNCCMD_MODUSERIMG' => self::MM_SYNCCMD_MODUSERIMG,
            'MM_SYNCCMD_KVSTAT' => self::MM_SYNCCMD_KVSTAT,
            'NN_SYNCCMD_THEMESTAT' => self::NN_SYNCCMD_THEMESTAT,
            'MM_SYNCCMD_USERINFOEXT' => self::MM_SYNCCMD_USERINFOEXT,
            'MM_SNS_SYNCCMD_OBJECT' => self::MM_SNS_SYNCCMD_OBJECT,
            'MM_SNS_SYNCCMD_ACTION' => self::MM_SNS_SYNCCMD_ACTION,
            'MM_SYNCCMD_BRAND_SETTING' => self::MM_SYNCCMD_BRAND_SETTING,
            'MM_SYNCCMD_MODCHATROOMMEMBERDISPLAYNAME' => self::MM_SYNCCMD_MODCHATROOMMEMBERDISPLAYNAME,
            'MM_SYNCCMD_MODCHATROOMMEMBERFLAG' => self::MM_SYNCCMD_MODCHATROOMMEMBERFLAG,
            'MM_SYNCCMD_WEBWXFUNCTIONSWITCH' => self::MM_SYNCCMD_WEBWXFUNCTIONSWITCH,
            'MM_SYNCCMD_MODSNSUSERINFO' => self::MM_SYNCCMD_MODSNSUSERINFO,
            'MM_SYNCCMD_MODSNSBLACKLIST' => self::MM_SYNCCMD_MODSNSBLACKLIST,
            'MM_SYNCCMD_NEWDELMSG' => self::MM_SYNCCMD_NEWDELMSG,
            'MM_SYNCCMD_MODDESCRIPTION' => self::MM_SYNCCMD_MODDESCRIPTION,
            'MM_SYNCCMD_KVCMD' => self::MM_SYNCCMD_KVCMD,
            'MM_SYNCCMD_DELETE_SNS_OLDGROUP' => self::MM_SYNCCMD_DELETE_SNS_OLDGROUP,
            'MM_FAV_SYNCCMD_ADDITEM' => self::MM_FAV_SYNCCMD_ADDITEM,
            'MM_GAME_SYNCCMD_ADDMSG' => self::MM_GAME_SYNCCMD_ADDMSG,
            'CmdIdMax' => self::CmdIdMax,
        );
    }
}
}