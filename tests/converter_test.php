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
 * Test unoserver functionality.
 *
 * @package    core
 * @copyright  2023 Wakey <wakey@inzsu.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * A set of tests for some of the unoserver functionality within Moodle.
 *
 * @package    core
 * @copyright  2023 Wakey <wakey@inzsu.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class fileconverter_unoserver_converter_testcase extends advanced_testcase {

    /**
     * Helper to skip tests which _require_ unoserver.
     */
    protected function require_unoserver() {
        global $CFG;

        if (empty($CFG->pathtounoserver) || !file_is_executable(trim($CFG->pathtounoserver))) {
            // No conversions are possible, sorry.
            $this->markTestSkipped();
        }
    }

    /**
     * Get a testable mock of the fileconverter_unoserver class.
     *
     * @param   array   $mockedmethods A list of methods you intend to override
     *                  If no methods are specified, only abstract functions are mocked.
     * @return  \fileconverter_unoserver\converter
     */
    protected function get_testable_mock($mockedmethods = []) {
        $converter = $this->getMockBuilder(\fileconverter_unoserver\converter::class)
            ->onlyMethods($mockedmethods)
            ->getMock();

        return $converter;
    }

    /**
     * Tests for the start_document_conversion function.
     */
    public function test_start_document_conversion() {
        $this->resetAfterTest();

        $this->require_unoserver();

        // Mock the file to be converted.
        $filerecord = [
            'contextid' => context_system::instance()->id,
            'component' => 'test',
            'filearea'  => 'unittest',
            'itemid'    => 0,
            'filepath'  => '/',
            'filename'  => 'test.docx',
        ];
        $fs = get_file_storage();
        $source = __DIR__ . DIRECTORY_SEPARATOR . 'fixtures' . DIRECTORY_SEPARATOR . 'unoserver-source.docx';
        $testfile = $fs->create_file_from_pathname($filerecord, $source);

        $converter = $this->get_testable_mock();
        $conversion = new \core_files\conversion(0, (object) [
            'targetformat' => 'pdf',
        ]);
        $conversion->set_sourcefile($testfile);
        $conversion->create();

        // Convert the document.
        $converter->start_document_conversion($conversion);
        $result = $conversion->get_destfile();
        $this->assertNotFalse($result);
        $this->assertSame('application/pdf', $result->get_mimetype());
        $this->assertGreaterThan(0, $result->get_filesize());
    }

    /**
     * Tests for the test_unoserver_path function.
     *
     * @dataProvider provider_test_unoserver_path
     * @param   string $path The path to test
     * @param   int $status The expected status
     */
    public function test_test_unoserver_path($path, $status) {
        global $CFG;

        $this->resetAfterTest();

        // Set the current path.
        $CFG->pathtounoserver = $path;

        // Run the tests.
        $result = \fileconverter_unoserver\converter::test_unoserver_path();

        $this->assertEquals($status, $result->status);
    }

    /**
     * Provider for test_unoserver_path.
     *
     * @return  array
     */
    public function provider_test_unoserver_path() {
        return [
            'Empty path' => [
                'path' => null,
                'status' => \fileconverter_unoserver\converter::UNOSERVERPATH_EMPTY,
            ],
            'Directory' => [
                'path' => __DIR__,
                'status' => \fileconverter_unoserver\converter::UNOSERVERPATH_ISDIR,
            ],
        ];
    }
}
