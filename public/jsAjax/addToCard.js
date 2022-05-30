if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

var listProduct = [];
var tongtien = 0;

// Hien thi card
function ready() {
    // key la maSP value la so luong
    var ca = document.cookie.split(';');
    var listID = [];
    var listQuantity = [];
    var dem = 0;
    var listTemp = [];
    for (var i = 0; i < ca.length; i++) {
        if (ca[i].split('=')[0].includes("name")){
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

    // gán wishlist
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
            listIdProduct = listID;
            listQuantityProduct = listQuantity; 
            showTableCard(data, listQuantity);
        },
        error: function (e) {
            console.log("Fail");
            showTableCard([], []);
        }
    })
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function showTableCard(data, listQuantity) {
    var result = "";
    result += "<table class=\"table\">";
    result += "<thead>";
    result += "<tr>";
    result += "<th class=\"li-product-remove\">remove</th>";
    result += "<th class=\"li-product-thumbnail\">images</th>";
    result += "<th class=\"cart-product-name\">Product</th>";
    result += "<th class=\"li-product-price\">Unit Price</th>";
    result += "<th class=\"li-product-quantity\">Quantity</th>";
    result += "<th class=\"li-product-subtotal\">Total</th>";
    result += "</tr>";
    result += "</thead>";
    result += "<tbody>";
    for (var i = 0; i < data.length; i++) {
        var product = {
            id: data[i].MaSP,
            name: data[i].TenSP,
            price: data[i].DonGia,
            quantity: listQuantity[i]
        };
        listProduct.push(product);
        result += "<tr>";
        result += "<td class=\"li-product-remove\"><a onClick='deleteItemCard(" + data[i].MaSP + ")' style='cursor: pointer'><i class=\"fa fa-times\"></i></a></td>";
        result += "<td class=\"li-product-thumbnail\"><a href=\"#\"><img style='width: 150px; height: 150px' src=" + data[i].HinhAnh + " alt=\"Li's Product Image\"></a></td>";
        result += "<td class=\"li-product-name\"><a href=\"#\">" + data[i].TenSP + "</a></td>";
        result += "<td class=\"li-product-price\"><span class=\"amount item-price\">" + data[i].DonGia + "đ</span></td>";
        result += "<td class=\"quantity\">";
        result += "<label>Quantity</label>";
        result += "<div>";
        result += "<input onChange='changeQuatity(this," + data[i].SoLuong + "," + i + ")' class=\"input-product-quantity\" value=" + listQuantity[i] + " type=\"number\">";
        result += "</div>";
        result += "</td>";
        result += "<td class=\"product-subtotal\"><span class=\"amount item-total\">" + data[i].DonGia*listQuantity[i] + "đ</span></td>";
        result += "</tr>";
    }
    result += "</tbody>";
    result += "</table>";
    $("#listcard").html(result);
    // show minicard
    showMini(data, listQuantity);
    // end show

    
    // for (var i = 0; i < item.length; i++) {
    //     item[i].addEventListener('change', quantityChanged);
    // }

    updateTotal();
}

function changeQuatity(input, soluong, i) {
    if (input.value <= 0) {
        input.value = 1;
    } else if (input.value > soluong) {
        input.value = soluong;
        /// san pham vuot qua ton kho
        Swal.fire({
            type: "error",
            title: "Số lượng sản phẩm đã vượt quá kho!"
        });
    }

    setCookie("name"+listProduct[i].id, input.value, 0);
    listProduct[i].quantity = input.value;
    updateTotal();
}

function updateTotal() {
    var tableContain = document.getElementById("listcard");
    var itemPrice = tableContain.getElementsByClassName("item-price");
    var itemTotal = tableContain.getElementsByClassName("item-total");
    var itemQuantity = tableContain.getElementsByClassName("input-product-quantity");
    var total = 0;
    for (var i = 0; i < itemPrice.length; i++){
        var price = parseFloat(itemPrice[i].innerText.replace('đ', ''));
        var quantity = itemQuantity[i].value;
        listQuantityProduct[i] = quantity;
        var s = (price * quantity);
        s = Math.round(s * 100) / 100;
        itemTotal[i].innerText = s + 'đ';
        total += s;
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('sub-total-amount')[0].innerText = total + 'đ';
    document.getElementsByClassName('total-amount')[0].innerText = total + 'đ';
    // Gan minicard
    document.getElementsByClassName("quantity-minicard")[0].innerText = itemPrice.length;
    document.getElementsByClassName("total-minicard")[0].innerHTML = total + 'đ';
    document.getElementsByClassName("subtotal-minicard")[0].innerHTML = total + 'đ';
    tongtien = total;
}

function deleteItemCard(id) {
    setCookie("name" + id, "", -1);
    Swal.fire({
        type: "success",
        title: "Xóa thành công"
    }).then((result) => {
        // cap nhat lai
        window.location.replace("shopping-cart.php");
    });
    
}

function showMini(data, listQuantity) {
    var result = "";
    result += `<ul class="minicart-product-list">`;
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
            <button class="close" title="Remove">
                <i class="fa fa-close"></i>
            </button>
        </li>
        `;
    }
    result += `</ul>`;
    document.getElementsByClassName("show-minicard")[0].innerHTML = result;
}

function eventCheckOut() {
    var donhang = {
        products: listProduct,
        total: tongtien
    }

    localStorage.setItem('donhang', JSON.stringify(donhang));
    window.location.replace("checkout.php");
}