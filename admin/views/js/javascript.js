$(document).ready(function () {
    $('#tennsx').blur(function (e) { 
        e.preventDefault();
        tennsx = $(this).val();
        $('#error_nsx').load("?ctrl=nhasanxuat&act=kiemloi&NSX=" + tennsx);
    });
    $('#tendt').blur(function (e) { 
        e.preventDefault();
        tendt = $(this).val();
        $('#error_name').load("?ctrl=dienthoai&act=kiemloi&nameDT=" + tendt);
    });
    $('#gia').blur(function (e) { 
        e.preventDefault();
        gia = $(this).val();
        $('#error_gia').load("?ctrl=dienthoai&act=kiemloi&gia=" + gia);
    });
    $('#giakm').blur(function (e) { 
        e.preventDefault();
        giakm = $(this).val();
        $('#error_giakm').load("?ctrl=dienthoai&act=kiemloi&giakm=" + giakm);
    });
    $('#nsx').blur(function (e) { 
        e.preventDefault();
        nsx = $(this).val();
        $('#error_nsx').load("?ctrl=dienthoai&act=kiemloi&nsx=" + nsx);
    });
    $('#mota').blur(function (e) { 
        e.preventDefault();
        mota = $(this).val();
        $('#error_mota').load("?ctrl=dienthoai&act=kiemloi&mota=" + mota);
    });
    // kiểm lỗi thêm người dùng
    $('#ten_user').blur(function (e) { 
        e.preventDefault();
        user = $(this).val();
       $('#error_user').load('?ctrl=users&act=kiemloi&ten_dn=' + user);
    }); 
    $('#hoten').blur(function (e) { 
        e.preventDefault();
        user = $(this).val();
        $('#error_hoten').load('?ctrl=users&act=kiemloi&hoten=' + user);
    });
    $('#mk').blur(function (e) { 
        e.preventDefault();
        mk = $(this).val();
        $('#error_mk').load('?ctrl=users&act=kiemloi&mk=' + mk);
    });
    $('#email').blur(function (e) { 
        e.preventDefault();
        email = $(this).val();
        $('#error_email').load('?ctrl=users&act=kiemloi&email=' + email);
    });
    //Kiểm lỗi đơn hàng
    $('#nd').blur(function (e) { 
        e.preventDefault();
        nd = $(this).val();
        $('#error_nd').load('?ctrl=donhang&act=kiemloi&nd=' + nd);
    });
    $('#ndh').blur(function (e) { 
        e.preventDefault();
        ndh = $(this).val();
        $('#error_ndh').load('?ctrl=donhang&act=kiemloi&ndh=' + ndh);
    });
    $('#emaildh').blur(function (e) { 
        e.preventDefault();
        email = $(this).val();
        $('#error_emaildh').load('?ctrl=donhang&act=kiemloi&email=' + email);
    });
    $('#address').blur(function (e) { 
        e.preventDefault();
        diachi = $(this).val();
        $('#error_address').load('?ctrl=donhang&act=kiemloi&diachi=' + diachi);
    });
    $('#tdgh').blur(function (e) { 
        e.preventDefault();
        timegh = $(this).val();
        $('#error_tdgh').load('?ctrl=donhang&act=kiemloi&gh=' + timegh);
    });
    $('#tddh').blur(function (e) { 
        e.preventDefault();
        timedh = $(this).val();
        $('#error_tddh').load('?ctrl=donhang&act=kiemloi&dathang=' + timedh);
    });
});