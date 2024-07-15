function PluginElementSee_more(){
  this.text = function(id){
    var element = document.getElementById(id);
    if(element.scrollHeight != element.clientHeight){
      var btn = document.createElement('a');
      btn.innerHTML = 'Visa mer';
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
      btn.innerHTML = 'Visa mindre';
    }else{
      element.style.height='40px';
      btn.innerHTML = 'Visa mer';
    }
  }
}
var PluginElementSee_more = new PluginElementSee_more();