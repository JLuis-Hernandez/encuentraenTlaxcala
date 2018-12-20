    <!--Ventana busqueda-->
<link rel="stylesheet" href="buscador/remodal.css">
<link rel="stylesheet" href="buscador/style33.css">
<link rel="stylesheet" href="buscador/remodal-default-theme.css">

<script src="buscador/jquery.min.js"></script>
<script src="buscador/remodal.js"></script>   
 <!-- Scrpts para buscador-->

  <script type="text/javascript" src="jquery/js/jquery-ui-1.8.2.custom.min.js"></script> 
  <script type="text/javascript">
    jQuery(document).ready(function(){
      $('#serviciosearch').autocomplete({
        source : 'search.php',
        minLength : 1,  
      });
    });        
  </script>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <div  id="busca1">
           <form  action="resultadodebusqueda" method="get">
  <input class="barra_buscar" name="servicio" id="serviciosearch" placeholder="&#191;Qu&#233; buscas&#63;"/>
  
  <select class="barra_buscar2" name="municipio"> 
          <option value=""  style="color:#000;">&#191;En donde?</option>
          <option value="Acuamanala de Miguel Hidalgo" style="color:#000;">Acuamanala de Miguel Hidalgo</option>
          <option value="Altzayanca" style="color:#000;">Altzayanca</option>
          <option value="Amaxac de Guerrero" style="color:#000;">Amaxac de Guerrero</option>
          <option value="Apetatitlán de Antonio Carvajal" style="color:#000;">Apetatitlán de Antonio Carvajal</option>
          <option value="Apizaco" style="color:#000;">Apizaco</option>
          <option value="Atlangatepec" style="color:#000;">Atlangatepec</option>
          <option value="Benito Juárez" style="color:#000;">Benito Juárez</option>
          <option value="Calpulalpan" style="color:#000;">Calpulalpan</option>
          <option value="Chiautempan" style="color:#000;">Chiautempan</option>
          <option value="Contla de Juan Cuamatzi" style="color:#000;">Contla de Juan Cuamatzi</option>
          <option value="Cuapiaxtla" style="color:#000;">Cuapiaxtla</option>
          <option value="Cuaxomulco" style="color:#000;">Cuaxomulco</option>
          <option value="El Carmen Tequexquitla" style="color:#000;">El Carmen Tequexquitla</option>
          <option value="Emiliano Zapata" style="color:#000;">Emiliano Zapata</option>
          <option value="Españita" style="color:#000;">Españita</option>
          <option value="Huamantla" style="color:#000;">Huamantla</option>
          <option value="Hueyotlipan" style="color:#000;">Hueyotlipan</option>
          <option value="Ixtacuixtla de Mariano Matamoros" style="color:#000;">Ixtacuixtla de Mariano Matamoros</option>
          <option value="Ixtenco" style="color:#000;">Ixtenco</option>
          <option value="La Magdalena Tlaltelulco" style="color:#000;">La Magdalena Tlaltelulco</option>
          <option value="Lázaro Cárdenas" style="color:#000;">Lázaro Cárdenas</option>
          <option value="Mazatecochco de José María Morelos" style="color:#000;">Mazatecochco de José María Morelos</option>
          <option value="Muñoz de Domingo Arenas" style="color:#000;">Muñoz de Domingo Arenas</option>
          <option value="Nanacamilpa de Mariano Arista" style="color:#000;">Nanacamilpa de Mariano Arista</option>
          <option value="Natívitas" style="color:#000;">Natívitas</option>
          <option value="Panotla" style="color:#000;">Panotla</option>
          <option value="Papalotla de Xicohténcatl" style="color:#000;">Papalotla de Xicohténcatl</option>
          <option value="San Damián Texoloc" style="color:#000;">San Damián Texoloc</option>
          <option value="San Francisco Tetlanohcan" style="color:#000;">San Francisco Tetlanohcan</option>
          <option value="San Jerónimo Zacualpan" style="color:#000;">San Jerónimo Zacualpan</option>
          <option value="San José Teacalco" style="color:#000;">San José Teacalco</option>
          <option value="San Juan Huactzinco" style="color:#000;">San Juan Huactzinco</option>
          <option value="San Lorenzo Axocomanitla" style="color:#000;">San Lorenzo Axocomanitla</option>
          <option value="San Lucas Tecopilco" style="color:#000;">San Lucas Tecopilco</option>
          <option value="San Pablo del Monte" style="color:#000;">San Pablo del Monte</option>
          <option value="Sanctórum de Lázaro Cárdenas" style="color:#000;">Sanctórum de Lázaro Cárdenas</option>
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
          <option value="Zitlaltepec de Trinidad Sánchez Sa" style="color:#000;">Zitlaltepec de Trinidad Sánchez Sa</option>
        </select>
        <input type="submit" id="botoN" class="signup-button" value="Buscar">

  <label for="input-1">
  </label>
</form>
        </div>
    </div>