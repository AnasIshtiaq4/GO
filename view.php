<?php
// EXAMPLES
echo "<h1>GET TABLE</h1>";
getTable($conn,"SELECT * FROM test","ID,NAME,DESCRIPTION,CLASS,PHN,EMAIL,ADDRESS,DATE",false);//pass

echo "<h1>GET LIST ORDERED</h1><ol>";
getList($conn,"SELECT id,`name` FROM test",'l');//pass 
echo "</ol>";
// run() //pass
// getResult() //pass
echo '<h1></h1>';

?>