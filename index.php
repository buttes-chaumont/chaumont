<!DOCTYPE html>
<html>
	<head>
		<title>Histoire des Buttes-Chaumont - Création</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body onload="init();">
		<section>
			<div id="background">
				<img src="images/parc_slide1.jpg" alt="Vue du parc des Buttes-Chaumont">
			</div>
			<div id="masque"></div>
			<nav id="liens">
				<a href="#">Projets futur</a>
				<a href="#" class="langueactive">FR</a> |
				<a href="#">EN</a>
			</nav>
			<div id="intro_slider">
				<h1>
					<img src="images/logo_butteschaumont.png" alt="Logo de l'Histoire du parc des Buttes-Chaumont">
					Buttes-Chaumont
					<br>
					<span>Histoire du parc</span>
				</h1>
				<p>Remontez le temps et découvrez l’histoire et l’évolution du plus grand parc de Paris... <br>
				<span>Prêt à faire partie de l’histoire ?</span></p>
				<a href="" class="btn_cadre">Découvrir</a>
			</div>
			<div id="nav_slider">
				<a href=""><div class="rondactive"></div></a>
				<a href=""><div></div></a>
				<a href=""><div></div></a>
			</div>
		</section>
		<nav>
			<img src="images/logo_horizontal.png" alt="logo Buttes-Chaumont">
			<div id="timeline">
				<div>
					<a href="index.php" class="timeline_active"><div></div></a>
					<a href="pages/evolutions.php"><div></div></a>
					<a href="pages/de_nos_jours.php"><div></div></a>
					<a href=""><div></div></a>
					<div id="progress"></div>
				</div>
			</div>
			<div id="langues">
				<a href="#" class="langueactive">FR</a> |
				<a href="#">EN</a>
			</div>
		</nav>
		<main>
			<header>
				<h2>
					La création<br>
					De 1860 à 1867
				</h2>
			</header>
			<article class="left">
				<div>
					<h3>C’était comment avant ?</h3>
					<p>C’était le secteur dit des “carrières d’Amérique”, un terrain mal réputé, partagé entre une carrière de gypse, une plâtrière et une décharge. Le nom Chaumont vient de “Mont Chauve”, car à l’origine c’était un terrain accidenté et aride, sur lequel rien ne poussait.</p>
					<a href="" class="btn_cadre">En savoir plus</a>
				</div>
				<img src="images/creation_1.png" alt="demo">
			</article>
			<article class="right">
				<img src="images/creation_2.png" alt="demo">
				<div>
					<h3>Les origines du projet</h3>
					<p>C’est l’annexion des communes de Belleville et de la Villette en 1860, pendant l’agrandissement de Paris, qui déclenche le projet de la construction du parc des Buttes-Chaumont. Il a été construit sous l'impulsion de Napoléon III, qui souhaitait apporter un brin de nature aux quartiers populaires de la capitale.
					</p>
					<a href="" class="btn_cadre">En savoir plus</a>
				</div>
			</article>
			<article class="center">
				<h3>Les acteurs du projet</h3>
				<a href="">
					<div class="acteurs">
						<img src="images/hausmann.png" alt="">
						<p><span>Baron Georges Eugène Haussmann</span><br>Préfet nommé pour moderniser la capitale...</p>
					</div>
				</a>
				<a href="">
					<div class="acteurs">
						<img src="images/alphand.png" alt="">
						<p><span>Jean-Charles Adolphe Alphand</span><br> Ingénieur responsable du projet...</p>
					</div>
				</a>
				<a href="">
					<div class="acteurs">
						<img src="images/davioud.png" alt="">
						<p><span>Gabriel Davioud</span><br> Architecte chargé de dessiner les plans des bâtiments...</p>
					</div>
				</a>
				<a href="">				
					<div class="acteurs">
						<img src="images/jardiniers.png" alt="">
						<p><span>Jean-Pierre Barillet-Deschamps et Edouard André</span><br>Les jardiniers en chef...</p>
					</div>
				</a>
			</article>
			<article class="center">
				<div>
					<h3>Les travaux</h3>
					<p>L’état achète les carrières en 1863 et les travaux de construction commencent en 1864. Débutent alors trois années de chantier titanesques qui mobilisent :
					</p>
				</div>
				<img src="images/infographie_creation.png" alt="demo" id="infographie">
				<p id="citation">Pour que la flore s’y épanouisse, près d’un million de m3 de terre sont acheminés dans le parc</p>
			</article>
			<article class="right">
				<div id="animation_container">
					<!-- <img src="images/creation_carte_masque.png"> -->
					<canvas id="canvas"></canvas>
		
				</div>
    
				<div>
					<h3>Composition du parc</h3>
					<p>Un lac de deux hectares est creusé au centre du parc et est alimenté par trois ruisseaux. Au centre du lac, s’élance à une hauteur de 30 mètres, une masse de rocher escarpés. On accède à cette île par deux ponts : la passerelle suspendue de Gustave Eiffel et le Pont des Suicidés, en mémoire de la vague de suicide qu’à connu ce pont au début du 20e. On trouve aussi une grotte de 20m de haut agrémentée de stalactites de béton.
					</p>
				</div>
			</article>
		</main>
		<div id="prefooter">
			<h4>Le parc est inauguré à Paris lors de l’Exposition Universelle de 1867 et connaît de nombreuses évolutions</h4>
			<a href="pages/evolutions.php" class="btn_cadre">Découvrir</a>
		</div>
		<footer>
			<p>© Histoire Buttes-Chaumont 2018</p>
			<img src="images/logo_butteschaumont.png">
			<ul>
				<li><a href="#">Contact |</a></li>
				<li><a href="#">Mentions légales |</a></li>
				<li><a href="#">CGU</a></li>
			</ul>
		</footer>
		<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
		<script src="js/animateCarteEtat1.js?1531001668632"></script>
		<script type="text/javascript">
			var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("F24E2F2AAA84604B88EB4D3B3A7A1712");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();	
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }	
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	/*var preloaderDiv = document.getElementById("_preload_div_");
	preloaderDiv.style.display = 'none';*/
	canvas.style.display = 'block';
	canvas.style.backgroundColor = 'transparent'; 
	exportRoot = new lib.animateCarteEtat1();
	stage = new lib.Stage(canvas);
	stage.enableMouseOver();	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			/*canvas.style.width = anim_container.style.width = dom_overlay_container.style.width = preloaderDiv.style.width = w*sRatio+'px';*/				
			/*canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = preloaderDiv.style.height = h*sRatio+'px';*/
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;            
			stage.tickOnUpdate = false;            
			stage.update();            
			stage.tickOnUpdate = true;		
		}
	}
	makeResponsive(true,'both',true,1);	
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
		</script>
		<!--<script type="text/javascript" src="js/carte1.js"></script>-->
	</body>
</html>