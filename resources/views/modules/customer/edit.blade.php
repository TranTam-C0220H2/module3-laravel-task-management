<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
<div class="container">
    <?php if ($id == 1): ?>
    <form method="post" action="customer/1/update">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="number" name="id" class="form-control" value="1" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="name" class="form-control" value="Nguyễn Văn A">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" value="01234567890">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" value="email.test@mail.com">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    <?php elseif ($id == 2): ?>
    <form method="post" action="update">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="number" name="id" class="form-control" value="2" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="name" class="form-control" value="Nguyễn Văn B">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" value="01234567890">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" value="email.test@mail.com">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    <?php elseif ($id == 3): ?>
    <form method="post" action="update">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="number" name="id" class="form-control" value="3" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="name" class="form-control" value="Nguyễn Văn C">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" value="01234567890">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" value="email.test@mail.com">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    <?php elseif ($id == 4): ?>
    <form method="post" action="update">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="number" name="id" class="form-control" value="4" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="name" class="form-control" value="Nguyễn Văn D">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" value="01234567890">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" value="email.test@mail.com">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    <?php elseif ($id == 5): ?>
    <form method="post" action="update">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">ID</label>
            <input type="number" name="id" class="form-control" value="5" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="name" class="form-control" value="Nguyễn Văn E">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" value="01234567890">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" value="email.test@mail.com">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
    <?php endif;?>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>
