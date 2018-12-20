<!-- header -->
	<div class="header">
			<div id="principal-header" class="header-grid">
				<div class="container">
    				<div id="logiyu" class="header-left" data-wow-delay=".5s">
    					<ul id="logo-icono">
    						<!--<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
    						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:contacto@encuentraentlaxcala.com">contacto@encuentraentlaxcala.com</a></li>
    						<li><i class="glyphicon glyphicon-earphone" ></i>246 204 28 32</li>-->
    						<li><a href="https://encuentraentlaxcala.com/2index"><img style="width: 20px; margin-top: -10px;" src="images/logo-icono.png"><span id="letras-eslogan">EL DIRECTORIO COMERCIAL WEB DEL ESTADO DE TLAXCALA</span></a></li>

    					</ul>
    				</div>
    				<div class="header-right" data-wow-delay=".5s">
        				<div class="header-right1 ">
        					<ul>
        		
        						
        					</ul>
        				</div>
        				<div style="margin-top: 8px;" class="header-right">
        						<ul>
        							<li><i class="glyphicon glyphicon-log-in" ></i><a href="2perfil">Mi Cuenta</a></li>
							        <li><i><img  style="width: 16px; margin-top: -3px;" src="images/iconos/salir.png"></i><a href="desconectar"> Salir</a></li>
        							<li><a title="Abrir menu"  class="burger" href="#"><span class="burger"></span></a></li>
        						</ul>
        						<div class="clearfix"> </div>
        				</div>
    				</div>
		    	</div>
			</div>
			
			<nav><a title="Cerra menu" style="color: #ff0000;" class="burger"  href="#"><span class="burger" style="color: #ff0000;"></span></a>
              <ul class="main">
                <li><a href="2index">Inicio</a></li>
                <li><a href="2conocenos">Con&#243;cenos</a></li>
                <li><a href="2ayuda">Ayuda</a></li>
              </ul>
            </nav>

            <div class="overlay"></div>
            
            <script>
            $('.burger, .overlay').click(function(){
              $('.burger').toggleClass('clicked');
              $('.overlay').toggleClass('show');
              $('nav').toggleClass('show');
              $('body').toggleClass('overflow');
            });
            </script>
            <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
            
			<div class="container">
			    <div class="logo-nav">
			        <form action="2resultadodebusqueda" method="get">
    			        <div class="col-md-4">
    					    <center><a href="https://encuentraentlaxcala.com/2index"><h1 class="animated wow pulse" data-wow-delay=".5s"><img id="logito" src="images/logo.png"></h1></a></center>
    					</div>
    					<div class="col-md-3">
    					    <b style="font-size: 17px">&#191;QUE BUSCAS?</b><br>
            				<div class="login-mail">
            					<input type="text" placeholder="Bienes raíces, Vehiculos, Celulares, Ropa, Muebles, Servicios, Empleo, etc." name="servicio" id="serviciosearch" list="datalist1"  autofocus>
        					<datalist id="datalist1">
                    		    <?php
                    		    	$connection = mysqli_connect('127.0.0.1', 'encuen21_ustlax', 'RK0gW2x^oVT7','encuen21_Tlaxcala');
                    		    	$sqlId = mysqli_query($connection, "SELECT nombreRubro FROM rubro order by nombreRubro ASC ");
                    			    while ($row=mysqli_fetch_array($sqlId)){
                    			        echo "<option value='".utf8_encode($row['nombreRubro'])."'>";
                    			    }
                    		    ?>
                    	    </datalist>
            				</div>
    					</div>
    					
    					<div class="col-md-3">
    					    <b style="font-size: 17px">&#191;EN QUE LUGAR?</b><br>
        					<select style="width: 98%; height: 40px;" name="municipio"> 
                              <option value=""  style="color:#000;">Todo el Estado</option>
                              <option value="Acuamanala de Miguel Hidalgo" style="color:#000;">Acuamanala de Miguel Hidalgo</option>
                              <option value="Altzayanca" style="color:#000;">Altzayanca</option>
                              <option value="Amaxac de Guerrero" style="color:#000;">Amaxac de Guerrero</option>
                              <option value="Apetatitlán de Antonio Carvajal" style="color:#000;">Apetatitlán de Antonio Carvajal</option>
                              <option value="Atlangatepec" style="color:#000;">Atlangatepec</option>
                              <option value="Apizaco" style="color:#000;">Apizaco</option>
                              <option value="Benito Juárez" style="color:#000;">Benito Juárez</option>
                              <option value="Calpulalpan" style="color:#000;">Calpulalpan</option>
                              <option value="Chiautempan" style="color:#000;">Chiautempan</option>
                              <option value="Contla de Juan Cuamatzi" style="color:#000;">Contla de Juan Cuamatzi</option>
                              <option value="Cuapiaxtla" style="color:#000;">Cuapiaxtla</option>
                              <option value="Cuaxomulco" style="color:#000;">Cuaxomulco</option>
                              <option value="El Carmen Tequexquitla" style="color:#000;">El Carmen Tequexquitla</option>
                              <option value="Emiliano Zapata" style="color:#000;">Emiliano ZapataEmiliano Zapata</option>
                              <option value="Españita" style="color:#000;">Españita</option>
                              <option value="Huamantla" style="color:#000;">Huamantla</option>
                              <option value="Hueyotlipan" style="color:#000;">Hueyotlipan</option>
                              <option value="Ixtacuixtla de Mariano Matamoros" style="color:#000;">Ixtacuixtla de Mariano Matamoros</option>
                              <option value="Ixtenco" style="color:#000;">Ixtenco</option>
                              <option value="La Magdalena Tlaltelulco" style="color:#000;">La Magdalena Tlaltelulco</option>
                              <option value="Lázaro Cárdenas" style="color:#000;">Lázaro Cárdenas</option>
                              <option value="Mazatecochco de José María Morelos" style="color:#000;">Mazatecochco de José María Morelos</option>
                              <option value="Muñoz de Domingo Arenas" style="color:#000;">Muñoz de Domingo Arenas</option>
                              <option value="Muñoz de Domingo Arenas" style="color:#000;">Muñoz de Domingo Arenas</option>
                              <option value="Nanacamilpa de Mariano Arista" style="color:#000;">Nanacamilpa de Mariano Arista</option>
                              <option value="Nativitas" style="color:#000;">Nativitas</option>
                              <option value="Panotla" style="color:#000;">Panotla</option>
                              <option value="Papalotla de Xicohténcatl" style="color:#000;">Papalotla de Xicohténcatl</option>
                              <option value="Sanctorum de Lázaro Cárdenas" style="color:#000;">Sanctorum de Lázaro Cárdenas</option>
                              <option value="San Damián Texoloc" style="color:#000;">San Damián Texoloc</option>
                              <option value="San Francisco Tetlanohcan" style="color:#000;">San Francisco Tetlanohcan</option>
                              <option value="San Jerónimo Zacualpan" style="color:#000;">San Jerónimo Zacualpan</option>
                              <option value="San José Teacalco" style="color:#000;">San José Teacalco</option>
                              <option value="San Juan Huactzinco" style="color:#000;">San Juan Huactzinco</option>
                              <option value="San Lorenzo Axocomanitla" style="color:#000;">San Lorenzo Axocomanitla</option>
                              <option value="San Lucas Tecopilco" style="color:#000;">San Lucas Tecopilco</option>
                              <option value="San Pablo del Monte" style="color:#000;">San Pablo del Monte</option>
                              <option value="Santa Ana Nopalucan" style="color:#000;">Santa Ana Nopalucan</option>
                              <option value="Santa Apolonia Teacalco" style="color:#000;">Santa Apolonia Teacalco</option>
                              <option value="Santa Catarina Ayometla" style="color:#000;">Santa Catarina Ayometla</option>
                              <option value="Santa Cruz Quilehtla" style="color:#000;">Santa Cruz Quilehtla</option>
                              <option value="Santa Cruz Tlaxcala" style="color:#000;">Santa Cruz Tlaxcala</option>
                              <option value="Santa Isabel Xiloxoxtla" style="color:#000;">Santa Isabel Xiloxoxtla</option>
                              <option value="Tenancingo" style="color:#000;">Tenancingo</option>
                              <option value="Teolocholco" style="color:#000;">Teolocholco</option>
                              <option value="Tepetitla de Lardizábal" style="color:#000;">Tepetitla de Lardizábal</option>
                              <option value="Tepeyanco" style="color:#000;">Tepeyanco</option>
                              <option value="Terrenate" style="color:#000;">Terrenate</option>
                              <option value="Tetla de la Solidaridad" style="color:#000;">Tetla de la Solidaridad</option>
                              <option value="Tetlatlahuca" style="color:#000;">Tetlatlahuca</option>
                              <option value="Tlaxcala" style="color:#000;">Tlaxcala</option>
                              <option value="Tlaxco" style="color:#000;">Tlaxco</option>
                              <option value="Tocatlán" style="color:#000;">Tocatlán</option>
                              <option value="Totolac" style="color:#000;">Totolac</option>
                              <option value="Tzompantepec" style="color:#000;">Tzompantepec</option>
                              <option value="Xaloztoc" style="color:#000;">Xaloztoc</option>
                              <option value="Xaltocan" style="color:#000;">Xaltocan</option>
                              <option value="Xicohtzinco" style="color:#000;">Xicohtzinco</option>
                              <option value="Yauhquemecan" style="color:#000;">Yauhquemecan</option>
                              <option value="Zacatelco" style="color:#000;">Zacatelco</option>
                              <option value="Zitlaltepec de Trinidad Sánchez Santos" style="color:#000;">Zitlaltepec de Trinidad Sánchez Santos</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div id="login-boton2" class="login-do animated wow fadeInRight" data-wow-delay=".5s"><br>
                                <label class="hvr-sweep-to-top login-sub">
    						        <input style="background: #ff0000;" type="submit" id="botoN"  value="Buscar">
    					        </label>
    				        </div>
    					</div>
					</form>
				</div>
		</div>
	</div>
<!-- //header -->