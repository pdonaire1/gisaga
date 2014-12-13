
function SoloNumeros(e)
{
	
	key = 	e.KeyCode || e.which;
	teclado = 	String.fromCharCode(key);
	numeros = "0123456789";
	especiales = "8-37-38-46";
	teclado_especial = false;
	
	for (var j in especiales)
	{
		
		if(key==especiales[j])
		{
			teclado_especial = true;
		}
	}
	if (numeros.indexOf(teclado) == -1 && !teclado_especial)
	{
		
		return false;
	}
	
	
}

function validar(form){
	var bandera = 0;
	
	
	if (form.elements['p1a'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p1b'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p1c'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p1d'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p1e'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p1nsnr'].checked==true)
	{
		bandera = 1;
	}
	//~ -------
	if (bandera == 0)
	{
		alert("Por favor llene la pregunta #1");
		return false;
	}
	bandera = 0;
	if (form.elements['p3a'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p3b'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p3c'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p3d'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p3e'].checked==true)
	{
		bandera = 1;
	}
	//~ -------
	if (bandera == 0)
	{
		alert("Por favor llene la pregunta #3");
		return false;
	}
	bandera = 0;
	if (form.elements['p4a'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p4b'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p4c'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p4d'].checked==true)
	{
		bandera = 1;
	}
	if (form.elements['p4e'].checked==true)
	{
		bandera = 1;
	}
	//~ -------
	if (bandera == 0)
	{
		alert("Por favor llene la pregunta #4");
		return false;
	}
	bandera = 0;
	
	
	var p91,p92,p93,p94,p95,p96,p97,p98, p9nsnr;
	var p10;
	
	
	
	for(var i = 0;i < form.elements['perfil'].length;i++) 
	{
		if(form.elements['perfil'][i].checked) 
		{ 
			bandera = 1;
			break;
		}
	}
	if (bandera == 0)
	{
		alert("Por favor elija un perfil (1ra parte)");
		return false;
	}
	
	//__________________________________________________________________
	bandera = 0;
	for(var i = 0;i < form.elements['grupo_objetivo'].length;i++) 
	{ 
		if(form.elements['grupo_objetivo'][i].checked) 
		{ 
			bandera = 1;
			break;
		}
	}
	if (bandera == 0)
	{
		alert("Por favor elija un grupo objetivo (1ra parte)");
		return false;
	}
	//__________________________________________________________________
	
	if (form.elements['pais'].value=="")
	{
		alert("Por favor seleccione el pais");
		return false;
	}
	
	
	
	//_____________________________________________
	bandera = 0;
	//~ opciones = document.getElementsByName("p2");
	//~ for(var i=0; i<opciones.length; i++) {    
		//~ alert("opcion: "+ opciones[i].value);
	  //~ if(opciones[i].checked) {
		//~ 
		//~ break;
	  //~ }
	//~ }
	for(var i = 0;i < form.elements['p2'].length;i++) 
	{
		if(form.elements['p2'][i].checked) 
		{
			if (i == 2) bandera = 1;
			break;
		}	
	}
	if (bandera != 1)
	{
		if (form.elements['p2_t'].value.length==0)
		{
			alert("Por favor llene la pregunta #2.A");
			return false;
		}
		//return false;
	}
	
	//__________________________________________________________________
	
	bandera = 0;
	for(var i = 0;i < form.elements['p6'].length;i++) 
	{
		if(form.elements['p6'][i].checked) 
		{
			if (i == 0) bandera = 1;
			break;
		}	
	}
	if (bandera == 1)
	{
		if (form.elements['p6_t'].value.length==0)
		{
			alert("Por favor llene la pregunta #6.a");
			return false;
		}
	}
	//__________________________________________________________________
	
	
	//-----------------p8------------------------
	var p81,p82,p83,p84,p85;
	if (form.elements['p8nsnr'].checked == false)
	{
		if (form.elements['p8v1'].value=="")
		{
			p81=0.0
		}
		else
		{
			p81 = parseFloat(form.elements['p8v1'].value)
		}
		if (form.elements['p8v2'].value=="")
		{
			p82=0.0
		}
		else
		{
			p82 = parseFloat(form.elements['p8v2'].value)
		}
		if (form.elements['p8v3'].value=="")
		{
			p83=0.0
		}
		else
		{
			p83 = parseFloat(form.elements['p8v3'].value)
		}
		if (form.elements['p8v4'].value=="")
		{
			p84=0.0
		}
		else
		{
			p84 = parseFloat(form.elements['p8v4'].value)
		}
		if (form.elements['p8v5'].value=="")
		{
			p85=0.0
		}
		else
		{
			p85 = parseFloat(form.elements['p8v5'].value)
		}
		var p8 = p81 + p82 + p83 + p84 + p85;
		if ( p8 != 100)
		{
			alert("La pregunta 8 debe sumar 100%");
			return false;
		}
	}
	
	
	
	
	if (form.elements['p9nsnr'].checked == false)
	{
		p91 = parseInt(form.elements['p9v1'].value);
		p92 = parseInt(form.elements['p9v2'].value);
		p93 = parseInt(form.elements['p9v3'].value);
		p94 = parseInt(form.elements['p9v4'].value);
		p95 = parseInt(form.elements['p9v5'].value);
		p96 = parseInt(form.elements['p9v6'].value);
		p97 = parseInt(form.elements['p9v7'].value);
		p98 = parseInt(form.elements['p9v8'].value);
		//alert(p91 + p92 + p93 + p94 + p95 + p96 + p97 + p98);
		if ((p91 + p92 + p93 + p94 + p95 + p96 + p97 + p98) == 36 )
		{
			
			var retornar = 0;
			if (
			    (p91 == p92) ||
			    (p91 == p93) ||
			    (p91 == p94) ||
			    (p91 == p95) ||
			    (p91 == p96) ||
			    (p91 == p97) ||
			    (p91 == p98)
			){
				retornar = 1;
				
			}
			if (
			    (p92 == p93) ||
			    (p92 == p94) ||
			    (p92 == p95) ||
			    (p92 == p96) ||
			    (p92 == p97) ||
			    (p92 == p98)
			){
				retornar = 1;
			}
			if (
			    (p93 == p94) ||
			    (p93 == p95) ||
			    (p93 == p96) ||
			    (p93 == p97) ||
			    (p93 == p98)
			){
				retornar = 1;
			}
			if (
			    (p94 == p95) ||
			    (p94 == p96) ||
			    (p94 == p97) ||
			    (p94 == p98)
			){
				retornar = 1;
			}
			if (
			    (p95 == p96) ||
			    (p95 == p97) ||
			    (p95 == p98)
			){
				retornar = 1;
			}
			if (
			    (p96 == p97) ||
			    (p96 == p98)
			){
				retornar = 1;
			}
			if (
			    (p97 == p98)
			){
				retornar = 1;
			}
			if (retornar == 1) {
				alert("La pregunta 9 debe sumar 36 (sin repetir los valores)");
				return false;
			}
		}
		else
		{
			alert("La pregunta 9 debe sumar 36 (sin repetir los valores).");
			return false;
		}
	}
	else{
		p91=0.0;
		p92=0.0;
		p93=0.0;
		p94=0.0;
		p95=0.0;
		p96=0.0;
		p97=0.0;
		p98=0.0;
	}
	//
	//if (form.elements['p9nsnr'].checked == false)
	//{
	//	if (form.elements['p9v1'].value=="")
	//	{
	//		p91=0.0
	//	}
	//	else
	//	{
	//		p91 = parseFloat(form.elements['p9v1'].value)
	//	}
	//	if (form.elements['p9v2'].value=="")
	//	{
	//		p92=0.0
	//	}
	//	else
	//	{
	//		p92 = parseFloat(form.elements['p9v2'].value)
	//	}
	//	if (form.elements['p9v3'].value=="")
	//	{
	//		p93=0.0
	//	}
	//	else
	//	{
	//		p93 = parseFloat(form.elements['p9v3'].value)
	//	}
	//	if (form.elements['p9v4'].value=="")
	//	{
	//		p94=0.0
	//	}
	//	else
	//	{
	//		p94 = parseFloat(form.elements['p9v4'].value)
	//	}
	//	if (form.elements['p9v5'].value=="")
	//	{
	//		p95=0.0
	//	}
	//	else
	//	{
	//		p95 = parseFloat(form.elements['p9v5'].value)
	//	}
	//	if (form.elements['p9v6'].value=="")
	//	{
	//		p96=0.0
	//	}
	//	else
	//	{
	//		p96 = parseFloat(form.elements['p9v6'].value)
	//	}
	//	if (form.elements['p9v7'].value=="")
	//	{
	//		p97=0.0
	//	}
	//	else
	//	{
	//		p97 = parseFloat(form.elements['p9v7'].value)
	//	}
	//	if (form.elements['p9v8'].value=="")
	//	{
	//		p98=0.0
	//	}
	//	else
	//	{
	//		p98 = parseFloat(form.elements['p9v8'].value)
	//	}
	//	var p9 = p91 + p92 + p93 + p94 + p95 + p96 + p97 + p98;
	//	if ( p9 != 100)
	//	{
	//		alert("La pregunta 9 debe sumar 100%");
	//		return false;
	//	}
	//}
	
	
	/* 	AQUI USO LA VARIABLE P9 PARA NO DECLARAR MAS VARIABLES Y GASTAR MEMORIA */
	
	p91=0.0;
	p92=0.0;
	p93=0.0;
	p94=0.0;
	p95=0.0;
	
	if (form.elements['p10nsnr'].checked == false)
	{
		p91 = parseInt(form.elements['p10v1'].value);
		p92 = parseInt(form.elements['p10v2'].value);
		p93 = parseInt(form.elements['p10v3'].value);
		p94 = parseInt(form.elements['p10v4'].value);
		p95 = parseInt(form.elements['p10v5'].value);
		//alert(p91 + p92 + p93 + p94 + p95);
		if ((p91 + p92 + p93 + p94 + p95) == 15 )
		{
			
			var retornar = 0;
			if (
			    (p91 == p92) ||
			    (p91 == p93) ||
			    (p91 == p94) ||
			    (p91 == p95) 
			){
				retornar = 1;
				
			}
			if (
			    (p92 == p93) ||
			    (p92 == p94) ||
			    (p92 == p95)
			){
				retornar = 1;
			}
			if (
			    (p93 == p94) ||
			    (p93 == p95)
			){
				retornar = 1;
			}
			if (
			    (p94 == p95)
			){
				retornar = 1;
			}
			if (retornar == 1) {
				alert("La pregunta 10 debe sumar 36, sin repetir los valores (siendo 1 > 5)");
				return false;
			}
		}
		else
		{
			alert("La pregunta 10 debe sumar 36, sin repetir los valores (siendo 1 > 5)");
			return false;
		}
	}
	else{
		p91=0.0;
		p92=0.0;
		p93=0.0;
		p94=0.0;
		p95=0.0;
		p96=0.0;
		p97=0.0;
		p98=0.0;
	}
	//if (form.elements['p10nsnr'].checked == false)
	//{
	//	if (form.elements['p10v1'].value!="")
	//	{
	//		p91 = parseFloat(form.elements['p10v1'].value);
	//	}
	//	if (form.elements['p10v2'].value!="")
	//	{
	//		p92 = parseFloat(form.elements['p10v2'].value);
	//	}
	//	if (form.elements['p10v3'].value!="")
	//	{
	//		p93 = parseFloat(form.elements['p10v3'].value);
	//	}
	//	if (form.elements['p10v4'].value!="")
	//	{
	//		p94 = parseFloat(form.elements['p10v4'].value);
	//	}
	//	if (form.elements['p10v5'].value!="")
	//	{
	//		p95 = parseFloat(form.elements['p10v5'].value);
	//	}
	//	p10 = p91 + p92 + p93 + p94 + p95;
	//	if ( p10 != 100)
	//	{
	//		alert("La pregunta 10 debe sumar 100%");
	//		return false;
	//	}
	//}
	
	
	
	p91=0.0;
	p92=0.0;
	p93=0.0;
	p94=0.0;
	p95=0.0;
	
	if (form.elements['p11nsnr'].checked == false)
	{
		p91 = parseInt(form.elements['p11v1'].value);
		p92 = parseInt(form.elements['p11v2'].value);
		p93 = parseInt(form.elements['p11v3'].value);
		p94 = parseInt(form.elements['p11v4'].value);
		p95 = parseInt(form.elements['p11v5'].value);
		//alert(p91 + p92 + p93 + p94 + p95);
		if ((p91 + p92 + p93 + p94 + p95) == 15 )
		{
			
			var retornar = 0;
			if (
			    (p91 == p92) ||
			    (p91 == p93) ||
			    (p91 == p94) ||
			    (p91 == p95) 
			){
				retornar = 1;
				
			}
			if (
			    (p92 == p93) ||
			    (p92 == p94) ||
			    (p92 == p95)
			){
				retornar = 1;
			}
			if (
			    (p93 == p94) ||
			    (p93 == p95)
			){
				retornar = 1;
			}
			if (
			    (p94 == p95)
			){
				retornar = 1;
			}
			if (retornar == 1) {
				alert("La pregunta 11 debe sumar 36, sin repetir los valores (siendo 1 > 5)");
				return false;
			}
		}
		else
		{
			alert("La pregunta 11 debe sumar 36, sin repetir los valores (siendo 1 > 5)");
			return false;
		}
	}
	//if (form.elements['p11nsnr'].checked == false)
	//{
	//	if (form.elements['p11v1'].value!="")
	//	{
	//		p91 = parseFloat(form.elements['p11v1'].value);
	//	}
	//	if (form.elements['p11v2'].value!="")
	//	{
	//		p92 = parseFloat(form.elements['p11v2'].value);
	//	}
	//	if (form.elements['p11v3'].value!="")
	//	{
	//		p93 = parseFloat(form.elements['p11v3'].value);
	//	}
	//	if (form.elements['p11v4'].value!="")
	//	{
	//		p94 = parseFloat(form.elements['p11v4'].value);
	//	}
	//	if (form.elements['p11v5'].value!="")
	//	{
	//		p95 = parseFloat(form.elements['p11v5'].value);
	//	}
	//	p10=0;
	//	p10 = p91 + p92 + p93 + p94 + p95;
	//	if ( p10 != 100)
	//	{
	//		alert("La pregunta 11 debe sumar 100%");
	//		return false;
	//	}
	//}
	
	
	bandera = 0;
	for(var i = 0;i < form.elements['p17'].length;i++) 
	{
		if(form.elements['p17'][i].checked) 
		{
			if (i == 2) bandera = 1;
			break;
		}	
	}
	if (bandera == 0)
	{
		if (form.elements['p17_t'].value=="")
		{
			alert("Por favor llene la pregunta #17.a");
			return false;
		}
	}
	
	
	
	p91=0.0;
	p92=0.0;
	p93=0.0;
	p94=0.0;
	p95=0.0;
	p96=0.0;
	p97=0.0;
	p98 = 0.0;
	
	if (form.elements['p19nsnr'].checked == false)
	{
		if (form.elements['p19v1'].value!="")
		{
			p91 = parseFloat(form.elements['p19v1'].value);
		}
		if (form.elements['p19v2'].value!="")
		{
			p92 = parseFloat(form.elements['p19v2'].value);
		}
		if (form.elements['p19v3'].value!="")
		{
			p93 = parseFloat(form.elements['p19v3'].value);
		}
		if (form.elements['p19v4'].value!="")
		{
			p94 = parseFloat(form.elements['p19v4'].value);
		}
		if (form.elements['p19v5'].value!="")
		{
			p95 = parseFloat(form.elements['p19v5'].value);
		}
		if (form.elements['p19v6'].value!="")
		{
			p96 = parseFloat(form.elements['p19v6'].value);
		}
		if (form.elements['p19v7'].value!="")
		{
			p97 = parseFloat(form.elements['p19v7'].value);
		}
		if (form.elements['p19v8'].value!="")
		{
			p98 = parseFloat(form.elements['p19v8'].value);
		}
		p10=0.0;
		p10 = p91 + p92 + p93 + p94 + p95 + p96 + p97 + p98;
		if ( p10 != 100)
		{
			alert("La pregunta 19 debe sumar 100%");
			return false;
		}
	}
	
	
	bandera = 0;
	for(var i = 0;i < form.elements['p21'].length;i++) 
	{
		if(form.elements['p21'][i].checked) 
		{
			if (i == 6) bandera = 1;
			break;
		}
	}
	if (bandera == 1)
	{
		if (form.elements['p21_t'].value=="")
		{
			alert("Por favor llene la pregunta #21.a");
			return false;
		}
	}
	
	
	p91=0.0;
	p92=0.0;
	p93=0.0;
	p94=0.0;
	p95 = 0.0;
	if (form.elements['p24nsnr'].checked == false)
	{
		if (form.elements['p24v1'].value!="")
		{
			p91 = parseFloat(form.elements['p24v1'].value);
		}
		if (form.elements['p24v2'].value!="")
		{
			p92 = parseFloat(form.elements['p24v2'].value);
		}
		if (form.elements['p24v3'].value!="")
		{
			p93 = parseFloat(form.elements['p24v3'].value);
		}
		if (form.elements['p24v4'].value!="")
		{
			p94 = parseFloat(form.elements['p24v4'].value);
		}
		if (form.elements['p24v5'].value!="")
		{
			p95 = parseFloat(form.elements['p24v5'].value);
		}
		p10=0.0;
		p10 = p91 + p92 + p93 + p94 + p95;
		if ( p10 != 100)
		{
			alert("La pregunta 24 debe sumar 100%");
			return false;
		}
	}
	
	
	bandera = 0;
	for(var i = 0;i < form.elements['p25'].length;i++) 
	{
		if(form.elements['p25'][i].checked) 
		{
			if (i == 2) bandera = 1;
			break;
		}
	}
	if (bandera != 1)
	{
		if (form.elements['p25_t'].value=="")
		{
			alert("Por favor llene la pregunta #25.a");
			return false;
		}
	}
	
	bandera = 0;
	for(var i = 0;i < form.elements['p26'].length;i++) 
	{
		if(form.elements['p26'][i].checked) 
		{
			if (i == 2) bandera = 1;
			break;
		}
	}
	if (bandera != 1)
	{
		if (form.elements['p26_t'].value=="")
		{
			alert("Por favor llene la pregunta #26.a");
			return false;
		}
	}
	
	
	
	
	p91=0.0;
	p92=0.0;
	p93=0.0;
	p94=0.0;
	p95 = 0.0;
	p96 = 0.0;
	if (form.elements['p27nsnr'].checked == false)
	{
		if (form.elements['p27v1'].value!="")
		{
			p91 = parseFloat(form.elements['p27v1'].value);
		}
		if (form.elements['p27v2'].value!="")
		{
			p92 = parseFloat(form.elements['p27v2'].value);
		}
		if (form.elements['p27v3'].value!="")
		{
			p93 = parseFloat(form.elements['p27v3'].value);
		}
		if (form.elements['p27v4'].value!="")
		{
			p94 = parseFloat(form.elements['p27v4'].value);
		}
		if (form.elements['p27v5'].value!="")
		{
			p95 = parseFloat(form.elements['p27v5'].value);
		}
		if (form.elements['p27v6'].value!="")
		{
			p96 = parseFloat(form.elements['p27v6'].value);
		}
		p10=0.0;
		p10 = p91 + p92 + p93 + p94 + p95 + p96;
		if ( p10 != 100)
		{
			alert("La pregunta 27 debe sumar 100%");
			return false;
		}
	}
	
	
	
	
	if (form.elements['p14nsnr'].checked == false)
	{
		if (form.elements['p14'].value=="")
		{
			alert("Por favor llene la pregunta 14");
			return false;
		}
	}	
	
	
	bandera = 0;
	for(var i = 0; i < form.elements['p17'].length; i++) 
	{
		if(form.elements['p17'][i].checked) 
		{
			if (i == 2) bandera = 1;
			break;
		}	
	}
	if (bandera != 1)
	{
		if (form.elements['p17_t'].value.length==0)
		{
			alert("Por favor llene la pregunta #17.a");
			return false;
		}
	}
	
	///////////////////////////////////////////////////////////
	
	//if (form.elements['p18nsnr'].checked == false)
	//{
	//	if (form.elements['p18'].value=="")
	//	{
	//		alert("Por favor llene la pregunta 18");
	//		return false;
	//	}
	//}
	//_______________________________________________
	bandera = 0;
	if (
	    (
	     (form.elements['p18a'].checked==true)
	     || (form.elements['p18b'].checked==true)
	     || (form.elements['p18c'].checked==true)
	     || (form.elements['p18d'].checked==true)
	     || (form.elements['p18e'].checked==true)
	     || (form.elements['p18f'].checked==true)
	     || (form.elements['p18g'].checked==true)
	     || (form.elements['p18h'].checked==true)
	     || (form.elements['p18i'].checked==true)
	     || (form.elements['p18j'].checked==true)
	     || (form.elements['p18k'].checked==true)
	     || (form.elements['p18l'].checked==true)
	     || (form.elements['p18m'].checked==true)
	     || (form.elements['p18nsnr'].checked==true)
	    )
	   )
	{
		bandera = 1;
	}
	if (bandera == 0) {
		alert("Por favor responder la pregunta # 18");
		return false;
	}
	
	
	/////////////////////////////////////////////////////////777
	
	
	if (form.elements['p30_a'].value=="")
	{
		alert("Por favor llene la pregunta 30 a");
		return false;
	}

	
	
	
}
