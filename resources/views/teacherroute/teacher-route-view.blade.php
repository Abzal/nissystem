 
@extends('layout.total')

@section('title', 'add edit route')

@section('content')

<?php  
    $sortedRoutes = array();
    foreach ($staffRoutes as $route) {
      $sortedRoutes[json_decode($route->alldata,true)['ritemyear']]=$route;
    }
    krsort($sortedRoutes);

    foreach ($sortedRoutes as $year => $route) {            
      $rArray = json_decode($route->alldata,true);
?>
    
    <div style="text-align: right; font-size: 24px;">
        <?php echo $year.'г.'; ?>
    </div>
   
   <table class="table table-striped">
      <tbody>
        <?php 
        foreach ($routeItems as $item) {
          $str = "";
          if(array_key_exists($item->id, $rArray) && ($rArray[$item->id])!=null)
            $str = $rArray[$item->id];
          else
            continue; 

          echo '<tr>';
          echo '<th scope="row" style="width: 25%;">';
          echo $item->item;
          echo "</th>";
          echo "<td>";          
          echo $str;          
          echo "</td>";
          echo "</tr>";
        }          
        ?>        
      </tbody>

   </table>

    <?php } ?>









@endsection