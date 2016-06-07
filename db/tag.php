<?php

/**
 * Tag area definitions
 *
 * File db/tag.php lists all available tag areas in core or a plugin.
 *
 * Each tag area may have the following attributes:
 *   - itemtype (required) - what is tagged. Must be name of the existing DB table
 *   - component - component responsible for tagging, if the tag area is inside a
 *     plugin the component must be the full frankenstyle name of the plugin
 *   - collection - name of the custom tag collection that will be used to store
 *     tags in this area. If specified aministrator will be able to neither add
 *     any other tag areas to this collection nor move this tag area elsewhere
 *   - searchable (only if collection is specified) - wether the tag collection
 *     should be searchable on /tag/search.php
 *   - showstandard - default value for the "Standard tags" attribute of the area,
 *     this is only respected when new tag area is added and ignored during upgrade
 *   - customurl (only if collection is specified) - custom url to use instead of
 *     /tag/search.php to display information about one tag
 *   - callback - name of the function that returns items tagged with this tag,
 *     see core_tag_tag::get_tag_index() and existing callbacks for more details,
 *     callback should return instance of core_tag\output\tagindex
 *   - callbackfile - file where callback is located (if not an autoloaded location)
 *
 * Language file must contain the human-readable names of the tag areas and
 * collections (either in plugin language file or in component language file or
 * lang/en/tag.php in case of core):
 * - for item type "user":
 *     $string['tagarea_user'] = 'Users';
 * - for tag collection "mycollection":
 *     $string['tagcollection_mycollection'] = 'My tag collection';
 *
 * @package   core
 * @copyright 2015 Marina Glancy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$tagareas = array(
    array(
        'component' => 'local_testtags',
        'itemtype' => 'course',

        // Test 1. Uncomment the following line, bump version and run upgrade script:
        //'collection' => 'testtagscollection',

        // Test 2. Comment line from test 1, uncomment the following, bump version and run upgrade script:
        //'callback' => 'local_testtags_process::tags',
    ),
);