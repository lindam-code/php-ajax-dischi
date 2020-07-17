var $ = require( "jquery" );
const Handlebars = require("handlebars");

$(document).ready(function(){

  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function(dataResponse) {
        printCd(dataResponse);
      },
       error: function () {
        alert('La chiamata api non risponde');
      }
    }
  );

  function printCd(database) {
    var source = $('#cd-template').html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < database.length; i++) {
      var html = template(database[i]);
      $('.music_container').append(html);
    }
  }

});
