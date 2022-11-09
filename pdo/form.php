<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="
    margin:0;   padding:0;  font-family: sans-serif;    background: linear-gradient(#141e30, #243b55);;">
    <div style="position: absolute; top: 50%;   left: 50%;  width: 400px;   padding: 40px;  transform: translate(-50%, -50%);   background: rgba(0,0,0,.5); box-sizing: border-box; box-shadow: 0 15px 25px rgba(0,0,0,.6); border-radius: 10px;">
        <h2>Formulaire</h2>
            <form class="form_user m-5" style="text-align:center;" method="POST" action="insert_into.php">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label" style="color:white;font-weight:bold">TITLE</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                </div>
    
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label" style="color:white;font-weight:bold">SLUG</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" required>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom05" class="form-label" style="color:white;font-weight:bold">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="description">
                    
                </div>
    
                <div class="col-md-4 mt-2">
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                </div>
</div>
</form>
    
</body>
</html>