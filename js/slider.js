

			function llenarSlider() {
							

			 var Hslider = " ";
			 Hslider +='<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">';
			 Hslider +='<ol class="carousel-indicators">';
			for (var i =  0; i < dato_ArrSlider.length; i++ ) {
				if (i == 0){
				Hslider +='<li data-target="#carouselExampleIndicators" data-slide-to="'+i+'" class="active"></li>';
				}else{
				Hslider +='<li data-target="#carouselExampleIndicators" data-slide-to="'+i+'"></li>';
				};
			};
			
			Hslider +='</ol>';
			Hslider +='<div class="carousel-inner">';
			Hslider +='<div class="carousel-item active">';
			Hslider +='<img class="d-block w-100" src="'+dato_ArrSlider[0]+'" alt="First slide">';
			
			Hslider +='<div class="carousel-caption d-none d-md-block">';
			Hslider +='<h5 id="data_direct" >';
			Hslider +='</h5>';
			Hslider +='<p id="data_Tel" ></p>';
			Hslider +='</div>';
			Hslider +='</div>';

			for (var i =  1; i < dato_ArrSlider.length; i++ ) {
			Hslider +='<div class="carousel-item">';
			Hslider +='<img class="d-block w-100" src="'+dato_ArrSlider[i]+'" alt="slide '+(i+1)+'">';
			Hslider +='</div>';
			};
			
			Hslider +='</div>';
			Hslider +='<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">';
			Hslider +='<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
			Hslider +='<span class="sr-only">Previous</span>';
			Hslider +='</a>';
			Hslider +='<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">';
			Hslider +='<span class="carousel-control-next-icon" aria-hidden="true"></span>';
			Hslider +='<span class="sr-only">Next</span>';
			Hslider +='</a>';
			Hslider +='</div>';
			// console.log(Hslider);
			$("body").prepend(Hslider);
};

llenarSlider();


