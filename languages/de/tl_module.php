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
$GLOBALS['TL_LANG']['tl_module']['pc_skype'][1] = 'Integrieren Sie einen Skype-Button.';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participant_legend'] = 'Teilnehmer';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_options_legend'] = 'Optionen';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_appearance_legend'] = 'Darstellung';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participants'][0] = 'Teilnehmer';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_participants'][1] = 'Tragen Sie die Skype-Namen oder Telefonnummern der Teilnehmer ein, die kontaktiert werden sollen. Mehrere Teilnehmer können als komma-separierte Liste eingetragen werden (name1,name2,...)';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listparticipants'][0] = 'Teilnehmer auflisten';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listparticipants'][1] = 'Aktivieren Sie die Auflistung der Teilnehmer neben dem Skype-Button.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action'][0] = 'Button-Funktion';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action'][1] = 'Wählen Sie aus, welche Funktion der Skype-Button haben soll.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_topic'][0] = 'Konferenz-Thema';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_topic'][1] = 'Geben Sie hier das Konferenz-Thema ein.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listtopic'][0] = 'Konferenz-Thema anzeigen';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_listtopic'][1] = 'Aktivieren Sie die Anzeige des Konferenz-Themas neben dem Skype-Button.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_video'][0] = 'Video';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_video'][1] = 'Aktivieren Sie diese Option, um einen Video-Anruf zu starten.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize'][0] = 'Icon-Größe';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconsize'][1] = 'Wählen Sie aus, welche Größe das Icon haben soll.';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor'][0] = 'Icon-Farbe';
$GLOBALS['TL_LANG']['tl_module']['pc_skype_iconcolor'][1] = 'Wählen Sie aus, welche Farbe das Icon haben soll.';

/**
 * Options
 */
$GLOBALS['TL_LANG']['tl_module']['pc_skype_action_options'] = array(
    'call' => 'Anruf starten',
    'chat' => 'Chat starten',
    'dropdown' => 'Aktion auswählen'
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
    'white' => 'weiß',
    'skype' => 'blau'
);