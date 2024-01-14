<?php
	session_start();
	require_once 'bd.php';
 
	if(ISSET($_POST['submit'])){
		if( $_POST['names'] !='' || $_POST['tel'] !='' || $_POST['pass'] !=''){
			try{
                $names=$_POST['names'];
                $tel=$_POST['tel'];
                $password=$_POST['password'];
            
    
                $stmt = array( 'names' => $names, 
                'tel' => $tel, 
                      'password' => $password,
                      
                     ); 
    
                $sql = "INSERT INTO  user (names, tel, password)
                        values (
                            :names, :tel, :password
                        );";
                $result = $bd->prepare($sql);
                $result->execute($stmt);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$conn = null;
			header('location: Редакция.php');
		}else{
			echo "'Пожалуйста повторите попытку";
		}
	}
?>