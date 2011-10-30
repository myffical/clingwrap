<?php

error_reporting(E_ALL);

class TemplateManager{
  private $templates = array();
  private $base_key = '';
  /**
    * Registers template with manager under the new key.
    *
    * @param string $key - Key for manager, must be unique to template
    * @param Template $template - New template to be registered
    */
  function add_template($key, $template){
    if($key && !isset($this->templates[$key])){
      $this->templates[$key] = $template;
    }
  }
  
  /**
    * Registers template with manager under the key, 
    * overriding the existing template if any.
    *
    * @param string $key - Key for manager, must be unique to template
    * @param Template $template - Template to be registered
    */
  function replace_template($key, $template){
    $this->templates[$key] = $template;
  }

  /**
    * Retrive the template registered under the key from the manager.
    * This is useful if you want to change parameters of a template.
    *
    * @param string $key - Key for for template to be removed
    */
  function get_template($key){
    if($key && $this->templates[$key]){
      return $this->templates[$key];
    }
    else{
      return NULL;
    }
  }

  /**
    * Remove the template registered under the key from the manager.
    *
    * @param string $key - Key for for template to be removed
    */
  function remove_template($key){
    if($key && $this->templates[$key]){
      unset($this->templates[$key]);
    }
  }

  /**
    * Sets the base template to be rendered.
    *
    * @param string $key - Key for for base template
    */
  function set_base($key){
    if($key){
      $this->base_key = $key;
    }
  }
  
  /**
    * Renders the base template
    */
  function render_base(){
    if($this->base_key){
      $this->render($this->base_key);
    }
  }
  
  /**
    * Renders the template registered under the given key.
    *
    * @param string $key - Key of the template to render
    */  
  function render($key){
    function render($key){
      $this->render($key
    }

    if($this->templates[$key]){
      $params = $this->templates[$key]->get_params();
      foreach($params as $param_key => $param_value){
        if(!isset(${$param_key})){
          ${$param_key} = $param_value;
        }
      }

      $filepath = $this->templates[$key]->get_filepath();
      require($filepath);
    }

  }
}

?>
