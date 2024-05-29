<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pernikahan</title>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>USERNAME</label>
                            <input type="text"class="form-control" name="username" placeholder="USERNAME"/>
                        </div>
                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="PASSWORD"class="form-control" name="username" placeholder="PASSWORD"/>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">LOGIN</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>