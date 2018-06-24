<?php 
session_start();
if(!array_key_exists("usuario",$_SESSION))
{
	print "<script language=JavaScript>";
	print "alert('Conexion cerrada, para continuar vuelva a entrar al Sistema');";
	print "location.href='inicio_sesion.php'";
	print "</script>";
		
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
        <style type="text/css">
        	
		</style>
        <title>Envio de Mensajes</title>
        
    </head>
    <body>

            <div id="cap">
            </div>
            <div id="titol">
            </div>
            <div id="cos">
                
<center><img src="imagenes/cintillo_envio.png" height="130" width="680"></center>

<hr width="40%"/>

<table class="formulari" width="720" height="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor=#36B7C1>
   <tr><td ><div align="right" ><font size=2><?PHP print date("j/n/Y")." - ".date("h:i a");?></font> </div></td>
	  	  <tr>
	  	   <td ><div align="right"><font size=3><?PHP print $_SESSION["nombre_usuario"];?></font></div></td>
     
        <tr>
            <td>
               
                <form action="procesar_envio_mensaje.php" id="sendsms" method="post" name="sendsms" onsubmit="return Enviar(this);">
                     <table width="90%" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td colspan="3" style="text-align: justify;">
                                    
                    
                    
                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                        <tbody>
                          <tr>
                                                        <td align="left">
                                                            <b>Envío de SMS</b>                                                  
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                                                               
                                   
                                    <p>Escriba el mensaje que desee enviar y especifique el(los) grupo(s) destinatario(s). Para mayor comodidad puede seleccionar varios grupos de contactos desde la lista de esta pantalla.</p>
                                    <br />                                    
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <table class="formulari" border="0" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="textmsj">
                                                        <b>Texto del mensaje:</b>
                                                    </label>
                                                    
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea id="textmsj" name="txt" tabindex="1" cols="27" rows="13" class="textarea" onkeyup="mostra_caracters(document.sendsms);" onfocus="if (navigator.appName=='Netscape') msg_focus();this.select();" onblur="if (navigator.appName=='Netscape') msg_blur();"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="cars">
                                                       Caracteres restantes:
                                                    </label>
                                                    <input id="cars" name="cars" size="7" maxlength="5" value="154/1" onfocus="document.sendsms.txt.focus();" class="carrest" type="text" />
                                                </td>
                                            </tr>
                                            
                        </tbody>
                    </table>
                    
                     <td valign="top" >                    	
                           
                               <label for="grupo">
                                     <b>Grupos:</b>
                               </label>                                                   
                                                    
                            
                      <div style="width:420px; height:210px;   overflow:auto; ">
                             <table cellpadding="0" cellspacing="1" border = '1' align="center" style="width:100%;border:1px solid white ;font-size:14px" >
							    <tbody> 
							      <tr>
							        <td  width="70%" align="center">Nombre del Grupo</td>
							        <td  width="20%" align="center">Cantidad de Contactos</td>   
							        <td  width="10%" align="center"><input name=checktodos id=checktodos type=checkbox value=1 style=height:15px;width:15px onClick="seleccionar_todos();"></td>          
							            
							          
							          <?php
							          
							          	require 'conexion.php';          
							         
							            $sql = "select id_grupo, nombre_grupo,count(id_contacto) as cantidad from grupo join contacto_grupo using (id_grupo) group by 1,2 order by id_grupo";
							    		$resultado=pg_query($sql);
							    		$fila = 0;
							            while ($row = pg_fetch_array($resultado))
							            {
							            	$fila++;							            	
							            	$id_grupo = $row['id_grupo'];
							            	$nombre_grupo = $row['nombre_grupo'];
							            	$cantidad = $row['cantidad'];
							            echo '<html>
            									<tr>                    							
							        			<td align="left" ><input name=nombre_grupo'.$fila.' id=nombre_grupo'.$fila.'  type=text style="text-align:left;width:250px;background-color:#36B7C1;border:0;size=50" value="'.$nombre_grupo.'" readonly>
															  	    <input name=id_grupo'.$fila.' id=id_grupo'.$fila.'  type=hidden     style=text-align:center value='.$id_grupo.' readonly></td>           		
							            		<td  align="center"><input name=cantidad'.$fila.' id=cantidad'.$fila.'  type=text   value='.$cantidad.' style=text-align:right;width:50px;background-color:#36B7C1;border:0 readonly></td>           		
							                    <td  align="center"><input name=chk'.$fila.'  type=checkbox value=1 style=width:10px></td>
							                  </tr>
                     						 </html>';
						            
							            }        
							            							            
							            pg_free_result($resultado);
							            ?>
							             <td width="20px" align="center"><input name=totalfilas id=totalfilas type=hidden value= <?php print $fila?> ></td>          
							        	</tr>
							        	</tbody>
							        </table> 
							        </div>
                                </td>
                               
                            </tr>
                             <tr>
                                                <td align="right" nowrap="nowrap">
                                                    <label for="firma">
                                                        Firma:
                                                    </label>
                                                </td>
                                                <td colspan="3" align="left">
                                                    <input name="firma" id="firma" size="4" maxlength="4" type="text" value="ESPC" readonly/>
                                                </td>
                                            </tr>
                            <tr>
                                <td>
                                    &nbsp;                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    &nbsp;                                    
                                </td>
                            </tr>
                             <tr>
                                <td>
                                    &nbsp;                                    
                                </td>
                            </tr>
                            <tr>
                            
                                <td colspan="3" align="center">
                             <!--       <input name="enviar" alt="Enviar mensaje" value="Enviar mensaje" tabindex="12" class="button" onclick="Enviar();" type="button" />  -->
                                 		<input name="enviar" type="submit" value="Enviar mensaje">
                                    	<input name="enviar" alt="Borrar formulario" value="Borrar formulario" tabindex="13" class="button" onclick="Reset();" type="button" />             
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    
                </form>
            </td>
        </tr>
 
</table>

					
                <hr width="40%"/>
                <div id="peu">    
              
                 <center style="font-family:Tahoma;font-size:9px;">Desarrollo de Software - Oficina de Tecnolog&iacute;a de la Informaci&oacute;n de ESPC</center>
                </div>
                <div>
                    <div class="nota">
                        <br />
                    </div>
                </div>
            </div>
       
        <div id="datepick-div" style="display: none;">
        </div>
       
    </body>
    
    <script type="text/javascript">
<!--

//-->

var msj_debe_introducir= msj_debe_introducir ? msj_debe_introducir :"Debe introducir un texto de mensaje.";
var msj_long_max= msj_long_max ? msj_long_max : "La longitud m&aacute;xima del 'Remitente' son 30 car&eacute;cteres.";
var msj_espec = msj_espec ? msj_espec : "Debe especificar un 'Grupo' al que desea realizar el envio.";

function Reset() 
{
    document.sendsms.txt.value='';
    //document.sendsms.telefon.value='';
   // document.sendsms.contacte.selectedIndex=0;
   // document.sendsms.grup.selectedIndex=0;
 //  document.sendsms.acuse.value='';
  //  document.sendsms.remit.value='';
  //  disable_coses();
}


function msg_blur() 
{
    canviat = false;
    mostra_caracters(document.sendsms);
}

function mostra_caracters() 
{
    var cad = document.sendsms.txt.value.replace(/\\r\\n/g,'\n');
    if (cad.length>154) {
        cad = cad.substr(0,154);
        document.sendsms.txt.value=cad;
    }
    document.sendsms.cars.value = (154-cad.length);
}


function Enviar()
{ 
    if (document.sendsms.txt.value=='')
    {
        alert(msj_debe_introducir);
        document.sendsms.txt.focus();
        return false;
    }   

   //*CORREGIR VALIDACION**//
  /*  if (isNaN(document.sendsms.grup.selectedIndex==0))
    {
        alert(msj_espec);
        document.sendsms.telefon.focus();
        return;
    }*/
  
  	
  	seleccionados=0; 	
	for (i=0;i<document.sendsms.elements.length;i++)
  	{  	
	     //if(document.sendsms.elements[i].type == "checkbox")
	     if (eval("document.sendsms.chk"+i+".checked")==true)
		    {
            seleccionados++;
			  break;
			}
			alert(seleccionados);
     }
	 if (seleccionados>0)
     {
		 	 
	  }
 	else
    {
	    alert("Debe seleccionar  al menos un Grupo de Contactos!!!");
		
	 }		
	
}


function seleccionar_todos(){

	if (document.sendsms.checktodos.checked==true)
	   {
        seleccion_todos='T';	
	   }
	else
	   {
		seleccion_todos='F';
	   }
	if (seleccion_todos=='T')
	   {
	   
	   for (i=0;i<document.sendsms.elements.length;i++)
	      if(document.sendsms.elements[i].type == "checkbox")
	         document.sendsms.elements[i].checked=1
	
	   } 
    else
	   {

    	for (i=0;i<document.sendsms.elements.length;i++)
  	      if(document.sendsms.elements[i].type == "checkbox")
  	         document.sendsms.elements[i].checked=0

    
	   }
	  	     
	}

</script>
    
</html>
