var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function(){
  // Chiamata Ajax per popolare la select con gli autori dei cd del database
    populateSelect();

  // Chiamata Ajax per tutti i cd quando apro la pagina (select All)
  getDisks('All');

  // Chiamata Ajax per scelta dell'autore da parte dell'utente tramite select
  $('#author_select').change(function() {
    var userAuthor = $(this).val();
    getDisks(userAuthor);
  });

  // Richiama i cd dal mio server
  function getDisks(userAuthor) {
    $.ajax(
      {
        url: window.location.protocol + '//' + window.location.host + '/php-ajax-dischi/server.php',
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
  };

  // Stampa a schermo i cd con Handlebars
  // Accetta: database, che contiene un array di oggetti disco
  // Return: niente, stampa solo
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

  // Chiamata API per popolare la select con Handlebars
  function populateSelect() {
    $.ajax(
      {
        url: window.location.protocol + '//' + window.location.host + '/php-ajax-dischi/server.php',
        method: 'GET',
        data: { 'author-list': true },
        success: function(dataResponse) {
          // Preparo template Handlebars
          var source = $('#select-author-template').html();
          var template = Handlebars.compile(source);

          for (var i = 0; i < dataResponse.length; i++) {
            thisAuthor = dataResponse[i];
            var context = { author: thisAuthor };
            var html = template(context);
            $('#author_select').append(html);
          }

        },
         error: function () {
          alert('La chiamata api non risponde');
        }
      }
    );
  };
});
