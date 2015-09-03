<?php
abstract class BaseHook {
    const PH_ID = "id";
    const PH_REVISIONID = "revisionID";
    const PH_BRANCH = "branch";

    protected $console;

    public function __construct() {
        $this->console = PhutilConsole::getConsole();
    }

    public abstract function doHook(ArcanistWorkflow $workflow);

    protected function writeOut($str) {
        $this->console->writeOut(pht(
            "%s: %s\n", $this->getOutPrefix(), $str));
    }

    protected function writeErr($str) {
        $this->console->writeOut(pht(
            "%s: !!! %s\n", $this->getOutPrefix(), $str));
    }

    protected abstract function getOutPrefix();

}
?>
