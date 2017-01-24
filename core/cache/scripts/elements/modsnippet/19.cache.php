<?php  return '//Using [[PHPInclude?file=path_to_your_file/file_name.php]]







 
if ( !isset($file) || $file == "" ) return "No file specified."; //check if there\'s a file given.
 
ob_start();//Start the buffer
 
include $file; //include
 
$ob_contents = ob_get_contents();//get contents from the buffer
ob_end_clean();//and kill/delete the buffer
return $ob_contents;//return it to etomite.
return;
';