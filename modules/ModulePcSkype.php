<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   PcSkype
 * @author    Christoph Erdmann <info@pluspunkt-coding.de>
 * @license   CC BY-SA 3.0 DE
 * @copyright pluspunkt coding 2013
 */


class ModulePcSkype extends Module
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_pc_skype';

    /**
     * import class 'Skype'
     */
    public function __construct($objModule, $strColumn = 'main') {
        parent::__construct($objModule, $strColumn);
        
        $this->import('PcSkype');
    }


    /**
     * generate the module
     * @return string
     */
    public function generate()
    {
        return parent::generate();
    }

    /**
     * Generate the module
     */
    protected function compile()
    {
        $uniqueId = $this->PcSkype->createUniqueId();
        $this->Template->uniqueId = $uniqueId;
        
        $this->Template->js = 
'
<script type="text/javascript">
    <!--
		Skype.ui({
			"name":				"'.$this->pc_skype_action.'",
			"element":			"pc_skype_'.$uniqueId.'",
			"participants":		['.$this->PcSkype->prepareParticipants($this->pc_skype_participants).'],
			"listParticipants":	"'.(($this->pc_skype_listparticipants) ? 'true' : 'false').'",
            '.(($this->pc_skype_topic) ? '"topic": "'.$this->pc_skype_topic.'",' : '').'
            "listTopic":        "'.(($this->pc_skype_listtopic) ? 'true' : 'false').'",
            "video":            "'.(($this->pc_skype_video) ? 'true' : 'false').'",
			"imageSize":		'.$this->pc_skype_iconsize.',
			"imageColor":		"'.$this->pc_skype_iconcolor.'"
		});
	-->
</script>
';
    }
}