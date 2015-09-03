<?php
/**
 * Static utility helpers
 */
class HookUtils {
    const PH_TITLE = "title";
    const PH_SUMMARY = "summary";
    const PH_TESTPLAN = "testPlan";

    // the first %s is the diff id
    const REMOTE_BRANCH_NAME_TEMPLATE = "ND_D%s";

    /**
     * Create the remote branch name in an consistent way
     */
    public static function createRemoteBranchName($revisionId, $topicBranch) {
        return pht(self::REMOTE_BRANCH_NAME_TEMPLATE, $revisionId);
    }

    /**
     * Safe way to get string value out of obj.
     */
    public static function getStringValueFromObj($field, $obj) {
        $ret = null;
        if (array_key_exists($field, $obj)) {
            $ret = $obj[$field];
        }
        return is_string($ret) ? $ret : null;
    }
}
?>
