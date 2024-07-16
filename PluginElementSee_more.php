<?php
class PluginElementSee_more{
  public function widget_include(){
    /**
     * i18n
     */
    wfPlugin::includeonce('i18n/translate_to_json');
    $i18n_translate_to_json = new PluginI18nTranslate_to_json();
    $json_i18n = $i18n_translate_to_json->get_json(__DIR__.'/element/i18n.yml', '/plugin/element/see_more/i18n');
    /**
     * 
     */
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag(array('script' => "PluginElementSee_more.init($json_i18n)"));
    wfDocument::renderElement($element);
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