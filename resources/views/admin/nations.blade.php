<!doctype html>
<html lang="en">
  <head>
    <title>administration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- pureCSS -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="/css/layouts/pricing.css">
    <link rel="stylesheet" href="css/nations.css">
  </head>
  <body>
    <div class="pure-menu pure-menu-horizontal">
        <a href="#" class="pure-menu-heading">ADMINISTRATION</a>
        <ul class="pure-menu-list">
            
        </ul>
    </div>

    <div class="banner">
        <h1 class="banner-head">
            Nations
        </h1>
    </div>


        <div class="center">
          <p>
            <h2>Drag and drop to sort the nations once you are done press complete. <br>
            Double click a nation to edit it
            </h2>

          </p>
          <a class="pure-button pure-button-primary" href="#">Complete</a>
          <a class="pure-button pure-button-primary" href="#">Add nation</a>
        </div>


          <ul id="sortable">
        <li class="1"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Cina"></li>
        <li class="2"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="3"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default"><img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia"></li>
        <li class="ui-state-default">
          <div class="container">
            <img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
            <img src="uploads/svizzera_mappa.png" class='imgBackgroud'>
            <div class="imgText">switzerland</div>
          </div>
        </li>
        <li class="ui-state-default">
          <div class="container">
            <img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
            <img src="uploads/svizzera_mappa.png" class='imgBackgroud'>
            <div class="imgText">skyrim</div>
          </div>
        </li>
        <li class="ui-state-default">
          <div class="container">
            <img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
            <img src="uploads/svizzera_mappa.png" class='imgBackgroud'>
            <div class="imgText">skyrim</div>
          </div>
        </li>
        <li class="ui-state-default">
          <div class="container">
            <img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
            <img src="uploads/svizzera_mappa.png" class='imgBackgroud'>
            <div class="imgText">skyrim</div>
          </div>
        </li>
        <li class="ui-state-default">
          <div class="container">
            <img src="uploads/russia_copertina.jpg" alt="Russia" title="Russia">
            <img src="uploads/svizzera_mappa.png" class='imgBackgroud'>
            <div class="imgText">skyrim</div>
          </div>
        </li>
      </ul>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $('#sortable').sortable({
        cursor: "move",
          });
    $( "li" ).dblclick(function() {
      alert($(this).attr('class'));
    });

    </script>
  </body>
</html>
