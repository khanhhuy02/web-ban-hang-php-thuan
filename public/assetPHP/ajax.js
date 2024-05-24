

// <!-- 
//     $(document).ready(function() {
//         $('body').on('change', '.main-categories-id', function(e) {
//             let id = $(this).val();
//             let url = <?= ROOT_URL ?> +
//                 '/admin/create/product/' + id;
//             let targetSelect = $('#subcategory');
//             let text = $('.text');

//             console.log(targetSelect);
//             alert(id);

//             $.ajax({
//                 method: "GET",
//                 url: url,
//                 dataType: "json",
//                 data: {
//                     id: id
//                 },
//                 success: function(listBar) {
//                     console.log(listBar);

//                     $.each(listBar, function(index, item) {
//                         var option = $('<option>').val(item.id).text(item.names);
//                         selectElement.append(option);
//                     });
//                     // text.html(listBar);
//                     // // console.log(listBar);
//                     // alert(listBar);
//                     // // $('#subcategory').empty()

//                     // for (let i = 0; i < listBar.length; i++) {
//                     //     targetSelect.append(`<option>${listBar}</option>`);

//                     // }
//                     // // var obj = JSON.parse(listBar);
//                     // $.each(listBar, (key, val) =>{
//                     //     console.log(key);
//                     //     console.log(val); //depending on your data, you might call val.url or whatever you may have
//                     //     targetSelect.append(`<option>${val}</option>`);
//                     // });

//                     // $.each(listBar, function(xs) {
//                     //     $('#subcategory').append($("<option>", {
//                     //         text: xs
//                     //     }));
//                     // });


//                     // targetSelect.html('<option value="">Select</option>')
//                     // $.each(data, function(i, item) {
//                     //     targetSelect.append(`<option value="${item.id}">${item.name}</option>`);
//                     // })

//                     // var options = '';
//                     // for (var i = 0; i < listBar.length; i++) {
//                     //     var item = listBar[i];
//                     //     options += '<option value="' + item.id + '">' + item.names + '</option>';
//                     // }

//                     // // Gắn danh sách tùy chọn vào phần tử <select>
//                     // selectElement.html(options);




//                 },
//                 error: function(xhr, status, error) {
//                     let errorMessage = `Error fetching sub-categories: ${error}`;
//                     if (xhr.status === 404) {
//                         errorMessage = 'Sub-category not found for the selected main category.';
//                     }
//                     // console.error(errorMessage);
//                     // Consider displaying an error message to the user
//                 }
//             });
//         });

//         // $('body').on('change', '.sub-category', function(e) {
//         //     let selectedSubCategoryId = $(this).val();
//         //     // Implement logic to handle sub-category selection here
//         //     // For example, make another AJAX request to fetch product details or update UI elements
//         //     console.log('Sub-category selected:', selectedSubCategoryId);
//         // });
//     });




// $(document).ready(function() {
//     $('.main-categories-id').change(function() {
//         var selectedOption = $(this).find('option:selected');
//         var url = selectedOption.data('url');

//         if (url) {
//             $.ajax({
//                 url: url,
//                 method: 'GET',
//                 dataType: 'json',
//                 success: function(listBar) {
//                     var selectElement = $('#subcategory');
//                     selectElement.empty();
//                     console.log(listBar);

//                     $.each(listBar, function(index, item) {
//                         var option = $('<option>').val(item.id).text(item.names);
//                         selectElement.append(option);
//                     });
//                 },
//                 error: function(xhr, status, error) {
//                     console.error(error);
//                 }
//             });
//         }
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    var mainCategoriesSelect = document.querySelector('.main-categories-id');
    var phoneFields = document.getElementById('phone-fields');
    var laptopFields = document.getElementById('laptop-fields');
    // console.log(phoneFields);
    mainCategoriesSelect.addEventListener('change', function () {
        var selectedOption = this.options[this.selectedIndex];
        var url = selectedOption.getAttribute('data-url');

        if (url) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onload = function () {
                if (xhr.status === 200) {
                    var listBar = JSON.parse(xhr.responseText);
                    var selectElement = document.querySelector('#subcategory');
                    selectElement.innerHTML = '';

                    listBar.forEach(function (item) {
                        var option = document.createElement('option');
                        option.value = item.id;
                        option.textContent = item.names;
                        selectElement.appendChild(option);
                    });


                    if (mainCategoriesSelect.value == 7) {
                        phoneFields.innerHTML = `
                            <tr>
                                <th scope="row">Màng Hình</th>
                                <td colspan='3' style="width: 79%;"><input type="text" name="screen" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Hệ điều hành</th>
                                <td colspan='3'><input type="text" name="operating_system" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Camera Trước</th>
                                <td colspan='3'><input type="text" name="camera_before" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Camera sau</th>
                                <td colspan='3'><input type="text" name="camera_after" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Vi xử lý (chip)</th>
                                <td colspan='3'><input type="text" name="chip" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            <tr>
                                <th scope="row">Ram</th>
                                <td colspan='3'><input type="text" name="ram" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <th scope="row">bộ lưu trữ</th>
                                <td colspan='3'><input type="text" name="capacity" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Sim</th>
                                <td colspan='3'><input type="text" name="sim" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">Dung lượng pin</th>
                                <td colspan='3'><input type="text" name="pin" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">ngày ra mắt sản phẩm</th>
                                <td colspan='3'><input type="date" name="meeting_day" class="col-12 p-1"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        
                        `;
                        laptopFields.innerHTML = '';
                    } else if (mainCategoriesSelect.value == 8) {
                        laptopFields.innerHTML = `
                    <tr>
                        <th scope="row">Màng Hình</th>
                        <td colspan='3' style="width: 79%;"><input type="text" name="screen" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Hệ điều hành</th>
                        <td colspan='3'><input type="text" name="operating_system" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Camera Trước</th>
                        <td colspan='3'><input type="text" name="camera_before" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row">Vi xử lý (CPU)</th>
                        <td colspan='3'><input type="text" name="chip" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    <tr>
                        <th scope="row">Ram</th>
                        <td colspan='3'><input type="text" name="ram" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <th scope="row">bộ lưu trữ(ổ cứng)</th>
                        <td colspan='3'><input type="text" name="capacity" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Dung lượng pin</th>
                        <td colspan='3'><input type="text" name="pin" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">ngày ra mắt sản phẩm</th>
                        <td colspan='3'><input type="date" name="meeting_day" class="col-12 p-1"></td>
                        <td></td>
                        <td></td>
                    </tr>
                        `;
                        phoneFields.innerHTML = '';

                    } else {
                        phoneFields.innerHTML = '';
                        laptopFields.innerHTML = '';
                    }
                } else {
                    console.error(xhr.statusText);
                }
            };

            xhr.onerror = function () {
                console.error('Request failed');
            };

            xhr.send();
        }
    });


});


