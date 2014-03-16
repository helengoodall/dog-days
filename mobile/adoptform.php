<?php

require_once("includes/global.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>
<div id="nav-wrap">
	<?php include("includes/nav.php"); ?>
</div>

<div id="container">


<div class="content">
<br style="clear:both;" />

<p>This questionnaire will assist our staff in helping you find which dog may be best suited to your circumstances. Please be as accurate as possible.</p>



<form id="dogform" class="homefinderform" method="post">

	<fieldset id="adoptee-fs">
    
    <h2>Your details</h2>
    
        <label for="adoptee-title" class="">Title:</label>
        <select id="adoptee-title" class="quarter " name="Title">
            <option value="mr" >Mr</option>
            <option value="mrs" >Mrs</option>
            <option value="miss" >Miss</option>
            <option value="ms" >Ms</option>
            <option value="other" >Other</option>
        </select>
        
        <div class="colContainer">
            <div class="col">
                <label for="adoptee-first-name" class="">First name:</label>
                <input type="text" id="adoptee-first-name" name="Forename" class="" value=""/>
            </div>
            
            <div class="col">
                <label for="adoptee-last-name" class="">Surname:</label>
                <input type="text" id="adoptee-last-name" name="Surname"  class="" value=""/>
            </div>
        </div>

        <label for="adoptee-dob" class="">Date of Birth:</label>
        <input type="text" id="adoptee-dob" name="Dob" class="" value="" />

        <label for="adoptee-address" class="">Address:</label>
        <input type="text" id="adoptee-address" name="Address" class="" value="" />
        
        <label for="adoptee-postcode" class="">Postcode:</label>
        <input type="text" id="adoptee-postcode" class="quarter " name="Postcode" value="" />
        
        <label for="adoptee-email" class="">Email:</label>
        <input type="text" id="adoptee-email" name="Email"  class="" value=""/>
        
        <p>Please provide at least one telephone number.</p>
        
        <div class="colContainer">
            <div class="col">
                <label for="adoptee-phone-mobile" class="">Telephone (mobile):</label>
                <input type="text" id="adoptee-phone-mobile" name="Mobile" class="" value=""/>
            </div>
            
            <div class="col">        
                <label for="adoptee-phone-home" class="">Telephone (home):</label>
                <input type="text" id="adoptee-phone-home" name="Phone"  class="" value=""/>
            </div>
        </div>
    
    </fieldset>

	<br>
	<br>

	<fieldset id="household-fs">
    
    <h2>Your home</h2>
    
        <fieldset id="household-agreement-fs">
            <legend class="">Does everybody in the home want a dog?</legend>
            <label for="household-agreement-yes" class="radio"><input id="household-agreement-yes" type="radio" name="AllHouseHoldersAgreed" value="yes" /> Yes</label>
            <label for="household-agreement-no" class="radio"><input id="household-agreement-no" type="radio" name="AllHouseHoldersAgreed" value="no" /> No</label>
        </fieldset>
        <br>
        <fieldset id="household-allergies-fs">
            <legend class="">Are any members of the household allergic to dogs?</legend>
            <label for="household-allergies-yes" class="radio "><input id="household-allergies-yes" type="radio" name="AllergicHouseHolders" value="yes" /> Yes</label>
            <label for="household-allergies-no" class="radio "><input id="household-allergies-no" type="radio" name="AllergicHouseHolders" value="no" /> No</label>
        </fieldset>
        <br>
        <fieldset id="household-occupants-fs">
            <legend>Who will live in the home with the dog?</legend>
            <div class="colContainer">
                <div class="col">
                    <label for="household-adults" class="">Number of adults:</label>
                    <select id="household-adults" class="half" name="NoOfAdults">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10+">10+</option>
                    </select>
                </div>
                <br>
                <div class="col">            
                    <label for="household-children" class="">Number of children:</label>
                    <select id="household-children" class="conditional half" name="NoOfChildren" data-for="household-children-details" data-off="0">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10+">10+</option>
                    </select>
                </div>
            </div>
            <div id="household-children-details">
				<div class="toggle" id="household-children-ages-fs">
					<label for="household-children-ages" class="">Ages of children:</label>
					<input type="text" id="household-children-ages" name="AgesOfChildren" class="" value=""/>
				</div>
				<div class="toggle" id="household-children-withdogs-fs">
					<label for="household-children-withdogs" class="">Have your children ever lived with a dog before?</label>
					<input type="text" id="household-children-withdogs" name="ChildrenWithDogs" class="" value=""/>
				</div>
			</div>
        </fieldset>
        <br>
        <fieldset id="household-visitingchildren-fs">
            <legend class="">Do children regularly visit your home?</legend>
            <label for="household-visitingchildren-yes" class="radio "><input id="household-visitingchildren-yes" type="radio" class="conditional" name="RegularChildVisits" value="yes"   data-for="household-visitingchildren-ages-fs" data-on="yes"/> Yes</label>
            <label for="household-visitingchildren-no" class="radio "><input id="household-visitingchildren-no" type="radio" class="conditional" name="RegularChildVisits" value="no"   data-for="household-visitingchildren-ages-fs" data-on="yes"/> No</label>
            <div class="toggle" id="household-visitingchildren-ages-fs">
                <label for="household-visitingchildren-ages"class="">Ages of the children that visit:</label>
                <input type="text" id="household-visitingchildren-ages" name="AgesOfChildVisitors" class="" value=""/>
            </div>
        </fieldset>
        <br>
        <fieldset id="household-disruption-fs">
            <legend class="">Are you likely to change job, spend time away from home or move in the next 3 months?</legend>
            <label for="household-disruption-yes" class="radio "><input id="household-disruption-yes" type="radio" class="conditional" name="UpcomingJobOrLocationChange" value="yes"  data-for="household-disruption-details-fs" data-on="yes"/> Yes</label>
            <label for="household-disruption-no" class="radio "><input id="household-disruption-no" type="radio" class="conditional" name="UpcomingJobOrLocationChange" value="no"  data-for="household-disruption-details-fs" data-on="yes"/> No</label>
            <div class="toggle" id="household-disruption-details-fs">
                <label for="household-disruption-details" class="">Please give details of these plans:</label>
                <textarea id="household-disruption-details" cols="25" rows="4" name="DisruptionDetails" class=""></textarea>
            </div>
        </fieldset>
        <br>
		<fieldset id="household-animals-fs">
            <legend class="">Do you have any other animals in the home?</legend>
            <label for="household-animals-yes" class="radio "><input id="household-animals-yes" type="radio" class="conditional" name="OtherAnimals" value="yes"  data-for="household-animals-other-fs" data-on="yes"/> Yes</label>
            <label for="household-animals-no" class="radio "><input id="household-animals-no" type="radio" class="conditional" name="OtherAnimals" value="no"  data-for="household-animals-other-fs" data-on="yes"/> No</label>
            <div class="toggle" id="household-animals-other-fs">
                <label for="household-animals-other" class="">Please list the other animals:</label>
                <input type="text" id="household-animals-other" name="OtherAnimalsDescription" class="" value="" />
            </div>
        </fieldset>
        <br>
		<fieldset id="household-currentcat-fs">
            <legend class="">If you currently own a cat, has it lived with a dog before?</legend>
            <label for="household-currentcat-yes" class="radio "><input id="household-currentcat-yes" type="radio" class="conditional" name="CurrentCatWithDogs" value="yes"  data-for="household-currentcat-relationship-fs" data-on="yes"/> Yes</label>
            <label for="household-currentcat-no" class="radio "><input id="household-currentcat-no" type="radio" class="conditional" name="CurrentCatWithDogs" value="no"  data-for="household-currentcat-relationship-fs" data-on="yes"/> No</label>
			<label for="household-currentcat-notowned" class="radio "><input id="household-currentcat-not-owned" type="radio" class="conditional" name="CurrentCatWithDogs" value="notowned"  data-for="household-currentcat-relationship-fs" data-on="yes"/> I don't own a cat</label>
			<div class="toggle" id="household-currentcat-relationship-fs">
                <label for="household-currentcat-relationship" class="">Please describe their relationship:</label>
                <input type="text" id="household-currentcat-relationship" name="CurrentCatWithDogsRelationship" class="" value="" />
            </div>
        </fieldset>
        <br>
        <div class="colContainer">
            <div class="col">
				<label for="household-property" class="">What type of property do you live in?</label>
				<select id="household-property" class="half conditional" name="PropertyType" data-for="household-property-details-fs" data-on="other">
					<option value="house">House</option>
					<option value="flat">Flat</option>
					<option value="maisonette">Maisonette</option>
					<option value="other">Other</option>
				</select>
				<div class="toggle" id="household-property-details-fs">
					<label for="household-property-details" class="">Please give details:</label>
					<input type="text" id="household-property-details" name="OtherPropertyType" class="" value=""/>
				</div>
			</div>
		</div>
        
        
        <br>
		<fieldset id="household-garden-fs">
            <legend class="">Do you have a garden?</legend>
            <label for="household-garden-yes" class="radio"><input id="household-garden-yes" type="radio" class="conditional" name="HasGarden" value="yes"  data-for="household-garden-fenced-fs" data-on="yes"/> Yes</label>
            <label for="household-garden-no" class="radio"><input id="household-garden-no" type="radio" class="conditional" name="HasGarden" value="no"  data-for="household-garden-fenced-fs" data-on="yes"/> No</label>
            <div class="toggle">
                <fieldset id="household-garden-fenced-fs">
                    <legend class="small">Is it fenced?</legend>
                    <label for="household-garden-fenced-fully" class="radio"><input id="household-garden-fenced-fully" type="radio" class="conditional" name="FencedGarden" value="fully"  data-for="household-garden-fenced-height-fs" data-off="unfenced" /> Fully</label>
                    <label for="household-garden-fenced-partially" class="radio"><input id="household-garden-fenced-partially" type="radio" class="conditional" name="FencedGarden" value="partially"  data-for="household-garden-fenced-height-fs" data-off="unfenced" /> Partially</label>
                    <label for="household-garden-fenced-unfenced" class="radio"><input id="household-garden-fenced-unfenced" type="radio" class="conditional" name="FencedGarden" value="unfenced"  data-for="household-garden-fenced-height-fs" data-off="unfenced" /> Unfenced</label>
                    <div class="toggle" id="household-garden-fenced-height-fs">
                        <label for="household-garden-fenced-height" class="">Height</label>
                        <input type="text" id="household-garden-fenced-height" name="FenceHeight" class="" value=""/>
                    </div>
                </fieldset>
            </div>
        </fieldset>
		</fieldset>
        
      <br>
	  <br>
	  
	          <fieldset id="finalques">

    
    <h2>Final questions</h2>
    
        <fieldset id="animal-current-fs">
			<legend class="">Do you currently own a dog or dogs?</legend>
            <label for="animal-current-yes" class="radio"><input id="animal-current-yes" type="radio" class="conditional" name="CurrentlyOwn" value="yes"   data-for="animal-current-details-fs" data-on="yes"/> Yes</label>
            <label for="animal-current-no" class="radio"><input id="animal-current-no" type="radio" class="conditional" name="CurrentlyOwn" value="no"  data-for="animal-current-details-fs" data-on="yes" /> No</label>
            <div class="toggle" id="animal-current-details-fs">
            	<div class="colContainer">
                    <div class="col">
                        <label for="animal-current-breed" class="">Breed(s)</label>
                        <input type="text" id="animal-current-breed" name="CurrentBreed" class="" value=""/>
                    </div>
                    <div class="col">
                        <label for="animal-current-age" class="">Age(s)</label>
                        <input type="text" id="animal-current-age" name="CurrentAge" class="" value=""/>
                    </div>
                </div>
				<br>
                <div class="colContainer">
                    <div class="col">
                        <fieldset>
                        	<legend class="small">Sex</legend>
							<input type="text" id="animal-current-sex" name="CurrentGender" class="" value=""/>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                        	<legend class="small">Neutered</legend>
							<input type="text" id="animal-current-neutered" name="CurrentNeutered" class="" value=""/>
                        </fieldset>
                    </div>
                </div>
				<br>
                <div class="colContainer">
                    <div class="col">
                        <fieldset>
                            <legend class="small">Have they lived with other dogs before?</legend>
                            <label for="animal-current-companion-yes" class="radio"><input id="animal-current-companion-yes" type="radio" class="conditional" name="CurrentLivedWithOther" value="yes"   data-for="animal-current-companion-relationship-fs" data-on="yes"/> Yes</label>
                            <label for="animal-current-companion-no" class="radio"><input id="animal-current-companion-no" type="radio" class="conditional" name="CurrentLivedWithOther" value="no"   data-for="animal-current-companion-relationship-fs" data-on="yes"/> No</label>
                        </fieldset>
						<br>
                    </div>
                    <div class="col toggle" id="animal-current-companion-relationship-fs">
                        <label for="animal-current-companion-relationship" class="">Please describe their relationship:</label>
                        <input type="text" id="animal-current-companion-relationship" name="CurrentLivedWithRelationship" class="" value=""/>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <fieldset id="animal-ownership-fs">
            <legend class="">Have you owned a dog before?</legend>
            <label for="animal-ownership-child" class="radio"><input id="animal-ownership-child" type="radio" class="conditional" name="OwnedBefore" value="yes-child"  data-for="animal-ownership-history-fs" data-on="yes-child"/> Yes, as a child</label>
            <label for="animal-ownership-adult" class="radio"><input id="animal-ownership-adult" type="radio" class="conditional" name="OwnedBefore" value="yes-adult"  data-for="animal-ownership-history-fs" data-on="yes-adult"/> Yes, as an adult</label>
            <label for="animal-ownership-no" class="radio"><input id="animal-ownership-no" type="radio" class="conditional" name="OwnedBefore" value="no"  data-for="animal-ownership-history-fs" data-off="no"/> No</label>
            <div class="toggle" id="animal-ownership-history-fs">
                <label class="" for="animal-ownership-breed">Which breed(s) did you own?</label>
                <input type="text" id="animal-ownership-breed" name="PriorBreed" class="" value="" />
                <label class="" for="animal-ownership-history">How long ago did you own a dog and what happened?</label>
                <input type="text" id="animal-ownership-history" name="PriorOwnershipCircumstances" class="" value="" />
                <fieldset id="animal-ownership-quantity-fs">
                    <legend class="small">Have you always had:</legend>
                    <label for="animal-ownership-quantity-one" class="radio"><input id="animal-ownership-quantity-one" type="radio" name="PriorAmount" value="1 dog" /> 1 dog</label>
                    <label for="animal-ownership-quantity-two" class="radio"><input id="animal-ownership-quantity-two" type="radio" name="PriorAmount" value="2 dogs" /> 2 dogs</label>
                    <label for="animal-ownership-quantity-more" class="radio"><input id="animal-ownership-quantity-more" type="radio" name="PriorAmount" value="3 or more dogs" /> 3 or more dogs</label>
                </fieldset>
                <fieldset id="animal-ownership-rescue-fs">
                    <legend class="small">Were any of these rescue dogs?</legend>
                    <label for="animal-ownership-rescue-yes" class="radio"><input id="animal-ownership-rescue-yes" type="radio" name="PriorRescueDogs" value="yes" /> Yes</label>
                    <label for="animal-ownership-rescue-no" class="radio"><input id="animal-ownership-rescue-no" type="radio" name="PriorRescueDogs" value="no" /> No</label>
                </fieldset>
            </div>
        </fieldset>
        
         <label for="animal-reason" class="">Why do you want a dog?</label>
        <input type="text" id="animal-reason" name="WhyDog" class="" value="" />
        
        <fieldset id="animal-unattended-fs">
            <legend class="">Will the dog ever be left on its own?</legend>
            <label for="animal-unattended-yes" class="radio"><input id="animal-unattended-yes" type="radio" class="conditional" name="LeftOnOwn" value="yes"  data-for="animal-unattended-duration-fs" data-on="yes"/> Yes</label>
            <label for="animal-unattended-no" class="radio"><input id="animal-unattended-no" type="radio" class="conditional" name="LeftOnOwn" value="no"   data-for="animal-unattended-duration-fs" data-on="yes"/> No</label>
            <div class="toggle" id="animal-unattended-duration-fs">			
				<label for="animal-unattended-frequency" class="">How often will the dog be left on its own?</label>
				<input type="text" id="animal-unattended-frequency" name="UnattendedFrequency" class="half" value="" />
				
				<label for="animal-unattended-duration" class="">How long will the dog be left on its own?</label>
				<input type="text" id="animal-unattended-duration" name="UnattendedDuration" class="half" value="" />

				<label for="animal-unattended-reason" class="">Reason</label>
				<input type="text" id="animal-unattended-reason" name="UnattendedReason" class="half" value="" />
            </div>
        </fieldset>
        
        <label for="animal-nighttime" class="">Please state where your dog will stay during the night?</label>
        <input type="text" id="animal-nighttime" name="NightTimeArrangements" class="" value=""/>
        
        <label for="animal-daytime" class="">Please state where your dog will stay during the day?</label>
        <input type="text" id="animal-daytime" name="DayTimeArrangements" class="" value=""/>
        
		<fieldset id="animal-exercise-duration-fs">
            <legend>How many hours will you walk your dog for each day?</legend>
            
            <div class="colContainer">
                <div class="col">
                    <label for="animal-exercise-duration-onlead" class="">On lead</label>
					<select id="animal-exercise-duration-onlead" name="OnLeadHours">
						<option value="underhalf">Under 1/2 hour</option>
						<option value="halftoone">1/2 hour to 1 hour</option>
						<option value="onetotwo">1-2 hours</option>
						<option value="overtwo">Over 2 hours</option>
					</select>
                </div>
                <div class="col">
                    <label for="animal-exercise-duration-offlead" class="">Off lead</label>
					<select id="animal-exercise-duration-offlead" name="OffLeadHours">
						<option value="underhalf">Under 1/2 hour</option>
						<option value="halftoone">1/2 hour to 1 hour</option>
						<option value="onetotwo">1-2 hours</option>
						<option value="overtwo">Over 2 hours</option>
					</select>
                </div>
            </div>
        </fieldset>
        
        <label for="animal-exercise-responsibility" class="">Who will be responsible for the exercise of the dog?</label>
        <input type="text" id="animal-exercise-responsibility" name="ResponsibleForExercise" class="" value=""/>
        
        <label for="animal-exercise-exercise-location" class="">Where would you exercise the dog?</label>
        <input type="text" id="animal-exercise-exercise-location" name="WhereExercise" class="" value=""/>
        
         <fieldset id="misc-insurance-fs">
            <legend class="">Have you considered, or do you have, veterinary insurance for your pets?</legend>
            <label for="misc-insurance-yes" class="radio"><input id="misc-insurance-yes" type="radio" name="HasVetinaryInsurance" value="yes"  /> Yes</label>
            <label for="misc-insurance-no" class="radio"><input id="misc-insurance-no" type="radio" name="HasVetinaryInsurance" value="no"  /> No</label>
        </fieldset>
        
        
        
      
        
        <label for="misc-comments" class="">Are there any other comments you would like to make?</label>
        <input type="text" id="misc-comments" name="Comments" value="" class="" />
        
        

    </fieldset>
	
	<br>
	<br>

	<input type="submit" id="homefinderform-submit" value="Submit adoption request" />

</form>
                        </div>
                    </div>
                
            
        
    




<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>