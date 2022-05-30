if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadBill)
} else {
    loadBill()
}

function loadBill() {
    $.ajax({
        type: "POST",
        url: "../controller/xulytaikhoan.php",
        dataType: "json",
        timeout: 15000, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "getCurrentUser"
        },
        success: function(data, status, xhr) {
            // if(onSuccess) onSuccess(data);
            if (data) {
                loadData(data.MaND);
            } else {
                Swal.fire({
                    type: "error",
                    title: "Bạn chưa đănh nhập mời bạn đăng nhập!"
                }).then(() => {
                    window.location.replace("login-register.php");
                })
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Bạn chưa đănh nhập mời bạn đăng nhập!"
            }).then(() => {
                window.location.replace("login-register.php");
            })
        }
    })
}

function loadData(mand) {
    $.ajax({
        type: "POST",
        url: "../controller/xulyhoadon.php",
        dataType: "json",
        timeout: 15000,
        data: {
            request: "layhoadontheoma",
            mand: mand
        },
        success: function (data) {
            console.log(data);
            showTableBill(data);
        },
        error: function (e) {
            console.log("Fail");
            showTableBill([]);
        }
    })
}

function showTableBill(data) {
    var result = `
    <table class="table">
    <thead>
        <tr>
            <th class="li-product-remove">Tên Sản Phẩm</th>
            <th class="li-product-thumbnail">Số lượng</th>
            <th class="cart-product-name">Đơn giá</th>
            <th class="li-product-price">Ngày đặt</th>
            <th class="li-product-remove">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
    `;
    for (var i = 0; i < data.length; i++) {
        result += `
        <tr>
            <td class="li-product-name"><a>${data[i].TenSP}</a></td>
            <td class="li-product-name"><a>${data[i].SoLuong}</a></td>
            <td class="li-product-name"><a>${data[i].DonGia}đ</a></td>
            <td class="li-product-name"><a>${data[i].NgayLap}</a></td>
            <td class="li-product-name"><a>${data[i].TrangThai}</a></td>
        </tr>
        `;
    }
    result += `</tbody>
    </table>`;

    document.getElementById("showbill").innerHTML = result;
}
