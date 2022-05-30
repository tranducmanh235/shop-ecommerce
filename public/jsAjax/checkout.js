if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadCheckOut)
} else {
    loadCheckOut()
}

var user = null;

function loadCheckOut() {
    $.ajax({
        type: "POST",
        url: "../controller/xulytaikhoan.php",
        dataType: "json",
        timeout: 15000, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "getCurrentUser"
        },
        success: function(data, status, xhr) {
            if (data) {
                user = data;
                showCheckOut();
            } else {
                Swal.fire({
                    type: "error",
                    title: "Bạn chưa đăng nhập, mời bạn đăng nhập!"
                }).then((result) => {
                    window.location.replace("login-register.php");
                });
            }
        },
        error: function(e) {
            Swal.fire({
                type: "error",
                title: "Bạn chưa đăng nhập, mời bạn đăng nhập!"
            }).then((result) => {
                window.location.replace("login-register.php");
            });
        }
    })
}

function showCheckOut() {
    if (!JSON.parse(localStorage.getItem('donhang')) || JSON.parse(localStorage.getItem('donhang')).total === 0) {
        Swal.fire({
            type: "error",
            title: "Bạn chưa mua hàng, mời bạn mua hàng!"
        }).then((result) => {
            window.location.replace("shop.php");
        });
    }


    var products = JSON.parse(localStorage.getItem('donhang'));
    var total = products.total;
    products = products.products;
    var result = `<table class="table">
    <thead>
        <tr>
            <th class="cart-product-name">Product</th>
            <th class="cart-product-total">Total</th>
        </tr>
    </thead>
    <tbody>`;
    for (var i = 0; i < products.length; i++) {
        result += `
        <tr class="cart_item">
            <td class="cart-product-name"> ${products[i].name}<strong class="product-quantity"> × ${products[i].quantity}</strong></td>
            <td class="cart-product-total"><span class="amount">${products[i].price}đ</span></td>  
        </tr>
        `;
    }
    result += `
    </tbody>
        <tfoot>
            <tr class="cart-subtotal">
                <th>Cart Subtotal</th>
                <td><span class="amount">${total}đ</span></td>
            </tr>
            <tr class="order-total">
                <th>Order Total</th>
                <td><strong><span class="amount">${total}đ</span></strong></td>
            </tr>
        </tfoot>
    </table>
    `;
    $("#itemOrder").html(result);
}

function placeOrder() {
    var products = JSON.parse(localStorage.getItem('donhang'));
    var total = products.total;
    products = products.products;
    var nameOrder = document.getElementById("nameOrder").value;
    var addressOrder = document.getElementById("addressOrder").value;
    var emailOrder = document.getElementById("emailOrder").value;
    var phoneOrder = document.getElementById("phoneOrder").value;

    if (nameOrder.length < 2) {
        Swal.fire({
            type: "error",
            title: "Name phải nhiều hơn 1 ký tự!"
        });
        return;
    }
    if (addressOrder.length < 2) {
        Swal.fire({
            type: "error",
            title: "Địa chỉ phải nhiều hơn 1 ký tự!"
        });
        return;
    }
    if (emailOrder.indexOf("@") === -1 || emailOrder.lastIndexOf(".") === -1 || emailOrder.indexOf("@") >= emailOrder.lastIndexOf(".") - 1) {
        Swal.fire({
            type: "error",
            title: "Bạn phải nhập email đúng format example@abc.xyz!"
        });
        return;
    }
    if (!phoneOrder.length) {
        Swal.fire({
            type: "error",
            title: "Bạn phải nhập SĐT!"
        });
        return;
    } else if (isNaN(phoneOrder)) {
        Swal.fire({
            type: "error",
            title: "SĐT không chứa khí tự!"
        });
        return;
    }
    var d = new Date();

    var dformat = [d.getFullYear(),
        d.getMonth()+1,
        d.getDate()
        ].join('-')+' '+
       [d.getHours(),
        d.getMinutes(),
        d.getSeconds()].join(':');

    console.log(products);
    $.ajax({
        type: "POST",
        url: "../controller/xulyhoadon.php",
        dataType: "json",
        timeout: 15000, // sau 1.5 giây mà không phản hồi thì dừng => hiện lỗi
        data: {
            request: "themhoadon",
            mand: user.MaND,
            ngaylap: dformat,
            nguoinhan: nameOrder,
            sdt: phoneOrder,
            diachi: addressOrder,
            tongtien: total,
            products: JSON.stringify(products)
        },
        success: function(data) {
            // xoa don hang
            localStorage.removeItem('donhang');
            // xoa cookkie name
            var ca = document.cookie.split(';');

            for (var i = 0; i < ca.length; i++) {
                if (ca[i].split('=')[0].includes("name")){
                    setCookieCheckout(ca[i].split('=')[0], '1', -1);
                }
            }

            Swal.fire({
                type: "success",
                title: "Order thành công!"
            }).then(() => {
                window.location.replace("../index.php");
            });
        },
        error: function(e) {
            console.log(e);
            Swal.fire({
                type: "error",
                title: "Lỗi!"
            });
        }
    })

}

function setCookieCheckout(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

