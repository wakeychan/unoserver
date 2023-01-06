<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'fileconverter_unoserver', language 'zh_cn', version '3.11'.
 *
 * @package     fileconverter_unoserver
 * @category    string
 * @copyright   2023 Wakey <wakey@inzsu.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pathtounoserver'] = 'unoserver文件转换路径';
$string['pathtounoserver_help'] = '<a href="https://github.com/unoconv/unoserver">unoserver</a>文档转换器的路径。这是一个可执行文件，能够在LibreOffice支持的文档格式之间进行转换。这是可选的，但如果指定，Moodle将使用它在文档格式之间自动转换。这用于支持更大范围的输入文件，以用于分配注释PDF功能。';
$string['pluginname'] = 'Unoserver';
$string['privacy:metadata'] = 'Unoserver文档转换器插件不存储任何个人数据。';
$string['test_unoserver'] = '测试  unoserver 路径';
$string['test_unoserverdoesnotexist'] = '这 unoserver 路径没有指向 unoserver 软件。请检查你的路径设置。';
$string['test_unoserverdownload'] = '下载已转换的PDF测试文件';
$string['test_unoserverempty'] = '未设置unoserver路径。请检查路径设置。';
$string['test_unoserverisdir'] = '这 unoserver 路径是指向一个文件夹，请在你指定的路径里包含unoserver 软件。';
$string['test_unoservernotestfile'] = '找不到要转换成PDF文件的测试文件';
$string['test_unoservernotexecutable'] = '这 unoserver 路径指向一个不能执行的文件';
$string['test_unoserverok'] = '这 unoserver 路径看起来已经配置妥当';
$string['test_unoserverversionnotsupported'] = '本系统不支持你所安装的 unoserver 版本，Moodle的作业评分功能需要用到0.7或发上的版本。';
