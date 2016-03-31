					

									<div id = "f1" style="display:none">
										<? include('form.php'); ?>
									</div>

									<div id = "f2" style="display:none">
									Content of Form 2
									</div>
									<div id = "f3" style="display:none">
									Content of Form 3
									</div>
									
									
									<script type = "text/javascript">
									function showForm(){
									var selopt = document.getElementById("state1").value;
									if (selopt == 1) {
									document.getElementById("f1").style.display="block";
									document.getElementById("f2").style.display="none";
									document.getElementById("f3").style.display="none";
									
									}
									if (selopt == 2) {
									document.getElementById("f1").style.display="block";
									document.getElementById("f2").style.display="none";
									document.getElementById("f3").style.display="none";
									
									}
									if (selopt == 3) {
									document.getElementById("f3").style.display="block";
									document.getElementById("f1").style.display="none";
									document.getElementById("f2").style.display="none";
									
									}
									}
