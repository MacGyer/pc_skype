<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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

/**
 * Table tl_module
 */

// Palettes
$GLOBALS['TL_DCA']['tl_module']['palettes']['pc_skype'] = '{title_legend},name,headline,type;{pc_skype_participant_legend},pc_skype_participants,pc_skype_listparticipants;{pc_skype_options_legend},pc_skype_action,pc_skype_topic,pc_skype_video,pc_skype_listtopic;{pc_skype_appearance_legend},pc_skype_iconsize,pc_skype_iconcolor;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

// Fields
$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_participants'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_participants'],
    'inputType' => 'text',
    'eval' => array(
        'mandatory' => true,
        'maxlength' => 400,
        'rgxp' => 'extnd'
    ),
    'sql' => "varchar(400) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_listparticipants'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_listparticipants'],
    'inputType' => 'checkbox',
    'sql' => "char(1) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_action'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_action'],
    'inputType' => 'select',
    'eval' => array(
        'mandatory' => true,
        'chosen' => false,
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'options' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_action_options'],
    'sql' => "varchar(8) NOT NULL default 'call'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_topic'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_topic'],
    'inputType' => 'text',
    'eval' => array(
        'tl_class' => 'w50',
        'maxlength' => 300
    ),
    'sql' => "varchar(300) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_video'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_video'],
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50 clr',
        
    ),
    'sql' => "char(1) NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_listtopic'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_listtopic'],
    'inputType' => 'checkbox',
    'eval' => array(
        'tl_class' => 'w50',
        
    ),
    'sql' => "char(1) NOT NULL default '0'"
);



$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_iconsize'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize'],
    'inputType' => 'select',
    'eval' => array(
        'chosen' => false,
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'options' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize_options'],
    'sql' => "int(10) NOT NULL default '16'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pc_skype_iconcolor'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor'],
    'inputType' => 'select',
    'eval' => array(
        'chosen' => false,
        'includeBlankOption' => true,
        'tl_class' => 'w50'
    ),
    'options' => &$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor_options'],
    'sql' => "varchar(5) NOT NULL default 'skype'"
);
?>