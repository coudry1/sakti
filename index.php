<?php   
error_reporting(0);
$p = $_GET['p'];  
        switch($p)
        {
	    case '':
                include('login.php');
                break;	
	    case 'lg':
                include('logout.php');
                break;	
        case 'u':
                include('daftar_login.php');
                break;				
        case 'p':
                include('pengunjung.php');
                break;     
		case 'd':
                include('dasboard.php');
                break;		
		case 'b':
                include('lap_bend.php');
                break;		
	    case 's':
                include('spp.php');
                break;	    	
	    case 'dr':
                include('dropdown.php');
                break;	        	
	    case 'lf':
                include('lap_fa.php');
                break;	   	        	
	    case 'r':
                include('report.php');
                break;	    	   	        	
	    case 'lpb':
                include('lap_persed_bt.php');
                break;		    	   	        	
	    case 'lab':
                include('lap_aset_bt.php');
                break;	    		    	   	        	
	    case 'lgb':
                include('lap_glp_bt.php');
                break;		    		    	   	        	
	    case 'lpbd':
                include('lap_persed_bd.php');
                break;			    		    	   	        	
	    case 'lpbdk':
                include('lap_persed_bdk.php');
                break;	 		    		    	   	        	
	    case 'labd':
                include('lap_aset_bd.php');
                break;
		case 'labdk':
                include('lap_aset_bdkxxx.php');
                break;	 		    		    	   	     
        case 'labdaset':
                include('lap_aset_bd.php');
                break;	 		    		    	   	     
        case 'ltw':
                include('lap_tidak_wajar.php');
                break;
		case 'lpjb':
                include('lap_pgjenbel1.php');
                break;		
		case 'lkon':
                include('lap_kontrak.php');
                break;				
		case 'lkons':
                include('lap_konsolidasi.php');
                break;						
		case 'lsss':
                include('lap_sppspmsp2d.php');
                break;		
		}
?>