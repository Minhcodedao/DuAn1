<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #columnchart_values {
      margin-top: 50px;
      width: 80%;
      max-width: 900px;
      height: 400px;
      margin: 100px 0px 0px 300px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      border-radius: 8px;
    }
  </style>
</head>

<body>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", {
          role: "style"
        }],
        <?php
        $list = loadall_thongke_sanham_dm_gg();
        $colors = ["#FF5733", "#33FF57", "#5733FF", "#FFFF33", "#33FFFF"]; // Add more colors if needed

        foreach ($list as $index => $item) {
          $color = isset($colors[$index]) ? $colors[$index] : 'silver';
          echo "['" . $item['name'] . "', " . $item['soluong'] . ", '" . $color . "'],";
        }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1, {
          calc: "stringify",
          sourceColumn: 1,
          type: "string",
          role: "annotation"
        },
        2
      ]);

      var options = {
        title: "Biểu đồ thống kê sản phẩm theo danh mục",
        width: "100%",
        height: 400,
        bar: {
          groupWidth: "95%"
        },
        legend: {
          position: "none"
        },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    }
  </script>
  <div id="columnchart_values"></div>
</body>

</html>
