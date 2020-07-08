window.onload = function(){
  var highlights = document.getElementById('divHighlights');
var addhighlight = document.getElementById('addhighlight');

 addhighlight.onclick = function(){

  var newdiv = document.createElement('div');
  var label = document.createElement('label');
  var input = document.createElement('input');
  highlights.append(newdiv);
  newdiv.append(label, input);
  newdiv.setAttribute('class', 'form-group');
  input.setAttribute('placeholder', 'Add highlight');
  input.setAttribute('name', 'newhighlight[]');
  input.setAttribute('type', 'text');
  input.setAttribute('class', 'form-control');
  label.innerHTML = "New Highlight";
}

var includes = document.getElementById('divIncludes');
var addinclude = document.getElementById('addInclude');

addinclude.onclick = function(){

 var newdiv = document.createElement('div');
 var label = document.createElement('label');
 var input = document.createElement('input');
 includes.append(newdiv);
 newdiv.append(label, input);
 newdiv.setAttribute('class', 'form-group');
 input.setAttribute('placeholder', 'Add include');
 input.setAttribute('name', 'newinclude[]');
 input.setAttribute('type', 'text');
 input.setAttribute('class', 'form-control');
 label.innerHTML = "New Include";
}

}
