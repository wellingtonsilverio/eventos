<?php
include 'tokens.class.php';
include 'util.class.php';

class Users{
	private $id;
	private $email;
	private $pass;
	private $name;
	private $cpf;
	private $mysql;
    private $objTokens;
    private $objUtil;

	public function Users($objConn){
		$this->mysql = $objConn->getInstance();

        $this->objTokens = new Tokens($objConn);
        $this->objUtil = new Util();
	}

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    private function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass = sha1($pass);
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

	public function populateUsers($email,$pass,$name,$cpf){
		$this->setEmail($email);
		$this->setPass($pass);
		$this->setName($name);
		$this->setCpf($cpf);

		return $this;
	}
	public function populatePassUsers($pass){
		$this->setPass($pass);

		return $this;
	}

    public function getUsers(){
    	$selectUsers = $this->mysql->prepare("SELECT * FROM `users`");
    	$selectUsers->execute();

    	$i = 0;
    	$arrayUser[$i] = null;
    	while($user = $selectUsers->fetch(PDO::FETCH_ASSOC)){
    		$arrayUser[$i] = $user;
    		$i++;
    	}

    	return $arrayUser;
    }
    public function getUserForId($id){
    	$selectUsers = $this->mysql->prepare("SELECT * FROM `users` WHERE `id` = ?");
    	$selectUsers->execute(array($id));

    	return $selectUsers->fetch(PDO::FETCH_ASSOC);
    }
    public function getUserForEmail($email){
        $selectUsers = $this->mysql->prepare("SELECT * FROM `users` WHERE `email` = ?");
        $selectUsers->execute(array($email));
        
        return $selectUsers->fetch(PDO::FETCH_ASSOC);
    }
    public function login($email, $pass){
        $selectUsers = $this->mysql->prepare("SELECT * FROM `users` WHERE `email` = ? AND `pass` = ?");
        $selectUsers->execute(array($email,sha1($pass)));
        
        if($user = $selectUsers->fetchObject()){
            $this->objTokens->createToken($this->objTokens->populateToken($user->id, date("Y-m-d H:i:s"), php_uname('n'), $this->objUtil->getOS(), $this->objUtil->getBrowser(), $_SERVER['REMOTE_ADDR']));
        }
    }
    public function getUserForCPF($cpf){
    	$selectUsers = $this->mysql->prepare("SELECT * FROM `users` WHERE `cpf` = ?");
    	$selectUsers->execute(array($cpf));
    	
    	return $selectUsers->fetch(PDO::FETCH_ASSOC);
    }
    public function setUser($user){
    	$insertUsers = $this->mysql->prepare("INSERT INTO `users` (`email`, `pass`, `name`, `cpf`) VALUES (?, ?, ?, ?)");
    	return $insertUsers->execute(array($user->getEmail(),$user->getPass(),$user->getName(),$user->getCpf()));
    }
    public function updateUser($id, $user){
    	$insertUsers = $this->mysql->prepare("UPDATE `users` SET `email` = ?, `name` = ?, `cpf` = ? WHERE `users`.`id` = ?");
    	return $insertUsers->execute(array($user->getEmail(),$user->getName(),$user->getCpf(),$id));
    }
    public function updatePassUser($id, $user){
    	$insertUsers = $this->mysql->prepare("UPDATE `users` SET `pass` = ? WHERE `users`.`id` = ?");
    	return $insertUsers->execute(array($user->getPass(),$id));
    }
    public function removeUser($id){
    	$insertUsers = $this->mysql->prepare("DELETE FROM `users` WHERE `users`.`id` = ?");
    	return $insertUsers->execute(array($id));
    }
}