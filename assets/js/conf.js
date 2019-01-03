var BASE_URL = "http://192.168.11.107:3000/api/";
var usrtoken = localStorage.getItem('jwt') || '';
var usrJson = JSON.parse(localStorage.getItem('usrjson')) || '';