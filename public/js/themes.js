
var h1 = document.getElementById('h1');
var button = document.getElementById('switch');
var body = document.querySelector('body');
var smallfeature = document.querySelector('feature_divider_small');
var feature = document.getElementById('feature');
var main = document.getElementById('main');
var header = document.getElementById('header');
var labels = document.getElementById('labelContact')
var userprofile = document.querySelector('userprofile');;
button.onclick = function changeTheme(){
  body.classList.toggle('dark');
  main.classList.toggle('dark');
  h1.classList.toggle('dark');
  labels.classList.toggle('dark');
  userprofile.classList.toggle('light');
  if(feature.borderColor.black){
  feature.setAttribute('style', "border-color: white");
  }else{
  feature.setAttribute('style', "border-color: black");
  }
  if(smallfeature.borderColor.black){
  smallfeature.setAttribute('style', "border-color: white");
  }else{
  smallfeature.setAttribute('style', "border-color: black");
  }
}
