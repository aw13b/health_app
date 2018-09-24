<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<pre>
<?php  

	ini_set('display_errors', 1);
	class subject
	{
		protected $firstName;
		protected $age;
		protected $sex;
		protected $water;
		protected $fruit;
		protected $vegetables;
		protected $day_of_week;
		
		//setters and getters
		public function setFirstName($firstName)
		{
			$this->firstName="$firstName";
		}
		public function setAge($age)
		{
			$this->age="$age";
		}
		public function getAge()
		{
			return $this->age;
		}
		public function setSex($sex)
		{
			$this->sex="$sex";
		}
		public function getSex()
		{
			return $this->sex;
		}
		public function setWater($water)
		{
			$this->water="$water";
		}
		public function getWater()
		{
			return $this->water;
		}
		public function setFruit($fruit)
		{
			$this->fruit="$fruit";
		}
		public function getFruit()
		{
			return $this->fruit;
		}
		public function setVegetables($vegetables)
		{
			$this->vegetables="$vegetables";
		}
		public function getVegetables()
		{
				return $this->vegetables;
		}
		public function setDay($day)
		{
			$this->day="$day";
		}
		public function getDay()
		{
			return $this->day;
		}
		
		public function getWaterServ()
		{
			if($this->age<19)
			{
				if($this->age>=4 and $this->age<=8)
				{
					if($this->water<5)
					{
						return "<div class=\"alert alert-warning\">You're not drinking enough water</div>";
					}
					elseif($this->water==5)
					{
						return "<div class=\"alert alert-success\">You are drinking enough water for your age</div>";
					}
					elseif($this->water>5)
					{
						return "<div class=\"alert alert-danger\">You're drinking too much water</div>";
					}
					else
					{
						return "invalid entry";
					}
				}
				elseif($this->age>=9 and $this->age<=13)
				{
					if($water<7)
					{
						return "<div class=\"alert alert-warning\">You're not drinking enough water</div>";
					}
					elseif($this->water>=7 and $this->water <=8)
					{
						return "You are drinking enough water for your age";
					}
					elseif($this->water>8)
					{
						return "<div class=\"alert alert-danger\">You're drinking too much water</div>";
					}
					else
					{
						return "Invalid entry";
					}
				}
				elseif($this->age>=14 and $this->age<=18)
				{
					if($this->water<8)
					{
						return "<div class=\"alert alert-warning\">You're not drinking enough water</div>";
					}
					elseif($this->water>=8 and $this->water <=11)
					{
						return "<div class=\"alert alert-success\">You are drinking enough water for your age</div>";
					}
					elseif($this->water>11)
					{
						return "<div class=\"alert alert-danger\">You're drinking too much water</div>";
					}
					else
					{
						return "Invalid entry";
					}
				}
					
			}
			elseif($this->age>=19)
			{
				if($this->sex=="male")
				{
					if($this->water<13)
					{
						return "<div class=\"alert alert-warning\">You're not drinking enough water</div>";
					}
					elseif($this->water==13)
					{
						return "<div class=\"alert alert-success\">You are drinking enough water for your age</div>";
					}
					elseif($this->water>13)
					{
						return "<div class=\"alert alert-danger\">You're drinking too much water</div>";
					}
					else
					{
						return "invalid entry";
					}
				}
				elseif($this->sex=="female")
				{
					if($this->water<9)
					{
						return "<div class=\"alert alert-warning\">You're not drinking enough water</div>";
					}
					elseif($this->water==9)
					{
						return "<div class=\"alert alert-success\">You are drinking enough water for your age</div>";
					}
					elseif($this->water>9)
					{
						return "<div class=\"alert alert-danger\">You're drinking too much water</div>";
					}
					else
					{
						return "invalid entry";
					}
				}
			}
			else
			{
				return "No results found.";
			}
		}
		public function getFruitServ()
		{
			if($this->sex=="male" and $this->age>12 or $this->sex=="male" and $this->age<40)
			{
				if($this->fruit<4)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough fruits</div>";
				}
				elseif($this->fruit==4)
				{
					return "<div class=\"alert alert-success\">You eating enough fruits</div>";
				}
				elseif($this->fruit>4)
				{
					return "<div class=\"alert alert-danger\">You're eating too much fruits</div>";
				}
				else
				{
					return "Invalid entry.";
				}
			}
			elseif($this->sex=="female" and $this->age>12 or $this->sex==
			"female" and $thid->age<40 or $this->age>6 and $this->age<13 or $this->sex=="male" and $this->age>=40)
			{
				if($this->fruit<3)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough fruits</div>";
				}
				elseif($this->fruit==3)
				{
					return "<div class=\"alert alert-success\">You eating enough fruits</div>";
				}
				elseif($this->fruit>3)
				{
					return "<div class=\"alert alert-danger\">You're eating too much fruits</div>";
				}
				else 
				{
					return "Invalid entry.";
				}
			}
			elseif($this->age>=2 and $this->age<=6 or $this->sex=="female" and $this->age>=40)
			{
				if($this->fruit<2)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough fruits</div>";
				}
				elseif($this->fruit==2)
				{
					return "<div class=\"alert alert-success\">You eating enough fruits</div>";
				}
				elseif($this->fruit>2)
				{
					return "<div class=\"alert alert-danger\">You're eating too much fruits</div>";
				}
				else 
				{
					return "Invalid entry.";
				}
			}
			else
			{
				return "No results found.";
			}
		}
		public function getVegServ()
		{
			if($this->sex=="male" and $this->age>12 or $this->sex=="male" and $this->age<40)
			{
				if($this->vegetables<5)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough fruits</div>";
				}
				elseif($this->vegetables==5)
				{
					return "<div class=\"alert alert-success\">You eating enough vegetables</div>";
				}
				elseif($this->vegetables>5)
				{
					return "<div class=\"alert alert-danger\">You're eating too much fruits</div>";
				}
				else
				{
					return "Invalid entry.";
				}
			}
			elseif($this->sex=="female" and $this->age>12 or $this->sex==
			"female" and $thid->age<40 or $this->age>6 and $this->age<13 or $this->sex=="male" and $this->age>=40)
			{
				if($this->vegetables<4)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough vegetables</div>";
				}
				elseif($this->vegetables==4)
				{
					return "<div class=\"alert alert-success\">You eating enough vegetables</div>";
				}
				elseif($this->vegetables>4)
				{
					return "<div class=\"alert alert-danger\">You're eating too much vegetables</div>";
				}
				else 
				{
					return "Invalid entry.";
				}
			}
			elseif($this->age>=2 and $this->age<=6 or $this->sex=="female" and $this->age>=40)
			{
				if($this->vegetables<2)
				{
					return "<div class=\"alert alert-warning\">You're not eating enough vegetables</div>";
				}
				elseif($this->vegetables==2)
				{
					return "<div class=\"alert alert-success\">You eating enough vegetables</div>";
				}
				elseif($this->vegetables>2)
				{
					return "<div class=\"alert alert-danger\">You're eating too much vegetables</div>";
				}
				else 
				{
					return "Invalid entry.";
				}
			}
			else
			{
				return "No results found.";
			}
		}
		
	}
	/*
	$p = new subject();
	$p->setAge(6);
	$p->setWater(0);
	$p->setSex("female");
	$p->setFruit(5);
	$p->setVegetables(6);
	echo "$water" .$p->getWater();
	echo"$age " .$p->getAge();
	echo"sex= " .$p->getSex();
	echo "fruit=" .$p->getFruit();
	echo "vegetables=" .$p->getVegetables();
	echo " hellp " .$p->getWaterServ();
	echo "Hello" .$p->getFruitServ();
	echo "Helloep" .$p->getVegServ();
	*/
?>
</body>
</html>