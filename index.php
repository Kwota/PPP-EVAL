
<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name= "viewport" content= "width= device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Artist Show Readiness Assessment</title>

</head>

<body>

	<!--Nav-->
	<div id= "nav" class= "nav" >

		<a href="#showreadiness">Show Readiness</a>
		<a href="#professional">Professional Skills</a>
		<a href="#acrobatic">Acrobatic Skills</a>
		<a href="#artistic">Artistic Skills</a>
		<a href="#inform">Information</a>
		<img src="images/2.png" alt="Cirque logo">
		<a href="#" id= "fda">FDA</a>


	</div>




<!--Header-->
<div id= "header" class= "header">
	<div class= "container">

	<h1 id= "maintitle">Artist Show Readiness Assessment</h1>
	</div>
</div>



<!--Info-->



<form method="post" action="process.php">
<div id="inform" class= "inform">
	<div class= "container-fluid">

      	<h1 style="text-align: center">Information</h1>

 	<div class= "row">
      <div class= "col-md-6">


 		SAP:
			<input class= "input-color" type= "text" name= "SAP"
			placeholder="SAP"><br>
			<br>

		First Name:
			<input class= "input-color" type= "text" name= "first_name"
			placeholder="First Name"><br>
			<br>

		Last Name:
			<input class= "input-color" type= "text" name= "last_name"
			placeholder="Last Name"><br>
			<br>

		Show:
			<select class= "dropd" name= "spec">
			<option value= "amaluna">Amaluna</option>
			<option value= "believe">Believe</option>
			<option value= "corteo">Corteo</option>
			<option value= "joya">Joya</option>
			<option value= "ka">Ka</option>
			<option value= "kooza">Kooza</option>
			<option value= "kurios">Kurios</option>
			<option value= "la nouba">La Nouba</option>
			<option value= "love">Love</option>
			<option value= "luzia">Luzia</option>
			<option value= "mjone">MJOne</option>
			<option value= "mystere">Mystere</option>
			<option value= "o">O</option>
			<option value= "ovo">Ovo</option>
			<option value= "sep7imo dia">Sep7imo Dia</option>
			<option value= "toruk">Toruk</option>
			<option value= "totem">Totem</option>
			<option value= "varekai">Varekai</option>
			<option value= "volta">Volta</option>
			</select>
			<br><br>

	</div>


	<div class= "col col-md-6">

	Discipline:
		<input class= "input-color" type= "text" name= "discipline"
		placeholder="Discipline"><br>
		<br>

	Type:
		<select class= "dropd" name= "type">
		<option value= "PPP">PPP</option>
		<option value= "specific">Specific</option>
		<option value= "creation">Creation</option>
		</select>
		<br><br>

	Date:
		<input class= "input-color" type= "date" name= "date" placeholder="date"><br>
		<br>

	Duration:
		<input class= "input-color" type= "number" name= "duration"
		placeholder="Number of Weeks"><br>
		<br>



	 </div>



		<div class= "wrapper">
			<button type ="submit" name="submit" class= "btn btn-primary btn-lg">Save</button>
			<button type ="reset" class= "btn btn-info btn-lg">Clear</button>
			</div>




		</div>
	</div>
</div>



<!--Show Readiness-->


<div id= "showreadiness" class= "showreadiness">
	<div class= "container">
		<h1 style="text-align: center">Overall Show Readiness</h1>

		<div class= "row">
			<div class= "col col-md-4">
				<h1>Acrobatic</h1>

				<h4>Acrobatic Mid Total</h4>
				<input type= "number" name= "acromidtotal" min="0" max="100" id= "acromidtotal" value="0" placeholder="Score">
				<br>

				<h4>Acrobatic Final Total</h4>
				<input class = "input-color" type= "number" name= "acrofinaltotal" id="acrofinaltotal" value="0"
				min="0" max="100" placeholder="Score">
				<br>
			</div>

			<div class= "col col-md-4">
				<h1>Artistic</h1>
				<h4>Artistic Mid Total</h4>
				<input class = "input-color" type= "number" name= "artimidtotal" id="artimidtotal" value="0"
				min="0" max="100" placeholder="Score"/>
				<br>
				<h4>Artistic Final Total</h4>
				<input class = "input-color" type= "number" name= "artifinaltotal" id="artifinaltotal" value="0"
				min="0" max="100" placeholder="Score">
				<br>
			</div>
			<div class= "col col-md-4">
				<h1>Professional</h1>
				<h4>Mid Total</h4>
				<input class = "input-color" type= "number" name= "artimidtotal" id="artimidtotal" value="0"
				min="0" max="100" placeholder="Score"/>
				<br>
				<h4>Final Total</h4>
				<input class = "input-color" type= "number" name= "artifinaltotal" id="artifinaltotal" value="0"
				min="0" max="100" placeholder="Score">
				<br>
			</div>
		</div>
		<div class="row">
			<div class= "col col-md-12">
				<h1>Total</h1>
				<h4>Overall Total Show Readiness</h4>
				<input class = "input-color" type= "number" name= "overalltotal" id= "overalltotal" value="0"
				min="0" max="100" placeholder="Score">
				<br>
			</div>
		</div>

	</div>
</div>


<!--Artistic-->

<div id= "artistic" class= "artistic">
	<div class= "container">
		<h1 style="text-align: center">Artistic Skills</h1>
		<div class= "row">
			<div class= "col col-md-4">
				<h4>Coach 1:</h4>
				<input type= "text" name= "coach1" placeholder="Name"><br>
				<br>
			</div>
			<div class= "col col-md-4">
				<h4>Coach 2:</h4>
				<input type= "text" name= "coach2" placeholder="Name"><br>
				<br>
			</div>
			<div class= "col col-md-4">
				<h4>Coach 3:</h4>
				<input type= "text" name= "coach3" placeholder="Name"><br>
				<br>
			</div>
		</div>

		<h3 id= "outof" style="text-align: center">Score out of 100%</h3>

		<div id= "artskill" class= "artskill">
			<div class= "row">
				<div class= "col col-md-6">
					<h2>Execution/ Coordination</h2>
						<ul>
							<li>Demonstrates coordination and good body alignment</li>
						</ul>
						<br>

						<h4>Mid</h4>
						<input type= "number" name= "midexcoor" id="midexcoor"
						onkeyup="calcMe()" value="0" min="0" max="100"
						/>
						<br><br>
						<h4>Final:</h4>
						<input type= "number" name= "finalexcoor" id= "finalexcoor" onkeyup="artFinal()"
						value="0" min="0" max="100" placeholder="Score"/>
						<br><br>
					</div>

					<div class= "col col-md-6">
						<h2>Execution/ Movment Quality</h2>
							<ul>
								<li>Demonstrates different movement qualities and ease of
									movement</li>
							</ul>
							<br>

							<h4>Mid</h4>
							<input type= "number" name= "midmove" id="midmove"
							onkeyup="calcMe()" value="0" min="0" max="100"
							placeholder="Score"/>
							<br><br>
							<h4>Final:</h4>
							<input type= "number" name= "finalmove" id="finalmove" onkeyup="artFinal()"
							value="0" min="0" max="100"
							placeholder="Score"/>
							<br><br>
						</div>

						<div class= "col col-md-6">
							<h2>Presence</h2>
								<ul>
									<li>Demonstrates a good quality of stage presence and
										projection</li>
								</ul>
								<br>


								<h4>Mid</h4>
								<input type= "number" name= "midpresence" id="midpresence"
								onkeyup="calcMe()" value="0" min="0" max="100"
								placeholder="Score"/>
								<br><br>
								<h4>Final:</h4>
								<input type= "number" name= "finalpresence" id="finalpresence"
								onkeyup="artFinal()" value="0" min="0" max="100"
								placeholder="Score"/>
								<br><br>
							</div>

							<div class= "col col-md-6">
								<h2>Interpretation</h2>
									<ul>
										<li>Is able to communicate emotions and
											intentions with clarity and energy</li>
									</ul>
									<br>


									<h4>Mid</h4>
									<input type= "number" name= "midinterp" id="midinterp" onkeyup="calcMe()" value="0" min="0" max="100"
									placeholder="Score"/>
									<br><br>
									<h4>Final:</h4>
									<input type= "number" name= "finalinterp" id="finalinterp" onkeyup="artFinal()"
									value="0" min="0" max="100"
									placeholder="Score"/>
									<br><br>
								</div>

								<div class= "col col-md-6">
									<h2>Acting</h2>
										<ul>
											<li>Understands and is able to express the dramatic context
												as a physical actor (body-mind-breathing) when applicable</li>
										</ul>
										<br>


										<h4>Mid</h4>
										<input type= "number" name= "midact" id="midact" onkeyup="calcMe()" value="0" min="0" max="100"
										placeholder="Score"/>
										<br><br>
										<h4>Final:</h4>
										<input type= "number" name= "finalact" id="finalact" onkeyup="artFinal()"
										value="0" min="0" max="100"
										placeholder="Score"/>
										<br><br>
									</div>
								</div>

																<!-- COMMENTS ARTISTIC -->
								<div class="comment">


									<h2>Work Integration</h2><br>
									<h4>Repitoire Learned:</h4><br>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>


									<h4>Repitoire Not Covered:</h4><br>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>


									<h2>Objectives</h2>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>


									<h2>Comments Coach 1</h2>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>

									<h2>Comments Coach 2</h2>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>

									<h2>Comments Coach 3</h2>
									<textarea rows="8" cols="150" placeholder="Comments">
									</textarea><br><br>

									<div class= "wrapper">
										<button type ="submit" class= "btn btn-primary btn-lg">Save</button>
										<button type ="reset" class= "btn btn-info btn-lg">Clear</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


																		<!--ACROBATIC-->

<div id= "acrobatic" class="acrobatic">
	<div class= "container">

		<h1 style="text-align: center">Acrobatic Skills</h1>

		<div class= "row">
			<div class= "col col-md-4">
				<h4>Coach 1:</h4>
				<input class= "input-color" type= "text" name= "coach1" placeholder="Name">
				<br>
				<br>
			</div>


			<div class= "col col-md-4">
				<h4>Coach 2:</h4>
				<input class= "input-color" type= "text" name= "coach2" placeholder="Name">
				<br>
				<br>
			</div>

			<div class= "col col-md-4">
				<h4>Coach 3:</h4>
				<input class= "input-color" type= "text" name= "coach3" placeholder="Name">
				<br>
				<br>
			</div>




			<div id= "acroskill" class= "acroskill">
					<div class="inline-block">


				<h3 id= "outofa" style="text-align: center">Score out of 100%</h3>

				<div class= "row">
					<div class= "col col-md-6">
						<h2>Technical Skills</h2>
						<ul>
							<li>Ability to execute technical elements asked by the coach so far</li>
							<li>Realization of a sequence of orderly bodily actions to achieve acrobatic
								elements required </li>
							</ul>


							<h4>Mid:</h4>
							<input class= "input-color" type= "number" onkeyup="acromid()"
							name= "midtech" id="midtech" value="0" min="0" max="100"
							placeholder="Score">
							<br><br>


							<h4>Final:</h4>
							<input class= "input-color" type= "number" onkeyup="acrofinal()"
							name= "finaltech" id="finaltech" value="0" min="0" max="100"
							placeholder="Score">
							<br><br>

						</div>

						<div class= "col col-md-6">
							<h2>Execution</h2>
							<ul>
								<li>Aesthetics of different bodily segments when achieving an
									acrobatic element.</li>
								</ul>

								<h4>Mid:</h4>
								<input class= "input-color" type= "number" onkeyup="acromid()" name= "midexecute" id="midexecute" value="0" min="0" max="100" placeholder="Score">
								<br><br>


								<h4>Final:</h4>
								<input class= "input-color" type= "number" onkeyup="acrofinal()" name= "finalexecute" id='finalexecute' value="0" min="0" max="100" placeholder="Score">
								<br><br>

							</div>

							<div class= "col col-md-6">
								<h2>Well being</h2>
								<ul>
									<li>Uses health services and therapists in a preventive way</li>
									<li>Takes the appropriate means to foster physical and mental recuperation</li>
									<li>Manages level of energy throughout the day</li>
								</ul><br>

								<h4>Mid:</h4>
								<input class= "input-color" type= "number" onkeyup="acromid()" name= "midwell" id="midwell" value="0" min="0" max="100" placeholder="Score">
								<br><br>


								<h4>Final:</h4>
								<input class= "input-color" type= "number" onkeyup="acrofinal()" name= "finalwell" id="finalwell" value="0" min="0" max="100" placeholder="Score">
								<br><br>

							</div>

							<div class= "col col-md-6">
								<h2>Autonomy</h2>
								<ul>
									<li>Is responsible towards his /her warm-up and conditioning program</li>
								</ul>
								<br><br><br>

								<h4>Mid:</h4>
								<input class= "input-color" type= "number" onkeyup="acromid()" name= "midauto" id="midauto" value="0" min="0" max="100" placeholder="Score">
								<br><br>


								<h4>Final:</h4>
								<input class= "input-color" type= "number" onkeyup="acrofinal()" name= "finalauto" id="finalauto" value="0" min="0" max="100" placeholder="Score">
								<br><br>

							</div>

							<div class= "col col-md-6">
								<h2>Virtuosity</h2>
								<ul>
									<li>Ability to demonstrate the integration of artistic and acrobatic elements</li>
								</ul>

									<h4>Mid:</h4>
									<input class= "input-color" type= "number" onkeyup="acromid()"
									name= "midvirt" id="midvirt" value="0" min="0" max="100"
									placeholder="Score">
									<br><br>


									<h4>Final:</h4>
									<input class= "input-color" type= "number" onkeyup="acrofinal()"
									name= "finalvirt" id="finalvirt" value="0" min="0" max="100"
									placeholder="Score">
									<br><br>

							</div>
						</div>
						</div>
						<div class="comment">


						<h2>Objectives</h2>
						<textarea class= "input-color" rows="8" cols="150"

						placeholder="Comments"></textarea><br><br>

						<h2>Comments Coach 1</h2>
						<textarea class= "input-color" rows="8" cols="150"

						placeholder="Comments"></textarea><br><br>

						<h2>Comments Coach 2</h2>
						<textarea class= "input-color" rows="8" cols="150"

						placeholder="Comments"></textarea><br><br>

						<h2>Comments Coach 3</h2>
						<textarea class= "input-color" rows="8" cols="150"

						placeholder="Comments"></textarea><br><br>

						<div class= "wrapper">
							<button type ="submit" class= "btn btn-primary btn-lg">Save</button>
							<button type ="reset" class= "btn btn-info btn-lg">Clear</button>
						</div>
</div>
					</div>


				</div>
			</div>
		</div>

<!--Professional	-->

<div id= "professional" class= "prof">
  <div class= "container">

	<h1 style="text-align: center">Professional Skills</h1>
	<div class= "all">
		<h1>FOLLOWING TO BE FILLED OUT BY ALL PARTIES INVOLVED</h1>
	</div>

	<h3 id= "outofb" style= "text-align: center">Score Out of 100%</h3>

	<div id= "proskill" class= "proskill">
	<h2>Autonomous Learning</h2>
	  <ul>
	  	<li>Demonstrates maturity in being responsible for his own learning
				progress and being autonomous in fixing personal problems/issues</li>
	  	<li>Ability to receive large amounts of information then interpret and
				retain it. </li>
	  	<li>Ability to self assess ones performance. Constructive Self critique.
			</li>
	  	<li>Manages emotions to perform the new task successfully
				(e.g., shyness, frustration, stress)</li><br><br>
	  </ul>

		<div class="row">

		<div class= "col col-md-6">
		<h4>Acrobatic Mid</h4>
		<input type= "number" name= "acromidautol" id="acromidauto1"
		value="0" min="0" max="100" placeholder="Score">
		<br><br>
		<h4>Acrobatic Final</h4>
		<input type= "number" name= "acrofinalautol" id="acrofinalauto1"
		value="0" min="0" max="100" placeholder="Score">
		<br><br>
	</div>
	<div class= "col col-md-6">
		<h4>Artistic Mid </h4>
		<input type= "number" name= "artimidautol" id="artimidauto1"
		value="0" min="0" max="100" placeholder="Score">
		<br><br>
		<h4>Artistic Final</h4>
		<input type= "number" name= "artifinalautol" id="artifinalauto1"
		value="0" min="0" max="100" placeholder="Score">
		<br><br>
	</div>
</div>
		<h2>Work Adptation</h2>
	  <ul>
	  	<li>Feels comfortable stepping out his/her comfort zone in acrobatic and
				artistic tasks (e.g., taking risks)</li>
	  	<li>Adapts easily to the new learning style (e.g., transition form
				''Athlete'' to ''Artist'') </li>
	  	<li>Expresses his/her own point of view,  considers the opinion of others
				and is not shy to asks questions to colleagues (e.g., artists, coaches,
				physiotherapists, performance psychology advisor, …)</li>
	  	<li>Is able to work in collaboration with other artists</li>
	  	<li>Accepts and demonstrates an interest towards the individual and
				cultural differences within the group</li>
	  	<li>Provides constructive comments about himself/herself on his/her
				performance and is able to bounce back positively after performing a
				mistake or a poor performance</li>
	  	<li>Provides constructive comments about others and shares strategies to
				help accomplish the task</li>
	  	<br><br>
	  </ul>
		<div class= "row">
			<div class= "col col-md-6">
		<h4>Acrobatic Mid</h4>
		<input type= "number" name= "acromidwork" min="0" max="100" placeholder="Score">
		<br><br>
		<h4>Acrobatic Final</h4>
		<input type= "number" name= "acrofinalwork" min="0" max="100" placeholder="Score">
		<br><br>
	</div>
		<div class= "col col-md-6">
		<h4>Artistic Mid</h4>
		<input type= "number" name= "artimidwork" min="0" max="100" placeholder="Score">
		<br><br>
		<h4>Artistic Final</h4>
		<input type= "number" name= "artifinalwork" min="0" max="100" placeholder="Score">
		<br><br>
</div>
		</div>


		<h2>Comments Coach 1</h2>
		<textarea rows="8" cols="150" placeholder="Comments">
		</textarea><br><br>

		<h2>Comments Coach 2</h2>
		<textarea rows="8" cols="150" placeholder="Comments">
		</textarea><br><br>

		<h2>Comments Coach 3</h2>
		<textarea rows="8" cols="150" placeholder="Comments">
		</textarea><br><br>

		<div class= "wrapper">
			<button type ="submit" class= "btn btn-primary btn-lg">Save</button>
			<button type ="reset" class= "btn btn-info btn-lg">Clear</button>
		</div>
	  </div>
	  </div>

	</div>
</div>
</form>

														<!-- FOOTER -->
<div class="footer">													
<div class="container">

<h5>Created by Mitch Head, &copy KWOTA DESIGN 2017</h5>
</div>
</div>
<script type="text/javascript" src= "main.js" rel='javascript'></script>
<script src= "js/jquery-3.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost:35729/livereload.js"></script>
</body>
</html>
