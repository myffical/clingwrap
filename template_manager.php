<?php
class TemplateManager{
  /**
    * Registers template with manager under the new key.
    *
    * @param string $key - Key for manager, must be unique to template
    * @param Template $template - New template to be registered
    */
  function add_template($key, $template){
  }
  
  /**
    * Registers template with manager under the key, 
    * overriding the existing template if any.
    *
    * @param string $key - Key for manager, must be unique to template
    * @param Template $template - Template to be registered
    */
  function replace_template($key, $template){
  }

  /**
    * Remove the template registered under the key from the manager.
    *
    * @param string $key - Key for for template to be removed
    */
  function remove_template($key, $template){
  }

  /**
    * Sets the base template to be rendered.
    *
    * @param string $key - Key for for base template
    */
  function set_base($key){
  }
  
  /**
    * Renders the base template
    */
  function render_base(){
  }
  
  /**
    * Renders the template registered under the given key.
    *
    * @param string $key - Key of the template to render
    */  
  function render($key){
  }
}

class Template{
  /**
    * Sets the parameter given by key to the value,
    * overriding the previous value if any.
    *
    * @param string $key - Key to store the value under
    * @param object $value - Object to be stored, can be of any type
    */
  function set_param($key, $value){
  }
  
  /**
    * Sets the parameter given by key to the value,
    *
    * @param string $key - Key underwhich the value is stored
    */
  function get_param($key){
  }
}

?>