<h3> Login </h3>
<style>
body{
	font-family: calibri;
}
.text01{
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
.button01{
	padding: 5px;
	padding-left: 10px;
	padding-right: 10px;
}
</style>
{form_open('user/handler_login')}
{form_input('username_or_email','','placeholder="Username or Email" class="text01"')}
{form_password('password','','placeholder="Password" class="text01"')}
{form_submit('submit','Login','class="button01"')}
{form_close()}
<br>
or <a href="{base_url()}create">Create new account</a>