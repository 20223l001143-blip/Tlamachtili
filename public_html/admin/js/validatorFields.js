
function UTNumeric(evt){
    //asignamos el valor de la tecla a keynum
    if(window.event){// IE
        keynum = evt.keyCode;
    }else{
        keynum = evt.which;
    }
    //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
    if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
        return true;
    }
    else{
        return false;
    }
}

function UTZero(event,field){
    var str = field.value;
    if(str.length==0){
        field.value="";
        field.setSelectionRange(0,1);
    }
}

function UTFloat(e, field) {
    key = e.keyCode ? e.keyCode : e.which
    // backspace
    if ((key == 8)|| (key == 37)|| (key == 39)) return true
    if ((key == 13) || (key == 9)) return true;//13 enter 9 tab
    // 0-9
    if (key > 47 && key < 58) {
        if (field.value == "") return true
        regexp =  /[0-9][0-9][0-9][0-9].[0-9]{2}$/
        return !(regexp.test(field.value))
    }
    // .
    if (key == 46) {
        if (field.value == "") return false
        regexp = /^[0-9]+$/
        return regexp.test(field.value)
    } // other key
    return false
}

function UTText(e){
    var key = window.Event ? e.which : e.keyCode
    if ((key == 13) || (key == 9) || (key == 8))return true;
    return (key == 32 /* espacio */
        || key == 33 /* ! */
        || key == 35 /* # */
        || key == 36 /* $ */
        || key == 37 /* % */
        || key == 38 /* & */
        || key == 40 /* ( */
        || key == 41 /* ) */
        || key == 42 /* * */
        || key == 43 /* + */
        || key == 44 /* , */
        || key == 45 /* - */
        || key == 46 /* . */
        || key == 47 /* / */
        || (key >= 48 && key <= 57) /* 0-9 */
        || key == 58 /* : */
        || key == 59 /* ; */
        || key == 60 /* < */
        || key == 61 /* = */
        || key == 62 /* > */
        || key == 63 /* ? */
        || key == 64 /* @ */
        || (key >= 65 && key <= 90) /* A-Z */
        || key == 95 /* _ */
        || (key >= 97 && key <= 122) /* a-z */
        || key == 161 /* ¡ */
        || key == 191 /* ¿ */
        || key == 193 /* Á */
        || key == 201 /* É */
        || key == 205 /* Í */
        || key == 211 /* Ó */
        || key == 218 /* Ú */
        || key == 225 /* á */
        || key == 233 /* é */
        || key == 237 /* í */
        || key == 243 /* ó */
        || key == 250 /* ú */
        || key == 209 /* Ñ */
        || key == 241 /* ñ */);
}

function soloNumeros(evt){
    if (window.event) { //asignamos el valor de la tecla a keynum
        keynum = evt.keyCode; //IE
    } else {
        keynum = evt.which; //FF
    }
    //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
    if ((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ) {
        return true;
    } else {
        return false;
    }
}

function mayus(e) {
    e.value = e.value.toUpperCase();
}

function Letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46-32";

    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}

function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);
    if (!validado)  //Coincide con el formato general?
        return false;
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1]))
        return false;
    return true; //Validado
}
function validacurp(input){
    var curp = input.value.toUpperCase();
    if (curp.length != 0){
        resultado = document.getElementById("resultcurp");
        if (curpValida(curp)) { // ⬅️ Acá se comprueba
            resultado.innerText = "";
        } else {
            resultado.innerText = "Formato de CURP no valido";
        }
    } else {
        resultado.innerText = "";
    }
}
function validatele(input){
    var tele = input.value;
    rete = document.getElementById("resulttele");
    if (tele.length == 14 || tele.length == 0){
        rete.innerText = "";
    } else {
        rete.innerText = "El formato de teléfono no es correcto";
    }
}
function validacelu(input){
    var celu = input.value;
    rece = document.getElementById("resultcelu");
    if (celu.length == 14 || celu.length == 0){
        rece.innerText = "";
    } else {
        rece.innerText = "El formato de teléfono móvil no es correcto";
    }
}
function validamail(input){
    var mail = input.value;
    var rema = document.getElementById("resultmail");
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(mail)){
        rema.innerText = "";
    } else {
        rema.innerText = "El formato del correo electrónico no es correcto";
    }
}
function validamailcontacto(input){
    var mail = input.value;
    var rema = document.getElementById("resultmailcontacto");
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(mail)){
        rema.innerText = "";
    } else {
        rema.innerText = "El formato del correo electrónico no es correcto";
    }
}
function validarangofecha(){
    var refei = document.getElementById("msnfinicio");
    var refef = document.getElementById("msnffin");
    var referi = document.getElementById("msnrinicio");
    var referf = document.getElementById("msnrfin");
    var fini = document.getElementById("finicio").value;
    var ffin = document.getElementById("ffin").value;
    var rini = document.getElementById("rinicio").value;
    var rfin = document.getElementById("rfin").value;
    refei.innerText = "";
    refef.innerText = "";
    referi.innerText = "";
    referf.innerText = "";
    if (fini.length != 0 && ffin.length != 0){
        var fechaini = fini.split(' / ');
        var fechafin = ffin.split(' / ');
        var finicia = new Date(fechaini[2],fechaini[1],fechaini[0]);
        var ffinaliza = new Date(fechafin[2],fechafin[1],fechafin[0]);
        if (finicia > ffinaliza){
            refei.innerText = "Anterior a la fecha de cierre. ";
            refef.innerText = "Posterior a la fecha de inicio.";
        }
    }
    if (rini.length != 0 && rfin.length != 0){
        var fechaini = rini.split(' / ');
        var fechafin = rfin.split(' / ');
        var finicia = new Date(fechaini[2],fechaini[1],fechaini[0]);
        var ffinaliza = new Date(fechafin[2],fechafin[1],fechafin[0]);
        if (finicia > ffinaliza){
            referi.innerText = "Anterior a la fecha de cierre. ";
            referf.innerText = "Posterior a la fecha de inicio.";
        }
    }

}
