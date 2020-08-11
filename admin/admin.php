<?php
function userIsAdmin() {
    // echo $_SESSION["admin"];
    if(isset($_SESSION["admin"]) || $_SESSION["admin"] == TRUE) {
        return TRUE;
    } 
    return FALSE;
}
?>