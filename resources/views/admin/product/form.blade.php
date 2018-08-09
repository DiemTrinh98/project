<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>

<div class="container">
    <div class="row" style="margin-top: 30px">
        <h1>Enter product information</h1>
    </div>
    <div>

        <a href="/admin/product" style="margin-left: 10px;"><i class="fas fa-list-alt"></i>List</a>
        <div class="clearfix"></div>
    </div>
    <div class="row" style="margin-top: 30px">
        <form action="/admin/product" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Image: </label>
                <input type="text" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label>Description: </label>
                <textarea rows="4" cols="50" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Price: </label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Category: </label>
                <select name="categoryId" class="form-control">
                    <option value="1">Nhẫn</option>
                    <option value="2">Mặt dât chuyền</option>
                    <option value="3">Bông tai</option>
                    <option value="4">Dây chuyền</option>
                    <option value="5">Lắc và vòng tay</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="margin-top: 25px; margin-right: 150px">Submit
                </button>
                <button type="reset" class="btn btn-dark" style="margin-top: 25px">Reset</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>