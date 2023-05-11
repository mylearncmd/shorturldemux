<?php
require_once dirname(__FILE__) . '/../../config.php';  


require_login();

$context = context_system::instance();
global $USER, $PAGE, $DB,$tabelle;
$PAGE->set_context($context);  
$PAGE->set_url($CFG->wwwroot.'/local/shorturldemux/edit.php');
//$PAGE->set_url($CFG->wwwroot.'/local/shorturldemux');

// Hier beginnt die Seite

$PAGE->set_heading("!Adaption Rule Dashoard");
echo $OUTPUT->header();




  //Verbindung zur Datenbank
  $course = $DB->get_records_sql(
    'SELECT c.id, c.short, c.course_id, c.path
    FROM '.$CFG->prefix.'shorturldemux_courses AS c 
    WHERE c.course_id = ?',
    array($_GET['course_id'])
    ); 

foreach($course as $schluessel => $innen) {
    echo $schluessel . '<br>';
    foreach($innen as $innerer_schluessel => $wert) {
      echo $innerer_schluessel . ': ' . $wert . '<br>';
    }
    echo "<br> ";
  }
  echo $OUTPUT->footer();
  ?>
