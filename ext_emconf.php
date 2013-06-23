<?php

/*********************************************************************
* Extension configuration file for ext "flux_galleria".
*
* Generated by ext 23-06-2013 09:26 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Galleria extension for images, videos, picasa and flickr',
  'description' => 'Galleria extension with powerful image and video setup. Requires \'flux\' and works only on TYPO3 6.x version. This extension is the successor of \'dmf_galleria\'.',
  'category' => 'plugin',
  'author' => 'Dominic Garms',
  'author_email' => 'djgarms@gmail.com',
  'author_company' => 'DMFMedia GmbH',
  'shy' => '',
  'priority' => '',
  'module' => '',
  'state' => 'beta',
  'internal' => '',
  'uploadfolder' => '0',
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'version' => '1.1.5',
  'constraints' => 
  array (
    'depends' => 
    array (
      'extbase' => '6.0',
      'fluid' => '6.0',
      'typo3' => '6.0',
      'flux' => '6.0',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'comment' => 'bugfix for folder based file collection',
  'user' => 'dohomi',
);

?>