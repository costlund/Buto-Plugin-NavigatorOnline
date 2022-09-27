<?php
class PluginNavigatorOnline{
  public function widget_modal($data){
    wfPlugin::enable('bootstrap/modal');
    $element = new PluginWfYml(__DIR__.'/element/modal.yml');
    wfDocument::renderElement($element->get());
  }
}
