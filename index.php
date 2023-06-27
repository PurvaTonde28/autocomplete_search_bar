<!DOCTYPE html>
<html>
<head>
  <title>City Search</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
    .result {
      margin-top: 10px;
      border-collapse: collapse;
      width: 100%;
    }

    .result td, .result th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .result tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .result tr:hover {
      background-color: #ddd;
    }

    .result th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
  </style>
  <script>
    $(function() {
      $("#searchInput").autocomplete({
        source: "getcities.php",
        minLength: 1,
        select: function(event, ui) {
          var cityId = ui.item.id;
          getCitiesInfo(cityId);
        }
      });

      function getCitiesInfo(cityId) {
        $.ajax({
          url: "city.php",
          type: "GET",
          data: { id: cityId },
          success: function(response) {
            $("#cityInfo").html(response);
          }
        });
      }
    });
  </script>
</head>
<body>
<h1>Dynamic Search Box</h1>
    <i><b>Enter City Name:</b></i>
  <input type="text" id="searchInput">
  <div id="cityInfo"></div>
</body>
</html>
