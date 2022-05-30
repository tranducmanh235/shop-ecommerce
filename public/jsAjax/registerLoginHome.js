if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadJsUser)
} else {
    loadJsUser();
}

// ============================== TÀI KHOẢN ============================

// Hàm get set cho người dùng hiện tại đã đăng nhập
function loadJsUser(){
    // checkDangKy();
    if(jQuery(".containTaikhoan").length>0)
    {
        console.log(1000);
        showTaiKhoan();
    }
    getCurrentUser();
    // showTaiKhoan();
    checkTaiKhoan();
    // checkDangNhap();
    // checkDangXuat();
    capNhatThongTinUser();



}
function getCurrentUser(onSuccess, onFail) {
    $.ajax({
        type: "POST",
        url: "controller/xulytaikhoan.php",
        dataType: "json",
        timeout: 15000, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "getCurrentUser"
        },
        success: function(data, status, xhr) {
            if(onSuccess) onSuccess(data);
        },
        error: function(e) {
            if(onFail) onFail(e);
        }
    })
}

// Hiển thị form tài khoản, giá trị truyền vào là true hoặc false
function showTaiKhoan(show) {
    var value = (show ? "block" : "none");
    var div = document.getElementsByClassName('containTaikhoan')[0];
    div.style.display = value;
}

// Check xem có ai đăng nhập hay chưa (CurrentUser có hay chưa)
// Hàm này chạy khi ấn vào nút tài khoản trên header
function checkTaiKhoan() {
    getCurrentUser((data) => {
        if(!data) {
            showTaiKhoan(true);
        }

    }, (error) => {
        
    })
}

//  ================================ WEB 2 =================================
function checkDangKy() {
    // var ho = document.getElementById('ho').value;
    // var ten = document.getElementById('ten').value;
    // var sdt = document.getElementById('sdt').value;
    // var email = document.getElementById('email').value;
    // var diachi = document.getElementById('diachi').value;
    // var username = document.getElementById('newUser').value;
    // var pass = document.getElementById('newPass').value;
    // function validateForm() {
        var ten = document.forms["formDangKy"]["ten"].value;
        var ho = document.forms["formDangKy"]["ho"].value;
        var email = document.forms["formDangKy"]["email"].value;
        var sdt = document.forms["formDangKy"]["sdt"].value;
        var username = document.forms["formDangKy"]["newUser"].value;
        var atposition = email.indexOf("@");
        var dotposition = email.lastIndexOf(".");
        var pass = document.forms["formDangKy"]["newPass"].value;
        var confpassword = document.forms["formDangKy"]["confNewPass"].value;
        
        if (ten.length < 2 || ten.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter firstname must be lenght 2 to 30 characters!"
            })
            return false;
        } else if (ho.length < 2 || ho.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter lastname must be lenght 2 to 30 characters!"
            })
            return false;
    
        } else if (username.length < 2 || username.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter userName must be lenght 2 to 30 characters!"
            })
            return false;
    
        } else if (sdt.length < 5 || sdt.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter SDT must be lenght 5 to 30 characters!"
            })
            return false;
    
        }else if (atposition < 1 || dotposition < 1 ||
            (dotposition + 1) >= email.length) {
            Swal.fire({
                type: "error",
                title: "Please enter a valid e-mail address.!"
            })
            return false;
        } else if (pass == '' || pass.length < 2 || pass.length > 30) {
            Swal.fire({
                type: "error",
                title: "Please enter password must be lenght 2 to 30 characters!"
            })
            return false;
        } 
        else if (pass != confpassword) {
            Swal.fire({
                type: "error",
                title: "Please validate password again!"
            })
            return false;
        }else {

    $.ajax({
        url: "controller/xulytaikhoan.php",
        type: "post",
        dataType: "json",
        timeout: 15000,
        data: {
            request: 'dangky',
            data_ho: ho,
            data_ten: ten,
            data_sdt: sdt,
            data_email: email,
            data_newUser: username,
            data_newPass: pass
        },
        success: function(kq) {
            console.log(kq);
            if(kq != null) {
                Swal.fire({
                    type: 'success',
                    title: 'Đăng kí thành công ' + kq.TaiKhoan,
                    text: 'Bạn sẽ được đăng nhập tự động',
                    confirmButtonText: 'Tuyệt'

                }).then((result) => {
                    capNhatThongTinUser();
                    showTaiKhoan(false);
                });
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Lỗi",
                // html: e.responseText
            });
            console.log(e.responseText)
        }
    });

    return false;
}
}

function checkDangNhap() {
    var uName = document.getElementById('username').value;
    var passWord = document.getElementById('pass').value;

    $.ajax({
        url: "controller/xulytaikhoan.php",
        type: "post",
        dataType: "json",
        timeout: 15000,
        data: {
            request: 'dangnhap',
            data_username: uName,
            data_pass: passWord
        },
        success: function(data, status, xhr) {
            console.log(data);

            if(data != null) {
                Swal.fire({
                    type: "success",
                    title: "Đăng nhập thành công",
                    text: "Chào " + data.Ho + " " + data.Ten
                })
                .then((result) => {
                    capNhatThongTinUser();

                    window.location.replace("index.php");
                    // // showTaiKhoan(false);
                    // console.log(1800);
                });
                
            } else {
                Swal.fire({
                    type: "error",
                    title: "Tên tài khoản hoăc mật khẩu không đúng"
                });
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Lỗi khi đăng nhập",
                // html: e.responseText
            });
            console.log(e.responseText)
        }
    });
    return false;
}

function checkDangXuat(onSuccess) {
    Swal.fire({
        type: 'question',
        title: 'Xác nhận',
        text: 'Bạn có chắc muốn đăng xuất?',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý',
        cancelButtonText: 'Hủy'

    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "controller/xulytaikhoan.php",
                dataType: "text",
                timeout: 15000,
                data: {
                    request: 'dangxuat'
                },
                success: function(data) {
                    if(data == 'ok') {
                        Swal.fire({
                            type: "success",
                            title: "Đăng xuất thành công"
                        }).then((result) => {
                            capNhatThongTinUser();
                            // setListGioHang(null);
                            // animateCartNumber();
                            location.reload();
                        });

                        if(onSuccess) onSuccess();

                    } else {
                        Swal.fire({
                            type: "error",
                            title: "Chưa có ai đăng nhập"
                        })
                    }
                },
                error: function(e) {
                    Swal.fire({
                        type: "error",
                        title: "Có lỗi khi đăng xuất",
                        // html: e.responseText
                    })
                    console.log(e.responseText)
                }
            })
        }
    });
}

function capNhatThongTinUser() {
    getCurrentUser((data) => {
        if(!data) {
            document.getElementById("btnTaiKhoan").innerHTML = '<i class="fa fa-user"></i> Tài khoản';
            document.getElementsByClassName("menuMember")[0].classList.add('hide');

        } else {
            document.getElementById("btnTaiKhoan").innerHTML = '<i class="fa fa-user"></i> ' + data['TaiKhoan'];
            document.getElementsByClassName("menuMember")[0].classList.remove('hide');

        }
    })
}
