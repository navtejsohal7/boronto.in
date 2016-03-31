$(document).ready(function(){


	$("#image").change(function(){
		
		var file = document.getElementById("image").files[0];

		var readImg = new FileReader();
		
		readImg.readAsDataURL(file);
		
		readImg.onload = function(e) {
			
			$('.prevImg').attr('src',e.target.result).fadeIn();
			
			}
			
		})
		
		
})
$(document).ready(function(){


	$("#image1").change(function(){
		
		var file = document.getElementById("image1").files[0];

		var readImg = new FileReader();
		
		readImg.readAsDataURL(file);
		
		readImg.onload = function(e) {
			
			$('.prevImg1').attr('src',e.target.result).fadeIn();
			
			}
			
		})
		
		
})
$(document).ready(function(){


	$("#image2").change(function(){
		
		var file = document.getElementById("image2").files[0];

		var readImg = new FileReader();
		
		readImg.readAsDataURL(file);
		
		readImg.onload = function(e) {
			
			$('.prevImg2').attr('src',e.target.result).fadeIn();
			
			}
			
		})
		
		
})
$(document).ready(function(){


	$("#image3").change(function(){
		
		var file = document.getElementById("image3").files[0];

		var readImg = new FileReader();
		
		readImg.readAsDataURL(file);
		
		readImg.onload = function(e) {
			
			$('.prevImg3').attr('src',e.target.result).fadeIn();
			
			}
			
		})
		
		
})