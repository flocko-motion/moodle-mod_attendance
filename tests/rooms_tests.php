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
 * Test for presence plugin related to the "rooms" feature
 *
 * @package    mod_presence
 * @category   test
 * @copyright  2020 Florian Metzger-Noel (github.com/flocko-motion)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/webservice/tests/helpers.php');
require_once($CFG->dirroot . '/mod/presence/classes/presence_webservices_handler.php');
require_once($CFG->dirroot . '/mod/presence/classes/structure.php');
require_once($CFG->dirroot . '/mod/presence/externallib.php');

/**
 * This class contains the test cases for the "rooms" feature extension.
 *
 * @package    mod_presence
 * @category   test
 * @copyright  2020 Florian Metzger-Noel (github.com/flocko-motion)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_presence_rooms_tests extends externallib_advanced_testcase
{

    /**
     * Test for rooms.
     * TODO: write tests.
     */
    public function test_get_courses_with_today_sessions() {
        $options = mod_presence_external::get_room_capacities();
    }
}