<?php
$secret = "6LfHnectAAAAAKNpqnPeaRbBFAyPncOUlpBcTcAM";
$response = $_POST["g-recaptcha-response"];

$verify = file_get_contents(
  "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}"
);

$captcha = json_decode($verify);

if ($captcha->success) {
    echo "reCAPTCHA OK → ログイン処理へ";
} else {
    echo "reCAPTCHA 失敗 → ログイン拒否";
}
