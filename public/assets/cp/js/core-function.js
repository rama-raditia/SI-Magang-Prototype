var link_uri = decodeURI(window.location.hash);
var link_uri_ar = link_uri.split('|');
var stack_top_left = {
    "dir1": "down",
    "dir2": "right",
    "push": "top"
};
var act_notif = 'Tambah';
var id_edit_global = '';


//progress bar
var downloadComplete = false;
var download_progress = false;
var intervalListener = window.setInterval(function() {
    if ((!downloadComplete) && (download_progress))
        progress_bar_cek();
}, 500);
////progress bar

$.fn.modal.Constructor.prototype.enforceFocus = $.noop; //fix bug select2 unfocused

function reload_tabel() {
    table.ajax.reload(null, false); //reload datatable ajax
}

function notifikasi(jenis, isi) {
    var tipe = '';
    var icon = '';
    if (jenis == 'sukses') {
        tipe = 'success';
    } else if (jenis == 'warning') {
        tipe = 'warning';
    } else if (jenis == 'gagal') {
        tipe = 'danger';
    };
    new PNotify({
        title: 'Notifikasi',
        text: isi,
        addclass: 'alert alert-' + tipe + ' stack-top-left alert-styled-left',
        stack: stack_top_left,
        type: tipe
    });
}

function notif_error(isi) {
    swal({
        title: "Error",
        text: isi,
        type: "error",
        confirmButtonColor: "#EF5350",
        confirmButtonText: "OK"
    });
}

function progress_bar_cek() {
    $.ajax({
        type: "POST",
        url: url_progress_loading,
        contentType: "application/x-www-form-urlencoded; charset=utf-8",
        dataType: "json",
        cache: false,

        success: function(r) {
            updateStatus(r.progress);
        },
        error: function(r) {
            console.log('Check error : ' + r.responseText);
        },
        failure: function(r) {
            console.log('Check failure : ' + r.responseText);
        }
    });
    if (downloadComplete)
        window.clearInterval(intervalListener);
};

function updateStatus(status) {
    $("#info_loading").html("<div class='progress  m-20'><div class='progress-bar progress-bar-striped progress-bar-animated' style='width: " + status + "%'><span>" + status + "% </span></div></div>");
};


function sinkron(link, judul) {
    swal({
        title: "Konfirmasi Sinkronisasi " + judul,
        text: "Apakah Anda Yakin Akan Sinkronisasi " + judul,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#EF5350",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
        cancelButtonColor: "#EF5350",
        closeOnConfirm: true,
        closeOnCancel: true
    }, function(isConfirm) {
        if (isConfirm) {
            $.ajax({
                url: link,
                type: "GET",
                dataType: "JSON",
                beforeSend: function() {
                    download_progress = true;
                    downloadComplete = false;
                    $('#modal_loading').modal('show');
                },
                success: function(data) {
                    downloadComplete = true;
                    download_progress = false;
                    reload_tabel();
                    if (data.status == true) {
                        notifikasi('sukses', 'Sinkronisasi ' + judul + ' Sukses, ' + data.pesan);
                    } else {
                        notif_error('Gagal !');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    notif_error('Gagal !');
                },
                complete: function() {
                    $('#modal_loading').modal('hide');
                },
            });
        }
    });
};
if (document.querySelector('.btn_submit')) {
    var btn_submit = Ladda.create(document.querySelector('.btn_submit'));
}
var act_column = {
    "columnDefs": [{
        "targets": [-1, ], //last column
        "orderable": false, //set not orderable
    }, {
        className: "tgh",
        "targets": [1]
    }, {
        "width": "10%",
        "targets": [-1]
    }],
    "order": [
        [0, 'desc']
    ]
};
var act_column2 = {
    "columnDefs": [{
        "targets": [-1, 1], //last column
        "orderable": false, //set not orderable
    }, {
        className: "tgh",
        "targets": [1]
    }, {
        "width": "10%",
        "targets": [-1]
    }],
    "order": [
        [0, 'desc']
    ]
};
var act_column3 = {
    "columnDefs": [{
        "targets": [1], //last column
        "orderable": false, //set not orderable
    }, {
        "width": "10%",
        "targets": [0]
    }, ],
    "order": [
        [0, "desc"]
    ]
};
$.extend($.fn.dataTable.defaults, {
    autoWidth: false,
    responsive: true,
    dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><r><"datatable-footer"ip>',
    language: {
        processing: "Mohon Tunggu",
        search: '<span>Filter:</span> _INPUT_',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: {
            'first': 'First',
            'last': 'Last',
            'next': '&rarr;',
            'previous': '&larr;'
        }
    },
    drawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
    },
    preDrawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
    }
});
var filer_default_opts = {
    templates: {
        box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
        item: '<li class="jFiler-item" style="width:49%">\
                      <div class="jFiler-item-container">\
                          <div class="jFiler-item-inner">\
                              <div class="jFiler-item-thumb">\
                                  <div class="jFiler-item-status"></div>\
                                  <div class="jFiler-item-thumb-overlay">\
                  <div class="jFiler-item-info">\
                    <div style="display:table-cell;vertical-align: middle;">\
                      <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                    </div>\
                  </div>\
                </div>\
                                  {{fi-image}}\
                              </div>\
                              <div class="jFiler-item-assets jFiler-row">\
                                  <ul class="list-inline pull-left">\
                                      <li>{{fi-progressBar}}</li>\
                                  </ul>\
                                  <ul class="list-inline pull-right">\
                                      <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                  </ul>\
                              </div>\
                          </div>\
                      </div>\
                  </li>',
        itemAppend: '<li class="jFiler-item" style="width:49%">\
                          <div class="jFiler-item-container">\
                              <div class="jFiler-item-inner">\
                                  <div class="jFiler-item-thumb">\
                                      <div class="jFiler-item-status"></div>\
                                      <div class="jFiler-item-thumb-overlay">\
                      <div class="jFiler-item-info">\
                        <div style="display:table-cell;vertical-align: middle;">\
                          <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                        </div>\
                      </div>\
                    </div>\
                                      {{fi-image}}\
                                  </div>\
                                  <div class="jFiler-item-assets jFiler-row">\
                                      <ul class="list-inline pull-left">\
                                          <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                      </ul>\
                                      <ul class="list-inline pull-right">\
                                          <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                      </ul>\
                                  </div>\
                              </div>\
                          </div>\
                      </li>',
        progressBar: '<div class="bar"></div>',
        itemAppendToEnd: false,
        removeConfirmation: true,
        _selectors: {
            list: '.jFiler-items-list',
            item: '.jFiler-item',
            progressBar: '.bar',
            remove: '.jFiler-item-trash-action'
        }
    },
    captions: {
        button: "Pilih File",
        feedback: "Pilih File untuk di Upload",
        feedback2: "File Terpilih",
        drop: "Drop file here to Upload",
        removeConfirmation: "Apakah anda yakin akan menghapus file ini?",
        errors: {
            filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
            filesType: "Hanya File tertentu yang bisa di upload",
            filesSize: "File \"{{fi-name}}\" Terlalu besar, Tolong Upload File Maximum {{fi-maxSize}} MB.",
            filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
        }
    }
};
// table.on( 'order.dt search.dt', function () {
//    table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
//         cell.innerHTML = '<center>'+(i+1)+'</center>';
//     } );
// } ).draw();
function act_jurusan(id, tipe) {
    loading_combo($("#loading_combo_jur"), true);
    if (tipe) id = id.attr('href').split('|');
    else id = decodeURI(window.location.hash).split('|');
    $.ajax({
        url: base_url + "/edit_jurusan/" + id[1],
        type: 'post',
        success: function(html) {
            loading_combo($("#loading_combo_jur"), false);
            $(".multiselect-select-all-filtering").html(html);
            $(".multiselect-select-all-filtering").multiselect('rebuild');
            $(".styled, .multiselect-container input").uniform({
                radioClass: 'choice'
            });
        },
        error: function(msg) {
            loading_combo($("#loading_combo_jur"), false);
            alert('Error Load Data Jurusan!');
        }
    });
}

function show_notifikasi() {
    loading_combo($("#content_notifikasi"), true);
    $.ajax({
        url: base_url_core + "/cp/beranda/notifikasi",
        type: 'post',
        success: function(html) {
            loading_combo($("#content_notifikasi"), false);
            $("#content_notifikasi").html(html);
        },
        error: function(msg) {
            loading_combo($("#loading_combo_jur"), false);
            alert('Error Load Notifikasi!');
        }
    });
}

function act_tambah() {
    act_notif = 'Tambah';
    $("#frm_act").trigger("reset");
    $('.select-search').val('').change();
    $("#act_judul").html('<i class="icon-add"></i> Tambah');
    $("#frm_act").attr("action", base_url + "/tambah");
    $("#modal-form").modal('show');
}


function list_kecamatan() {

    $('#id_kecamatan').select2({
        minimumInputLength: 2,
        allowClear: true,
        ajax: {
            url: base_url + "/list_kecamatan",
            dataType: 'json',
            delay: 250,
            data: function(data) {
                return {
                    searchTerm: data.term
                };
            },
            processResults: function(response) {
                return {
                    results: response
                };
            },
            cache: true,

        }
    });
}

function edit_kecamatan(id, tipe) {
    loading_combo($("#loading_combo_kec"), true);
    if (tipe) id = id.attr('href').split('|');
    else id = decodeURI(window.location.hash).split('|');
    $.ajax({
        url: base_url + "/edit_kecamatan/" + id[1],
        type: 'post',
        success: function(html) {
            loading_combo($("#loading_combo_kec"), false);
            $("#id_kecamatan").html(html);
        },
        error: function(msg) {
            loading_combo($("#loading_combo_kec"), false);
            alert('Error Load Data Kecamataan!');
        }
    });
}


function act_edit_show() {
    $.ajax({
        url: $('#frm_act').attr("action"),
        dataType: "JSON",
        success: function(data) {
            for (var k in data) {
                if (data.hasOwnProperty(k)) {
                    if ($("input[name*='d[']")) $("input[name='d[" + k + "]']").val(data[k]);
                    if ($("select[name*='d[']")) $("select[name='d[" + k + "]']").val(data[k]).change();
                    if ($("textarea[name*='d[']")) {
                        if (typeof tinymce !== 'undefined') {
                            if (tinymce.get(k)) {
                                //tinymce.init({ selector:'textarea',height : 400 });
                                // tinymce.init({
                                //     selector: '#'+k,
                                //     height : 400,
                                //     setup: function (editor) {
                                //       editor.on('init', function () {
                                //         editor.setContent(data[k]); 
                                //       });
                                //     }
                                //   });
                                // tinymce.get(k).on('init',function(e) {
                                //            e.target.setContent(data[k]);
                                //    });
                                // setTimeout(function(){
                                // // tinymce.get(k).setContent(data[k]); 
                                // },550);
                                tinymce.get(k).setContent(data[k]);
                            }
                            //CKEDITOR.instances[k].setData(data[k]) ;        
                        } else {
                            $("textarea[name='d[" + k + "]']").val(data[k]);
                        }
                    }
                }

            }
            if (controler == 'cp/periode_pkl') act_jurusan('', false);
            if (controler == 'cp/tempat_pkl') edit_kecamatan('', false);
            // console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            notif_error('Error Load Data!');
        }
    });
    $("#modal-form").modal('show');
}

function act_edit(id) {
    act_notif = 'Edit';
    $("#act_judul").html('<i class="icon-pencil"></i> Edit');
    id = id.attr('href').split('|');
    $("#frm_act").attr("action", base_url + "/edit/" + id[1]);
    act_edit_show();
    //console.log(id[1]);  
};

function hapus(id) {
    swal({
        title: "Konfirmasi Hapus Data",
        text: "Apakah Anda Yakin Akan Menghapus Data Ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#EF5350",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
        cancelButtonColor: "#EF5350",
        closeOnCancel: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function(isConfirm) {
        if (isConfirm) {
            $.ajax({
                url: id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {
                    swal.close();
                    reload_tabel();
                    notifikasi('sukses', 'Hapus Data Sukses');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    swal.close();
                    notif_error('Gagal Hapus Data!');
                }
            });
        }
    });
}

function loading_combo(combo, status) {
    var light = combo;
    if (status) $(light).block({
        message: '<i class="icon-spinner2 spinner"></i>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'none'
        }
    });
    else $(light).unblock();
}

//add custom
function frm_act_custom(modal_id, id_tag, btn_submit, btn_tambah) {
    $(id_tag).submit(function(e) {
        e.preventDefault();
        formData = new FormData(this);
        $.ajax({
            url: $(id_tag).attr("action"),
            type: "POST",
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            dataType: "JSON",
            beforeSend: function() {
                $(btn_submit).prop('disabled', true);
                $(btn_tambah).removeClass('icon-check').addClass('icon-spinner2 spinner');
            },
            complete: function() {
                $(btn_submit).prop('disabled', false);
                $(btn_tambah).removeClass('icon-spinner2 spinner').addClass('icon-check');
            },
            success: function(data) {
                if (data.status == true) {
                    $(modal_id).modal('hide');
                    reload_tabel();
                    notifikasi('sukses', act_notif + ' Data Sukses');
                } else if (data.status == false) {
                    notif_error('Gagal ' + act_notif + ' Data!');
                } else {
                    $("#respon").html(data);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                notif_error('Gagal ' + act_notif + ' Data!');
            }
        });
    });
}
//

$(document).ready(function() {
    $('.select_all').change(function() {
        $('.table tbody input[type="checkbox"]').prop('checked', this.checked);
        $.uniform.update();
    });
    $('.select-search').select2({
        allowClear: true
    });
    $("#frm_act").submit(function(e) {
        e.preventDefault();
        formData = new FormData(this);
        $.ajax({
            url: $('#frm_act').attr("action"),
            type: "POST",
            data: formData,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            dataType: "JSON",
            beforeSend: function() {
                $(".btn_submit").prop('disabled', true);
                $("#btn_tambah").removeClass('icon-check').addClass('icon-spinner2 spinner');
            },
            complete: function() {
                $(".btn_submit").prop('disabled', false);
                $("#btn_tambah").removeClass('icon-spinner2 spinner').addClass('icon-check');
            },
            success: function(data) {
                if (data.status == true) {
                    $('#modal-form').modal('hide');
                    reload_tabel();
                    notifikasi('sukses', act_notif + ' Data Sukses');
                } else if (data.status == false) {
                    notif_error('Gagal ' + act_notif + ' Data!');
                } else {
                    $("#respon").html(data);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                notif_error('Gagal ' + act_notif + ' Data!');
            }
        });
    });
    if (link_uri === "#tambah") {
        act_tambah();
        window.history.pushState("", "", base_url);
    }
    if (link_uri_ar[0] === "#edit") {
        act_notif = 'Edit';
        $("#act_judul").html('<i class="icon-pencil"></i> Edit');
        $("#frm_act").attr("action", base_url + "/edit/" + link_uri_ar[1]);
        act_edit_show();
        //window.history.pushState("","", base_url);
    }
    $('.act-tambah').click(function() {
        act_tambah();
        if (controler == 'cp/monitoring_pkl') {
            $("#nama_user").hide();
        }
        if (controler == 'cp/periode_pkl') {
            $('.multiselect-select-all-filtering option:selected').each(function() {
                $(this).prop('selected', false);
            })
            $('.multiselect-select-all-filtering').multiselect('refresh');
        }
    });
    $('#modal-form').on('hide.bs.modal', function() {
        $("#frm_act").trigger("reset");
        window.history.pushState("", "", base_url);
    });
    $("body").tooltip({
        selector: "[data-popup='tooltip']",
        container: "body"
    });
});
$(document).ajaxStart(function() {
    Pace.restart()
})