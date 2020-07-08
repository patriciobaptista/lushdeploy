var COUNTRIES_API_URL = 'https://restcountries.eu/rest/v2/all';
var PROVINCIAS_API_URL = 'https://apis.datos.gob.ar/georef/api/provincias';
var ARGENTINA_CODE = '032';

var form = document.forms[0];
var countrySelect = form.elements[6];
var div = document.getElementById('provinces');
var divName = document.getElementById('divName');
var divSurame = document.getElementById('divSurame');
var divEmail = document.getElementById('divEmail');
var divPass = document.getElementById('divPass');
var nameInput = form.elements['name'];
var surnameInput = form.elements['surname'];
var emailInput = form.elements['email'];
var passInput = form.elements['password'];


function obtenerProvincias() {
  fetch(PROVINCIAS_API_URL)
    .then(function (res) {
      return res.json();
    }).then(function (data) {
      var provincias = data.provincias;
      var select = document.createElement('select');
      select.setAttribute('id', 'provinceSelect');
      select.setAttribute('name', 'province');
      for (var provincia of provincias) {
        var option = document.createElement('option');
        option.setAttribute('value', provincia.nombre);
        option.innerHTML = provincia.nombre;
        select.append(option);
      }
      div.append(select);
    })
}

function sacarProvinciasSelect() {
  var provinceSelect = document.getElementById('provinceSelect');
  if (provinceSelect !== null) {
    provinceSelect.parentNode.removeChild(provinceSelect);
  }
}

countrySelect.onchange = function () {
  var selectedValue = this.selectedOptions[0].value;
  if (selectedValue === 'Argentina') {
    obtenerProvincias();
  } else {
    sacarProvinciasSelect();
  }
}

fetch(COUNTRIES_API_URL)
  .then(function (res) {
    return res.json();
  })
  .then(function (countries) {
    for (var country of countries) {
      var option = document.createElement('option');
      option.setAttribute('value', country.name);
      option.innerHTML = country.name;
      countrySelect.append(option);
    }
  });

  nameInput.onblur = function(){
    if(this.value == ''){
      var errorName = document.createElement('h3');
      errorName.setAttribute('class', "errorJava");
      errorName.innerHTML = 'This field cannot be empty';
      divName.append(errorName);
    }
  }

  surnameInput.onblur = function(){
    if(this.value == ''){
      var errorName = document.createElement('h3');
      errorName.setAttribute('class', "errorJava");
      errorName.innerHTML = 'This field cannot be empty';
      divSurname.append(errorName);
    }
  }

var regexMail = /\S+@\S+\.\S+/;

  emailInput.onblur = function(){
    if(this.value == ''){
      var errorName = document.createElement('h3');
      errorName.setAttribute('class', "errorJava");
      errorName.innerHTML = 'This fied cannot be empty';
      divEmail.append(errorName);
    }
    else if(!regexMail.test(this.value)){
      var errorMail = document.createElement('h3');
      errorMail.setAttribute('class', "errorJava");
      errorMail.innerHTML = 'Please complete with a valid e-mail format';
      divEmail.append(errorMail);
    }
  }

  passInput.onblur = function(){
    if(this.value == ''){
      var errorName = document.createElement('h3');
      errorName.setAttribute('class', "errorJava");
      errorName.innerHTML = 'This field cannot be empty';
      divPass.append(errorName);
    }
    else if(this.value.length < 8){
      var errorPass = document.createElement('h3');
      errorPass.setAttribute('class', "errorJava");
      errorPass.innerHTML = 'Your password must have at least 8 characters';
      divPass.append(errorPass);
    }
  }

  function registerFormHasErrors() {
    return nameInput.value == '' || surnameInput.value == '' || emailInput.value == '' || !regexMail.test(emailInput.value) || passInput.value == '' || passInput.value.length < 8;
  }

    form.onsubmit = function (event) {
      event.preventDefault();
      if(registerFormHasErrors() == true){
        Swal.fire({
          title: 'There are errors on your form',
          text: 'Please update and re-submit',
          icon: 'error',
        });
      } else{
        form.submit();
      }
    }
