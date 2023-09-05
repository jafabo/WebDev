<?php
    // Execute the Python script and save the output in a variable
    $output = shell_exec('python3 color.py');
    
    // Echo the output (new color) back to the client
    echo $output;
?>
