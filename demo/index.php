<?php

require('../lib/template_manager.php');
require('../lib/template.php');

// Pre-app setup here...

// Set up template manager
$template_manager = new TemplateManager();

// Set up base template
$base_template = new Template('base_view.php');
$base_template->set_param('title', 'Clingwrap Demo App');
$base_template->set_param('content', 'Hello from the base template!');

// Add base template to template manager
$template_manager->add_template('base', $base_template);
$template_manager->set_base('base');

// Pre-action setup here...

// Pass control to action
require('action.php');

// Post-action cleanup here...

// Render views
$template_manager->render_base();

// Post app cleanup here...

?>