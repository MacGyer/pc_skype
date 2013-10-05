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


/**
 * Modules
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype'][0] = 'Skype';
$GLOBALS['TL_LANG']['tl_module']['pc_skype'][1] = 'Integrate a Skype button';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participant_legend'] = 'Participants';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_options_legend'] = 'Options';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_appearance_legend'] = 'Appearance';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participants'][0] = 'Participants';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participants'][1] = 'Fill in the Skype names or phone numbers of the contacts you wish to contact. Multiple contacts can be provided as a comma-separated list (name1,name2,...)';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listparticipants'][0] = 'List participants';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listparticipants'][1] = 'Activate to show the list of participants next to the Skype button.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action'][0] = 'Button function';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action'][1] = 'Select the function of the Skype button';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_topic'][0] = 'Conference topic';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_topic'][1] = 'Fill in the conference topic.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listtopic'][0] = 'Show conference topic';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listtopic'][1] = 'Activate to show the conference topic next to the Skype button.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_video'][0] = 'Video';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_video'][1] = 'Activate to start a video call.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize'][0] = 'Icon size';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize'][1] = 'Select the size of the icon.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor'][0] = 'Icon color';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor'][1] = 'Select the color of the icon.';

/**
 * Options
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action_options'] = array(
    'call' => 'Start call',
    'chat' => 'Start chat',
    'dropdown' => 'Select action'
);
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize_options'] = array(
    10,
    12,
    14,
    16,
    24,
    32
);
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor_options'] = array(
    'white' => 'white',
    'skype' => 'blue'
);