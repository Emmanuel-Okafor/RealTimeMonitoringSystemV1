<html>
  <head>
   <h2>DEMOGRAPHY OF THE VULNERABLE CHILDREN</h2>
  </head>
  <body>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">


      google.charts.load('current', {'packages':['corechart']});


      google.charts.setOnLoadCallback(drawEducationChart);
      google.charts.setOnLoadCallback(drawHealthChart);
      google.charts.setOnLoadCallback(drawGenderChart);
      google.charts.setOnLoadCallback(drawVulnerableCenterChart);

      function drawEducationChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 1],
          ['Onions', 1],
          ['Olives', 2],
          ['Zucchini', 2],
          ['Pepperoni', 1]
        ]);

        var options = {title:'Educational Level Distribution',
                       width:400,
                       height:300};

     
        var chart = new google.visualization.PieChart(document.getElementById('Education_chart_div'));
        chart.draw(data, options);
      }

   
     function drawHealthChart() {
       var data = new google.visualization.DataTable();
       data.addColumn('string', 'Topping');
       data.addColumn('number', 'Slices');
       data.addRows([
        ['Mushrooms', 2],
        ['Onions', 2],
        ['Olives', 2],
        ['Zucchini', 0],
        ['Pepperoni', 3]
        ]);

   
        var options = {title:'Health Status Distribution',
                       width:400,
                       height:300};

        var chart = new google.visualization.PieChart(document.getElementById('Health_chart_div'));
        chart.draw(data, options);
      }
      
    function drawGenderChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Mushrooms', 2],
        ['Onions', 2],
        ['Olives', 2],
        ['Zucchini', 0],
        ['Pepperoni', 3]
      ]);
      
      var options = {title:'Gender Distribution',
               width:400,
               height:300};
      var chart = new google.visualization.PieChart(document.getElementById('Gender_chart_div'));
      chart.draw(data, options);
    }

    
    function drawVulnerableCenterChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Slices');
      data.addRows([
        ['Mushrooms', 2],
        ['Onions', 2],
        ['Olives', 2],
        ['Zucchini', 0],
        ['Pepperoni', 3]
      ]);
      
      var options = {title:'Vulnerable Units Distribution',
               width:400,
               height:300};
      var chart = new google.visualization.PieChart(document.getElementById('Vulnerable_chart_div'));
      chart.draw(data, options);
    }
  
  </script>
      <br>
      <br>

    <table class="columns">
      <tr>
        <td><div id="Education_chart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
      <td><div id="Health_chart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
      <td><div id="Gender_chart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
      <tr>
      <td><div id="Vulnerable_chart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
    </table>
  </body>
</html>

