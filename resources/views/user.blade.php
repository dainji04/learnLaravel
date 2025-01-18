<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>

<body>
    <h1>Điền thông tin của bạn</h1>

    <form action="{{ route('submit.form') }}" method="POST">
        @csrf <!-- Token bảo mật của Laravel -->

        <label for="name">Tên:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <button type="submit">Gửi</button>
    </form>
</body>

</html>