<?php ob_start(); ?>

<h1> hello word</h1>

    <div class="">
    <form method="post" action="">
            <label> user name</label>
            <input type="text" name="user" id="user" placeholder="enter user name"/>
            <label> password</label>
            <input type="password" name="password" id="password" placeholder="entrer your password"/>
            <input type="submit" name="submit"/>
        </form> 
    </div>


<?php 
    $content = ob_get_clean();
    require dirname(__DIR__). DIRECTORY_SEPARATOR . 'templates/template.php';