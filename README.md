# Clingwrap

Clingwrap is an lightweight PHP templating engine.

## Usage

Application logic:

  // Set up template manager
  $template_manager = new TemplateManager();

  // Set up template
  $template = new Template('template.php');
  $template->set_param('title', 'Demo app!');
  $template->set_param('content', 'Hello world!');

  // Add basic template to template manager
  $template_manager->add_template('basic_template', $template);
  $template_manager->set_base('basic_template');

  // Render template
  $template_manager->render_base()

Template:

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo($title) ?></title>
  </head>
  <body>
  <?php echo($content) ?>
  </body>
  </html>
