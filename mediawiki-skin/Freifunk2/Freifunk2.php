<?php
/**
 * Freifunk2 skin
 *
 * @file
 * @ingroup Skins
 */

if( !defined( 'MEDIAWIKI' ) ){
	die( "This is a skins file for mediawiki and should not be viewed directly.\n" );
}

$wgValidSkinNames['freifunk2'] = 'Freifunk2';
$wgAutoloadClasses['SkinFreifunk2'] = __DIR__ . '/Freifunk2.skin.php';
$wgMessagesDirs['Freifunk2'] = __DIR__ . '/i18n';
