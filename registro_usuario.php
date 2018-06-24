<?php

session_start();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <style type="text/css">
        	
		</style>
        <title>simm</title>
        
    </head>
    <body>

            <div id="cap">
            </div>
            <div id="titol">
            </div>
            <div id="cos">
                <div class="caixa">
                    <b class="p1t"></b>
                    <b class="p2t"></b>
                    <b class="p3t"></b>
                    <b class="p4t"></b>
                    <div class="contingut">
<center><img src="imagenes/cintillo.png"></center>
<hr width="40%"/>

<table class="formulario" width="564" height="350" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor=#36B7C1>
    
        <tr>
            <td>
                <br />
                <form action="procesar_registro_usuario.php" onsubmit="return validar_formulario(this);" id="registra_usuario" method="post" >
                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                        <tbody>
                            <tr>
                                <td align="left">
                                    <label for="usuario">Usuario:</label>
                                </td>
                                <td>
                                    <input name="usuario" id="usuario" value="" size="18" type="text" maxlength="30"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <label for="cedula">Cedula:</label>
                                </td>
                                <td>
                                    <input name="cedula" id="cedula" value="" size="18" type="text" maxlength="30"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <label for="nombres">Nombres:</label>
                                </td>
                                <td>
                                    <input name="nombres" id="nombres" value="" size="18" type="text" maxlength="30"/>
                                </td>
                                <tr>
                                <td align="left">
                                    <label for="apellidos">Apellidos:</label>
                                </td>
                                <td>
                                    <input name="apellidos" id="apellidos" value="" size="18" type="text" maxlength="30"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <label for="clave">Clave de acceso:</label>
                                </td>
                                <td>
                                    <input name="clave" id="clave" size="18" type="password"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <label for="clave_conf">Confirmar clave de acceso:</label>
                                </td>
                                <td>
                                    <input name="clave_conf" id="clave_conf" size="18" type="password"/>
                                </td>
                            </tr>
                             <tr>
                                <td align="left">
                                    <label for="unidad_administrativa">Unidad Administrativa:</label>
                                </td>
                                <td>
                                    <input name="unidad_administrativa" id="unidad_administrativa" value="" size="18" type="text" maxlength="30"/>
                                </td>
                            </tr>
                             <tr>
                                <td align="left">
                                    <label for="correo">Correo Electr&oacute;nico:</label>
                                </td>
                                <td>
                                    <input name="correo" id="correo" value="" size="18" type="text" maxlength="30"/>
                                </td>
                            </tr>                  
                            <tr>	
                            	<td align="center" colspan="2">
                            		<br>
                                    <label style="font-size:12px;">Todos los campos son obligatorios</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td colspan="2">
                                    <input name="Submit" type="submit" value="Registrar">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </td>
        </tr>
 
</table>
					</div>
                    <b class="p4b"></b>
                    <b class="p3b"></b>
                    <b class="p2b"></b>
                    <b class="p1b"></b>
                </div>
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


	function validar_formulario(formulario) 
	{
		if (formulario.usuario.value.length=="" || formulario.cedula.value.length=="" || formulario.nombres.value.length==""
			|| formulario.apellidos.value.length=="" || formulario.clave.value.length=="" || formulario.clave_conf.value.length==""
			|| formulario.unidad_administrativa.value.length=="" || formulario.correo.value.length=="") 
		{ 
			formulario.usuario.focus();   
		    alert('Verifique que todos los campos esten llenos');
		    return false;
		}
		  return true;
	}
			
</script>
    
</html>

