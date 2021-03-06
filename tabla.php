<?php
    include ("conexion.php");
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title></title>
    <style>
        table.dataTable thead {
            background: #239B56;
            color:white;
        }
    </style>  
  </head>
  <body>
    <a href="index.php"><button   class="btn btn-success" style="background:#239B56">Volver</button></a>
    <h1 class="text-center">Libro 2</h1>
    <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
            
                <thead class="text-center">
                    <th>Fecha</th>
                    <th>Descripcion</th>
                    <th>Sucursal</th>
                    <th>Referencia 1</th>
                    <th>Referencia 2</th>
                    <th>Valor</th>
                </thead>
                <tbody>
    <?php
        $query="SELECT * FROM Info";
        $res=sqlsrv_query($conn,$query);
        while($row=sqlsrv_fetch_array($res))
        {
    ?>
        <tr>
            <td><?=$row[1]?></td>
            <td><?=$row[2]?></td>
            <td><?=$row[3]?></td>
            <td><?=$row[4]?></td>
            <td><?=$row[5]?></td>
            <td><?=$row[6]?></td>
        </tr>    
    <?php
        }
    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>
      
  </body>
</html>