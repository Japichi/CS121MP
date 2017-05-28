<?php 
	class Model_users extends CI_Model{


		function_construct(){
			
		}

		public function register($data){
			$id = foreach()
					setUserId();
			setUsername($data[0]);

		}

		function getUserID($data){
			$doc = new DomDocument();
			$doc->load("profile.xml");
			$profileDatabase = $doc->getElementsByTagName("profileDatabase");
			$xml-> $profileDatabase->getElementsByTagName("profile");
			$iterator;
			for ($i=0; (($xml->item($i)->getElementsByTagName("username")[0]->nodeValue)!=$data; $i++) {
	   			$iterator = $i;
	   			$xml-> $profileDatabase->getElementsByTagName("profile");
	   		} 
	   		$xml-> $profileDatabase->getElementsByTagName("profile");
	   		return $xml->item($iterator)->getElementsByTagName("username")[0]->nodeValue;	}

		}
		function checkUserExist($user,$pass){
			$xuser;
			$xpass
			$doc = new DomDocument();
			$doc->load("profile.xml");
			$profileDatabase = $doc->getElementsByTagName("profileDatabase");
			$xml-> $profileDatabase->getElementsByTagName("profile");
				foreach($xml->profile as $profile){
					if(((string)$profile->username))
				}

		}
		function setUserID(){}
		function getUsername(){}
		function setUsername(){}
		function getPassword(){}
		function setPassword(){}
		function getEmail(){}
		function setEmail(){}
	

		function getExpirationDate(){}
		function setExpirationDate(){}
		function getSecurityCode(){}
		function setSecurityCode(){}
		function getFirstName(){}
		function setFirstName(){}
		function getLastName(){}
		function setLastName(){}
		function getCity(){}
		function setCity(){}
		function getBillingAddress(){}
		function setBillingAddress(){}
		function getZipCode(){}
		function setZipCode(){}
		function getSecondaryBillingAddress{}
		function setSecondaryBillingAddress{}
		function getCountry(){}
		function setCountry(){}
		function getPhoneNumber(){}
		function setPhoneNumber(){}
		function getDisplayPicture(){}
		function setDisplayPicture(){}

		function getDisplayPicture(){}
		function setDisplayPicture(){}
		function getDisplayName(){}
		function setDisplayName(){}
		function getRealName(){}
		function setRealName(){}
		function getUserLocation(){}
		function setUserLocation(){}
		function getUserBio(){}

		function getGamesOwnedCounter(){}
		function setGamesOwnedCounter(){}
		function getGamesOwnedGameID(){}
		function setGamesOwnedGameID(){}

		function getWishListCounter(){}
		function setWishListCounter(){}
		function getWishListGameID(){}
		function setWishListGameID(){} 
	}
?>