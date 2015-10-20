<html>
  <head>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-2.1.4.min.js"></script>
  </head>
  <body>
    <select id="mainhand"></select>

<script type="text/JavaScript">
    //get a reference to the select element
    var $select = $('#mainhand');
 
    //request the JSON data and parse into the select element
    $.getJSON('stats.JSON', function(data){
 
      //clear the current content of the select
      $select.html('');
 
      //iterate over the data and append a select option
      $.each(data.mainhanditem, function(key, val){ 
        $select.append('<option id="' + val.id + '">' + val.name + '</option>');
      })
    });
  </script>
</body>
  

</html>
