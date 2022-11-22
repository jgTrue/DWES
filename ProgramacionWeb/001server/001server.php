<!-- 001server.php: 
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario (001post.html) que haga un envío por POST y compruébalo de 
nuevo.
Crea una página (001enlace.html) que tenga un enlace a 001server.php y comprueba 
el valor de HTTP_REFERER. -->
<?php 
    /* igual que el ejemplo visto en los apuntes, muestra los valores de 
    $_SERVER al ejecutar un script en tu ordenador.*/
    echo $_SERVER["PHP_SELF"]."<br>"; 
    echo $_SERVER["SERVER_SOFTWARE"]."<br>"; 
    echo $_SERVER["SERVER_NAME"]."<br>";
    echo $_SERVER["REQUEST_METHOD"]."<br>"; 
    echo $_SERVER["REQUEST_URI"]."<br>";
    echo $_SERVER["QUERY_STRING"]."<br>";
    echo $_SERVER["HTTP_USER_AGENT"]."<br>"; 
    
    // Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
    //$user =  $_GET["user"];
    //echo $user;
        
        //? Cuando pasamos el parámetro cambia el resultado de '$_SERVER["QUERY_STRING"]'.
        //* Es el resultado de la url sin el dominio. Aparece el parámetro recogido por GET.
        //? También cambia '$_SERVER["QUERY_STRING"]'.
        //*Es todo lo que va después de '?' en la URL. Podemos ver el parámetro recogido por GET.

    /* Prepara un formulario (001post.html) que haga un envío por POST y compruébalo de 
    nuevo.*/
    $userMail = $_POST["userMail"];
    $userPass = $_POST["userPass"];
        
        //* Con el método POST, '$_SERVER["REQUEST_URI"]' no refleja el parámetro recogido.
        //* Tampoco '$_SERVER["QUERY_STRING"]' muestra el resultado recogido mediante POST.

    // Crea una página (001enlace.html) que tenga un enlace a 001server.php y comprueba 
    // el valor de HTTP_REFERER.        
    echo $_SERVER["HTTP_REFERER"];

        //? Muestra en enlace desde la que hizo la petición.
        //* resultado -> http://localhost/Workspace/DWES/ProgramacionWeb/001server/01post.html
?>