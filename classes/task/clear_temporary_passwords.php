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
 * presence task - clear temporary passwords.
 *
 * @package    mod_presence
 * @copyright  2019 Maksud R
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_presence\task;
defined('MOODLE_INTERNAL') || die();

/**
 * clear_temporary_passwords class, used to clean up the temporary passwords.
 *
 * @package    mod_presence
 * @copyright  2019 Maksud R
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class clear_temporary_passwords extends \core\task\scheduled_task {
    /**
     * Return the task's name as shown in admin screens.
     *
     * @return string
     */
    public function get_name() {
        return get_string('rotateqrcode_cleartemppass_task', 'mod_presence');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        global $DB;

        $params = array('currenttime' => time());
        $DB->delete_records_select('presence_rotate_passwords', 'expirytime < :currenttime', $params);
    }
}