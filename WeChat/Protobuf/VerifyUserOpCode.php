<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * VerifyUserOpCode enum
 */
final class VerifyUserOpCode
{
    const MM_VERIFYUSER_ADDCONTACT = 1;
    const MM_VERIFYUSER_SENDREQUEST = 2;
    const MM_VERIFYUSER_VERIFYOK = 3;
    const MM_VERIFYUSER_VERIFYREJECT = 4;
    const MM_VERIFYUSER_SENDERREPLY = 5;
    const MM_VERIFYUSER_RECVERREPLY = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_VERIFYUSER_ADDCONTACT' => self::MM_VERIFYUSER_ADDCONTACT,
            'MM_VERIFYUSER_SENDREQUEST' => self::MM_VERIFYUSER_SENDREQUEST,
            'MM_VERIFYUSER_VERIFYOK' => self::MM_VERIFYUSER_VERIFYOK,
            'MM_VERIFYUSER_VERIFYREJECT' => self::MM_VERIFYUSER_VERIFYREJECT,
            'MM_VERIFYUSER_SENDERREPLY' => self::MM_VERIFYUSER_SENDERREPLY,
            'MM_VERIFYUSER_RECVERREPLY' => self::MM_VERIFYUSER_RECVERREPLY,
        );
    }
}
}