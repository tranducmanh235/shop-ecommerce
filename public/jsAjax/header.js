if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadMiniCard)
} else {
    loadMiniCard()
}

function loadMiniCard() {
    // key la maSP value la so luong
    var ca = document.cookie.split(';');
    var listID = [];
    var listQuantity = [];
    var dem = 0;
    var listTemp = [];
    for (var i = 0; i < ca.length; i++) {
        if (ca[i].split('=')[0].includes("name")){
            // listID.push(ca[i].split('=')[0].replace("name",""));
            // listQuantity.push(ca[i].split('=')[1]);
            var temp = {
                id: parseInt(ca[i].split('=')[0].replace("name","")),
                quantity: ca[i].split('=')[1]
            }
            listTemp.push(temp);
        } else if (ca[i].split('=')[0].includes("wishlist")) {
            dem++;
        }
    }

    listTemp.sort(function (a, b) {
        return a.id - b.id;
    })
    listTemp.forEach(item => {
        listID.push(item.id);
        listQuantity.push(item.quantity);
    });

    // wishlist header
    document.getElementById("numberWishList").innerText = dem;
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
            showMiniCard(data, listQuantity);
        },
        error: function (e) {
            showMiniCard([], []);
            console.log("Fail");
        }
    })
}

function showMiniCard(data, listQuantity) {
    var result = "";
    result += `<ul class="minicart-product-list">`;
    var total = 0;
    for (var i = 0; i < data.length; i++) {
        result += `
        <li>
            <a href="single-product-sale.php?id=${data[i].MaSP}" class="minicart-product-image">
                <img style="width: 48px; height: 48px" src="${data[i].HinhAnh}" alt="cart products">
            </a>
            <div class="minicart-product-details">
                <h6><a href="single-product-sale.php?id=${data[i].MaSP}">${data[i].TenSP}</a></h6>
                <span>${data[i].DonGia}đ</span>
            </div>
            <button onClick="deleteItemMiniCard(${data[i].MaSP})" class="close" title="Remove">
                <i class="fa fa-close"></i>
            </button>
        </li>
        `;
        var s = (data[i].DonGia * listQuantity[i]);
        s = Math.round(s * 100) / 100;
        total += s;
    }
    total = Math.round(total * 100) / 100;
    result += `</ul>`;
    document.getElementsByClassName("show-minicard")[0].innerHTML = result;
    document.getElementsByClassName("quantity-minicard")[0].innerText = data.length;
    document.getElementsByClassName("total-minicard")[0].innerHTML = total + 'đ';
    document.getElementsByClassName("subtotal-minicard")[0].innerHTML = total + 'đ';
}

function deleteItemMiniCard(id) {
    setCookieHeader("name" + id, "", -1);
    // alert("Delete Success!")
    // cap nhat lai
    loadMiniCard();
}

function setCookieHeader(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}