var $ = require( "jquery" );
const Handlebars = require("handlebars");

$(document).ready(function(){
  // Chiamata Ajax per tutti i cd quando apro la pagina
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

  // Chiamata Ajax per scelta dell'autore da parte dell'utente
  $('#author_select').change(function() {
    var userAuthor = $(this).val();
    $.ajax(
      {
        url: 'http://localhost:8888/php-ajax-dischi/server.php',
        method: 'GET',
        data: { author: userAuthor },
        success: function(dataResponse) {
          printCd(dataResponse);
        },
          error: function () {
          alert('La chiamata api non risponde');
        }
      }
    );
  });

  // Stampo a schermo i cd
  function printCd(database) {
    // Preparo template Handlebars
    var source = $('#cd-template').html();
    var template = Handlebars.compile(source);
    // Pulisco il container della musica
    $('.music_container').text('');
    // Stampo i cd che ho nel database
    for (var i = 0; i < database.length; i++) {
      var html = template(database[i]);
      $('.music_container').append(html);
    }
  }
});
