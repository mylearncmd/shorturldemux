<?php
/**
 * TODO
 * The URL parameter s and c need to become more self explaining. 
 * For some reason we mixed them up so that c is used for the shortener string, 
 * instead for the course id.
 * 
 * @category Moodle
 * @package  Local_ShortURLdemux
 * @author   Niels Seidel <niels.seidel@fernuni-hagen.de>
 * @license  GPL https://www.gnu.org/licenses/gpl-3.0.de.html
 * @link     URL shortener, short URL
 */

require_once dirname(__FILE__) . '/../../config.php';  


require_login();

$context = context_system::instance();
global $USER, $PAGE, $DB;
$PAGE->set_context($context);  
$PAGE->set_url($CFG->wwwroot.'/local/shorturldemux/edit.php');

$PAGE->set_heading("!Adaption Rule Dashoard");

echo $OUTPUT->header();

echo "Hello World";

$course = $DB->get_records_sql(
    'SELECT c.course_id, c.path 
    FROM '.$CFG->prefix.'shorturldemux_courses AS c 
    WHERE c.short = ?',
    array("1801-caching")
); 

echo print_r($course);
echo $CFG ->prefix;
echo "<br> ";
echo "<a href=".$CFG->wwwroot.'/local/shorturldemux/edit.php'."?course=2>cours2</a>";
if(isset($_GET['course'])){
    echo $_GET['course'];
}
//hallo
//echo $vardd;
echo $OUTPUT->footer();