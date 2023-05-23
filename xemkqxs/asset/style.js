/* Demo purposes only */
$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  $(document).ready(function() {
    const table = document.querySelector('#myTable');
    table.innerHTML = '<thead></thead><tbody></tbody>';
    $.ajax({
    url: 'get_data_xsmb.php', // Đường dẫn đến file PHP xử lý lấy dữ liệu
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      const created_at = data[0].created_at;
      const date = new Date(created_at);
      const day = date.getDate().toString().padStart(2, '0');
      const month = (date.getMonth() + 1).toString().padStart(2, '0');
      const year = date.getFullYear().toString();
      const formatted_date = `${day}-${month}-${year}`;
      const days = document.getElementById('days');
      days.innerHTML = formatted_date
      $.each(data, function(index, value) {
        let g2 = JSON.parse(value.g2);
        let g3 = JSON.parse(value.g3);
        let g4 = JSON.parse(value.g4);
        let g5 = JSON.parse(value.g5);
        let g6 = JSON.parse(value.g6);
        let g7 = JSON.parse(value.g7);
        
        var row_header = '<th class="header_table" colspan = "4"> Kết quả xổ số miền Bắc - Ngày '+ formatted_date +'</th>'
        $('#myTable thead').append(row_header);
        var row =   '<tr>' +
                      '<td>Giải ĐB</td>' +
                      '<td colspan ="3">' + value.gdb + '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải nhất</td>' +
                      '<td colspan ="3">' + value.g1 + '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải nhì</td>' +
                        '<td colspan="3">'+ 
                          '<div class="giai2_mb">'+ g2[0] +'</div>' +
                          '<div class="giai2_mb">'+ g2[1] +'</div>' +
                        '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải ba</td>' +
                      '<td colspan="3">'+ 
                          '<div class="giai3_mb">'+ g3[0] +'</div>' +
                          '<div class="giai3_mb">'+ g3[1] +'</div>' +
                          '<div class="giai3_mb">'+ g3[2] +'</div>' +
                          '<div class="giai3_mb">'+ g3[3] +'</div>' +
                          '<div class="giai3_mb">'+ g3[4] +'</div>' +
                          '<div class="giai3_mb">'+ g3[5] +'</div>' +
                      '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải tư</td>' +
                      '<td colspan="3">'+ 
                        '<div class="giai2_mb">'+ g4[0] +'</div>' +
                        '<div class="giai2_mb">'+ g4[1] +'</div>' +
                        '<div class="giai2_mb">'+ g4[2] +'</div>' +
                        '<div class="giai2_mb">'+ g4[3] +'</div>' +
                      '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải Năm</td>' +
                      '<td colspan="3">'+ 
                          '<div class="giai3_mb">'+ g5[0] +'</div>' +
                          '<div class="giai3_mb">'+ g5[1] +'</div>' +
                          '<div class="giai3_mb">'+ g5[2] +'</div>' +
                          '<div class="giai3_mb">'+ g5[3] +'</div>' +
                          '<div class="giai3_mb">'+ g5[4] +'</div>' +
                          '<div class="giai3_mb">'+ g5[5] +'</div>' +
                      '</td>' +
                    '</tr>' +
                    '<tr>' +
                      '<td>Giải Sáu</td>' +
                      '<td>'+ g6[0] +'</td>' +
                      '<td>'+ g6[1] +'</td>' +
                      '<td>'+ g6[2] +'</td>' +
                    '</tr>' +
                    '</tr>' +
                      '<td>Giải Bảy</td>' +
                      '<td colspan="3">'+ 
                        '<div class="giai7_mb">'+ g7[0] +'</div>' +
                        '<div class="giai7_mb">'+ g7[1] +'</div>' +
                        '<div class="giai7_mb">'+ g7[2] +'</div>' +
                        '<div class="giai7_mb">'+ g7[3] +'</div>' +
                      '</td>' +
                    '</tr>' ;
        $('#myTable tbody').append(row);
        });
      }
    });

    const btn1 = document.querySelector('#btn1');
    const btn2 = document.querySelector('#btn2');
    const btn3 = document.querySelector('#btn3');
    btn1.addEventListener('click', () => {
      table.innerHTML = '<thead></thead><tbody></tbody>';
      $.ajax({
      url: 'get_data_xsmb.php', // Đường dẫn đến file PHP xử lý lấy dữ liệu
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        $.each(data, function(index, value) {
          let g2 = JSON.parse(value.g2);
          let g3 = JSON.parse(value.g3);
          let g4 = JSON.parse(value.g4);
          let g5 = JSON.parse(value.g5);
          let g6 = JSON.parse(value.g6);
          let g7 = JSON.parse(value.g7);
          const created_at = value.created_at;
          const date = new Date(created_at);
          const day = date.getDate().toString().padStart(2, '0');
          const month = (date.getMonth() + 1).toString().padStart(2, '0');
          const year = date.getFullYear().toString();
          const formatted_date = `${day}-${month}-${year}`;
          var row_header = '<th class="header_table" colspan = "4"> Kết quả xổ số miền Bắc - Ngày '+ formatted_date +'</th>'
          $('#myTable thead').append(row_header);
          var row =   '<tr>' +
                        '<td>Giải ĐB</td>' +
                        '<td colspan ="3">' + value.gdb + '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải nhất</td>' +
                        '<td colspan ="3">' + value.g1 + '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải nhì</td>' +
                          '<td colspan="3">'+ 
                            '<div class="giai2_mb">'+ g2[0] +'</div>' +
                            '<div class="giai2_mb">'+ g2[1] +'</div>' +
                          '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải ba</td>' +
                        '<td colspan="3">'+ 
                            '<div class="giai3_mb">'+ g3[0] +'</div>' +
                            '<div class="giai3_mb">'+ g3[1] +'</div>' +
                            '<div class="giai3_mb">'+ g3[2] +'</div>' +
                            '<div class="giai3_mb">'+ g3[3] +'</div>' +
                            '<div class="giai3_mb">'+ g3[4] +'</div>' +
                            '<div class="giai3_mb">'+ g3[5] +'</div>' +
                        '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải tư</td>' +
                        '<td colspan="3">'+ 
                          '<div class="giai2_mb">'+ g4[0] +'</div>' +
                          '<div class="giai2_mb">'+ g4[1] +'</div>' +
                          '<div class="giai2_mb">'+ g4[2] +'</div>' +
                          '<div class="giai2_mb">'+ g4[3] +'</div>' +
                        '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải Năm</td>' +
                        '<td colspan="3">'+ 
                            '<div class="giai3_mb">'+ g5[0] +'</div>' +
                            '<div class="giai3_mb">'+ g5[1] +'</div>' +
                            '<div class="giai3_mb">'+ g5[2] +'</div>' +
                            '<div class="giai3_mb">'+ g5[3] +'</div>' +
                            '<div class="giai3_mb">'+ g5[4] +'</div>' +
                            '<div class="giai3_mb">'+ g5[5] +'</div>' +
                        '</td>' +
                      '</tr>' +
                      '<tr>' +
                        '<td>Giải Sáu</td>' +
                        '<td>'+ g6[0] +'</td>' +
                        '<td>'+ g6[1] +'</td>' +
                        '<td>'+ g6[2] +'</td>' +
                      '</tr>' +
                      '</tr>' +
                        '<td>Giải Bảy</td>' +
                        '<td colspan="3">'+ 
                          '<div class="giai7_mb">'+ g7[0] +'</div>' +
                          '<div class="giai7_mb">'+ g7[1] +'</div>' +
                          '<div class="giai7_mb">'+ g7[2] +'</div>' +
                          '<div class="giai7_mb">'+ g7[3] +'</div>' +
                        '</td>' +
                      '</tr>' ;
          $('#myTable tbody').append(row);
          });
        }
      });
    });

    btn2.addEventListener('click', () => {
      table.innerHTML = 
        '<thead>' +
        '</thead>'+
        '<tbody>' +
        '</tbody>';
      $.ajax({
      url: 'get_data_xsmt.php', // Đường dẫn đến file PHP xử lý lấy dữ liệu
      type: 'GET',
      dataType: 'json',
      success: function(data) {

        const created_at = data[0].created_at;
        const date = new Date(created_at);
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear().toString();
        const formatted_date = `${day}-${month}-${year}`;
        const colspan = data.length + 1
        var row_header = '<th class="header_table" colspan = "'+ colspan +'"> Kết quả xổ số miền Trung - Ngày '+ formatted_date +'</th>'
        $('#myTable thead').append(row_header);

        for (var i = 0; i < 10; i++) {
          // Tạo hàng mới
          var row = document.createElement("tr");
          row.classList.add("class" + i)
          // Tạo cột đầu tiên chứa số thứ tự
          var cell1 = document.createElement("td");
          switch(i) {
            
            case 1: {
              var giai = "Giải tám"
              break
            }
            case 2: {
              var giai = "Giải bảy"
              break
            }
            case 3: {
              var giai = "Giải sáu"
              break
            }
            case 4: {
              var giai = "Giải năm"
              break
            }
            case 5: {
              var giai = "Giải tư"
              break
            }
            case 6: {
              var giai = "Giải ba"
              break
            }
            case 7: {
              var giai = "Giải nhì"
              break
            }
            case 8: {
              var giai = "Giải nhất"
              break
            }
            case 9: {
              var giai = "Giải ĐB"
              break
            }
            default: giai = ""
          }
          cell1.innerHTML = giai;
          row.appendChild(cell1);

          $.each(data, function (index, value) {

            let keyArray = Object.values(value)
            keyArray[4] = JSON.parse(keyArray[4])
            keyArray[6] = JSON.parse(keyArray[6])
            keyArray[7] = JSON.parse(keyArray[7])

            const g8 = document.createElement("td");
            if(i===3 || i === 5 || i === 6 ) {
              const newdata = $.each(keyArray[i+1], function(index, value) {
                const div = document.createElement("div")
                div.innerHTML = value
                g8.appendChild(div)
              });
            }
            else {
              g8.innerHTML = keyArray[i + 1];
            }
              row.appendChild(g8);
          })
          table.appendChild(row);
          $('#myTable tbody').append(row);
        }
        }
      });
    });

    btn3.addEventListener('click', () => {
      table.innerHTML = 
        '<thead>' +
        '</thead>'+
        '<tbody>' +
        '</tbody>';
      $.ajax({
      url: 'get_data_xsmn.php', // Đường dẫn đến file PHP xử lý lấy dữ liệu
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        const created_at = data[0].created_at;
        const date = new Date(created_at);
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear().toString();
        const formatted_date = `${day}-${month}-${year}`;
        const colspan = data.length + 1
        var row_header = '<th class="header_table" colspan = "'+ colspan +'"> Kết quả xổ số miền Nam - Ngày '+ formatted_date +'</th>'
        $('#myTable thead').append(row_header);

        for (var i = 0; i < 10; i++) {
          // Tạo hàng mới
          var row = document.createElement("tr");
          row.classList.add("class" . i)
          // Tạo cột đầu tiên chứa số thứ tự
          var cell1 = document.createElement("td");
          switch(i) {
            
            case 1: {
              var giai = "Giải tám"
              break
            }
            case 2: {
              var giai = "Giải bảy"
              break
            }
            case 3: {
              var giai = "Giải sáu"
              break
            }
            case 4: {
              var giai = "Giải năm"
              break
            }
            case 5: {
              var giai = "Giải tư"
              break
            }
            case 6: {
              var giai = "Giải ba"
              break
            }
            case 7: {
              var giai = "Giải nhì"
              break
            }
            case 8: {
              var giai = "Giải nhất"
              break
            }
            case 9: {
              var giai = "Giải ĐB"
              break
            }
            default: giai = ""
          }
          cell1.innerHTML = giai;
          row.appendChild(cell1);

          $.each(data, function (index, value) {

            let keyArray = Object.values(value)
            keyArray[4] = JSON.parse(keyArray[4])
            keyArray[6] = JSON.parse(keyArray[6])
            keyArray[7] = JSON.parse(keyArray[7])

            const g8 = document.createElement("td");
            if(i===3 || i === 5 || i === 6 ) {
              const newdata = $.each(keyArray[i+1], function(index, value) {
                const div = document.createElement("div")
                div.innerHTML = value
                g8.appendChild(div)
              });
            }
            else {
              g8.innerHTML = keyArray[i + 1];
            }
              row.appendChild(g8);
          })
          table.appendChild(row);
          $('#myTable tbody').append(row);
        }
        }
      });
    });
    
  });