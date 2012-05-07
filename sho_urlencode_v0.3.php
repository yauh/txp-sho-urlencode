<?php

// This is a PLUGIN TEMPLATE.

// Copy this file to a new name like abc_myplugin.php.  Edit the code, then
// run this file at the command line to produce a plugin for distribution:
// $ php abc_myplugin.php > abc_myplugin-0.1.txt

// Plugin name is optional.  If unset, it will be extracted from the current
// file name. Plugin names should start with a three letter prefix which is
// unique and reserved for each plugin author ("abc" is just an example).
// Uncomment and edit this line to override:
$plugin['name'] = 'sho_urlencode';

// Allow raw HTML help, as opposed to Textile.
// 0 = Plugin help is in Textile format, no raw HTML allowed (default).
// 1 = Plugin help is in raw HTML.  Not recommended.
# $plugin['allow_html_help'] = 1;

$plugin['version'] = '0.3';
$plugin['author'] = 'Stephan Hochhaus';
$plugin['author_uri'] = 'http://yauh.de';
$plugin['description'] = 'Simple plugin to perform URL encoding that works with the Facebook Like button';

// Plugin load order:
// The default value of 5 would fit most plugins, while for instance comment
// spam evaluators or URL redirectors would probably want to run earlier
// (1...4) to prepare the environment for everything else that follows.
// Values 6...9 should be considered for plugins which would work late.
// This order is user-overrideable.
$plugin['order'] = '5';

// Plugin 'type' defines where the plugin is loaded
// 0 = public       : only on the public side of the website (default)
// 1 = public+admin : on both the public and admin side
// 2 = library      : only when include_plugin() or require_plugin() is called
// 3 = admin        : only on the admin side
$plugin['type'] = '0';

// Plugin "flags" signal the presence of optional capabilities to the core plugin loader.
// Use an appropriately OR-ed combination of these flags.
// The four high-order bits 0xf000 are available for this plugin's private use
if (!defined('PLUGIN_HAS_PREFS')) define('PLUGIN_HAS_PREFS', 0x0001); // This plugin wants to receive "plugin_prefs.{$plugin['name']}" events
if (!defined('PLUGIN_LIFECYCLE_NOTIFY')) define('PLUGIN_LIFECYCLE_NOTIFY', 0x0002); // This plugin wants to receive "plugin_lifecycle.{$plugin['name']}" events

$plugin['flags'] = '0';

if (!defined('txpinterface'))
        @include_once('zem_tpl.php');

# --- BEGIN PLUGIN CODE ---
function sho_urlencode ($atts, $thing) {
	return trim(urlencode(parse($thing)));
}

function sho_urldecode ($atts, $thing) {
	return trim(urldecode(parse($thing)));
}

function sho_rawurlencode ($atts, $thing) {
	return trim(rawurlencode(parse($thing)));
}

function sho_rawurldecode ($atts, $thing) {
	return trim(rawurldecode(parse($thing)));
}
# --- END PLUGIN CODE ---
if (0) {
?>
<!--
# --- BEGIN PLUGIN HELP ---
<h4>Performs the php functions for URL en- and decoding on its input</h4>

    <p>Usage:</p>

    <p>Surround a URL, either in a form or in a page template, with <code>&lt;txp:sho_urlencode&gt;</code> and <code>&lt;/txp:sho_urlencode&gt;</code>.</p>

<p> Example</p>

<p><code>&lt;txp:sho_urlencode&gt;&lt;/txp:permlink /&gt;&lt;/txp:sho_urlencode&gt;</code></p>

<p>Reference</p>

<p>The following tags can be used when this plugin is enabled:</p>
<ul>
<li><code>&lt;txp:sho_urlencode&gt;</code></li>
<li><code>&lt;txp:sho_urldecode&gt;</code></li>
<li><code>&lt;txp:sho_rawurlencode&gt;</code></li>
<li><code>&lt;txp:sho_rawurldecode&gt;</code></li>
</ul>
# --- END PLUGIN HELP ---
-->
<?php
}
?>