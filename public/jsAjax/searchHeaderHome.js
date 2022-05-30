
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loadAjaxSearch)
} else {
    loadAjaxSearch()
}
function loadAjaxSearch(){
    var tags = ["Samsung", "iPhone", "Coolpad", "Oppo", "Mobi"];
    for (var t of tags) addTags(t, "index.php?search=" + t);

}
function addTags(nameTag, link) {
    var new_tag = `<option class="option-header" value=` + link + `>` + nameTag + `</option>`;
    // var khung_tags = document.getElementById('tags');
    $( "#tags" ).append(new_tag);
    // khung_tags.innerHtml +=new_tag;
}
