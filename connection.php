<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/connection.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Connection</title>
</head>
    <body>
       <section class="header">
          <br> <br>
            <div class="varmada">
              <h1 class="mb-3 bd-text-purple-bright">
                <div class="vario bd-title" id="content">Vario-Tech </div>
                <div class="mada  bd-title"> Magascar </div>
              </h1>
            </div>
            <div class="formulaire">
                <form action="rec.php" method="post">
                  <input class="mail" type="text" placeholder="Email address"> <br>
                  <input class="passwd" type="password" placeholder="Password" name="password"> <br>                      
                  <button class="btn btn-primary login" type="submit">Log in</button> 
                </form>
            <div class="create">
                <button class="account" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  <a href="modal.php" data-toggle="modal" data-target="#exampleModalScrollable">Create a new account</a>
                </button>
            </div>
            </div>
        </section>   
        
    </body>
</html>