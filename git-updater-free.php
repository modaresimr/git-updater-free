<?php
/**
 * GitHub Updater
 *
 * @author  Ali Modaresi 
 * @license GPL-2.0+
 * @link    https://github.com/modaresimr/git-updater-free
 * @package git-updater-free
 */

/**
 * Plugin Name:       Git Updater Free
 * Plugin URI:        https://github.com/modaresimr/git-updater-free
 * Description:       A plugin to automatically update GitHub, Bitbucket, GitLab, or Gitea hosted plugins, themes, and language packs. It also allows for remote installation of plugins or themes into WordPress.
 * Version:           20.0.2
 * Author:            Ali Modaresi
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path:       /languages
 * Text Domain:       git-updater-free
 * Network:           true
 * GitHub Plugin URI: https://github.com/modaresimr/git-updater-free
 * Requires at least: 5.2
 * Requires PHP:      5.6
 */

namespace Fragen\GitHub_Updater;

/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load the Composer autoloader.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require __DIR__ . '/vendor/autoload.php';
}

// Check for composer autoloader.
if ( ! class_exists( 'Fragen\GitHub_Updater\Bootstrap' ) ) {
	require_once __DIR__ . '/src/GitHub_Updater/Bootstrap.php';
	( new Bootstrap( __FILE__ ) )->deactivate_die();
}

( new Bootstrap( __FILE__ ) )->run();
