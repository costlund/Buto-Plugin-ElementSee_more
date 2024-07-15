<?php
class PluginElementSee_more{
  public function widget_include(){
    wfDocument::renderElementFromFolder(__DIR__, __FUNCTION__);
  }
  public function widget_text($data){
    $data = new PluginWfArray($data);
    $id = 'e'.wfCrypt::getUid();
    /**
     * id
     */
    if(!$data->get('data/id')){
      $data->set('data/id', $id);
    }else{
      $id = $data->get('data/id');
    }
    /**
     * script
     */
     $data->set('data/script', "$( document ).ready(function() { PluginElementSee_more.text('$id') });");
    /**
     * 
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data'));
    wfDocument::renderElement(array($element->get()));
  }
}