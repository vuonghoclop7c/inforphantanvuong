$(document)['ready'](function() {
                $('[data-toggle="tooltip"]')['tooltip']()
            });
            var _0x2301 = ['desc', '#example1, #example2,#example3,#example4', 'asc', '#orderPrice', 'slideToggle', '.pack', 'click', '#package', 'outerWidth', 'body', 'sidebar-collapse', 'addClass'];
            $(_0x2301[7])[_0x2301[6]](function() {
                $(_0x2301[5])[_0x2301[4]]()
            });
            function collapseSidebarDuySexy() {
                $(function() {
                    if ($(_0x2301[9])[_0x2301[8]](true) > 756) {
                        $(_0x2301[9])[_0x2301[11]](_0x2301[10])
                    }
                })
            }
            var _0x4300 = ['onkeydown', 'ctrlKey', 'keyCode', 'Code By DuyKhang?', 'OK, ng\u01B0\u1EDDi ta cho \u0111\u1EB1ng \u1EA5y copy source \u0111\xF3 nha Ahihi!!!', '\u0110\u1ECBt m\u1EB9 m\xE0y =))'];
            document[_0x4300[0]] = function(_0x40b5x5) {
                if (_0x40b5x5[_0x4300[1]] && (_0x40b5x5[_0x4300[2]] === 85)) {
                    if (confirm(_0x4300[3]) == true) {
                        alert(_0x4300[4])
                    } else {
                        alert(_0x4300[5]);
                        return false
                    }
                }
            }
            var _0x4bd1 = ["\x73\x6C\x6F\x77", "\x66\x61\x64\x65\x4F\x75\x74", "\x23\x44\x75\x79\x53\x65\x78\x79\x4F\x76\x65\x72\x6C\x61\x79\x2C\x23\x6C\x6F\x61\x64\x69\x6E\x67", "\x72\x65\x61\x64\x79"];
            $(document)[_0x4bd1[3]](function() {
                $(_0x4bd1[2])[_0x4bd1[1]](_0x4bd1[0])
            })
            console.log("%c F12 CÁI ĐỊT CON CHỊ MÀY, CÚT IK!!", "color:red; font-size:22px")
            $('#example1, #example2, #example3, #example4').DataTable({
                "order": [[ 0, "desc" ]],
                "pageLength": 25,
                "lengthMenu": [[5, 10, 25, 50, 100, 200, 500, 1000, -1], [5, 10, 25, 50, 100, 200, 500, 1000, "Tất cả"]],
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ kết quả trên trang",
                    "zeroRecords": "Không tìm thấy kết quả nào",
                    "info": "Hiển thị trang _PAGE_ trong tổng số _PAGES_ trang",
                    "infoEmpty": "Không tìm thấy kết quả nào phù hợp",
                    "infoFiltered": "(lọc từ _MAX_ tổng số bản ghi)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Hiển thị _MENU_ kết quả",
                    "loadingRecords": "Đang tải...",
                    "processing":     "Đang xử lí...",
                    "search":         "Tìm kiếm:",
                    "zeroRecords":    "Không tìm thấy kết quả nào phù hợp",
                    "searchPlaceholder": "Nhập nội dung...",
                    "paginate": {
                        "first":      "Trang đầu",
                        "last":       "Trang cuối",
                        "next":       "Tiếp",
                        "previous":   "Trước"
                    },
                    "aria": {
                        "sortAscending":  ": kích hoạt sắp xếp tăng dần",
                        "sortDescending": ": kích hoạt sắp xếp giảm dần"
                    }
                }
            });
            
            // js datatable for event
            $('#ev_quay_so, #ev_nap_tien, #ev_lich_su').DataTable({
                "pageLength": 10,
                "ordering": false,
                "lengthMenu": [[5, 10, 15, 20 -1], [5, 10, 15, 20, "Tất cả"]],
                "language": {
                    "lengthMenu": "Hiển thị _MENU_ kết quả trên trang",
                    "zeroRecords": "Không tìm thấy kết quả nào",
                    "info": "Hiển thị trang _PAGE_ trong tổng số _PAGES_ trang",
                    "infoEmpty": "Không tìm thấy kết quả nào phù hợp",
                    "infoFiltered": "(lọc từ _MAX_ tổng số bản ghi)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Hiển thị _MENU_ kết quả",
                    "loadingRecords": "Đang tải...",
                    "processing":     "Đang xử lí...",
                    "search":         "Tìm kiếm:",
                    "zeroRecords":    "Không tìm thấy kết quả nào phù hợp",
                    "searchPlaceholder": "Nhập nội dung...",
                    "paginate": {
                        "first":      "Trang đầu",
                        "last":       "Trang cuối",
                        "next":       "Tiếp",
                        "previous":   "Trước"
                    },
                    "aria": {
                        "sortAscending":  ": kích hoạt sắp xếp tăng dần",
                        "sortDescending": ": kích hoạt sắp xếp giảm dần"
                    }
                }
            });