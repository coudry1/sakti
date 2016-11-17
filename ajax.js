	/***********************************************************
	*   Filename: ajax.js                                                              
	*   Purpose: make Ajax Request                                                        
	*   (c) Thakares Infotech Pvt. Ltd.                                                     
	*   Website: http://www.thakares.com                                                   
	*   e-Mail: info@thakares.com                                                           
	*   (c) Copyright by Thakares Infotech Pvt. Ltd.                                      
	*   Released under GPL. But not for commercial purpose     
	* 	Ronny@tiaka.net	
	***********************************************************/
    
    XMLHttp = function() {
        try  { // for IE 7.0/ firefox and other browsers etc
            XmlHttp = new XMLHttpRequest();
            return XmlHttp;
        }  catch(e)  {
            // check Microsoft Ajax ActiveX Object IE 5.5, IE 6.0 etc
            var MicrosoftAjaxObject = new Array("Msxml2.XMLHTTP.6.0",
                                                "Msxml2.XMLHTTP.5.0",
                                                "Msxml2.XMLHTTP.4.0",
                                                "Msxml2.XMLHTTP.3.0",
                                                "Msxml2.XMLHTTP",
                                                "Microsoft.XMLHTTP");
                                            
            for (var i=0; i < MicrosoftAjaxObject.length; i++){     
                try {
                        // try to create the XMLHttpRequest object
                        var XmlHttp = new ActiveXObject(MicrosoftAjaxObject[i]);
                        return XmlHttp;
                } catch(e){ }
            }   // end of for
            
            throw new Error('XMLHttp (AJAX) not supported');  
        
        }  // end of catch e
    } // end of function XMLHttp
   
	function makeRequest(XmlHttp, method, serverPage, parameter, objID,whereis) {      // Ajax server file request function 
        /******************************************************
		*	XmlHttp: AJAX Object
		*	method: 'get' or 'post'
		*	serverpage: url of serverpage
		*	parameter: post variables
		*	objID: target id of the HTML TAG
		******************************************************/
		
		var obj = document.getElementById(objID);  // find Target TAG 
        obj.innerHTML = '<center><img src="'+whereis+'loader.gif" alt="loading..." /><br><font style="font-size:12px">Memuat</font></center>'; 
        
        XmlHttp.open(method, serverPage, true);     // make a request using method 
        
        // following lines required to fix the cache bug of IE
		XmlHttp.setRequestHeader('If-Modified-Since', 'Sat, 1 Jan 1990 00:00:00 GMT');
        XmlHttp.setRequestHeader('Cache-Control', 'no-cache');
		
		// following line is required to send encoded POST requests
        XmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");  
        
        if (method == 'post' && parameter != '') {   
            XmlHttp.setRequestHeader("Content-length", parameter.length);
        }
        
        XmlHttp.setRequestHeader ("Connection", "close");  
       
        XmlHttp.onreadystatechange = function() {
            if (XmlHttp.readyState == 4 && XmlHttp.status == 200) {   //4 - request complete, 200 - No error response OK
                
               	if(parameter.substr(0,15)=='aktifkantanggal'){
					obj.innerHTML = XmlHttp.responseText;  // Print to the target Tag
				   jam(document.getElementById('update_jam'));
				   tanggal(document.getElementById('dtgl'));
				   bulan(document.getElementById('dbln'));
				   tahun(document.getElementById('dthn'));
				}else if(parameter.substr(0,12)=='showall_kate'){
					obj.innerHTML = XmlHttp.responseText;  // Print to the target Tag
					update_kate();
				}else if(parameter.substr(0,9)=='startanim'){
					obj.innerHTML = XmlHttp.responseText;  // Print to the target Tag
				   ScrollMessage();
				   ScrollMessage2();
				}else if(parameter.substr(0,7)=='alertit'){
					obj.innerHTML = XmlHttp.responseText;  // Print to the target Tag
				   showalert(parameter.substr(7,parameter.indexOf("=")-7));
				}else if(parameter.substr(0,9)=='callfunc='){
				   obj.innerHTML = XmlHttp.responseText;
				   
				   afterajax(parameter.substr(9,1));
				}else{
					obj.innerHTML = XmlHttp.responseText;				  // Print to the target Tag
				}
				$("button").button();
            }
        }
        
        if (method == 'post' && parameter != '') {     
             XmlHttp.send(parameter);      
        } else {      
            XmlHttp.send(null);
        }
         
    } 
	 
	 