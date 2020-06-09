
<!DOCTYPE html> 
	<html> 

	 <style>
		body {
	  		background-image: linear-gradient(lightblue, white);
	  		text-align:center;
	  		font-family: arial;
	  		height: 100%;
		    margin: 0;
		    background-repeat: no-repeat;
		    background-attachment: fixed;
		}
		#button {
			color: #1D9AF2;
			border: 1px solid #1D9AF2;
			border-radius: 8px;
			padding: 15 30px;
			cursor: pointer;
			height:32px;
			font-size:24px;
			transition: all 0.2s ease-in-out;
		}
		#button:hover {
			transform: scale(1.1);
		}
		select {
		  padding: 4px 4px;
		  border-radius: 4px;
		  background-color: #f1f1f1;
		}
		input[type=text] {
 			border-radius: 4px;
 			padding: 3px 10px
		}
		input[type=text]:focus {
 			background-color: #ccf7c3;
 			border: 4px black;
		}
		h3 {
  			text-decoration-color: black;
		}
		
		label {
			padding: 4px 4px;
		}
	</style>

		<head> 
		    <title> 
		        Akshay's USPS Label Generator
		    </title> 
		  
			<body> 
			      
			    <h1 style="color:green;"> 
			        Akshay's USPS Label Generator 
			    </h1> 
			      
			    <h4> 
			        Enter your shipping information below to print your USPS label. 
			    </h4> 
			    
			    <form method="post"> 
			    	<div id = "box1">
		    		<h2 style="color:green; text-decoration: underline"> Sender <h2> <br>
		    		<label for="sCompany">Company name:</label>
					<input type="text" id="sCompany" name="sCompany" value=<?php if(isset($_POST["sCompany"])) echo $_POST["sCompany"]; ?>>
					<label for="sStreet1">Street:</label>
					<input type="text" id="sStreet1" name="sStreet1" value=<?php if(isset($_POST["sStreet1"])) echo $_POST["sStreet1"];?>>
					<label for="sStreet2">Street2:</label>
					<input type="text" id="sStreet2" name="sStreet2" value=<?php if(isset($_POST["sStreet2"])) echo $_POST["sStreet2"];?>><br><br>
					<label for="sCity">City:</label>
					<input type="text" id="sCity" name="sCity" value=<?php if(isset($_POST["sCity"])) echo $_POST["sCity"]; ?>>
					<label for="sStates">State:</label>
					<input type="text" id="sState" name="sState" value=<?php if(isset($_POST["sState"])) echo $_POST["sState"]; ?>>
					<label for="sZip">ZIP code:</label>
					<input type="text" id="sZip" name="sZip" value=<?php if(isset($_POST["sZip"])) echo $_POST["sZip"]; ?>>
					<label for="sPhone">Phone #:</label>
					<input type="text" id="sPhone" name="sPhone" value=<?php if(isset($_POST["sPhone"])) echo $_POST["sPhone"]; ?>>
			    	</div>
						<br>

					<div id = "box1"> 
					<h2 style="color:green; text-decoration: underline"> Recipient <h2> <br>
					<label for="rName">Full name:</label>
					<input type="text" id="rName" name="rName" value=<?php if(isset($_POST["rName"])) echo $_POST["rName"]; ?>>
					<label for="rStreet1">Street:</label>
					<input type="text" id="rStreet1" name="rStreet1" value=<?php if(isset($_POST["rStreet1"])) echo $_POST["rStreet1"]; ?>>  
					<label for="rCity">City:</label>
					<input type="text" id="rCity" name="rCity" value=<?php if(isset($_POST["rCity"])) echo $_POST["rCity"]; ?>>
					<label for="rState">State:</label>
					<input type="text" id="rState" name="rState" value=<?php if(isset($_POST["rState"])) echo $_POST["rState"]; ?>><br><br>
					<label for="rZip">ZIP code:</label>
					<input type="text" id="rZip" name="rZip" value=<?php if(isset($_POST["rZip"])) echo $_POST["rZip"]; ?>>
					<label for="rPhone">Phone #:</label>
					<input type="text" id="rPhone" name="rPhone" value=<?php if(isset($_POST["rPhone"])) echo $_POST["rPhone"]; ?>><br><br>
					<label for="weight">Weight (oz):</label>
					<input type="text" id="weight" name="weight" value=<?php if(isset($_POST["weight"])) echo $_POST["weight"]; ?>>

					<label for="package">Choose a shipment method:</label>
					<select class="w3-select w3-border" id="packageType" name = "packageType">
					  <option value="FlatRateEnvelope" name = "packageType">FlatRateEnvelope</option>
					  <option value="Card" <?= !empty($_POST) && $_POST['packageType'] == 'Card' ? 'selected' : '' ?>>Card</option>
					  <option value="Letter" <?= !empty($_POST) && $_POST['packageType'] == 'Letter' ? 'selected' : '' ?>>Letter</option>
					  <option value="Flat" <?= !empty($_POST) && $_POST['packageType'] == 'Flat' ? 'selected' : '' ?>>Flat</option>
					  <option value="FlatRateLegalEnvelope" <?= !empty($_POST) && $_POST['packageType'] == 'FlatRateLegalEnvelope' ? 'selected' : '' ?>>FlatRateLegalEnvelope</option>
					  <option value="Parcel" <?= !empty($_POST) && $_POST['packageType'] == 'Parcel' ? 'selected' : '' ?>>Parcel</option>
					  <option value="IrregularParcel" <?= !empty($_POST) && $_POST['packageType'] == 'IrregularParcel' ? 'selected' : '' ?>>IrregularParcel</option>
					  <option value="SoftPack" <?= !empty($_POST) && $_POST['packageType'] == 'SoftPack' ? 'selected' : '' ?>>SoftPack</option>
					  <option value="SmallFlatRateBox" <?= !empty($_POST) && $_POST['packageType'] == 'SmallFlatRateBox' ? 'selected' : '' ?>>SmallFlatRateBox</option>
					  <option value="MediumFlatRateBox" <?= !empty($_POST) && $_POST['packageType'] == 'MediumFlatRateBox' ? 'selected' : '' ?>>MediumFlatRateBox</option>
					  <option value="LargeFlatRateBox" <?= !empty($_POST) && $_POST['packageType'] == 'LargeFlatRateBox' ? 'selected' : '' ?>>LargeFlatRateBox</option>
					  <option value="RegionalRateBoxA" <?= !empty($_POST) && $_POST['packageType'] == 'RegionalRateBoxA' ? 'selected' : '' ?>>RegionalRateBoxA</option>
					  <option value="RegionalRateBoxB" <?= !empty($_POST) && $_POST['packageType'] == 'RegionalRateBoxB' ? 'selected' : '' ?>>RegionalRateBoxB</option>
					</select> 
					</div>	

						<input id = "button" type="submit" name="button1" value="Submit"/>  <br><br>
			    </form> 

			    <?php
			      
			        if(isset($_POST['button1'])) {
			            require_once("easypost.php");
						\EasyPost\EasyPost::setApiKey('EZTK23d23f8ff8b54200bb202c2c57613ea6So5sqx0zCOIvt7EEafQ1Iw');
						$sCompany = htmlentities($_POST['sCompany']);
						$sStreet1 = htmlentities($_POST['sStreet1']);
						$sStreet2 = htmlentities($_POST['sStreet2']);
						$sCity = htmlentities($_POST['sCity']);
						$sState = htmlentities($_POST['sState']);
						$sZip = htmlentities($_POST['sZip']);
						$sPhone = htmlentities($_POST['sPhone']);

						$rName = htmlentities($_POST['rName']);
						$rStreet1 = htmlentities($_POST['rStreet1']);
						$rCity = htmlentities($_POST['rCity']);
						$rState = htmlentities($_POST['rState']);
						$rZip = htmlentities($_POST['rZip']);
						$rPhone = htmlentities($_POST['rPhone']);

						$weight = htmlentities($_POST['weight']);
						$package = htmlentities($_POST['packageType']);

						$to_address = \EasyPost\Address::create(
						    array(
						        "name"    => $rName,
						        "street1" => $rStreet1,
						        "city"    => $rCity,
						        "state"   => $rState,
						        "zip"     => $rZip,
						        "phone"   => $rPhone
						    )
						);
						$from_address = \EasyPost\Address::create(
						    array(
						        "company" => $sCompany,
						        "street1" => $sStreet1,
						        "street2" => $sStreet2,
						        "city"    => $sCity,
						        "state"   => $sState,
						        "zip"     => $sZip,
						        "phone"   => $sPhone
						    )
						);
						$parcel = \EasyPost\Parcel::create(
						    array(
						        "predefined_package" => $package,
						        "weight" => $weight
						    )
						);
						$shipment = \EasyPost\Shipment::create(
						    array(
						        "to_address"   => $to_address,
						        "from_address" => $from_address,
						        "parcel"       => $parcel
						    )
						);

						$shipment->buy($shipment->lowest_rate());
						echo "Thanks for using Akshay's Label Generator! You can find your shipping label URL below: ";
						echo "<br>";
						echo "<br>";
						$url = $shipment->postage_label->label_url;
						echo "<a href='".$url."'>".$url."</a>";
			        } 
			    ?> 

			</body> 

		</head> 
	  
	</html> 