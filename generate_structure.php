<?php 
function dirToArray($dir) { 
   
   $result = array(); 

   $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $result[] = $value; 
         } 
      } 
   } 
   
   return $result; 
} 
?> 

<?php
	echo "Starting....\r\n";
        // Initialize Variables
	$file = __DIR__.'/doc_structure.txt';
	
	$result = dirToArray(__DIR__."/docs");	
	var_dump($result);
	$content = json_encode($result);
	
	file_put_contents($file, $content);
	echo "Done Writing!\r\n";