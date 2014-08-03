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

class PcSkype
{
    /**
     * Create a unique string for multiple Skype buttons on website
     * 
     * @return string
     */    
    public function createUniqueId()
    {
        $strUID = substr(sha1(uniqid()), 9, 15);
		return $strUID;
    }
    
    /**
     * Prepare the participants string as needed by Skype API
     * 
     * @param string $_strParticipants
     * @return string
     */
    public function prepareParticipants($_strParticipants)
    {
        $strParticipants = '';
        $arrParticipants = array();
        
        $_arrParticipants = explode(',', $_strParticipants);
        
        foreach($_arrParticipants as &$p)
        {
            $cleansed = $this->sanitizeParticipant($p);
            if(!empty($cleansed))
            {
                $arrParticipants[] = $cleansed;
            }
        }
        
        $strParticipants = implode(',', $arrParticipants);
        return $strParticipants;
    }
    
    /**
     * Clean given participants names from User input, remove empty names and unnecessary whitespaces
     * 
     * @param string $strDirty
     * @return boolean|string
     */
    private function sanitizeParticipant($strDirty)
    {
        $strParticipant = '';
        
        if(empty($strDirty))
        {
            return false;
        }
        
        $strClean = trim($strDirty);
        if(!empty($strClean))
        {
            $strParticipant = '"'.$strClean.'"';
        }
        return $strParticipant;
    }
    
    /**
     * generates inserttags 'pc_skype_call', 'pc_skype_chat' and 'pc_skype_dropdown', second parameter is the contact name
     * 
     * @param str $strTag
     * @return string|boolean
     */
    public function generateInserttag($strTag)
    {
        $arrSplit = explode('::', $strTag);
		
        if ($arrSplit[0] == 'pc_skype_call')
        {
            return $this->generateInserttagOutput('call', $arrSplit[1]);
        }
        elseif($arrSplit[0] == 'pc_skype_chat')
        {
            return $this->generateInserttagOutput('chat', $arrSplit[1]);
        }
        elseif($arrSplit[0] == 'pc_skype_dropdown')
        {
            return $this->generateInserttagOutput('dropdown', $arrSplit[1]);
        }
        return false;
    }
    
    /**
     * generates the output of the javascript and parent element
     * 
     * @param string $strAction
     * @param string $strParticipant
     * @return boolean|string
     */
    private function generateInserttagOutput($strAction = '', $strParticipant = '')
    {
        if(empty($strAction) or empty($strParticipant))
        {
            return false;
        }
        
        $strUniqueId = $this->createUniqueId();
        $strOutput = 
'
<div id="pc_skype_SkypeButton_'.$strUniqueId.'">
<script type="text/javascript">
    <!--
		Skype.ui({
			"name":				"'.$strAction.'",
			"element":			"pc_skype_SkypeButton_'.$strUniqueId.'",
			"participants":		["'.$strParticipant.'"],
		});
	-->
</script>
</div>
';
        return $strOutput;
    }
}