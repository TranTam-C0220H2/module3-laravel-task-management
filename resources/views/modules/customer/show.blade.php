
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
<div class="container">
    <h1>Danh sách khách hàng</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php if ($id == 1): ?>
            <td scope="row">1</td>
            <td>Nguyễn Văn A</td>
            <td>01234567890</td>
            <td>email.test@mail.com</td>
            <td>
                <a href="1/edit">Sửa</a> | <a href="1/delete">Xóa</a>
            </td>
            <?php elseif ($id == 2): ?>
            <td scope="row">2</td>
            <td>Nguyễn Văn B</td>
            <td>01234567890</td>
            <td>email.test@mail.com</td>
            <td>
                <a href="2/edit">Sửa</a> | <a href="2/delete">Xóa</a>
            </td>
            <?php elseif ($id == 3): ?>
            <td scope="row">3</td>
            <td>Nguyễn Văn C</td>
            <td>01234567890</td>
            <td>email.test@mail.com</td>
            <td>
                <a href="3/edit">Sửa</a> | <a href="3/delete">Xóa</a>
            </td>
            <?php elseif ($id == 4): ?>
            <td scope="row">4</td>
            <td>Nguyễn Văn D</td>
            <td>01234567890</td>
            <td>email.test@mail.com</td>
            <td>
               <a href="4/edit">Sửa</a> | <a href="4/delete">Xóa</a>
            </td>
            <?php elseif ($id == 5): ?>
            <td scope="row">5</td>
            <td>Nguyễn Văn E</td>
            <td>01234567890</td>
            <td>email.test@mail.com</td>
            <td>
                <a href="5/edit">Sửa</a> | <a href="5/delete">Xóa</a>
            </td>
            <?php endif;?>
        </tr>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
