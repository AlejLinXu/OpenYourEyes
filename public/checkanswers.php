<?php 

if($_POST['test']=='9') {
    $resultados = array();
  
   
    if (in_array("b", $_POST['q1']) && in_array("c", $_POST['q1']) && !in_array("a", $_POST['q1'])){
        $resultados ['q1'] ="✔️";
    }else{  $resultados ['q1'] ="❌";}
    
    if (in_array("b", $_POST['q2']) && in_array("c", $_POST['q2']) && !in_array("a", $_POST['q2'])){
        $resultados ['q2'] ="✔️";
    }else{  $resultados ['q2'] ="❌";}
    
    if (in_array("b", $_POST['q3']) && !in_array("c", $_POST['q3']) && !in_array("a", $_POST['q3'])){
        $resultados ['q3'] ="✔️";
    }else{  $resultados ['q3'] ="❌";}
    
    if (!in_array("b", $_POST['q4']) && !in_array("c", $_POST['q4']) && in_array("a", $_POST['q4'])){
        $resultados ['q4'] ="✔️";
    }else{  $resultados ['q4'] ="❌";}
    
    if (in_array("h", $_POST['q5']) && !in_array("a", $_POST['q5']) && !in_array("b", $_POST['q5'])
        && !in_array("c", $_POST['q5'])
        && !in_array("d", $_POST['q5'])
        && !in_array("e", $_POST['q5'])
        && !in_array("f", $_POST['q5'])
        && !in_array("g", $_POST['q5'])){
        $resultados ['q5'] ="✔️";
    }else{  $resultados ['q5'] ="❌";}
    
    if (in_array("a", $_POST['q6']) && !in_array("b", $_POST['q6'])){
        $resultados ['q6'] ="✔️";
    }else{  $resultados ['q6'] ="❌";}
    
    if (in_array("a", $_POST['q7']) && !in_array("b", $_POST['q7'])){
        $resultados ['q7'] ="✔️";
    }else{  $resultados ['q7'] ="❌";}
    
    if (in_array("c", $_POST['q8']) && !in_array("a", $_POST['q8']) && !in_array("b", $_POST['q8'])
        && !in_array("d", $_POST['q8'])){
        $resultados ['q8'] ="✔️";
    }else{  $resultados ['q8'] ="❌";}
    
    if (in_array("d", $_POST['q9']) && !in_array("a", $_POST['q9']) && !in_array("b", $_POST['q9'])
        && !in_array("c", $_POST['q9'])){
            $resultados ['q9'] ="✔️";
    }else{  $resultados ['q9'] ="❌";}

  

    
}else if ($_POST['test']=='25') {
    $resultados = array();
    
    if (in_array("c", $_POST['q1']) && !in_array("a", $_POST['q1']) && !in_array("b", $_POST['q1'])){
        $resultados ['q1'] ="✔️";
    }else{  $resultados ['q1'] ="❌";}
    if (in_array("a", $_POST['q2']) && !in_array("b", $_POST['q2']) && !in_array("c", $_POST['q2'])){
        $resultados ['q2'] ="✔️";
    }else{  $resultados ['q2'] ="❌";}
    if (in_array("a", $_POST['q3']) && !in_array("b", $_POST['q3']) ){
        $resultados ['q3'] ="✔️";
    }else{  $resultados ['q3'] ="❌";}
    if (in_array("a", $_POST['q4']) && !in_array("b", $_POST['q4']) && !in_array("c", $_POST['q4'])){
        $resultados ['q4'] ="✔️";
    }else{  $resultados ['q4'] ="❌";}
    if (in_array("b", $_POST['q5']) && !in_array("a", $_POST['q5']) && !in_array("c", $_POST['q5'])){
        $resultados ['q5'] ="✔️";
    }else{  $resultados ['q5'] ="❌";}
    if (in_array("b", $_POST['q6']) && !in_array("c", $_POST['q6']) && !in_array("a", $_POST['q6'])){
        $resultados ['q6'] ="✔️";
    }else{  $resultados ['q6'] ="❌";}
    
}else if($_POST['test']=='42'){
    $resultados = array();
    if (in_array("a", $_POST['q1']) && !in_array("b", $_POST['q1'])){
        $resultados ['q1'] ="✔️";
    }else{  $resultados ['q1'] ="❌";}
    
    if (in_array("a", $_POST['q2']) && !in_array("b", $_POST['q2'])){
        $resultados ['q2'] ="✔️";
    }else{  $resultados ['q2'] ="❌";}
    
    if (in_array("d", $_POST['q3']) && !in_array("a", $_POST['q3']) && !in_array("b", $_POST['q3']) && !in_array("c", $_POST['q3'])){
        $resultados ['q3'] ="✔️";
    }else{  $resultados ['q3'] ="❌";}
    
    if (in_array("a", $_POST['q4']) && !in_array("b", $_POST['q4'])){
        $resultados ['q4'] ="✔️";
    }else{  $resultados ['q4'] ="❌";}
    
    
    if (in_array("d", $_POST['q5']) && !in_array("a", $_POST['q5']) && !in_array("b", $_POST['q5']) && !in_array("c", $_POST['q5'])){
        $resultados ['q5'] ="✔️";
    }else{  $resultados ['q5'] ="❌";}
}
header('Content-Type: application/json');
echo json_encode($resultados);



?>