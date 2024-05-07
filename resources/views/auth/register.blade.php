<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>会員登録</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<header>
			<h1>Atte</h1>
		</header>
		<main>
			<div class="form-wrapper">
				<h2>会員登録</h2>
				<form action="/register" method="POST">
					<div class="input-group">
						<label for="name">名前</label>
						<input type="text" id="name" name="name" required>
					</div>
					<div class="input-group">
						<label for="email">メールアドレス</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div class="input-group">
						<label for="password">パスワード</label>
						<input type="password" id="password" name="password" required>
					</div>
					<div class="input-group">
						<label for="password_confirmation">パスワード(確認用)</label>
						<input type="password" id="password_confirmation" name="password_confirmation" required>
					</div>
					<button type="submit">会員登録</button>
				</form>
				<p>アカウントをお持ちの方はこちらから</p>
				<a href="/login">ログイン</a>
			</div>
		</main>
		<footer>
			<p>&copy; 2024 Atte, inc.</p>
		</footer>
	</div>
</body>

</html>