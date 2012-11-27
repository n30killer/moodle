<?php

class programmedEvents extends block_base {
    public function init() {
        $this->title = get_string('programmedEvents', 'block_programmedEvents');
    }

public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content         =  new stdClass;
    $this->content->text   = 'The content of our Programed Events Block!';
    $this->content->footer = 'Footer here...';
 
    return $this->content;
  }
}   

?>


