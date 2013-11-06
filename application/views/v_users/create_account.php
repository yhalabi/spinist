<h3> Create Account </h3>
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
{form_open('user/handler_create_account')}
{form_input('username','','placeholder="Username" class="text01"')}
{form_input('email','','placeholder="Email" class="text01"')}
{form_password('password','','placeholder="Password" class="text01"')}
{form_submit('submit','Create','class="button01"')}
{form_close()}
or <a href="{base_url()}login">Login</a>