<?php error_reporting(0); ?>
<link href="css/table_white.css" rel="stylesheet">	
<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.lkon.options[form.lkon.options.selectedIndex].value;
self.location='?p=lkon&q=' + val;
}
</script>
				  
<script>
function Print() {
document.body.offsetHeight;
window.print();
}
</script>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form name="form2" method="post" onSubmit="Print()" action="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Submit2" type="submit" class="button" value="PRINT">

<?php if (isset($_GET['q'])) $kdsatker= $_GET['q'];	?>
<div align='center'>
<form action="?p=lkon" method="post">
<select name="lkon" id="lkon" onChange="reload(this.form)">
<option value="" > --- PILIH SATKER --- </option>
<option value ="527010"> KANTOR PUSAT DIREKTORAT JENDERAL PERBENDAHARAAN </option>
<option value ="439171"> SISTEM PERBENDAHARAAN DAN ANGGARAN NEGARA </option>
<option value ="439165"> KOMITE STANDAR AKUNTASI PEMERINTAH (KSAP) </option>
<option value ="409999"> BADAN PENGELOLA DANA PERKEBUNAN KELAPA SAWIT </option>

<optgroup><option value ="527556"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI ACEH --- </option></optgroup>
<option value ="527598"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TAPAK TUAN </option>
<option value ="527624"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TAKENGON </option>
<option value ="527577"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MEULABOH </option>
<option value ="527603"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LHOK SEUMAWE </option>
<option value ="527581"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LANGSA </option>
<option value ="527610"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KUTACANE </option>
<option value ="527560"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANDA ACEH </option>

<optgroup><option value ="527645"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SUMATERA UTARA --- </option></optgroup>
<option value ="527741"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TEBING TINGGI </option>
<option value ="527691"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANJUNG BALAI </option>
<option value ="527734"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SIDIKALANG      </option>
<option value ="527713"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SIBOLGA         </option>
<option value ="527709"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA RANTAU PRAPAT   </option>
<option value ="527666"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PEMATANG SIANTAR</option>
<option value ="527670"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PADANG SIDEMPUAN</option>
<option value ="451562"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MEDAN II        </option>
<option value ="527652"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MEDAN I         </option>
<option value ="527687"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA GUNUNG SITOLI   </option>
<option value ="527755"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BALIGE          </option>

<optgroup><option value ="527776"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SUMATERA BARAT --- </option></optgroup>
<option value ="527819"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SOLOK           </option>
<option value ="527802"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SIJUNJUNG       </option>
<option value ="634409"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PAINAN          </option>
<option value ="527780"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PADANG          </option>
<option value ="527823"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LUBUK SIKAPING  </option>
<option value ="527797"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BUKITTINGGI     </option>

<optgroup><option value ="613739"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI RIAU --- </option></optgroup>
<option value ="527865"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA RENGAT          </option>
<option value ="527844"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PEKANBARU       </option>
<option value ="527872"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA DUMAI           </option>

<optgroup><option value ="325237"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI KEPULAUAN RIAU --- </option></optgroup>
<option value ="527851"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANJUNG PINANG           </option>
<option value ="539032"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BATAM                    </option>

<optgroup><option value ="613743"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI JAMBI --- </option></optgroup>
<option value ="527908"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SUNGAI PENUH    </option>
<option value ="527912"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MUARA BUNGO     </option>
<option value ="634497"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KUALA TUNGKAL   </option>
<option value ="527890"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAMBI           </option>
<option value ="648762"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANGKO          </option>

<optgroup><option value ="527933"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SUMATERA SELATAN --- </option></optgroup>
<option value ="648779"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SEKAYU          </option>
<option value ="527940"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PALEMBANG       </option>
<option value ="527961"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LUBUK LINGGAU   </option>
<option value ="634530"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LAHAT           </option>
<option value ="527975"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BATURAJA        </option>

<optgroup><option value ="528001"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI LAMPUNG --- </option></optgroup>
<option value ="528036"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA METRO LAMPUNG   </option>
<option value ="634572"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LIWA            </option>
<option value ="528022"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KOTABUMI        </option>
<option value ="528015"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANDAR LAMPUNG  </option>

<optgroup><option value ="613750"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI BENGKULU --- </option></optgroup>
<option value ="445371"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MUKO MUKO       </option>
<option value ="528792"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MANNA           </option>
<option value ="634608"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA CURUP           </option>
<option value ="528785"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BENGKULU        </option>

<optgroup><option value ="634256"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI BANGKA BELITUNG --- </option></optgroup>
<option value ="527982"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANJUNG PANDAN  </option>
<option value ="527954"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PANGKAL PINANG  </option>

<optgroup><option value ="634260"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI BANTEN --- </option></optgroup>
<option value ="634633"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANGERANG </option>
<option value ="527162"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SERANG </option>
<option value ="648783"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA RANGKASBITUNG </option>

<optgroup><option value ="527027"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI DKI JAKARTA --- </option></optgroup>
<option value ="613811"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS PINJAMAN DAN HIBAH</option>
<option value ="015116"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS PENERIMAAN        </option>
<option value ="015117"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KHUSUS INVESTASI         </option>
<option value ="015115"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA VII              </option>
<option value ="015114"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA VI               </option>
<option value ="579330"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA V                </option>
<option value ="531293"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA IV               </option>
<option value ="527052"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA III              </option>
<option value ="527048"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA II               </option>
<option value ="527031"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAKARTA I                </option>

<optgroup><option value ="527094"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI JAWA BARAT --- </option></optgroup>
<option value ="527141"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TASIKMALAYA              </option>
<option value ="648790"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SUMEDANG                 </option>
<option value ="527230"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SUKABUMI                 </option>
<option value ="527158"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PURWAKARTA               </option>
<option value ="634661"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KUNINGAN                 </option>
<option value ="527183"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KARAWANG                 </option>
<option value ="527205"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA GARUT                    </option>
<option value ="527120"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA CIREBON                  </option>
<option value ="527137"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BOGOR                    </option>
<option value ="652449"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BEKASI                   </option>
<option value ="451531"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANDUNG II               </option>
<option value ="527102"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANDUNG I                </option>

<optgroup><option value ="527268"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI JAWA TENGAH --- </option></optgroup>
<option value ="527357"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TEGAL                    </option>
<option value ="527289"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SURAKARTA                </option>
<option value ="648805"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SRAGEN                   </option>
<option value ="451547"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SEMARANG II              </option>
<option value ="527272"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SEMARANG I               </option>
<option value ="527293"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PURWOREJO                </option>
<option value ="527301"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PURWOKERTO               </option>
<option value ="648812"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PURWODADI                </option>
<option value ="527315"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PEKALONGAN               </option>
<option value ="527322"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PATI                     </option>
<option value ="527340"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAGELANG                 </option>
<option value ="527336"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KUDUS                    </option>
<option value ="634722"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KLATEN                   </option>
<option value ="527361"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA CILACAP                  </option>
<option value ="648826"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANJARNEGARA             </option>

<optgroup><option value ="634277"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI D.I. YOGYAKARTA --- </option></optgroup>
<option value ="527399"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA YOGYAKARTA               </option>
<option value ="634792"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA WONOSARI                 </option>
<option value ="497587"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA WATES                    </option>

<optgroup><option value ="527411"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI JAWA TIMUR --- </option></optgroup>
<option value ="648889"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TUBAN                    </option>
<option value ="451553"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SURABAYA II              </option>
<option value ="527425"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SURABAYA I               </option>
<option value ="648830"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SIDOARJO                 </option>
<option value ="527471"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PAMEKASAN                </option>
<option value ="527514"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PACITAN                  </option>
<option value ="527500"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MOJOKERTO                </option>
<option value ="527432"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MALANG                   </option>
<option value ="527450"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MADIUN                   </option>
<option value ="527446"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KEDIRI                   </option>
<option value ="527521"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JEMBER                   </option>
<option value ="527467"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BONDOWOSO                </option>
<option value ="527488"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BOJONEGORO               </option>
<option value ="634860"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BLITAR                   </option>
<option value ="527492"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANYUWANGI               </option>

<optgroup><option value ="528057"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI KALIMANTAN BARAT --- </option></optgroup>
<option value ="528078"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SINTANG                  </option>
<option value ="528099"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SINGKAWANG               </option>
<option value ="648893"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SANGGAU                  </option>
<option value ="528104"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PUTUSSIBAU               </option>
<option value ="528061"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PONTIANAK                </option>
<option value ="528082"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KETAPANG                 </option>

<optgroup><option value ="613764"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI KALIMANTAN TENGAH --- </option></optgroup>
<option value ="648868"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SAMPIT                   </option>
<option value ="528150"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PANGKALAN BUN            </option>
<option value ="528125"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PALANGKARAYA             </option>
<option value ="528146"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BUNTOK                   </option>

<optgroup><option value ="528171"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI KALIMANTAN SELATAN --- </option></optgroup>
<option value ="634963"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANJUNG                  </option>
<option value ="648872"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PELAIHARI                </option>
<option value ="528192"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KOTABARU                 </option>
<option value ="528200"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BARABAI                  </option>
<option value ="528188"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANJARMASIN              </option>

<optgroup><option value ="613771"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI KALIMANTAN TIMUR --- </option></optgroup>
<option value ="528235"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TARAKAN                  </option>
<option value ="634984"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TANJUNG REDEP            </option>
<option value ="528221"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SAMARINDA                </option>
<option value ="634991"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA NUNUKAN                  </option>
<option value ="528242"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BALIKPAPAN               </option>

<optgroup><option value ="528544"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI BALI --- </option></optgroup>
<option value ="528565"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SINGARAJA                </option>
<option value ="528551"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA DENPASAR                 </option>
<option value ="635045"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA AMLAPURA                 </option>

<optgroup><option value ="613785"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI NUSA TENGGARA BARAT --- </option></optgroup>
<option value ="528608"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SUMBAWA BESAR            </option>
<option value ="648847"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SELONG                   </option>
<option value ="528586"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MATARAM                  </option>
<option value ="528590"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BIMA                     </option>

<optgroup><option value ="528629"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI NUSA TENGGARA TIMUR --- </option></optgroup>
<option value ="528654"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA WAINGAPU                 </option>
<option value ="528661"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA RUTENG                   </option>
<option value ="662770"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LARANTUKA                </option>
<option value ="528633"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KUPANG                   </option>
<option value ="528640"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA ENDE                     </option>
<option value ="652453"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA ATAMBUA                  </option>

<optgroup><option value ="528366"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SULAWESI SELATAN --- </option></optgroup>
<option value ="528420"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA WATAMPONE                </option>
<option value ="497593"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SINJAI                   </option>
<option value ="528387"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PARE PARE                </option>
<option value ="528409"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PALOPO                   </option>
<option value ="451578"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAKASSAR II              </option>
<option value ="528370"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAKASAR I                </option>
<option value ="648851"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAKALE                   </option>
<option value ="635120"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BENTENG                  </option>
<option value ="528391"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BANTAENG                 </option>

<optgroup><option value ="613807"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SULAWESI TENGAH --- </option></optgroup>
<option value ="528345"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TOLI TOLI                </option>
<option value ="528331"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA POSO                     </option>
<option value ="528310"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA PALU                     </option>
<option value ="528324"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA LUWUK                    </option>

<optgroup><option value ="340249"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SULAWESI BARAT --- </option></optgroup>
<option value ="451604"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAMUJU                   </option>
<option value ="528413"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MAJENE                   </option>

<optgroup><option value ="613792"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SULAWESI TENGGARA --- </option></optgroup>
<option value ="635155"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA RAHA                     </option>
<option value ="635162"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KOLAKA                   </option>
<option value ="528441"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KENDARI                  </option>
<option value ="528455"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BAU BAU                  </option>

<optgroup><option value ="648741"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI GORONTALO --- </option></optgroup>
<option value ="497622"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MARISA                   </option>
<option value ="528281"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA GORONTALO                </option>

<optgroup><option value ="528260"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI SULAWESI UTARA --- </option></optgroup>
<option value ="528298"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TAHUNA                   </option>
<option value ="528277"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MANADO                   </option>
<option value ="635197"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA KOTAMUBAGU               </option>
<option value ="497607"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BITUNG                   </option>

<optgroup><option value ="662787"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI MALUKU UTARA --- </option></optgroup>
<option value ="452878"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TOBELO                   </option>
<option value ="528497"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TERNATE                  </option>

<optgroup><option value ="528476"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI MALUKU --- </option></optgroup>
<option value ="528502"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TUAL                     </option>
<option value ="528519"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SAUMLAKI                 </option>
<option value ="652460"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MASOHI                   </option>
<option value ="528480"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA AMBON                    </option>

<optgroup><option value ="528682"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI PAPUA --- </option></optgroup>
<option value ="528764"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA WAMENA                   </option>
<option value ="613832"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA TIMIKA                   </option>
<option value ="539049"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SERUI                    </option>
<option value ="528750"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA NABIRE                   </option>
<option value ="528743"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MERAUKE                  </option>
<option value ="528696"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA JAYAPURA                 </option>
<option value ="528701"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA BIAK                     </option>

<optgroup><option value ="330171"> --- KANWIL DITJEN PERBENDAHARAAN PROVINSI PAPUA BARAT --- </option></optgroup>
<option value ="528722"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA SORONG                   </option>
<option value ="528718"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA MANOKWARI                </option>
<option value ="528739"> KANTOR PELAYANAN PERBENDAHARAAN NEGARA FAK FAK                  </option>
  </select></div>
  
<br>
<br>

<?php 
include "koneksi.php";
$today = gmdate("d-m-y", time()+60*60*8); 

$satker  = oci_parse($conn, "select kode , deskripsi nama_satker from SAKTI_APP.ADM_R_SATKER where kode='$kdsatker'" );
oci_define_by_name($satker,'NAMA_SATKER',$nama_satker);
oci_execute($satker);
oci_fetch($satker);


$sql  = oci_parse($conn, "select a.*, b.deskripsi from (
select kode_satker, no_kontrak, to_char(tgl_kontrak, 'dd-mm-yyyy') tgl_kontrak, nilai_kontrak,  to_char(tgl_selesai_pelaksanaan, 'dd-mm-yyyy') tgl_mulai_pelaksanaan, to_char(tgl_selesai_pelaksanaan, 'dd-mm-yyyy') tgl_selesai_pelaksanaan, uraian_kontrak from SAKTI_APP.KOM_T_KONTRAK_HEADER where kode_satker='$kdsatker') a left join
(select kode, deskripsi from SAKTI_APP.ADM_R_SATKER) b on a.kode_satker=b.kode ");
oci_execute($sql);

if ($kdsatker!='') {
echo "
<table height='50px' width='1278px' style='background:white;' align='center' border='0'>
<tr border='0' height='30px'><td colspan='8'align='center'>&nbsp;</td></tr>
<tr><td colspan='8'align='left'></td></tr>
<tr><td colspan='8' align='center'><strong>PELAKSANAAN KONTRAK SATKER TAHUN 2016</strong></td></tr>
<tr border='0'><td colspan='6'align='center'><strong>". $nama_satker ."</strong></td></tr>
<tr border='0' height='30px' align='left'><td colspan='6' align='left'>&nbsp;Tanggal : ".$today."</td></tr>
</table>
<table height='50px' width='1280px' align='center' border='1'>
  <tr>
    <td align='center'><strong>No. </strong></td>  
    <td align='center'> <strong>No. Kontrak</strong> </td>
    <td align='center'> <strong>Tanggal Kontrak</strong> </td>
    <td align='center'> <strong>Nilai Kontrak</strong> </td>
    <td align='center'> <strong>Tanggal Mulai</strong> </td>
    <td align='center'> <strong>Tanggal Selesai</strong> </td>
    <td align='center'> <strong>Uraian Kontrak</strong> </td>
 
  </tr>

 ";
$no = 1;
while (($row1 = oci_fetch_array($sql, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
$nilai_kontrak=number_format($row1["NILAI_KONTRAK"],0,",",".");
$uraian_kontrak=substr($row1["URAIAN_KONTRAK"], 0,30);
 echo     "
  <tr class='gradeX'>
	 <td>$no.</td>
    <td align='left' >". $row1["NO_KONTRAK"] ."</td>
	<td align='center'>". $row1["TGL_KONTRAK"] . "</td>
	<td align='right'>". $nilai_kontrak . ",-</td>
    <td align='center'>". $row1["TGL_MULAI_PELAKSANAAN"] . "</td>
    <td align='center'>". $row1["TGL_SELESAI_PELAKSANAAN"] . "</td>
    <td align='left' >". $uraian_kontrak .",-</td>
  </tr>
 ";
 $no++; 
}
echo "</table>";
}
else{};
oci_free_statement($sql);
oci_close($conn);
?>