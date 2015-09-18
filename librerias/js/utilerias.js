/*<![CDATA[*/

/*
*  Valida que el texo escrito en el campo sea un caracter alfabetico
*  acepta acentos en mayusculas y minusculas
*/
 function getKeyChar( events ){
	  	var key = ( window.event )?events.keyCode:events.which;
	  	if( ( key >= 65 && key <= 90 ) || //A-Z
	  		( key >= 97 && key <= 122 ) || //a-z
	  		key == 193 || key == 201 || key == 205 || // ?, ?, ?
	  		key == 211 || key == 218 ||  // ?, ?
	  		key == 225 || key == 233 || key == 237 || //?, ?, ?
	  		key == 243 || key == 250 || //?, ?
	  		key == 209 || key == 241 || //&Ntilde;  &ntilde;
	  		key == 8   || key == 32  || key == 0 //Bk Sp, Space
	  	){
	  		return true;
	  	}else{
	  		return false;
	  	}
}

/*
* Funcion que valida que el caracter que se tipea
*  sea solo letra.
* onkeypress="return getKeyLetter(event);"
*/
 function getKeyLetter(events){
		  	var key=(window.event)?events.keyCode:events.which;
		  	if( ( (key >= 65 && key <= 90)) || //A-Z
		  		( (key >= 97 && key <= 122)) ||//a-z
		  		  (key == 8 || key == 0)//tab,backspace
		  		  ){
		  		return true;
		  	}else{
		  		return false;
		  	}
		  	
}

/*
* Valida que el texto escrito en el campo sea un 
*  caracter numerico.
* Uso: onkeypress="return getKeyNumber(event);"
*/
function getKeyNumber( events ){
	  	var key = ( window.event )?events.keyCode:events.which;
	  	if( ( key >= 48 && key <= 57 ) || key == 8 || key == 0 ){
			
	  		return true;
	  	}else{
			//alert('Es un campo numerico');
	  		return false;
	  	}
	  }


/**
* FUNCION PARA DAR FORMATO TIPO CANTIDAD
* MOENTARIA
* USO: EN SU INPUTEXT DE UNA PROPIEDAD MAPEADA STRING
* onblur="formatCurrency(this);"
* @param num
* @return
*/
function formatCurrency(num) {
		  num = num.toString().replace(/\$|\,/g,'');
		  if(isNaN(num))
		  num = "0";  //FIXME: num es cadena o es numero?
		  sign = (num == (num = Math.abs(num)));
		  num = Math.floor(num*100+0.50000000001);
		  cents = num%100;
		  num = Math.floor(num/100).toString();
		  if(cents<10)
		  cents = "0" + cents;
		  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
		  num = num.substring(0,num.length-(4*i+3))+','+
		  num.substring(num.length-(4*i+3));
		  return (((sign)?'':'-') +num + '.' + cents);
}


/*
*  Funcion que valida que el caracter que se tipea
* sea numero ,coma(,),o punto para Cantidades de Moneda
* @param events
* @return
* uso= onkeypress="return  getKeyForImporteCantidad(event);"
*/
	  function getKeyForImporteCantidad(events){
		  var key=(window.event)?events.keyCode:events.which;
		  if((( key >= 48 && key <= 57) || key == 8 || key == 0 )||//0-9,backEspace
			  		(key==44 || key==46)//',','.'
			  		){
			  		return true;
			  	}else{
			  		return false;
			  	}
		  
	  }
/*]]>*/

/*
* funcion para eliminar los espacio de las cajas de texto
*/

String.prototype.trim = function(){ return this.replace(/^\s+|\s+$/g,'') }

/*
*	Funcion que sirve para comparar fechas retorna true si fecha es mayor que fecha2
*   y false cuando fecha2 es mayor que fecha 
*
*/

function compare_dates(fecha, fecha2)  
  {  
    var xMonth=fecha.substring(3, 5);  
    var xDay=fecha.substring(0, 2);  
    var xYear=fecha.substring(6,10);  
    var yMonth=fecha2.substring(3, 5);  
    var yDay=fecha2.substring(0, 2);  
    var yYear=fecha2.substring(6,10);  
    if (xYear> yYear)  
    {  
        return(true)  
    }  
    else  
    {  
      if (xYear == yYear)  
      {   
        if (xMonth> yMonth)  
        {  
            return(true)  
        }  
        else  
        {   
          if (xMonth == yMonth)  
          {  
            if (xDay> yDay)  
              return(true);  
            else  
              return(false);  
          }  
          else  
            return(false);  
        }  
      }  
      else  
        return(false);  
    }  
}  	
