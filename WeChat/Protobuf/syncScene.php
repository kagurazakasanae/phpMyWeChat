<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * syncScene enum
 */
final class syncScene
{
    const MM_NEWSYNC_SCENE_NOTIFY = 1;
    const MM_NEWSYNC_SCENE_TIMER = 2;
    const MM_NEWSYNC_SCENE_BG2FG = 3;
    const MM_NEWSYNC_SCENE_PROCESSSTART = 4;
    const MM_NEWSYNC_SCENE_AFTERINIT = 5;
    const MM_NEWSYNC_SCENE_CONTINUEFLAG = 6;
    const MM_NEWSYNC_SCENE_OTHER = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_NEWSYNC_SCENE_NOTIFY' => self::MM_NEWSYNC_SCENE_NOTIFY,
            'MM_NEWSYNC_SCENE_TIMER' => self::MM_NEWSYNC_SCENE_TIMER,
            'MM_NEWSYNC_SCENE_BG2FG' => self::MM_NEWSYNC_SCENE_BG2FG,
            'MM_NEWSYNC_SCENE_PROCESSSTART' => self::MM_NEWSYNC_SCENE_PROCESSSTART,
            'MM_NEWSYNC_SCENE_AFTERINIT' => self::MM_NEWSYNC_SCENE_AFTERINIT,
            'MM_NEWSYNC_SCENE_CONTINUEFLAG' => self::MM_NEWSYNC_SCENE_CONTINUEFLAG,
            'MM_NEWSYNC_SCENE_OTHER' => self::MM_NEWSYNC_SCENE_OTHER,
        );
    }
}
}