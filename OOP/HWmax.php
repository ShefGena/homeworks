<?php
class ContactForm
{
	public $login;	
	public $message;
	
	public function validate_login(){
		if (preg_match('/[^а-яА-Яa-zA-Z]/', $this->login)){
			echo "Vvedite korrektniy login";
			exit;
		}
	}

	public function validate_messge(){
		$this->message = htmlspecialchars(trim($this->message));
	}
	
	public function saveCont(){
		$newMes['log'] = $this->login;
		$newMes['mes'] = $this->message;
		$baza[] = $newMes;
		$bazaDB = serialize($baza);
		file_put_contents("messages.db", $bazaDB);
	}
	
}
if($_POST){
	if($_POST['login'] AND $_POST['message']){
		$mes = new ContactForm;
		$mes->login = $_POST['login'];
		$mes->message = $_POST['message'];
		$mes->validate_login();
		$mes->validate_messge();
		$mes->saveCont();
		//$mes->validate_form();
	}else{
		header( 'Refresh: 3;');
		echo "Zapolnite vse polya";
		exit;
	}
}
?>

<form method="POST" action="">
	<input type="text" name = "login" placeholder="Login">
    <input type="text" name = "message" placeholder="Message">
	<input type="submit">
</form>