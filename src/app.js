const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
   {
      "url": "http://localhost/php-ajax-dischi/server.php",
      "method": "GET",
      "success": function (result) {
        render(result);
      },
      "error": function (err) {
        alert("Errore");
      }
   })
});

function render(result) {

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < result.length; i++) {

    var album = result[i];

    var context = {
      "poster" : album.poster,
      "title" : album.title,
      "author" : album.author,
      "year" : album.year,
    };
    var html = template(context);
    $(".cds").append(html);
  }

}
