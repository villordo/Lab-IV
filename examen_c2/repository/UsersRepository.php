<?php namespace repository;

    use repository\IRepository as IRepository;
    use model\User as User;

    class UsersRepository implements IRepository
    {
        private $usersList = array();

        public function add($newUser){
		$this->retrieveData();
        
        array_push($this->usersList, $newUser);
    
		
		$this->saveData();
	   }

        public function getAll(){
            $this->RetrieveData();
            //echo 'getall';
            //var_dump($this->usersList);
            return $this->usersList;
        }
        public function delete($email){
            $this->retrieveData();
            $newList = array();
            foreach ($this->usersList as $user) {
                if($user->getEmail() != $email){
                    array_push($newList, $user);
                }
            }

            $this->usersList = $newList;
            $this->saveData();
        }

        private function SaveData() {
            $arrayToEncode = array();

            foreach($this->usersList as $user)
            {
                $valuesArray["name"] = $user->getName();
                $valuesArray["dni"] = $user->getDNI();
                $valuesArray["birthdate"] = $user->getBirthdate();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["pass"] = $user->getPass();

                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            
            file_put_contents('data/users.json', $jsonContent);
        }

        private function RetrieveData() {
            $this->usersList = array();

            if(file_exists('data/users.json'))
            {
                $jsonContent = file_get_contents('data/users.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray)
                {

                    $user = new User($valuesArray["email"], $valuesArray["pass"], $valuesArray["name"], $valuesArray["dni"], $valuesArray["birthdate"]);

                    array_push($this->usersList, $user);

                }
            }
        }
    }
?>