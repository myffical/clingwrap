<?php

// Action
$action_template = new Template('action_view.php');
$action_template->set_param('title', 'Hello from the action template!');
$action_template->set_param('content', 'Hello world!');
$template_manager->add_template('action', $action_template);

// Profile bar
$bar_template = new Template();
if(isset($_GET['user'])){
  $bar_template->set_filepath('profile_view.php');
  $bar_template->set_param('user', $_GET['user']);
}
else{
  $bar_template->set_filepath('log_in_view.php');
}
$template_manager->add_template('bar', $bar_template);

// Error example
if(isset($_GET['error'])){
  $error_template = new Template();
  $error_template->set_filepath('error_view.php');
  $error_template->set_param('message', 'This is the error template message');
  $template_manager->add_template('error', $error_template);
  $template_manager->set_base('error');
}
  

?>