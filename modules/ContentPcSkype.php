<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   PcSkype
 * @author    Christoph Erdmann <info@pluspunkt-coding.de>
 * @license   GNU/GPL
 * @copyright pluspunkt coding 2013
 */


class ContentPcSkype extends ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_pc_skype';

    /**
     * import Class 'Skype'
     */
    public function __construct($objElement, $strColumn = 'main') {
        parent::__construct($objElement, $strColumn);
        
        $this->import('PcSkype');
    }
    
    /**
     * generate the module
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			
			$objTemplate->wildcard = '### SKYPE BUTTON ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->pc_skype_action.': '.$this->pc_skype_participant;
			$objTemplate->href = 'contao/main.php?do=article&amp;table=tl_content&amp;act=edit&amp;id=' . $this->id;
            
			return $objTemplate->parse();
		}
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