<?php


    include('./sidebar2.php'); 
 ?>

    <div class="deshboard">
      <div class="viewcounter">
        <h1>Page View</h1>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Year', 'Sales', 'Expenses'],
                  ['2004',  1000,      400],
                  ['2005',  1170,      460],
                  ['2006',  660,       1120],
                  ['2007',  1030,      540]
                ]);

                var options = {
                  title: 'Company Performance',
                  curveType: 'function',
                  legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
              }
            </script>
  
            <div id="curve_chart" style="width: 900px; height: 500px"></div>

      <div class="catcheck">
              <div class="catcount">
              <h3>All Categories</h3>
                          <table  id="table_design1">
                            <tr>          
                                  <th>Category</th>
                                  <th>No Of Post</th>
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>sports</td>       
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>sports</td>       
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>sports</td>       
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>sports</td>       
                              </tr>
                              <tr>
                                  <td>1.</td>
                                  <td>sports</td>       
                              </tr>
                          </table>
              </div>                  
                          <div class="postcount">
                          <h3>All Categories</h3>
                        <table  id="table_design1">
                           <tr>
                                <th>Id</th>                                
                                <th>Title</th> 
                                <th>Name</th>                           
                            </tr>
                            <tr>
                                <td>1.</td>                               
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, laborum.</td>
                                <td>sports</td>
                            </tr>
                            <tr>
                                <td>1.</td>                               
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, laborum.</td>
                                <td>sports</td>
                            </tr>
                            <tr>
                                <td>1.</td>                               
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, laborum.</td>
                                <td>sports</td>
                            </tr>
                            <tr>
                                <td>1.</td>                               
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, laborum.</td>
                                <td>sports</td>
                            </tr>
                            <tr>
                                <td>1.</td>                               
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, laborum.</td>
                                <td>sports</td>
                            </tr>
                        </table>
                          </div>
      </div>
                </div>
    </div>
        </main>
    </body>
</html>