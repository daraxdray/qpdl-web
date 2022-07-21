<?php



if (!function_exists('getAllJsonCountries')) {
    function getAllJsonCountries(){
        $d = file_get_contents('../countries.json');
        
        return json_decode($d,true);
    }
}

if (!function_exists('getStatesByCountryName')) {
      function getStatesByCountryName($country_name){
          $cs = getAllJsonCountries();
          
          if(isset($cs[$country_name])){
          return $cs[$country_name];   
          }
          return ['No State'];
      
      }
  }

  
  if(isset($_POST['country_name'])){
  $states = getStatesByCountryName($_POST['country_name']);
  echo json_encode($states);
  }else{
      echo json_encode(["msg"=>"No data"]);
  }
  ?>