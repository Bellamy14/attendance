<?php

    class crud{

            private $db;

            function __construct($conn){
                $this->db = $conn;
            }


                public function insertAttendees($firstname, $lastname, $dateofbirth, $emailaddress, $contactnumber, $specialty){

                        try {

                            $sql = " INSERT INTO attendee( firstname, lastname, dateofbirth, emailaddress, contactnumber, specialty_Id) VALUES (:firstname, :lastname, :dateofbirth, :emailaddress, :contactnumber, :specialty)";
                            $stmt = $this->db->prepare($sql);


                            $stmt->bindparam(':firstname', $firstname);
                            $stmt->bindparam(':lastname', $lastname);
                            $stmt->bindparam(':dateofbirth', $dateofbirth);
                            $stmt->bindparam(':emailaddress', $emailaddress);
                            $stmt->bindparam(':contactnumber', $contactnumber);
                            $stmt->bindparam(':specialty', $specialty);
                            

                            $stmt->execute();
                            return true;


                        } catch (PDOException $e) {
                            //throw $th;
                            echo $e->getMessage();
                            return false;

                        }

                }
            



                public function editAttendee($id,$firstname, $lastname, $dateofbirth, $emailaddress, $contactnumber, $specialty){
                    $sql = "UPDATE  `attendee` SET `firstname`=:firstname,`lastname`=:lastname,`dateofbirth`=:dateofbirth,`emailaddress`=:emailaddress,`contactnumber`=:contactnumber,`specialty_Id`=:specialty WHERE attendee_id= :id";

                    try {
                        
                        $stmt = $this->db->prepare($sql);


                        $stmt->bindparam(':id', $id);
                        $stmt->bindparam(':firstname', $firstname);
                        $stmt->bindparam(':lastname', $lastname);
                        $stmt->bindparam(':dateofbirth', $dateofbirth);
                        $stmt->bindparam(':emailaddress', $emailaddress);
                        $stmt->bindparam(':contactnumber', $contactnumber);
                        $stmt->bindparam(':specialty', $specialty);

                        $stmt->execute();
                        return true;


                    } catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;

                    }

                }

                public function getAttendee(){
                    try{

                        $sql= "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = 
                s.specialty_id;";

                $result=$this->db->query($sql);
                return $result;

                    }

                    catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;

                    }
                
            }



            public function getAttendeeDetails($id){
                
                try{ 

                    $sql = "SELECT * FROM attendee a inner join specialties s on a.specialty_id = s.specialty_id where attendee_id = :id;";
                    $stmt=$this->db->prepare($sql);
                    $stmt->bindparam(':id', $id);
                    $stmt->execute();
                    $result = $stmt->fetch(); 
    
                    return $result;

                }catch (PDOException $e) {
                    //throw $th;
                    echo $e->getMessage();
                    return false;

                }
            }


            public function deleteAttendee($id){
                
                try{

                $sql = "delete from attendee where attendee_id = :id;";
                $stmt=$this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                //$result = $stmt->fetch(); 

                return true;
                        
                }catch (PDOException $e) {
                        //throw $th;
                        echo $e->getMessage();
                        return false;
                    }
                
            }


            public function getSpecialties(){
                
                try{

                    $sql = "SELECT * FROM `specialties`;";

                    $result=$this->db->query($sql);
                    return $result;

                }catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;

                }
            }


            public function getSpecialtyById($id){
                
                try{

                    $sql = "SELECT * FROM `specialties` where specialty_id = :id;";
                    $stmt=$this->db->prepare($sql);
                    $stmt->bindparam(':id', $id);
                    $stmt->execute();
                    $result=$stmt->fetch();
                    return $result;

                }catch (PDOException $e) {
                //throw $th;
                echo $e->getMessage();
                return false;
                }

            }

        }







    




?>