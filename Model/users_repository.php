<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NPUDiscussionForum
 *
 * @author makha_000
 */
class Users {
    private $db;
    
    public function __construct($database) {
	    $this->db = $database;
	}
    
    public function registerUser($firstName, $lastName, $emailID, $password, $cpassword, $phoneNumber, 
            $address, $city, $state, $country) {
        if($password == $cpassword){
        $query = $this->db->prepare("INSERT INTO users (firstName, lastName, emailID, password, phoneNumber, "
                . "address, city, state, country, status, dateRegistered, lastUpdatedBy, lastUpdatedDate) "
                . "VALUES(:firstName,:lastName,:emailID,:password,:phoneNumber,:address,:city,:state,"
                . ":country,:status,:dateRegistered,:lastUpdatedBy,:lastUpdatedDate)");
        $query->bindValue(':firstName', $firstName);
	$query->bindValue(':lastName', $lastName);
	$query->bindValue(':emailID', $emailID);
	$query->bindValue(':password', $password);
	$query->bindValue(':phoneNumber', $phoneNumber);
	$query->bindValue(':address', $address);
        $query->bindValue(':city', $city);
        $query->bindValue(':state', $state);
        $query->bindValue(':country', $country);
        $query->bindValue(':status', 'Active');
        $query->bindValue(':dateRegistered', date('c'));
        $query->bindValue(':lastUpdatedBy', '1000');
        $query->bindValue(':lastUpdatedDate', date('c'));
        $query->execute();
        return true;
        }
        return false;
    }
    
    public function checkUser($loginid, $pwd) {
        $query = $this->db->prepare("SELECT * FROM users WHERE emailID=:id AND password=:pass");
        $query->bindValue(':id', $loginid);
        $query->bindValue(':pass', $pwd);
        $query->execute();
        $user = $query->fetch();
        $query->closeCursor();
        $username = $user['emailID'];
        $pass = $user['password'];
            
        if($username == $loginid && $pass == $pwd){
            return true;
        }
            return false;
    }
    
    public function getUserId(){
        if(isset($_SESSION['currentuser'])){
            $currentuser = $_SESSION['currentuser'];
            $querys = $this->db->prepare("SELECT userID,firstName,lastName from users WHERE emailID = :currentuser");
            $querys->bindValue(':currentuser', $currentuser);
            $querys->execute();
            return $querys->fetch();
        }
    }

    public function changePassword($oldPass, $newPass, $confirmPass){
        if(isset($_SESSION['currentuser'])){
            $currentuser = $_SESSION['currentuser'];
            $querys = $this->db->prepare("SELECT password from users WHERE emailID = :currentuser");
            $querys->bindValue(':currentuser', $currentuser);
            $querys->execute();
            $pass = $querys->fetch();
            if($pass['password'] == $oldPass){
                if($newPass == $confirmPass){
                    $query = $this->db->prepare("UPDATE users SET password = :password WHERE emailID = :currentuser");
                    $query->bindValue(':password', $newPass);
                    $query->bindValue(':currentuser', $currentuser);
                    $query->execute();
                    return true;
                }
            }
            else{
                return false;
            }
        }
    }
}