 <style type="text/css">
 	html{
 		scroll-behavior: smooth;
 	}

 *{margin: 0; padding: 0; box-sizing:border-box; font-family: 'Mulish', sans-serif;}
.nav_style{
	background-color: #a29bfe!important;
}
.nav_style a{
	color: white;
} 

.main_header a{color: white;}

.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size:3rem;
}
.corona_rot img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0%{
		transform:rotate(0);}
		100%{transform:rotate(360deg);}
}
.leftside img{
	animation:heartbeat 5s linear infinite;
}
@keyframes heartbeat
{
	0%{
		transform:scale(.75);
	}
	20%{
		transform:scale(1);
	}
	40%{
		transform:scale(.75);
	}
	60%{
		transform:scale(1);
	}
	80%{
		transform:scale(.75);
	}
	100%{
		transform:scale(.75);
	}
}
/***corona update***/
 
.corona_update{
	margin:0 0 30px 0;
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{
	font-size: 2rem; 
	text-align: center;
}

/***about section***/
.sub_section{
	background-color: #fbfafd;
}
/***footer***/
.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom: 0!important;
}
/******top scroll********/

#myBtn{
	display:none; /*hidden by default*/
	position: fixed; /*sixedd position*/
	bottom:30px; /* place the button at the bottom of the page*/
	right:40px; /* place the button 30px from right*/
	z-index: 99; /* make sure it does not overlap*/
	border:none; /* remove borders*/
	outline:none; /*remove borders*/
	background-color: #00a8ff; /*add a mouse point to hover*/
	color:white;
	cursor:pointer;
	padding: 10px;
	border-radius: 10px; /* rounded corners*/
}
#myBtn:hover{
	background:#606060; /*add a dark-grey background to hover*/
}
 
/////***responsive***/////
@media(max-width: 768px){
		.main_header{height: 700px; text-align: center;
			.main_header h1{
					text-align: center;
					padding: 0;
					width: 100%;
					font-size:30px;
				}
			}	
}

 </style>
