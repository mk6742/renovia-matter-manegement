<?php
require_once(__DIR__ . "/api/init.php");
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($id) && !empty($password)) {
        // 認証情報を組み立て（FileMaker セキュリティのアカウント名とパスワード）
        $AUTH = base64_encode("$id:$password");

        // FileMakerにログイン（トークン取得）
        $token = $curlclass->login($URL, $DB, $AUTH);

        if ($token) {
            // トークン取得できた＝認証成功
            $_SESSION['user'] = [
                'id' => $id,
                'auth' => $AUTH,
                'token' => $token
            ];
            header("Location: matter.php");
            exit;
        } else {
            $error = "ログインに失敗しました。アカウント名またはパスワードが正しくありません。";
        }
    } else {
        $error = "アカウント名とパスワードを入力してください。";
    }
}
?>
<?php
$title = 'ログイン';
$description = '';
include('component/header.php');
?>

<body>
    <main class="p-login">
        <div class="p-login__panel">
            <div class="p-login__panel__heading">
                <p>Renovia顧客管理システム</p>
                <h1>Login</h1>
            </div>
            <form method="POST">
                <label>
                    <span>ユーザー名</span>
                    <input type="text" name="id" required>
                </label>
                <label>
                    <span>パスワード</span>
                    <div class="password-wrap">
                        <input type="password" name="password" required>
                        <i id="eye" class="fa-solid fa-eye-slash"></i>

                        <script>
                            let eye = document.getElementById("eye");
                            eye.addEventListener('click', function() {
                                if (this.previousElementSibling.getAttribute('type') == 'password') {
                                    this.previousElementSibling.setAttribute('type', 'text');
                                    this.classList.toggle('fa-eye');
                                    this.classList.toggle('fa-eye-slash');
                                } else {
                                    this.previousElementSibling.setAttribute('type', 'password');
                                    this.classList.toggle('fa-eye');
                                    this.classList.toggle('fa-eye-slash');
                                }
                            })
                        </script>
                    </div>
                </label>
                <button type="submit">Login</button>
            </form>
            <?php if ($error): ?>
                <p class="error"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>