<?php
# CSCI 466 Project - utilities.php
#   -Edgar, Mohamed, & Yonas
#
# This php file provides some useful functions in php to check or do certain actions needed by
# our project.
#
#####################################################################

#this was heavily inspired by code found in stackoverflow
    function savesession_GET($sessionkeys)
    {
        #save GET variables into a hidden tag in order to save current session info(from stackoverflow)

        #all possible keys/variable names from html tags that need their values reusing in the form that links to this website.
        foreach($sessionkeys as $name) 
        {
            #if var name has not been placed in URL at all yet, do not save.
            if(!isset($_GET[$name])) { continue; }

            #failsafe to make sure no special html chars showup in URL
            $value = htmlspecialchars($_GET[$name]);
            $name = htmlspecialchars($name);

            #save GET vars with their values in hidden tags to keep session info -they have the same names
            #so they still work with previous code.
            echo "<input type=\"hidden\" name=\"" . $name ."\" value=\"". $value ."\">\n";
        }
        echo "\n\n";
    }

# check if set is empty
function isEmptySetSQL($result_set)
{
    if($result_set) 
    {
        $i = 0;
 
        while($row = $result_set->fetch())
            $i++;

        if($i == 0)
            return true; 
    }
    else{ echo "<p>SQL/PDO Error - Failed to obtain a result set.</p>\n"; return true; }
 
    return false;
}
?>