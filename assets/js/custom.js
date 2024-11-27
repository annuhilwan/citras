$(document).ready(function() {
	
	$.validate({
	    modules : 'location, date, security, file',
	    onModulesLoaded : function() {
	      $('#country').suggestCountry();
	    }
  	});

    setTimeout(function() {
      $("#successMessage").hide('blind', {}, 500)
    }, 7000);


  	$('.cancel').on('click', function() {
  		window.location.href=$(this).attr('rel');
  	})

  	$('.selAll').on('click', function () {
  		$obj = $(this);
  		if($obj.is(':checked')){
  			$obj.parents('thead').siblings('tbody').find('input[name="selData"]').prop('checked', true);;
  		} else {
  			$obj.parents('thead').siblings('tbody').find('input[name="selData"]').removeAttr('checked');
  		}
  	});

  	$('body').on('click', '.delSelected', function() {
  		$obj = $(this);
  		$tabClass = $obj.attr('rel');
  		$base_url = $obj.attr('data-base-url');
  		$arr = [];
  		$('#cnfrm_delete').find('.modal-body').find('input[name="ids"]').remove();
  		$('table.' + $tabClass).find('tbody').find('input[name="selData"]').each(function() {
  			$inpObj = $(this);
  			if($inpObj.is(':checked')){
  				$arr.push($inpObj.val());
  			}
  		});
  		if($arr.length > 0) {
  			//console.log($arr);
  			$('#cnfrm_delete').find('.yes-btn').attr('href', $base_url+$arr.join('-'));
  			$('#cnfrm_delete').modal('show');
  		}
  	});
  	
  	$('body').on('click', '.statusSelected', function() {
  		$obj = $(this);
  		$tabClass = $obj.attr('rel');
  		$base_url = $obj.attr('data-base-url');
  		$arr = [];
  		$('#cnfrm_proses').find('.modal-body').find('input[name="ids"]').remove();
  		$('table.' + $tabClass).find('tbody').find('input[name="selData"]').each(function() {
  			$inpObj = $(this);
  			if($inpObj.is(':checked')){
  				$arr.push($inpObj.val());
  			}
  		});
  		if($arr.length > 0) {
  			//console.log($arr);
  			$('#cnfrm_proses').find('.yes-btn').attr('href', $base_url+$arr.join('-'));
  			$('#cnfrm_proses').modal('show');
  		}
  	});

  /* Script for profile page start here */

  $("#fileUpload").on('change', function () {
    if (typeof (FileReader) != "undefined") {
      var image_holder = $("#image-holder");
      image_holder.empty();
      var reader = new FileReader();
      reader.onload = function (e) {
        $("<img />", {
          "src": e.target.result,
          "class": "thumb-image setpropileam"
        }).appendTo(image_holder);
      }
      image_holder.show();
      reader.readAsDataURL($(this)[0].files[0]);
    } else {
      alert("This browser does not support FileReader.");
    }
  });


  $('#profileSubmit').on('click', function() {
    $res = 1;
    $('div.form-group').each(function() {
      if($(this).hasClass('has-error')){
        $res = 0;
      }
    });
    if($res == 1) {
      $('form').submit();
    }
  })

  $('#profileEmail').bind('change keyup', function() {
    $obj = $(this);
    $obj.parents('div.form-group')
        .removeClass('has-error')
        .find('span.text-red').remove();
    var email = $obj.val();
    var uId = $('[name="id"]').val();
    $.ajax({
      url:  $('body').attr('data-base-url') + 'user/checEmailExist',
      method:'post',
      data:{
        email :email,
        uId : uId
      }
    }).done(function(data) {
      if(data == 0) {
        $obj
        .after('<span class="text-red">This Email Already Exist...</span>')
        .parents('div.form-group')
        .addClass('has-error');
      }
      console.log(data);
    })
  })

  /* Script for profile page End here */

  /* Script for user page start here */
  $('.InviteUser').on('click', function() {
    $('#nameModal_user').find('.box-title').text('Invite People');
    $('#nameModal_user').find('.modal-body').html('<div class="row">'+
        '<div class="col-md-12 m-t-20 form-horizontal">'+
          '<label for="sEmail" class="">Enter Email Address</label>'+
          '<textarea name="emails" id="" rows="5" class="form-control"></textarea>'+
          '<span class="help-text">Enter Valid Emails Saperated by comma (,)</span>'+
          '<p>'+
            '<button class="btn btn-primary pull-right send-btn">Send</button>'+
          '</p>'+
        '</div>'+
      '</div>');
    $('#nameModal_user').modal('show');
  });

  $('.modal-body').on('click', '.send-btn', function() {
    $obj = $(this);
    $obj.html('<i class="fa fa-cog fa-spin"></i> Send');
    $obj.parents('div.row').find('.msg-div').remove();
    $emails = $obj.parents('.modal-body').find('textarea').val();
    if($emails != ''){
      $.ajax({
        url: $('body').attr('data-base-url') + 'user/InvitePeople',
        method:'post',
        data: {
          emails: $emails
        },
        dataType: 'json'
      }).done(function(data){
        console.log(data);
        if(data) {
          var part = '';
          if(data.noTemplate != 0){
            part = '<p><strong>Info:</strong> '+data.noTemplate+'</p>';
          }
          $obj.parents('div.row').prepend('<div class="col-md-12 m-t-20 msg-div"><div class="alert alert-info" role="alert">'+
                                  '<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>'+
                                  '<div class="msg-p">'+
                                  '<p><strong>Success:</strong> '+data.seccessCount+' Invitation Sent successfully</p>'+
                                  '<p><strong>Info:</strong> '+data.existCount+' Emails Alredy present in database</p>'+
                                  '<p><strong>Info:</strong> '+data.invalidEmailCount+' Invalid Emails Found</p>'+part+
                                  '</div>'+
                                  '</div>'+
                                '</div>');
          $obj.html('Send');
        }
      });            
    } else {
      alert('Enter Email First');
    }
  });   

  $(".content-wrapper").on("click",".modalButtonUser", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'user/get_modal',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonObat", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'apotek/get_modal_obat',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  }); 
  
  $(".content-wrapper").on("click",".modalButtonObatRawatJalan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'apotek/get_modal_obat_rawat_jalan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPerusahaan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_perusahaan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPertanyaan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_pertanyaan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
   $(".content-wrapper").on("click",".modalButtonPemeriksaan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_pemeriksaan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  }); 
  
  $(".content-wrapper").on("click",".modalButtonSettingDokter", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_setting_dokter',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  }); 
  
  $(".content-wrapper").on("click",".modalButtonPemeriksaanMedcheckDetail", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_pemeriksaan_medcheck_detail',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
   $(".content-wrapper").on("click",".modalButtonPemeriksaanRawatJalan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_pemeriksaan_rawat_jalan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonDiagnosa", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_diagnosa',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonTindakan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_tindakan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonRadiologi", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_radiologi',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonRadiologiPulmo", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_radiologi_pulmo',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonRadiologiDiafragma", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_radiologi_diafragma',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonRadiologiKesan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_radiologi_kesan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
   $(".content-wrapper").on("click",".modalButtonTransaksiPaketMedCheck", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_transaksi_paket_medcheck',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonTransaksiTambahPemeriksaan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_transaksi_tambah_pemeriksaan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonResume", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_resume',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddAnjuran", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_anjuran',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
		
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddDiagnosa", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_diagnosa',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddUsg", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_usg',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddTreadmill", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_treadmill',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddPapSmear", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_pap_smear',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddFitness", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_fitness',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddRontgen", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_rontgen',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddIva", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_iva',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddAlcohol", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_alcohol',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
    $(".content-wrapper").on("click",".modalButtonAddRomberg", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_romberg',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddKesimpulan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_kesimpulan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddKategori", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_kategori',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAddKategoriKhusus", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_add_kategori_khusus',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });

  $(".content-wrapper").on("click",".modalButtonCompare", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_compare',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });

  $(".content-wrapper").on("click",".modalButtonComparePasien", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_compare_pasien',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPenunjang", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_penunjang',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPenunjangAudiometri", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_penunjang_audiometri',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPenunjangSpirometri", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_penunjang_spirometri',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonSatuanHasil", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_satuan_hasil',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonIdentitas", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_identitas',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonKota", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_kota',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonKecamatan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_kecamatan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonKelurahan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_kelurahan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonTipePegawai", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_tipe_pegawai',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonJabatan", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_jabatan',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonBagian", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_bagian',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonGroup", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_group',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonJenisPembayaran", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_jenis_pembayaran',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonAsuransi", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_asuransi',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPaketMedCheck", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_paket_medcheck',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonMasterDokter", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_master_dokter',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonJawabanResume", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_jawaban_resume',
      method: 'post', 
      data : {
        id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPertanyaanCheck", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_pertanyaan_check',
      method: 'post', 
      data : {
        fisik_id: $('#pertanyaan_fisik').val()
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
  $(".content-wrapper").on("click",".modalButtonPertanyaanCheckAdd", function(e) {
    $('#pertanyaan_fisik').val('');
    $.ajax({
      url : $('body').attr('data-base-url') + 'registrasi/get_modal_pertanyaan_check_add',
      method: 'post', 
      data : {
        id_pelayanan: $('#id_pelayanan_fisik').val(),
        fisik_id: $('#pertanyaan_fisik').val()
      }
    }).done(function(data) {
      $('#nameModal_fisik').find('.modal-body').html(data);
      $('#nameModal_fisik').modal('show'); 
    })
  });

  $(".content-wrapper").on("click",".modalButtonTipePemeriksaanCheck", function(e) {
    $.ajax({
      url : $('body').attr('data-base-url') + 'master/get_modal_tipe_pemeriksaan_check',
      method: 'post', 
      data : {
        paket_id: $(this).attr('data-src')
      }
    }).done(function(data) {
      $('#nameModal_user').find('.modal-body').html(data);
      $('#nameModal_user').modal('show'); 
    })
  });
  
/*  $("#nameModal_user").on("hidden.bs.modal", function(){
    $(this).find("iframe").html("");
    $(this).find("iframe").attr("src", "");
    });*/
  /* Script for user page end here */

  /* Script for Templates Starts here */
    $('.box-body').on('click', '.view_template', function() {
      $obj = $(this);
      $tmp_id = $obj.attr('data-src');
      $.ajax({
        url: $('body').attr('data-base-url') + "templates/preview",
        method:'post',
        data:{
          template_id: $tmp_id
        }
      }).done(function(data) {
        $('#previewModal').find('div.modal-body').html(data);
        $('#previewModal').modal('show');
        $('#previewModal').find('a').attr('href', 'javascript:;');
      });
    });

  $(".content-wrapper").on("click",".templateModalButton", function(e) {  
    $.ajax({
      url : $('body').attr('data-base-url') + "templates/modal_form",
      method: "post", 
      data : {
      id: $(this).attr("data-src")
      }
      }).done(function(data) {
      $("#nameModal_Templates").find(".modal-body").html(data);
      $("#nameModal_Templates").modal("show"); 
    })
  });
  /* Script for Templates End here */
});

function setId(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+"/"+ module +"/delete/"+id);
}

function delIdMasterPertannyaan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_pertanyaan/"+id);
}

function delIdMasterPemeriksaan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_pemeriksaan/"+id);
}

function delIdMasterSatuanHasil(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_satuan_hasil/"+id);
}

function delIdMasterPerusahaan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_perusahaan/"+id);
}

function delIdMasterIdentitas(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_identitas/"+id);
}

function delIdMasterKota(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_kota/"+id);
}

function delIdMasterKecamatan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_kecamatan/"+id);
}

function delIdMasterKelurahan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_kelurahan/"+id);
}

function delIdMasterTipePegawai(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_tipe_pegawai/"+id);
}

function delIdMasterJabatan(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_jabatan/"+id);
}

function delIdMasterBagian(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_bagian/"+id);
}

function delIdMasterGroup(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_group/"+id);
}

function delIdMasterJenisPembayaran(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_jenis_pembayaran/"+id);
}

function delIdMasterAsuransi(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_asuransi/"+id);
}

function delIdMasterPaket(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_paket/"+id);
}

function delIdMasterDokter(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_dokter/"+id);
}

function delIdMasterJawabanResume(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_jawaban_resume/"+id);
}

function delIdMasterPaketDetail(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_master_paket_just_detail/"+id);
}

function delIdDataTrxRadiologi(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_data_transaksi_radiologi/"+id);
}

function delIdDataTrxPenunjang(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_data_transaksi_penunjang/"+id);
}

function delIdDataTrxResume(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_delete").find("a.yes-btn").attr("href",url+ module +"/delete_data_transaksi_resume/"+id);
}

function genNoMedcheck(id, module) {
  var url =  $('body').attr('data-base-url');
  $("#cnfrm_proses").find("a.yes-btn").attr("href",url+ module +"/generate_nomer_antrian_medcheck/"+id);
}

function resizeIframe(obj) { 
  obj.style.height = obj.contentWindow.document.body.scrollHeight + "px";
}