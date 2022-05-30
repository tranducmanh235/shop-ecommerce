if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadWishList)
} else {
    loadWishList()
}

function loadWishList() {
    var ca = document.cookie.split(';');
    var listID = [];
    var idWishList = "";
    for (var i = 0; i < ca.length; i++) {
        idWishList = ca[i].split('=')[0];
        if (idWishList.includes("wishlist")){
            listID.push(idWishList.replace("wishlist", ""));
        }
    }
    $.ajax({
        type: "POST",
        url: "../controller/xulysanpham.php",
        dataType: "json",
        timeout: 15000,
        data: {
            request: "getlistbyids",
            listID: listID
        },
        success: function (data) {
            showTableWishList(data);
        },
        error: function (e) {
            console.log("Fail");
            showTableWishList([]);
        }
    })
}

function showTableWishList(data) {
    console.log(data);
    var result = `
    <table class="table">
    <thead>
        <tr>
            <th class="li-product-remove">remove</th>
            <th class="li-product-thumbnail">images</th>
            <th class="cart-product-name">Product</th>
            <th class="li-product-price">Unit Price</th>
            <th class="li-product-stock-status">Stock Status</th>
            <th class="li-product-add-cart">Add to cart</th>
        </tr>
    </thead>
    <tbody>
    `;
    for (var i = 0; i < data.length; i++) {
        result += `
        <tr>
            <td class="li-product-remove"><a onClick="deleteItemWishList(${data[i].MaSP})"><i class="fa fa-times"></i></a></td>
            <td class="li-product-thumbnail"><a href="single-product-sale.php?id=${data[i].MaSP}"><img src="${data[i].HinhAnh}" style="width: 150px; height: 150px" alt=""></a></td>
            <td class="li-product-name"><a href="single-product-sale.php?id=${data[i].MaSP}">${data[i].TenSP}</a></td>
            <td class="li-product-price"><span class="amount">${data[i].DonGia}đ</span></td>
            <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
            <td class="li-product-add-cart"><a style="cursor: pointer" onClick="addToCardWishList(${data[i].MaSP})">add to cart</a></td>
        </tr>
        `;
    }
    result += `</tbody>
    </table>`;

    document.getElementById("list-wishlist").innerHTML = result;
}

function addToCardWishList(id) {
    setCookieWishList("name" + id , "1", 0);
    window.location.replace("shopping-cart.php");
}

function deleteItemWishList(id) {
    setCookieWishList("wishlist" + id, "", -1);
    loadWishList();
    updateWishList1();
}

function setCookieWishList(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function updateWishList1() {
    var ca = document.cookie.split(';');
    var dem = 0;
    for (var i = 0; i < ca.length; i++) {
        if (ca[i].split('=')[0].includes("wishlist")) {
            dem++;
        }
    }
    document.getElementById("numberWishList").innerText = dem;
}
