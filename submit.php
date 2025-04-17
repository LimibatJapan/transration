<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $name = htmlspecialchars($_POST['name']);  // 名前
    $email = htmlspecialchars($_POST['email']);  // メールアドレス
    $phone = htmlspecialchars($_POST['phone']);  // 電話番号（任意）
    $plan = htmlspecialchars($_POST['plan']);  // プラン選択
    $subPlan = htmlspecialchars($_POST['subPlan']);  // サブプラン選択
    $notes = htmlspecialchars($_POST['notes']);  // 備考欄（任意）

    // 送信先メールアドレス（ここにあなたのメールアドレスを設定）
    $to = "limibat.a.k@gmail.com;  // 送信先のメールアドレスを設定
    $subject = "新しい申し込みがありました";  // メールの件名

    // メールの内容
    $message = "新しい申し込みがあります\n\n";
    $message .= "氏名: $name\n";
    $message .= "メールアドレス: $email\n";
    $message .= "電話番号: $phone\n";
    $message .= "選択したプラン: $plan\n";
    $message .= "サブプラン: $subPlan\n";
    $message .= "備考: $notes\n";

    // メールヘッダー（送信元のメールアドレス）
    $headers = "From: no-reply@example.com";

    // メール送信
    if (mail($to, $subject, $message, $headers)) {
        echo "申し込みが正常に送信されました。";  // 送信成功メッセージ
    } else {
        echo "申し込みの送信に失敗しました。";  // 送信失敗メッセージ
    }
}
?>
