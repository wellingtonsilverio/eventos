<?php
class Tokens{
	private $id;
	private $user;
	private $data_create;
	private $data_access;
	private $pc_name;
	private $pc_os;
	private $pc_browser;
	private $ip;
	private $mysql;

	public function Tokens($objConn){
		$this->mysql = $objConn->getInstance();
	}

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getDataCreate()
    {
        return $this->data_create;
    }
    public function setDataCreate($data_create)
    {
        $this->data_create = $data_create;
    }

    public function getDataAccess()
    {
        return $this->data_access;
    }
    public function setDataAccess($data_access)
    {
        $this->data_access = $data_access;
    }

    public function getPcName()
    {
        return $this->pc_name;
    }
    public function setPcName($pc_name)
    {
        $this->pc_name = $pc_name;
    }

    public function getPcOs()
    {
        return $this->pc_os;
    }
    public function setPcOs($pc_os)
    {
        $this->pc_os = $pc_os;
    }

    public function getPcBrowser()
    {
        return $this->pc_browser;
    }
    public function setPcBrowser($pc_browser)
    {
        $this->pc_browser = $pc_browser;
    }

    public function getIp()
    {
        return $this->ip;
    }
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function populateToken($user,$dataAccess,$pcName,$pcOs,$pcBrowser,$ip){
    	$this->setId(ceil((rand(1,99)*date('mdis'))/rand(1,99)));
    	$this->setUser($user);
    	$this->setDataAccess($dataAccess);
    	$this->setPcName($pcName);
    	$this->setPcOs($pcOs);
    	$this->setPcBrowser($pcBrowser);
    	$this->setIp($ip);

    	return $this;
    }

    public function createToken($token){
    	$insertToken = $this->mysql->prepare("INSERT INTO `tokens`(`id`, `user`, `date_access`, `pc_name`, `pc_os`, `pc_browser`, `ip`) VALUES (?,?,?,?,?,?,?)");
    	return $insertToken->execute(array($token->getId(),$token->getUser(),$token->getDataAccess(),$token->getPcName(),$token->getPcOs(),$token->getPcBrowser(),$token->getIp()));
    }
    public function checkTokenForUserId($userId){
    	$selectToken = $this->mysql->prepare("SELECT * FROM `tokens` WHERE `user` = ? ORDER BY `date_create` DESC");
    	$selectToken->execute(array($userId));
    	if($token = $selectToken->fetchObject()){
    		if(strtotime($token->date_create. ' +5 day') > strtotime(date('Y-m-d H:m:s'))){
    			return $token->user;
    		}
    	}
    	return 0;
    }
    public function checkTokenForToken($id){
		$selectToken = $this->mysql->prepare("SELECT * FROM `tokens` WHERE `id` = ? ORDER BY `date_create` DESC");
    	$selectToken->execute(array($id));
    	if($token = $selectToken->fetchObject()){
    		if(strtotime($token->date_create. ' +5 day') > strtotime(date('Y-m-d H:m:s'))){
    			return $token->user;
    		}
    	}
    	return 0;
    }
}
?>