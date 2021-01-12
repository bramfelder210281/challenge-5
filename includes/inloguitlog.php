<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
       $button = ' <p>
        <a href="inlog/logout.php" class="button8">logout</a>
</p>';
} else {
       $button = ' <p>
        <a href="inlog.php" class="button8">Login</a>
</p>';
}

echo $button;











