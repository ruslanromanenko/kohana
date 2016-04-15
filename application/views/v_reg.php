<?if(isset($regok)){?>
	<p style="text-align:center;color:green;">
		Регистрация прошла успешно
	</p>
<?if(isset($error)){?>
	<p style="text-align:center;color:red;">
		Ошибка при регистрации
	</p>

<form action="" method="POST">
			<table class="login" style = "background-color:#DDA0DD;">
				<tr>
					<th colspan="2" style="padding-bottom:10px;">Регистрация пользователя</th>
				</tr>
				<tr>
					<td style="text-align:right">Эл. почта:</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Секретный код:</td>
					<td><input type="password" name="regcodevalue"></td>
				</tr>
				<th colspan="2" style="text-align:right;"><input type="submit" value="Зарегестрироваться" style="width:170px;height:30px" name="btnsubmit" ></th>
			</table>
</form>