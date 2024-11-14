<?php
include 'connect.php';

if (isset($_POST['submit'])) {
  echo "Form submitted";
}

if (isset($_POST['submit'])) {
  // 入力のエスケープ処理
  $name = mysqli_real_escape_string($con, $_POST['name']); // mysqli_real_escape_string で SQL インジェクション対策
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // PASSWORD_DEFAULT でハッシュ化

  // SQL文を作成
  $sql = "INSERT INTO crudTable (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";

  // クエリ実行
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";
    // リダイレクト
    // header('location:read.php');
  } else {
    echo "Data not inserted" .
      die(mysqli_error($con));
  }
}
?>

<?php include 'layout/header.php'; ?>


  <div class="container my-5">

    <form method="post">
      <!-- Name -->
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
      </div>

      <!-- Mobile Number -->
      <div class="mb-3">
        <label class="form-label">Mobile Number</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
      </div>

      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

  <!-- original JS -->
  <script src="./build/js/main.js"></script>
</body>

</html>


<?php include 'layout/footer.php'; ?>
