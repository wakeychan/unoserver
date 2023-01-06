<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings for unoserver.
 *
 * @package   fileconverter_unoserver
 * @copyright 2023 Wakey <wakey@inzsu.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// Unoserver setting.
$settings->add(new admin_setting_configexecutable('pathtounoserver',
        new lang_string('pathtounoserver', 'fileconverter_unoserver'),
        new lang_string('pathtounoserver_help', 'fileconverter_unoserver'),
        '/usr/bin/unoconvert')
    );

$url = new moodle_url('/files/converter/unoserver/testunoserver.php');
$link = html_writer::link($url, get_string('test_unoserver', 'fileconverter_unoserver'));
$settings->add(new admin_setting_heading('test_unoserver', '', $link));
