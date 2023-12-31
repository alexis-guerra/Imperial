<?php include(realpath('./Cabecera.php'));?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Becas Disponibles</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
<script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
<link rel="stylesheet" href="assets/tutoria/css/fontawesome.css">
        <link rel="stylesheet" href="assets/tutoria/css/templatemo-plot-listing.css">
        <link rel="stylesheet" href="assets/tutoria/css/animated.css">
        <link rel="stylesheet" href="assets/tutoria/css/owl.css">
<script type="text/javascript" src="js/init.js"></script>  
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head> 
<body> 



<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="#">Becas Disponibles</a></div>
    </div>
</div>

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
		<div id="content"> 
            <div id="home" class="section">
                <div class="home_box left">
                	<div class="row1 box box1">
                    	<div class="box_with_padding">
                        	<h2><a href="#about">Beca "Jóvenes Escribiendo el Futuro":</a></h2>
						</div>
                    </div>
                    <div class="row1 box2">
                    	<div class="box_with_padding">
                        	<h2><a href="#services">Beca "Manutención"</a></h2>
						</div>
                    </div>
                    <div class="row1 box4">
                    	<div class="box_with_padding">
                        	<h2><a href="#contact">Beca "Santander</a></h2>
						</div>
                    </div>
                </div>
 				<div class="home_box right">
                    <div class="row1 box4">
                    	<div class="box_with_padding">
                        	<h2><a href="#contact">Beca "Telmex"</a></h2>
						</div>
                    </div>
                    <div class="row1 box4">
                    	<div class="box_with_padding">
                        	<h2><a href="#contact">Beca "Fundación UNAM"</a></h2>
						</div>
                    </div>
                    
                    <div class="row1 box6">
                        <div id="mini_contact_form">
                        	<h5>¿Que beca quieres solicitar?</h5>
                            <form method="post" name="contact" action="registrar_beca.php">
                            	<div class="col_half left">
                               	  	<textarea id="text_small" name="text" rows="0" cols="0" 
                                  		onfocus="clearText(this)" onblur="clearText(this)">Mensaje</textarea>
                                </div>                                
                            	<div class="col_half right">
                                	<input name="author" type="text" class="input_field" id="author_small" 
                                    	onfocus="clearText(this)" onblur="clearText(this)" value="Nombre" maxlength="40" />
                                    <input name="email" type="text" class="input_field" id="email_small" 
                                    	onfocus="clearText(this)" onblur="clearText(this)" value="Correo" maxlength="40" />
                                  	<input type="submit" class="submit_btn float_l" name="submit" id="submit_small" value="Enviar" />
                              	</div>                                
                            </form>
                            <div class="clear"></div>
                        </div>
                        
                    </div>
                </div>
            </div> <!-- END of Home -->
            
           


</div>
</section>
</body> 


</html>
