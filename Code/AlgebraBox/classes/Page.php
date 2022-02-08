<?php session_start();

	require "AuthSystem.php";

	abstract class Page
	{
		public $_authenticator;
		public $_database;
		
		public function __construct()
		{
			$dsn = "mysql:host=localhost;dbname=box";
			$user = "root";
			$pass = "";
			
			$this->_authenticator = new AuthSystem($dsn, $user, $pass, null);
			
			$this->_database = new PDO($dsn, $user, $pass, null);
		}
		
		public function Display($title)
		{
			if($this->PageRequiresAuthenticUser() && !$this->UserIsAuthenticated())
				$this->BackToLanding();
			
			
			print('<!DOCTYPE html>');
			print('<html lang="hr">');
			print($this->GetHead($title));
			print('<body>');
			print($this->GetNavigation());
			print($this->GetContent());
			print('</body>');
			print('</html>');
		}
		
		public function BackToLanding()
		{
			header("Location: index.php");
		}
		
		private function UserIsAuthenticated()
		{
			return $this->_authenticator->UserIsAuthentic();
		}
		
		private function GetHead($title)
		{
			$output = '';
			$output .= '<head>';
			$output .= '<meta charset="utf-8">';
			$output .= '<title>'.$title.'</title>';
			$output .= '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';
                        $output .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';
			$output .= '</head>';
			
			return $output;
		}
		
		private function GetNavigation()
		{
			$output = "";
			
			$output .= "<ul>";
			$output .= '<li><a href="index.php">Pocetna</a></li>';
			
			if($this->UserIsAuthenticated())
			{
				$output .= '<li><a href="moje.php">Moje datoteke</a></li>';
				$output .= '<li><a href="postavke.php">Moje postavke</a></li>';
				$output .= '<li><a href="odjava.php">Odjava</a></li>';
			}
			else
			{
				$output .= '<li><a href="prijava.php">Prijava</a></li>';
				$output .= '<li><a href="registracija.php">Registracija</a></li>';
			}
			$output .= "</ul>";
			return $output;
		}
				
		abstract protected function PageRequiresAuthenticUser();
		
		abstract protected function GetContent();
	}