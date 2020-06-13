<?php 
require "database.php";
Class User
{
	public $name;
	public $surname;
	public $role;
	public $lang;
	function __construct($name, $surname, $role, $lang)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->role = $role;
		$this->lang = $lang;
	}
	public function hello()
	{
		echo "Hello, " .$this->name. "  " .$this->surname. "! You are logged in as " .$this->role.". ";
	}
	public function privet()
	{
		echo "Здравствуйте, " .$this->name. "  " .$this->surname. "! Вы вошли как " .$this->role.". ";
	}
	public function vitaiu()
	{
		echo "Вітаю, " .$this->name. "  " .$this->surname. "! Ви залогінились як " .$this->role.". ";
	}
	public function salve()
	{
		echo "Salve, " .$this->name. "  " .$this->surname. "! Sei stato registrato come " .$this->role.". ";
	}

}

Class Admin extends User 
{

	public function hello()
	{
		parent::hello();
		echo "It means, you are practically Goddess on this non-existent site. Do whatever you want!";
	}

	public function privet() {
		parent::privet();
		echo "Это значит, Вы практически Боженька на этом несуществующем сайте. Делайте всё, чего пожелаете!";
	}

	public function vitaiu()
	{
		parent::vitaiu();
		echo "Це означає, що свободи на цьому неіснуючому сайті у Вас быльше, ніж у Тараса Григоровича, після звільнення від кріпацтва. Робіть все, чого забажаєте!";
	}

	public function salve()
	{
		parent::salve();
		echo "Significa che sei praticamente una Dea in questo sito inesistente. Fai quello che vuoi!";
	}
}
Class Manager extends User 
{

	public function hello()
	{
		parent::hello();
		echo "(But we're still too poor a company to afford a manager).";
	}

	public function privet() {
		parent::privet();
		echo "(Но мы всё ещё слишком нищая компания, чтобы позволить себе менеджера).";
	}

	public function vitaiu()
	{
		parent::vitaiu();
		echo "(Але попєрєднікі вкрали усі кошти із держбюджету, тому ми не можемо дозволити собі найняти менеджера).";
	}

	public function salve()
	{
		parent::salve();
		echo "(Ma siamo ancora un'azienda troppo povera per permetterci un manager).";
	}
}
Class Client extends User 
{

	public function hello()
	{
		parent::hello();
		echo "On this site you are a regular user (client). There is still nothing to use, but now you can change the language :)";
	}

	public function privet() {
		parent::privet();
		echo "На этом сайте Вы обычный юзер(клиент). Юзать всё ещё нечего, но теперь тут можно менять язык :)";
	}

	public function vitaiu()
	{
		parent::vitaiu();
		echo "На цьому сайті Ви звичайний козак. Робити тут нічого, як в дикому степу, хіба що змінити мову, але то буде зрада! Посадять на виляку >:(";
	}

	public function salve()
	{
		parent::salve();
		echo "Su questo sito sei un utente normale (client). Non c'è ancora niente da usare, ma ora puoi cambiare la lingua :)";
	}
}

?>