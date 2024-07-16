function PluginElementSee_more(){
  this.i18n = {};
  this.init = function(i18n){
    this.i18n = i18n;
  }
  this.text = function(id){
    var element = document.getElementById(id);
    if(element.scrollHeight != element.clientHeight){
      var btn = document.createElement('a');
      btn.innerHTML = this.i18n.see_more;
      btn.href = '#!';
      btn.setAttribute('style', 'float:right');
      btn.setAttribute('class', 'text-secondary');
      btn.onclick = function(){PluginElementSee_more.expand(id, btn)};
      element.insertBefore(btn, element.firstChild);
    }
  }
  this.expand = function(id, btn){
    var element = document.getElementById(id);
    if(element.scrollHeight != element.clientHeight){
      element.style.height='';
      btn.innerHTML = this.i18n.see_less;
    }else{
      element.style.height='40px';
      btn.innerHTML = this.i18n.see_more;
    }
  }
}
var PluginElementSee_more = new PluginElementSee_more();