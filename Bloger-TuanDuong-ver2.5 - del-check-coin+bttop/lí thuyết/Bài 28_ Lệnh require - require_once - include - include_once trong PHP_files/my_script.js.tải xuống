
$(document).ready(function () {
    $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich ul li a#lichsudonhang').click(function () {
        $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich .danhsachkhoahoc1 .danhsach1#danhsachmoinhat').stop().slideUp();
        $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich .danhsachkhoahoc1 .danhsach1#danhsachnoibat').stop().slideDown();
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich ul li a#lichsuthanhtoan').click(function () {
        $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich .danhsachkhoahoc1 .danhsach1#danhsachnoibat').stop().slideUp();
        $('#content .taokhoahoc .contentTaokhoahoc .right .lichsugiaodich .danhsachkhoahoc1 .danhsach1#danhsachmoinhat').stop().slideDown();
    });
    $('.popup_close').click(function () {
        $('.popup').fadeOut(0);
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .thembaihocBtn li a.btnThembaihoc').click(function () {
        $(this).parent().parent().before('<div class="bai1"><div class="tieudebai"><span class="icon textIcon"></span><p>Bài</p><input type="text" value="Bài" placeholder="Nhập tên bài "/><p class="thongtin"></p><a  class="btnXoa"></a><div style="clear:both;"></div></div><div class="thongtinchung"><textarea placeholder="Nhập nội dung mô tả nội dung bài 2"></textarea><ul class="themnoidung"><li><a href="#"></a></li><li><a href="#" class="btnText"></a></li></ul><div style="clear:both;"></div></div></div>');
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .thembaihocBtn li a.btnThemquiz').click(function () {
        $(this).parent().parent().before('<div class="bai1"><div class="tieudebai"><span class="icon quizIcon"></span><p>Bài</p><input type="text" value="Bài" placeholder="Nhập tên bài"/><p class="thongtin"></p><a  class="btnXoa"></a><div style="clear:both;"></div></div><div class="noidungbai"><p class="subForm">Mô tả</p><textarea placeholder="Nhập nội dung mô tả nội dung bài 3"></textarea><div class="danhsachcauhoi"><div class="cauhoi1"><p class="tieude">Câu hỏi 1</p><input type="text" placeholder="Nhập nội dung câu hỏi"/><p class="subForm">Trả lời:</p><a  onclick="showdapan(this)" class="btnThemdapan">Thêm đáp án</a></div><a onclick="showquestion(this)" class="btnThemcauhoi">Thêm câu hỏi</a></div></div></div>');
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .bai1 .noidungbai .danhsachcauhoi .btnThemcauhoi').click(function () {
        $(this).before('<div class="cauhoi1"><p class="tieude">Câu hỏi 1</p><input type="text" placeholder="Nhập nội dung câu hỏi"><p class="subForm">Trả lời</p><div class="dapan1"><input type="radio" id="check1"><label for="check1"><span><span></span></span></label><div class="thongtindapan"><input type="text"><textarea placeholder="Giải thích"></textarea></div></div><div class="dapan1"><input type="radio" id="check2"><label for="check2"><span><span></span></span></label><div class="thongtindapan"><input type="text"><textarea placeholder="Giải thích"></textarea></div></div><a onclick="showdapan(this)" class="btnThemdapan">Thêm đáp án</a></div>');
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .bai1 .noidungbai .danhsachcauhoi .cauhoi1 .btnThemdapan').click(function () {
        $(this).before('<div class="dapan1"><input type="radio" id="check2"><label for="check2"><span><span></span></span></label><div class="thongtindapan"><input type="text"><textarea placeholder="Giải thích"></textarea></div></div>');
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .bai1 .tieudebai .btnXoa').click(function () {
        $(this).parent().parent().remove();
    });
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .phan1 .tieudephan .btnXoa').click(function () {
        $(this).parent().parent().remove();
    });
    $('#content .khoahocnoibat .khoahocSubnav li a#noibat').click(function () {
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachmoinhat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachsapramat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#dangkhuyenmai').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachnoibat').stop().slideDown();
    });
    $('#content .khoahocnoibat .khoahocSubnav li a#moinhat').click(function () {
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachnoibat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachsapramat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#dangkhuyenmai').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachmoinhat').stop().slideDown();
    });
    $('#content .khoahocnoibat .khoahocSubnav li a#sapramat').click(function () {
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachnoibat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachmoinhat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#dangkhuyenmai').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachsapramat').stop().slideDown();
    });
    $('#content .khoahocnoibat .khoahocSubnav li a#dangkhuyenmai').click(function () {
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachnoibat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachmoinhat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#danhsachsapramat').stop().slideUp();
        $('#content .khoahocnoibat .danhsachkhoahoc .danhsach1#dangkhuyenmai').stop().slideDown();
    });
    var part_id = 0;
    $('#content .taokhoahoc .contentTaokhoahoc .right .thongtin1 .btnThemphan').click(function () {
        var count = [];
        $.each($('.part-to-up'), function () {
            if ($(this).attr('part-data-up') != '') {
                count.push($(this).attr('part-data-up'));
            }
        });
        if (count.length < 1) {
            $(this).parents('.thongtin1').find('.content_lessons').append("<div class='phan1'><div class='tieudephan'><p class='part-to-up' part-data-up='1'>Phần 1</p><input type='text' class='part_name' data_id='' placeholder='Nhập tên phần'/> <a class='qbtn-Save-part' onclick='addPart(this);'>Lưu</a> <a href='#' onclick='xoa(this," + part_id + ")' class='btnXoa'></a></div><div class='add_lesson'><img id='loading-image' src='/icon/loading.gif' style='display:none;'/></div></div>");
        } else {
            var max = count.max();
            var part = max + 1;
            $(this).parents('.thongtin1').find('.content_lessons').append("<div class='phan1'><div class='tieudephan'><p class='part-to-up' part-data-up='" + part + "'>Phần " + part + "</p><input type='text' class='part_name' data_id='' placeholder='Nhập tên phần'/> <a class='qbtn-Save-part' onclick='addPart(this);'>Lưu</a> <a href='#' onclick='xoa(this," + part_id + ")' class='btnXoa'></a></div><div class='add_lesson'><img id='loading-image' src='/icon/loading.gif' style='display:none;'/></div></div>");
        }
    });
    $('.contentTaokhoahoc #menutaokhoahoc a[href^="#"]').on('click', function (e) {
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
    });
    $('body').on('change', '.file-upload', function (e) {

    });
});
Array.prototype.max = function () {
    return Math.max.apply(null, this);
};
function showpopup() {
    $('.themnoidung').hide();
    $.ajax({
        success: function (data) {
            $('.mota').addClass("full");
            $('#content_video').html('<div class="noidungtailen"><a href="#" class="imgBox"><img src="images/imgNews.jpg" width="232" height="130" alt=""/><span>02:24</span></a><div class="thongtin"><p>20 ngày thấu hiểu bản thân và định hướng tương lai</p><ul><li><a href="#">Chọn video khác</a></li><li><a onclick="del_video()" href="#">Xoá</a></li></ul></div></div>');
        }
    });
}
function aff_update(data) {

    $('.form-hide-aff').hide();
    $('.form-show-aff').show();
    $('#btn_hide_aff').hide();
    $('#btn_show_aff').show();
}
function toggle_switcher(obj) {
    var id = $(obj).parents('.bai1').attr('data-id');
    if (typeof id == 'undefined') {
        alert('Vui lòng tạo bài học trước khi thực hiện thao tác này');
        return false;
    }

    $(obj).toggleClass('On').toggleClass('Off');
    var freeTrain = 0;
    if ($(obj).hasClass('On')) {
        freeTrain = 1;
    }

    $.ajax({
        url: '/course_action/freetrail',
        type: "POST",
        data: {status: freeTrain, id: id},
        success: function (result) {
            if (result.success) {
                if (result.data.Free_trial == 1) {
                    $(obj).removeClass('Off').addClass('On');
                    $(obj).parents('.bai1').attr('free_trail', result.data.Free_trial);
                } else {
                    $(obj).removeClass('On').addClass('Off');
                    $(obj).parents('.bai1').attr('free_trail', result.data.Free_trial);
                }
                course.buildHTML();
            }
        }
    });
}

function del_quiz(data1, id_q1)
{
    if (typeof $(data1).parents('.bai1').attr('data-id') == 'undefined') {
        $(data1).parents('.bai1').remove();
    } else {
        var result = confirm("Bạn chắc chắn muốn xóa bài trắc nghiệm này ?");
        if (result) {
            var idisset = $(this).parent();
            $.ajax({
                url: '/upload/removequizz',
                type: "POST",
                data: {id: id_q1},
                success: function (result) {
                    if (result.success) {
                        $('.lesson_' + result.data.id).hide();
                    } else {
                        // alert(result.message);
                        $('.lesson_' + id_q1).hide();
                    }
                }
            });
        }
    }
}
function del_video() {
    $('.mota').removeClass("full");
    $('.noidungtailen').html('');
    $('.noidungtailen').hide();
    $('.themnoidung').show();
}
var idl = 0;
var serverUp = [];
var flag_up = false;
function showlesson(data) {
    var html = tmpl('/course/add_lession.tpl');
    $(data).parent().parent().parent().before(html);
}

var idq = 0;
function showquizz(data) {
    idq++;
    $(data).parent().parent().before('<div class="bai1 lesson_' + idq + '"><div class="tieudebai"><span class="icon quizIcon"></span><p>Trắc nghiệm</p><input type="text" class="quiz_data_id namequiz' + idq + '" data_id=""  value="" placeholder="Nhập tiêu đề câu hỏi" /><p class="thongtin"></p><a  onclick="del_quiz(this,' + idq + ')"  class="btnXoa"></a><div style="clear:both;"></div></div><div class="noidungbai"><p class="subForm">Mô tả</p><textarea placeholder="Miêu tả bài trắc nghiệm" class="quiz-description description_quiz' + idq + '"></textarea><div class="danhsachcauhoi"><p class="subForm"><a  onclick="showquestion(this,' + idq + ')" class="btnThemcauhoi">Thêm câu hỏi</a></div></div><button class="btnLuu" onclick="savequiz(this,' + idq + ')">Lưu trắc nghiệm</button></div>');
}
var ida = 0;
function showdapan(data) {
    ida++;
    $(data).before('<div class="dapan1"><input type="radio" name="radioChecked' + nameGlobal + '" id="check' + ida + '"><label for="check' + ida + '"><span><span></span></span></label><div class="thongtindapan"><input type="text" placeholder="Nhập nội dung câu trả lời" class="answer contenresurt' + ida + '"><textarea placeholder="Giải thích" class="exdata explain' + ida + '"></textarea></div><div class="both"></div></div>');
}
var ich = 0;
nameGlobal = null;
function showquestion(data) {
    ich++;
    var keyCode = makeid();
    nameGlobal = keyCode;
    $(data).before('<div class="cauhoi1"><p class="tieude">Câu hỏi </p><input type="text"  class="contentquiz' + ich + ' question" placeholder="Nhập nội dung câu hỏi"><p class="subForm">Trả lời</p><div class="thongtindapan"><a onclick="showdapan(this,' + ich + ')"  class="btnThemdapan">Thêm đáp án</a></div>');
}



//khi click vao nut x
function xoa(data, id_1) {
    if (typeof $(data).parents('.phan1').find('.tieudephan').attr('data_parent') == 'undefined') {
        $(data).parents('.phan1').remove();
    } else {
        if (confirm("Bạn có chắc chắn muốn xóa phần này không?")) {
            course.drawlHtml(data, 'remove_part');
        }
    }
}

// khi click nut hoan tac
function redel(data) {
    $('.redel_' + data).hide();
    $('.del_' + data).hide();
    $('.' + data).removeClass("notactive");
}
// khi click nut xoa canh hoan tac
function del_part(data) {
    $.ajax({
        url: '/course_action/del_part',
        type: 'POST',
        data: {
            'data_id': data
        },
        success: function (message) {

        }
    });
    $('.redel_' + data).hide();
    $('.del_' + data).hide();
    $('.' + data).hide();
}
//click lưu câu hỏi
function savequiz(data, id) {

    var resp = course.validateQuizz(data);
    if (!resp) {
        return false;
    }

    quizz = [];
    $.each($(data).parents('.bai1').find('.question'), function (index, val) {
        obj = new Object();
        obj.data_question = $(this).val();
        obj.data_result = [];
        $.each($(this).parents('.cauhoi1').find('.answer'), function (i, v) {
            obj.data_result.push({result: $(this).val(), data_explain: $(this).parent().find('.exdata').val()});
            $(this).parent().find('.exdata').val();
        });
        $.each($(this).parents('.cauhoi1').find('input[type=radio]'), function (j, value) {
            if ($(this).is(':checked')) {
                obj.data_true = $(this).parent().find('.answer').val();
            }
        });
        quizz.push(obj);
    });
    var course_id = $('#course_id').val();
    var part_id = $(data).parents('.phan1').find('.tieudephan').attr('data_parent');
    var name = $('.namequiz' + id).val();
    var mota = $('.description_quiz' + id).val();
    var data_id = $(data).parents('.bai1').attr('data-id');
    var document = $('.file-loading').val();
    var quizz = {quizz: quizz};
    console.log(quizz);
    $.ajax({
        url: '/course_action/save_lesson',
        type: 'POST',
        data: {
            'name': name,
            'course_id': course_id,
            'parent_id': part_id,
            'mota': mota,
            'data_id': data_id,
            'MCourse_document[File]': document,
            'contentquizz': quizz
        },
        success: function (resp) {
            //Code by Quang
            if (resp.success) {
                alert(resp.message);
                $(data).parents('.bai1').attr('data-id', resp.data.id);
                if ($(data).parents('.bai1').find('.qbtn-hide-show').length == 0) {
                    $(data).parents('.bai1').find('.thongtin').html("<a onclick='course.showHideQuizz(this);' class='qbtn-hide-show'>+</a>");
                    $(data).parents('.bai1').find('.noidungbai').hide();
                }
                $(data).parents('.bai1').find('.btnLuu').hide();
                $(data).parents('.bai1').attr('data-type', '2');
                $('html,body').animate({
                    scrollTop: $(data).parents('.phan1').offset().top},
                        'slow');
                setTimeout(function () {
                    course.buildHTML();
                }, 300);
            } else {
                alert(resp.message);
            }
        }
    });
}
//click vào lưu bài học
function savelessontext(obj, randomKeyCode, id) {
    if (typeof id != 'undefined') {
        idData = id;
    } else {
        var idData = $(obj).parent().parent().parent().parent().attr('data-id');
    }

    var data = {
        'name': $(obj).parents('.bai1').find('.title-data-lession').val(),
        'course_id': $('#course_id').val(),
        'data_id': idData,
        'mota': $(obj).parents('.bai1').find('.description-data-lession').val(),
        'parent_id': $(obj).parents('.phan1').find('.tieudephan').attr('data_parent'),
        'content': CKEDITOR.instances['content_lesson_' + randomKeyCode + ''].getData(),
        'seq_number': $(obj).parents('.bai1').find('.lession-to-up').attr('lession-data-up')
    };
    $.ajax({
        url: '/course_action/save_lesson',
        type: 'POST',
        data: data,
        success: function (result) {
            if (result.success) {
                if ($(obj).parents('.bai1').find('.btnThemtailieu').length <= 0) {
                    $(obj).parents('.bai1').find('.append-document').append('<a onlick="" class="float-right btnThemtailieu"><input type="file" class="file-upload"> Thêm tài liệu</a>');
                }
                $(obj).parents('.bai1').attr('data-type', '0');
                course.savesuccessData(obj);
                setTimeout(function () {
                    course.buildHTML();
                }, 300);
            }
        }
    });
}

function savelessonvideo(obj, id) {

    var resp = course.validatePart(obj, ['.video-input input']);
    if (!resp) {
        return false;
    }

    var idData = $(obj).parent().parent().parent().attr('data-id');
    var data = {
        'name': $(obj).parents('.bai1').find('.title-data-lession').val(),
        'course_id': $('#course_id').val(),
        'data_id': idData,
        'mota': $(obj).parents('.bai1').find('.description-data-lession').val(),
        'video_url': $(obj).parents('.bai1').find('.video-input input').val(),
        'parent_id': $(obj).parents('.phan1').find('.tieudephan').attr('data_parent'),
        'seq_number': $(obj).parents('.bai1').find('.lession-to-up').attr('lession-data-up')
    };
    $.ajax({
        url: '/course_action/save_lesson',
        type: 'POST',
        data: data,
        beforeSend: function (xhr) {
            $(obj).parents('.bai1').find('.btn-save-lession').prop('disabled', false);
        },
        success: function (result) {
            if (result.success) {
                $(obj).parents('.bai1').find('.btn-save-lession').prop('disabled', true);
                if ($(obj).parents('.bai1').find('.btnThemtailieu').length <= 0) {
                    $(obj).parents('.bai1').find('.append-data-html').append('<a onlick="" class="float-right btnThemtailieu"><input type="file" class="file-upload"> Thêm tài liệu</a>');
                }
                course.savesuccessData(obj);
                $(obj).parents('.bai1').attr('data-type', '1');
                setTimeout(function () {
                    course.buildHTML();
                }, 300);
            } else {
                alert("Lưu lỗi ! Có lỗi hệ thống , vui lòng liên hệ hỗ trợ.");
            }
        }
    });
}
//thêm bài học video
function showdocument(data, id_2) {
    var script_upload = '<div class="' + id_2 + '" style="padding: 10px;"><div check-id="' + id_2 + '" class="box box-danger" style="border-radius: 0px;"><div class="box-header with-border"><h3 class="box-title">Upload tài liệu</h3></div><div class="box-body" item-image="check-image"><input class="file-upload" type="file" multiple="true" /><div id="box-images-preview"></div> </div></div></div><div style="margin-top: 20px; padding: 10px;"><ul class="upload-file-result-' + id_2 + '"></ul></div>';
    $('.updocument_' + id_2).html(script_upload);
    var data = {
        courseId: $('#course_id').val(),
        lessionId: id_2
    };
}
//thêm video
function showvideo(obj) {
    var lession_id = $(obj).parents('.bai1').attr('data-id');
    $(obj).parents('.bai1').find('.description-data-lession').hide();
    $(obj).parents('.bai1').find('.qbtn-Save-lession').text('Sửa');
    $(obj).parents('.bai1').find('.qbtn-Save-lession').attr('onclick', 'course.showDes(this)');
//    var html = "<div class='video-dotted-form'><div class='link-video-icon'>Video URL : </div><div class='video-input'><input type='text' placeholder='Nhập địa chỉ đường dẫn video' value='' /></div><div class='both'></div></div> <a onclick='savelessonvideo(this)' class='float-left btn-save-lession'>Lưu video</a>";
    var html = "<div class='video-dotted-form'><div class='link-video-icon'>Video URL : </div><div class='video-input'><input class='url_video' type='text' placeholder='Địa chỉ đường dẫn video' value='' /><input class='time_duration' type='text' placeholder='Thời gian' value='00:00:00' /></div><div class='both'></div></div> <a onclick='course.showUpload(" + lession_id + ");' class='float-left btn-save-lession'>Upload video</a> <a style='margin-left:10px;' onclick='course.saveLessionlink(this, " + lession_id + ");' class='float-left btn-save-lession'>Up tay</a>";
//    var html = "<div class='video-dotted-form show-hide'><div class='both'></div></div> <a onclick='course.showUpload(" + lession_id + ");' class='float-left btn-save-lession'>Upload video</a> <a style='margin-left:10px;' onclick='course.linklession(" + lession_id + ");' class='float-left btn-save-lession'>Up với link</a>";
    $(obj).parents('.bai1').find('.thongtinchung .append-data-html').html(html);
    $(obj).parents('.bai1').find('.themnoidung').remove();
}
// thêm editor
function showEditor(obj) {
    var seed = Math.random();
    var n = seed * 100 + 1;
    var keyCode = Math.floor(n);
    $(obj).parents('.bai1').find('.description-data-lession').hide();
    $(obj).parents('.bai1').find('.qbtn-Save-lession').text('Sửa');
    $(obj).parents('.bai1').find('.qbtn-Save-lession').attr('onclick', 'course.showDes(this)');
    var script_ckeditor = "<script type='text/javascript'>CKEDITOR_BASEPATH='ckeditor'; var editor=CKEDITOR.replace('content_lesson_" + keyCode + "',{filebrowserBrowseUrl: '/kcfinder/browse.php?type=files', toolbar : [ ['Source'], ['Cut','Copy','Paste','PasteText','PasteFromWord'], '/', ['Bold','Italic','Underline','Strike'],['Styles','Format','Font','FontSize','Image','Table']]}); </script>";
    $(obj).parents('.bai1').find('.append-data-html').html("<textarea id='content_lesson_" + keyCode + "' class='content_lesson' name='content_lesson' rows=10 cols=80 style='width:100%;'></textarea>" + script_ckeditor + "<div class='append-document'><a onclick='savelessontext(this," + keyCode + ")' class='float-left btn-save-lession'>Lưu nội dung</a></div><div class='both'></div><div class='noidungtailen'></div>");
}

function del_lesson(data) {

    if (typeof $(data).parents('.bai1').attr('data-id') == 'undefined') {
        $(data).parents('.bai1').remove();
    } else {

        var part_id = $(data).parent().parent().attr('data-id');
        //alert(part_id);
        if (confirm("Bạn có chắc chắn muốn xóa phần này không?")) {
            course.drawlHtml(data, 'remove');
        }
    }
}
function uploadDocument(data, idl) {
    var script_upload = '<form id="w30" class="form-vertical" action="" method="post" enctype="multipart/form-data"> <input type="hidden" name="MCourse_document[File]" value=""><input type="file" id="mcourse_document-file" class="file-loading" name="MCourse_document[File]" /></form>';
    $('.updocument_' + idl).html(script_upload);
}

var course = {};
course.editVideoData = function (obj, id) {
    $.ajax({
        url: '/course_action/qgetcourse',
        type: 'POST',
        data: {id: id},
        success: function (result) {
            if (result.success) {
                var html = tmpl('/course/edit_video.tpl', result);
                $(obj).parents('.bai1').find('.video-after-load').html(html);
            } else {
                alert("Có lỗi xảy ra trong quá trình truy vấn dữ liệu. Vui lòng thử lại");
            }
        }
    });
};
// khi click nút lưu phần
function addPart(obj) {
    var name = $(obj).parents('.phan1').find('.part_name').val();
    var course_id = $('#course_id').val();
    var data_id = $(obj).parent().find('.part_name').attr('data_id');
    var seq_number = $(obj).parent().find('.part-to-up').attr('part-data-up');
    $.ajax({
        url: '/course_action/add_part',
        type: 'POST',
        data: {
            'name': name,
            'course_id': course_id,
            'data_id': data_id,
            'seq_number': seq_number
        },
        success: function (result) {
            if (result.success) {
                var html = tmpl('/course/part_lession.tpl');
                $(obj).parents('.phan1').find('.add_lesson').html(html);
                $(obj).parents('.phan1').find('.tieudephan').attr('data_parent', result.data.id);
                $(obj).parents('.phan1').find('.part_name').attr('data_id', result.data.id);
                $(obj).parents('.phan1').find('.btnXoa').attr('onclick', 'xoa(this,' + result.data.id + ')');
                lib.saveSuccess(obj);
                course.buildHTML();
            } else {
                alert(result.message);
            }
        }
    });
}

var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();
course.showDes = function (obj) {
    var id_ck_editor = $(obj).parents('.bai1').find('.description-data-lession').attr('id');
    $(obj).parents('.bai1').find('.description-data-lession').show();
//    $(obj).parents('.bai1').find('#cke_' + id_ck_editor).show();
    $(obj).parents('.bai1').find('.qbtn-Save-lession').text('Lưu');
    var id = $(obj).parents('.bai1').attr('data-id');
    $(obj).parents('.bai1').find('.qbtn-Save-lession').attr('onclick', 'course.saveLession(this,\'' + id + '\')');
};
course.saveLession = function (obj, id) {

    var resp = course.validatePart(obj, ['.title-data-lession']);
    if (!resp) {
        return false;
    }

    var idData;
    if (typeof id != 'undefined' && id != '') {
        idData = id;
    } else {
        idData = $(obj).parents('.bai1').attr('data-id');
    }

    var id_ck_editor = $(obj).parents('.bai1').find('.description-data-lession').attr('id');
//    CKEDITOR.instances[id_ck_editor].getData();

    var data = {
        'name': $(obj).parents('.bai1').find('.title-data-lession').val(),
        'course_id': $('#course_id').val(),
        'data_id': idData,
        'mota': $(obj).parents('.bai1').find('.description-data-lession').val(),
//        'mota': CKEDITOR.instances[id_ck_editor].getData(),
        'parent_id': $(obj).parents('.phan1').find('.tieudephan').attr('data_parent'),
        'seq_number': $(obj).parents('.bai1').find('.lession-to-up').attr('lession-data-up')
    };
    $.ajax({
        url: '/course_action/save_lesson',
        type: 'POST',
        data: data,
        success: function (result) {
            if (result.success) {
                if (typeof id == 'undefined' || id == '') {
                    $(obj).parents('.bai1').attr('data-id', result.data.id);
                    var html = tmpl('/course/video_and_document_load.tpl', result);
                    $(obj).parents('.bai1').find('.append-data-html').html(html);
                    course.drawlHtml(obj, 'create');
                } else {
                    $(obj).parents('.bai1').find('.description-data-lession').hide();
                    $(obj).parents('.bai1').find('.qbtn-Save-lession').text('Sửa');
                    $(obj).parents('.bai1').find('.qbtn-Save-lession').attr('onclick', 'course.showDes(this)');
                }
                lib.saveSuccess(obj);
                setTimeout(function () {
                    course.buildHTML();
                }, 300);
            } else {
                alert(result.message);
            }
        }
    });
};
course.showHideData = function (obj) {
    var data = $(obj).parents('.bai1').find('.thongtinchung');
    if ($(data).is(':visible')) {
        $(obj).parent().find('.qbtn-Save-lession').hide();
        $(obj).parent().find('.title-data-lession').css('width', '430px');
        $(obj).text("+");
    } else {
        $(obj).parent().find('.qbtn-Save-lession').show();
        $(obj).parent().find('.title-data-lession').css('width', '380px');
        $(obj).text("--");
    }
    data.toggle(100);
};
course.showHideQuizz = function (obj) {
    var data = $(obj).parents('.bai1').find('.noidungbai');
    if ($(data).is(':visible')) {
        $(obj).text("+");
        $(data).parents('.bai1').find('.btnLuu').hide();
    } else {
        $(obj).text("--");
        $(data).parents('.bai1').find('.btnLuu').show();
    }
    data.toggle(100);
};
course.validatePart = function (obj, listValid) {
    var flag = true;
    if (listValid.length > 0) {
        var parent = $(obj).parents('.bai1');
        $.each(listValid, function (index, value) {
            if (parent.find(value).val() == '') {
                parent.find(value).attr('placeholder', 'Vui lòng không để trống');
                parent.find(value).focus();
                flag = false;
            } else {
                parent.find(value).css('background-color', '#fff').attr('placeholder', '');
            }
        });
    }
    return flag;
};
course.validateQuizz = function (obj) {
    var flag = true;
    var parent = $(obj).parents('.bai1');
    if (parent.find('.quiz_data_id').val() == '') {
        parent.find('.quiz_data_id').attr('placeholder', 'Vui lòng không để trống');
        parent.find('.quiz_data_id').focus();
        flag = false;
    }

    if (parent.find('.quiz-description').val() == '') {
        parent.find('.quiz-description').attr('placeholder', 'Vui lòng không để trống');
        parent.find('.quiz-description').focus();
        flag = false;
    }

    $.each(parent.find('.cauhoi1'), function () {
        if ($(this).find('.question').val() == '') {
            $(this).find('.question').attr('placeholder', 'Vui lòng không để trống');
            $(this).find('.question').focus();
            flag = false;
        }
        var check = 0;
        $.each($(this).find('.dapan1'), function () {
            if ($(this).find('.answer').val() == '') {
                $(this).find('.answer').attr('placeholder', 'Vui lòng không để trống');
                $(this).find('.answer').focus();
                flag = false;
            }

            if ($(this).find('input').is(':checked')) {
                check++;
            }
        });
        if (check == 0) {
            $('html,body').animate({
                scrollTop: $(this).offset().top},
                    'slow');
            alert("Vui lòng chọn đáp án đúng của bạn.");
            flag = false;
        }

    });
    return flag;
};
course.savesuccessData = function (obj) {
    $(obj).parents('.bai1').css('background-color', '#dff0d8');
    setTimeout(function () {
        $(obj).parents('.bai1').css('background-color', '#fff');
    }, 500);
};
course.showHidePartQuestion = function (obj) {
    var data = $(obj).parents('.cauhoi1').find('.thongtindapan ');
    if ($(data).is(':visible')) {
        $(obj).parents('.cauhoi1').find('.subForm').show();
        $(obj).text("+");
    } else {
        $(obj).parents('.cauhoi1').find('.subForm').hide();
        $(obj).text("--");
    }
    data.toggle(100);
};
course.saveVideoIntro = function (obj) {
    var videoUrl = $(obj).parents('.form1').find('.video_link').val();
    if (videoUrl == '') {
        $(obj).parents('.form1').find('.video_link').focus().attr('placeholder', 'Không được để trống');
        return false;
    }
    var course_id = $('#course_id').val();
    $.ajax({
        url: '/course_action/updateintro',
        type: 'POST',
        data: {video: videoUrl, id: course_id},
        success: function (result) {
            if (result.success) {
                alert("Lưu đường dẫn video intro thành công");
            } else {
                alert(result.message)
            }
        }
    });
};
function makeid()
{
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 5; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}

course.queryParam = function () {
    var urlParams;
    var match,
            pl = /\+/g, // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function (s) {
                return decodeURIComponent(s.replace(pl, " "));
            },
            query = window.location.search.substring(1);
    urlParams = {};
    while (match = search.exec(query))
        urlParams[decode(match[1])] = decode(match[2]);
    return urlParams;
};

course.buildHTML = function (option) {
    var baihoc = [];
    $.each($('.phan1'), function () {
        if ($(this).find('.bai1').length > 0 && $(this).find('.bai1')) {
            courseParse = new Object();
            courseParse.partName = $(this).find('.part_name').val();
        } else {
            return;
        }
        courseParse.lession = [];
        $.each($(this).find('.bai1'), function () {
            var lession = new Object();
            lession.lession_id = $(this).attr('data-id');
            lession.courseId = $('#course_id').val();
            lession.name = $(this).find('.title-data-lession').val();
            lession.namequiz = $(this).find('.quiz_data_id').val();
            lession.description = $(this).find('.description-data-lession').val();
            lession.type = $(this).attr('data-type');
            lession.Duration = $(this).attr('time');
            lession.Freetrial = $(this).attr('free_trail');
            lession.Video_url = $(this).attr('video-url');

            courseParse.lession.push(lession);
        });
        baihoc.push(courseParse);
    });
    var html = tmpl('/course/html_build.tpl', {data: baihoc});
    $.ajax({
        url: '/course_action/builhtml',
        type: 'POST',
        data: {html: html, id: $('#course_id').val()},
        success: function (result) {
            if (result.success) {
                console.log("OK lưu tree bài học thành công");
            }
        }
    });
};
course.showUpload = function (id) {
    $('.popup.upload_video').fadeIn(200);
    $('.popup.upload_video').find('iframe').attr('src', 'http://video.net.vn/index.php/video/uploads?callback=http://unica.vn/course_action/iframe&lession_id=' + id + '&token=6FA2CB8D');
//    $.ajax({
//        url: '/course_action/videohandle',
//        type: 'POST',
//        data: {type: 'course'},
//        success: function(result) {
//            if (result.success) {
//
////                $('.popup.upload_video').find('iframe').attr('src', 'http://203.162.166.168/module/movie/upload_site.php?url_pro=http://unica.vn/course_action/iframe?lession_up=' + id + '&user=unknowzz&site_name=unica.vn&token=' + result.data);
//
//            }
//        }
//    });
};
course.courseUpload = function (id) {
    $('.popup.upload_video').fadeIn(200);
    $('.popup.upload_video').find('iframe').attr('src', 'http://video.net.vn/index.php/video/uploads?callback=http://unica.vn/course_action/iframe&lession_id=' + id + '&token=6FA2CB8D');
//    $.ajax({
//        url: '/course_action/videohandle',
//        type: 'POST',
//        data: {type: 'course'},
//        success: function(result) {
//            if (result.success) {
//    $('.popup.upload_video').fadeIn(200);
////                $('.popup.upload_video').find('iframe').attr('src', 'http://203.162.166.168/module/movie/upload_site.php?url_pro=http://unica.vn/course_action/ifcourse?lession_up=' + id + '&user=unknowzz&site_name=unica.vn&token=' + result.data);
//                
//            }
//        }
//    });
};
course.lessionvideo = function (id) {
    $.ajax({
        url: '/course_action/viewvideo',
        type: 'POST',
        data: {id: id},
        success: function (result) {
            if (result.success) {
                $('.popup.viewvideo').fadeIn(200);
                $('.show-iframe').html(result.data.html);
            }
        }
    });
};
course.showvideo2 = function (id) {
    $('.popup.upload_video_with_link').fadeIn(100);
};
course.intropop = function (obj, id) {
    var video = $('.text-data-video-link').val();
//    if (video == '') {
//        alert('Vui lòng điền link video của bạn');
//        return false;
//    }
    $.ajax({
        url: '/course_action/updateintro',
        type: 'POST',
        data: {id: id, video: video},
        success: function (result) {
            if (result.success) {
                lib.saveSuccess(obj);
            }
        }
    });
};

course.saveLessionlink = function (obj, id) {
    var parent = $(obj).parents('.bai1');
//    if (parent.find('.url_video').val() == '') {
//        alert('Vui lòng điền link video của bạn');
//        return false;
//    }

    var video = $(parent).find('.url_video').val();
    var timeduration = $(parent).find('.time_duration').val();
    $.ajax({
        url: '/course_action/getlession',
        type: 'POST',
        data: {id: id, video: video, type: 'save', time: timeduration},
        success: function (result) {
            if (result.success) {
                $(obj).parents('.bai1').attr('time', timeduration);
                $(obj).parents('.bai1').attr('video-url', result.data.video);
                lib.saveSuccess(obj);
                if ($(obj).parents('.bai1').find('.file-upload').length <= 0) {
                    $(obj).parents('.bai1').find('.append-data-html').append('<a onlick="" class="float-right btnThemtailieu"><input type="file" class="file-upload"> Thêm tài liệu</a>');
                }

            }
        }
    });
};
String.prototype.trunc = String.prototype.trunc || function (n) {
    return (this.length > n) ? this.substr(0, n - 1) + '&hellip;' : this;
};
course.countLengthText = function (text) {
    return text.length;
};
// Hàm xử lý xóa các bài học và phần học và vẽ lại HTML tương ứng.
course.drawlHtml = function (obj, type) {
    var sending = [];
    var ids = [];
    if (typeof obj != 'undefined') {
        var Seq_number = $(obj).parents('.bai1').find('.lession-to-up').attr('lession-data-up');
        var root = $(obj).parents('.content_lessons');
        switch (type) {
            case 'remove' :
                sending.push({remove: $(obj).parents('.bai1').attr('data-id')});
                $(obj).parents('.bai1').remove();
                break;
            case 'remove_part' :
                $(obj).parents('.phan1').remove();
                sending.push({remove: $(obj).parents('.phan1').find('.tieudephan').attr('data_parent')});
                $.each(root.find('.part-to-up'), function (index, val) {
                    var Seq = $(this).attr('part-data-up', index + 1);
                    $(this).attr('part-data-up', parseInt(index + 1));
                    $(this).text('Phần ' + parseInt(index + 1));
                });
                break;
        }
        $.each(root.find('.lession-to-up'), function (index, val) {
            var Seq = $(this).attr('lession-data-up', index + 1);
            $(this).attr('lession-data-up', parseInt(index + 1));
            $(this).text('Bài ' + parseInt(index + 1));
        });
        $.each(root.find('.bai1'), function () {
            ids.push($(this).attr('data-id'));
        });
        sending.push({ids: ids});
    }

    $.ajax({
        url: '/course_action/rebuild',
        type: 'POST',
        data: {data: sending, type: type, courseId: $('#course_id').val()},
        success: function (result) {
            if (result.success) {

            }
        }
    });
};
// Hàm xử lý vẽ lại khi sử dụng 
course.dragHtml = function (obj) {
    var ids = [];
    $.each($('.content_lessons').find('.bai1'), function (index, val) {
        ids.push($(this).attr('data-id'));
        $(this).find('.lession-to-up').attr('lession-data-up', index + 1);
        $(this).find('.lession-to-up').text('Bài ' + parseInt((index + 1)));
    });
    var parent_id = $(obj).parents('.phan1').find('.tieudephan').attr('data_parent');
    var id = $(obj).attr('data-id');
    $.ajax({
        url: '/course_action/drophtml',
        type: 'POST',
        data: {data: ids, parent_id: parent_id, main_ids: id},
        success: function (result) {
            if (result.success) {
                course.buildHTML();
            }
        }
    });
};
course.sendComment = function (_type) {
    var course_id = $('#course_id').val();
    var message = $("#discussion_text").val();
    var url = window.location.pathname;
    var id = url.split('/')[4];
    if (typeof id == 'undefined') {
        id = 0;
    }
    if (message != '') {
        $.ajax({
            type: 'POST',
            url: '/course_action/update_discussion',
            data: {
                'course_id': course_id,
                'parent_id': 0,
                'lession_id': id,
                'message': message,
                'type': typeof _type != 'undefined' ? _type : ''
            },
            success: function (data) {
                $('textarea#discussion_text').val('').empty();
                //add đằng trước
                $('#discuss').prepend(data);
            }
        });
    } else {
        $("#discussion").focus();
    }
};
/**
 * 
 * @param {type} lession_id
 * @returns {undefined} Load các bài học đã học 
 */
function loadLessioned(lession_id, user_id) {
    $.ajax({
        type: 'POST',
        url: '/course_action/getlessioned',
        data: {id: lession_id, user_id: user_id},
        success: function (resp) {
            $.each($('.icon'), function (i, v) {
                var ls = $(this).attr('data-lession');
                if (typeof ls != 'undefined') {
                    $.each(resp.data, function (index, val) {
                        if (ls == val) {
                            $('.icon[data-lession=' + val + ']').css('background-color', '#6186c6');
                        }
                    });
                }
            });

        }
    });
}

$('body').on('change', '.course_quiz', function (e) {
    e.preventDefault();
    var id = $(this).val();
    $.ajax({
        url: '/quiz/getpart',
        type: 'POST',
        data: {id: id},
        success: function (result) {
            if (result.success) {
                $('#quiz-clone-manager').show();
                var html = tmpl('/teacher_quiz/part_quiz.tpl');
                $('#quiz-clone-manager').html(html);
            }
        }
    });
});

function setCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

