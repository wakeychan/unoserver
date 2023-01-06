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
 * Strings for plugin 'fileconverter_unoserver'
 *
 * @package   fileconverter_unoserver
 * @copyright 2023 Wakey <wakey@inzsu.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoserver'] = 'Path to unoserver document converter';
$string['pathtounoserver_help'] = 'Path to <a href="https://github.com/unoconv/unoserver">unoserver</a> document converter. This is an executable that is capable of converting between document formats supported by LibreOffice. This is optional, but if specified, Moodle will use it to automatically convert between document formats. This is used to support a wider range of input files for the assignment annotate PDF feature.';
$string['pluginname'] = 'Unoserver';
$string['privacy:metadata'] = 'The Unoserver document converter plugin does not store any personal data.';
$string['test_unoserver'] = 'Test unoserver path';
$string['test_unoserverdoesnotexist'] = 'The unoserver path does not point to the unoserver program. Please review your path settings.';
$string['test_unoserverdownload'] = 'Download the converted pdf test file.';
$string['test_unoserverempty'] = 'The unoserver path is not set. Please review your path settings.';
$string['test_unoserverisdir'] = 'The unoserver path points to a folder, please include the unoserver program in the path you specify';
$string['test_unoservernotestfile'] = 'The test document to be converted to PDF is missing.';
$string['test_unoservernotexecutable'] = 'The unoserver path points to a file that is not executable';
$string['test_unoserverok'] = 'The unoserver path appears to be properly configured.';
$string['test_unoserverversionnotsupported'] = 'The version of unoserver you have installed is not supported.';
