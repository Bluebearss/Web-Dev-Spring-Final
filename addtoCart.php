<?php
	$connection = new PDO("mysql:hostname=localhost;dbname=brian_zhu","root","");
	
	if ($_GET["item"] == "roses")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('roses',10)";
	}
	
	if ($_GET["item"] == "tulips")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('tulips',15)";
	}
	
	if ($_GET["item"] == "daffodils")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('daffodils',18)";
	}
	
	if ($_GET["item"] == "orchid")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('orchid',20)";
	}
	
	if ($_GET["item"] == "sunflower")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sunflower',10)";
	}
	
	if ($_GET["item"] == "poppy")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('poppy',20)";
	}
	
	if ($_GET["item"] == "dahlia")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dahlia',30)";
	}
	
	if ($_GET["item"] == "jasmine")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('jasmine',25)";
	}
	
	if ($_GET["item"] == "lotus")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('lotus',40)";
	}
	
	if ($_GET["item"] == "periwinkle")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('periwinkle',100)";
	}
	
	if ($_GET["item"] == "tomato")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('tomato',2)";
	}
	
	if ($_GET["item"] == "green beans")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('green beans',2)";
	}
	
	if ($_GET["item"] == "corn")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('corn',3)";
	}
	
	if ($_GET["item"] == "watermelon")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('watermelon',3)";
	}
	
	if ($_GET["item"] == "peach")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('peach',1)";
	}
	
	if ($_GET["item"] == "dragonfruit")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dragonfruit',4)";
	}
	
	if ($_GET["item"] == "pineapple")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pineapple',5)";
	}
	
	if ($_GET["item"] == "apple")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('apple',1)";
	}
	
	if ($_GET["item"] == "pumpkin")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pumpkin',4)";
	}
	
	if ($_GET["item"] == "eggplant")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('eggplant',2)";
	}
	
	if ($_GET["item"] == "rice")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('rice',3)";
	}
	
	if ($_GET["item"] == "pasta")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pasta',4)";
	}
	
	if ($_GET["item"] == "beans")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('beans',3)";
	}
	
	if ($_GET["item"] == "cereal")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('cereal',5)";
	}
	
	if ($_GET["item"] == "trail mix")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('trail mix',4)";
	}
	
	if ($_GET["item"] == "nut butter")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('nut butter',3)";
	}
	
	if ($_GET["item"] == "dried orange")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dried orange',2)";
	}
	
	if ($_GET["item"] == "dried plum")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dried plum',2)";
	}
	
	if ($_GET["item"] == "dried raisins")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dried raisins',2)";
	}
	
	if ($_GET["item"] == "dried banana")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('dried banana',2)";
	}
	
	if ($_GET["item"] == "squid")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('squid',30)";
	}
	
	if ($_GET["item"] == "snails")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('snails',10)";
	}
	
	if ($_GET["item"] == "lobster")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('lobster',30)";
	}
	
	if ($_GET["item"] == "crab")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('crab',20)";
	}
	
	if ($_GET["item"] == "shrimp")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('shrimp',15)";
	}
	
	if ($_GET["item"] == "salmon")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('salmon',30)";
	}
	
	if ($_GET["item"] == "tuna")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('tuna',25)";
	}
	
	if ($_GET["item"] == "shark")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('shark',50)";
	}
	
	if ($_GET["item"] == "cod")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('cod',40)";
	}
	
	if ($_GET["item"] == "scallop")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('scallop',15)";
	}
	
	if ($_GET["item"] == "bacon")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('bacon',8)";
	}
	
	if ($_GET["item"] == "steak")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('steak',15)";
	}
	
	if ($_GET["item"] == "salami")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('salami',7)";
	}
	
	if ($_GET["item"] == "sausage")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sausage',6)";
	}
	
	if ($_GET["item"] == "lamb chop")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('lamb chop',13)";
	}
	
	if ($_GET["item"] == "prime rib")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('prime rib',11)";
	}
	
	if ($_GET["item"] == "t-bone")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('t-bone',16)";
	}
	
	if ($_GET["item"] == "sirloin")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sirloin',7)";
	}
	
	if ($_GET["item"] == "pork belly")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pork belly',2)";
	}
	
	if ($_GET["item"] == "meatloaf")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('meatloaf',10)";
	}
	
	if ($_GET["item"] == "milk")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('milk',13)";
	}
	
	if ($_GET["item"] == "cream cheese")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('cream cheese',2)";
	}
	
	if ($_GET["item"] == "eggs")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('eggs',3)";
	}
	
	if ($_GET["item"] == "yogurt")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('yogurt',5)";
	}
	
	if ($_GET["item"] == "butter")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('butter',2)";
	}
	
	if ($_GET["item"] == "cottage cheese")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('cottage cheese',2)";
	}
	
	if ($_GET["item"] == "ice cream")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('ice cream',10)";
	}
	
	if ($_GET["item"] == "whey")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('whey',60)";
	}
	
	if ($_GET["item"] == "pudding")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pudding',1)";
	}
	
	if ($_GET["item"] == "sour cream")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sour cream',2)";
	}
	
	if ($_GET["item"] == "barbera d' asti")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('barbera d' asti',15)";
	}
	
	if ($_GET["item"] == "gavi")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('gavi',30)";
	}
	
	if ($_GET["item"] == "piropo")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('piropo',10)";
	}
	
	if ($_GET["item"] == "baluarte verdejo")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('baluarte verdejo',12)";
	}
	
	if ($_GET["item"] == "castano")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('castano',9)";
	}
	
	if ($_GET["item"] == "the cork grove")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('the cork grove',13)";
	}
	
	if ($_GET["item"] == "alma")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('alma',20)";
	}
	
	if ($_GET["item"] == "vivanco")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('vivanco',16)";
	}
	
	if ($_GET["item"] == "monte faliesi")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('monte faliesi',45)";
	}
	
	if ($_GET["item"] == "laurenz v.")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('laurenz v.',25)";
	}
	
	if ($_GET["item"] == "loaf of bread")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pork belly',26)";
	}
	
	if ($_GET["item"] == "tortilla")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('tortilla',2)";
	}
	
	if ($_GET["item"] == "pizza crust")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pizza crust',3)";
	}
	
	if ($_GET["item"] == "pie crust")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pie crust',20)";
	}
	
	if ($_GET["item"] == "cinnamon buns")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('cinnamon buns',6)";
	}
	
	if ($_GET["item"] == "breadsticks")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('breadsticks',25)";
	}
	
	if ($_GET["item"] == "croutons")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('croutons',2)";
	}
	
	if ($_GET["item"] == "taco shells")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('taco shells',2)";
	}
	
	if ($_GET["item"] == "strawberry cake")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('strawberry cake',3)";
	}
	
	if ($_GET["item"] == "chocolate muffins")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('chocolate muffins',24)";
	}
	
	if ($_GET["item"] == "potato salad")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('potato salad',5)";
	}
	
	if ($_GET["item"] == "sushi")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sushi',10)";
	}
	
	if ($_GET["item"] == "fried chicken")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('fried chicken',10)";
	}
	
	if ($_GET["item"] == "sandwich")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('sandwich',6)";
	}
	
	if ($_GET["item"] == "american cheese")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('american cheese',5)";
	}
	
	if ($_GET["item"] == "bagel")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('bagel',3)";
	}
	
	if ($_GET["item"] == "pizza")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('pizza',4)";
	}
	
	if ($_GET["item"] == "hot dog")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('hot dog',2)";
	}
	
	if ($_GET["item"] == "hamburger")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('hamburger',6)";
	}
	
	if ($_GET["item"] == "meatballs")
	{
		$command = "INSERT INTO `cart`(`item`, `price`) VALUES ('meatballs',10)";
	}
	
	$result = $connection->prepare($command);
	
	$result->execute();
	
	$data = $result->fetchAll(PDO::FETCH_NUM);
	
	echo json_encode($data);
?>