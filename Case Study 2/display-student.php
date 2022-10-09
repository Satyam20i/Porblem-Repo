<?php  
$row = 1;
echo '<link rel="stylesheet" type="text/css" href="style.css">';
if (($file = fopen("students.csv", "r")) !== FALSE) {
   
    echo '<table border="1">';
   
    while (($data = fgetcsv($file, ",")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>';
        }else{
            echo '<tr>';
        }
       
        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
               $value = "&nbsp;";
            }else{	
               $value = $data[$c];	
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }
       
        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }
   
    echo '</tbody></table>';
     echo '<a href="index.html" style="text-decoration:none;">Back To Home Page</>'; 
    fclose($file);
}
else{
        echo "Nothing is in the File."; 
        echo '<a href="index.html" style="text-decoration:none;">Back To Home Page</>'; 
}

?>