<!DOCTYPE html>
<html>  
    <head>
        <title>Computel Software</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        
    </head>    
    <body>
        <form action="../controller/login.php" method="POST" id="formlogin">
            <fieldset>
                <label for="usuario">Usuário</label>
                <input type="text" name="usuario" id="usuario" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" required>

                <input type="submit" name="btnLogar" value="Enviar">
            </fieldset>      
        </form>
    </body>
</html>
