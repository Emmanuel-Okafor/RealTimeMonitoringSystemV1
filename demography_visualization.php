<?php  
 $connect = mysqli_connect("localhost", "root", "", "orphanagedbrecords"); 

 $query1 = "SELECT gender, count(*) as number FROM orphanstb GROUP BY gender";  
 $result1 = mysqli_query($connect, $query1); 

 $query2 = "SELECT class, count(*) as number FROM orphanstb GROUP BY class";  
 $result2 = mysqli_query($connect, $query2); 

 $query3 = "SELECT disability, count(*) as number FROM orphanstb GROUP BY disability";  
 $result3 = mysqli_query($connect, $query3);

 $query4 = "SELECT vulnerable_unit, count(*) as number FROM orphanstb GROUP BY vulnerable_unit";  
 $result4 = mysqli_query($connect, $query4);
 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawGenderChart); 
           google.charts.setOnLoadCallback(drawEducationChart); 
           google.charts.setOnLoadCallback(drawHealthChart); 
           google.charts.setOnLoadCallback(drawVulnerableUnitChart); 

           function drawGenderChart()  
           {  
                var data1 = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result1))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Gender Distribution',  
                      //is3D:true,  
                      pieHole: 0.3  
                     };  
                var chart1 = new google.visualization.PieChart(document.getElementById('piechart1'));  
                chart1.draw(data1, options);  
           }  

           
           function drawEducationChart()  
           {  
                var data2 = google.visualization.arrayToDataTable([  
                          ['Class', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["class"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Class Level Distribution',  
                      //is3D:true,  
                      pieHole: 0.3 
                     };  
                var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart2.draw(data2, options);  
           }  

           function drawHealthChart()  
           {  
                var data3 = google.visualization.arrayToDataTable([  
                          ['Health-Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["disability"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Health Distribution',  
                      //is3D:true,  
                      pieHole: 0.3 
                     };  
                var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart3.draw(data3, options);  
           }  

           
           function drawVulnerableUnitChart()  
           {  
                var data4 = google.visualization.arrayToDataTable([  
                          ['Vulnerable Units', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result4))  
                          {  
                               echo "['".$row["vulnerable_unit"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Vulnerable Unit Distribution',  
                      //is3D:true,  
                      pieHole: 0.3 
                     };  
                var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));  
                chart4.draw(data4, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:450px;">
           <table>
           
           <tr>
           <td>
           <div id="piechart1" style="width: 450px; height: 300px;"></div> 
           </td>
           <td>
            <div id="piechart2" style="width: 450px; height: 300px;"></div> 
           </td>
           </tr>
           
           <tr>
           <td>
                <div id="piechart3" style="width: 450px; height: 300px;"></div>
            </td>
            <td>
                <div id="piechart4" style="width: 450px; height: 300px;"></div>  
            </td> 
            </tr> 
           
</table>  
                  
                
                
           </div>  
      </body>  
 </html>  