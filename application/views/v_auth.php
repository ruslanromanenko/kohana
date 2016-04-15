<? if(isset($error)){?>
	<p style="text-align:center;color:red">
		Логин или пароль введен неверно.
	</p>
<?}?>


<form action="" method="POST">
			<table class="login">
				<tr>
					<th colspan="2" style="padding-bottom:10px;">Авторицация</th>
				</tr>
				<tr>
					<td>Логин:</td>
					<td><input type="text" name="login"></td>
				</tr>
				<tr>
					<td>Пароль:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<th colspan="2" style="text-align:right;"><input type="submit" value="Войти" style="width:170px;height:30px" name="btnsubmit" ></th>
			</table>
</form>