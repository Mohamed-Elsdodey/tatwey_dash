
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="{{url('assets')}}/dashboard/js/sweet.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        new DataTable("#example");
    })
</script>

<script>
    var loader = ` <div class="linear-background">
                            <div class="inter-crop"></div>
                            <div class="inter-right--top"></div>
                            <div class="inter-right--bottom"></div>
                        </div>
        `;
    var newUrl=location.href;


    $(function () {
        console.log(window.location.href)
        // AE empty massage 
            let SvgIcon = `
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 468 468" xmlns:v="https://vecta.io/nano"><path fill="#d16ce0" d="M86.209 457.758l4.6-32.497c10.024-70.814 71.098-123.481 143.177-123.47s133.135 52.7 143.136 123.517l4.589 32.498"/><path fill="#754bc7" d="M377.122 425.308c-6.729-47.649-36.573-87.088-77.335-107.799l.861.926c38.471 41.784 8.792 109.366-48.005 109.357l-162.188-.027-4.246 29.993 295.502.048z"/><g fill="#ffdacc"><path d="M233.974 373.662c-16.529-.003-29.926-13.404-29.923-29.933l.013-76.244 59.856.01-.013 76.244c-.003 16.529-13.404 29.925-29.933 29.923z"/><path d="M361.213 185.835l-.017-33.487a51.123 51.123 0 0 0-3.02-17.308c-2.128 3.791-4.807 7.486-8.2 10.887-11.299 11.327-29.918 18.916-35.112 13.775-3.759-3.721 1.679-11.967 3.724-23.311 1.492-8.275 1.321-19.048-3.825-32.594-5.756 15.057-12.94 25.436-18.207 31.936-9.621 11.875-25.355 26.305-31.186 22.836-6.787-4.038 8.361-27.263 2.751-50.24a42.116 42.116 0 0 0-2.634-7.525h-.744l-.659 1.12c-14.128 23.089-41.876 43.303-54.035 36.485-10.318-5.786-5.524-28.861-10.999-29.799-6.358-1.089-8.85 30.711-30.771 48.726-18.458 15.168-46.12 16.811-61.536 12.952v15.555c-14.525 2.312-25.619 14.719-25.619 29.684 0 16.61 13.665 30.075 30.523 30.075 1.098 0 2.181-.06 3.249-.171C133.591 292.015 179.855 325 234 325s100.41-32.985 119.105-79.57c1.068.111 2.15.171 3.248.171 16.857 0 30.523-13.465 30.523-30.075 0-14.98-11.116-27.397-25.663-29.691z"/></g><path fill="#ffb9ab" d="M187.576 167.915c11.294-8.117 19.446-18.138 25.337-28.461-1.025-.22-1.989-.555-2.864-1.045-10.318-5.786-5.524-28.861-10.999-29.799-6.358-1.089-8.85 30.711-30.771 48.726-18.458 15.168-46.12 16.811-61.536 12.952v7.776c7.857 3.465 18.334 6.638 30.833 6.801 25.424.332 43.093-11.986 50-16.95z"/><path fill="#ffdacc" d="M146.835 437.187c1.465-24.494-19.639-64.244-19.639-64.244s-14.45-31.73-29.97-29.864c-26.186 3.149 3.556 48.843 3.556 48.843s-37.577-37.026-66.448-39.337c-10.278-.823-14.039 13.209-4.845 17.862 7.013 3.549 14.716 8.034 23.117 13.69-10.751-7.239-20.361-12.56-28.841-16.454-8.262-3.794-18.032 1.582-18.72 10.621l-.019.271c-.359 5.527 2.981 10.627 8.113 12.753 9.688 4.015 21.026 9.97 34.03 18.726-9.578-6.449-18.253-11.379-26.03-15.133-5.632-2.719-11.327 3.448-8.215 8.858 15.925 27.692 49.836 48.804 81.752 56.872 21.361 5.399 50.576 3.01 52.159-23.464z"/><path fill="#ffb9ab" d="M127.197 372.943s-14.45-31.73-29.97-29.864c-2.907.35-5.121 1.226-6.767 2.503 11.571 7.253 20.737 27.361 20.737 27.361s21.103 39.75 19.638 64.244c-.976 16.317-12.452 23.477-26.112 25.311 19.475 2.286 40.767-2.816 42.112-25.311 1.465-24.494-19.638-64.244-19.638-64.244z"/><path fill="#ffdacc" d="M321.165 437.187c-1.465-24.494 19.639-64.244 19.639-64.244s14.45-31.73 29.97-29.864c26.186 3.149-3.556 48.843-3.556 48.843s37.577-37.026 66.448-39.337c10.278-.823 14.039 13.209 4.845 17.862-7.013 3.549-14.716 8.034-23.117 13.69 10.751-7.239 20.361-12.56 28.841-16.454 8.262-3.794 18.032 1.582 18.72 10.621l.019.271c.359 5.527-2.981 10.627-8.113 12.753-9.688 4.015-21.026 9.97-34.03 18.726 9.578-6.449 18.253-11.379 26.03-15.133 5.632-2.719 11.327 3.448 8.215 8.858-15.925 27.692-49.836 48.804-81.752 56.872-21.361 5.399-50.576 3.01-52.159-23.464z"/><path fill="#ffb9ab" d="M340.803 372.943s14.45-31.73 29.97-29.864c2.907.35 5.121 1.226 6.767 2.503-11.571 7.253-20.737 27.361-20.737 27.361s-21.103 39.75-19.638 64.244c.976 16.317 12.452 23.477 26.112 25.311-19.475 2.286-40.767-2.816-42.112-25.311-1.465-24.494 19.638-64.244 19.638-64.244z"/><g fill="#333"><path d="M162.679 218.804c-3.808 0-6.339-4.895-3.989-8.014 9.521-12.646 24.446-18.521 38.006-14.972a5.003 5.003 0 0 1 3.572 6.106 4.998 4.998 0 0 1-6.102 3.575c-9.633-2.521-20.419 1.923-27.49 11.312a4.992 4.992 0 0 1-3.997 1.993zm142.642 0a4.989 4.989 0 0 1-3.997-1.992c-7.073-9.392-17.867-13.831-27.493-11.313a4.996 4.996 0 0 1-6.102-3.575 5.003 5.003 0 0 1 3.572-6.106c13.571-3.549 28.486 2.328 38.009 14.971 2.35 3.12-.18 8.015-3.989 8.015zm-55.313 67.453a4.988 4.988 0 0 1-3.996-1.992c-2.87-3.81-7.249-5.994-12.013-5.994a14.973 14.973 0 0 0-11.72 5.618 4.998 4.998 0 0 1-7.03.762 5.005 5.005 0 0 1-.761-7.034c4.779-5.943 11.891-9.352 19.511-9.352a24.83 24.83 0 0 1 19.997 9.976 5.005 5.005 0 0 1-3.988 8.016z"/><ellipse cx="277.845" cy="234.706" rx="10.306" ry="10.106"/><ellipse cx="190.177" cy="234.706" rx="10.305" ry="10.106"/><path d="M27.581 124.619c-2.762 0-5-2.24-5-5.003 0-10.025 5.229-19.312 13.985-24.84 5.302-3.347 8.596-9.478 8.596-16 0-10.263-7.887-18.612-17.581-18.612S10 68.513 10 78.776a5.001 5.001 0 1 1-10 0c0-15.78 12.373-28.618 27.581-28.618s27.581 12.838 27.581 28.618c0 10.077-4.957 19.222-13.26 24.463-5.837 3.684-9.321 9.807-9.321 16.377a5.001 5.001 0 0 1-5 5.003z"/><ellipse cx="27.581" cy="144.301" rx="7" ry="7.004"/><path d="M440.419 124.619c-2.762 0-5-2.24-5-5.003 0-10.025 5.229-19.312 13.985-24.84 5.302-3.347 8.596-9.478 8.596-16 0-10.263-7.887-18.612-17.581-18.612s-17.581 8.349-17.581 18.612a5.001 5.001 0 1 1-10 0c0-15.78 12.373-28.618 27.581-28.618S468 62.996 468 78.776c0 10.077-4.957 19.222-13.26 24.463-5.837 3.684-9.321 9.807-9.321 16.377a5.001 5.001 0 0 1-5 5.003z"/><ellipse cx="440.419" cy="144.301" rx="7" ry="7.004"/><path d="M467.963 378.489c-.873-9.784-9.277-17.366-19.235-16.769-.313-8.208-7.258-14.556-15.462-13.899-16.966 1.359-36.215 13.466-50.164 24.146 4.744-12.92 6.099-31.492-11.731-33.638-8.561-1.03-16.324 5.057-22.375 12.282a149.889 149.889 0 0 0-48.311-38.005c24.555-14.026 44.421-35.859 55.681-61.845 19.583-.006 35.512-15.748 35.512-35.097 0-7.406-2.293-14.305-6.266-19.995 3.837-12.402 5.812-25.826 5.812-39.981 0-53.807-27.52-103.079-73.613-131.804-3.94-2.455-9.852-2.566-13.896-.214C290.618 2.437 256.474 0 234 0 147.197 0 76.578 69.841 76.578 155.687c0 14.155 1.97 27.585 5.808 39.993-3.971 5.688-6.262 12.584-6.262 19.983 0 19.349 15.931 35.092 35.514 35.097 11.268 26.005 31.086 47.791 55.656 61.831a149.883 149.883 0 0 0-48.323 37.979c-6.046-7.207-13.796-13.268-22.341-12.241-17.83 2.146-16.476 20.718-11.731 33.638-13.95-10.681-33.199-22.787-50.165-24.146-8.204-.656-15.149 5.691-15.462 13.899-9.958-.597-18.363 6.985-19.235 16.769-.434 6.688 2.984 12.993 8.693 16.445-2.146 3.492-2.256 7.912-.141 11.593 15.441 26.867 48.752 50.13 84.861 59.265 22.711 5.746 56.605 1.563 58.375-28.03 1.502-25.136-18.548-63.769-20.142-66.795-.692-1.508-3.052-6.454-6.64-12.057 14.249-17.629 32.669-31.572 53.568-40.547a133.127 133.127 0 0 0 20.441 7.293l-.003 18.29c-.002 19.271 15.664 34.952 34.923 34.955 19.049.01 34.931-15.877 34.933-34.944l.003-18.291a132.996 132.996 0 0 0 20.441-7.287c20.907 8.986 39.327 22.942 53.571 40.584-3.568 5.581-5.916 10.5-6.606 12.004-1.594 3.026-21.644 41.659-20.142 66.795 1.765 29.521 35.68 33.772 58.375 28.03 36.109-9.135 69.42-32.397 84.861-59.265 2.115-3.681 2.006-8.101-.141-11.593 5.712-3.452 9.129-9.757 8.696-16.445zm-326.119 58.676c-1.376 23.053-29.201 23.162-45.941 18.926-33.615-8.503-64.485-29.916-78.645-54.552-.333-1.163.024-1.84 1.073-2.031.229 0 .424.071.55.128 8.824 4.257 17.466 9.203 25.495 14.827a5 5 0 0 0 6.94-1.356c1.542-2.292.936-5.401-1.354-6.944-11.048-7.444-22.588-14.099-34.909-19.209-3.229-1.339-5.253-4.48-5.037-7.815.677-5.431 6.46-9.065 11.663-6.675 9.821 4.512 19.176 10.031 28.135 16.068 2.295 1.544 5.398.936 6.94-1.356s.936-5.401-1.354-6.944c-8.072-5.438-16.03-10.153-23.652-14.013-4.225-2.139-2.559-8.802 2.188-8.422 26.709 2.14 62.976 37.582 63.339 37.94a5 5 0 0 0 6.67.309c1.977-1.615 2.421-4.461 1.03-6.602-3.888-5.987-23.838-39.171-7.151-41.178 11.64-1.398 20.696 19.176 24.957 27.26.204.384 20.426 38.828 19.063 61.639zm117.062-93.209c-.002 13.748-11.393 24.699-24.932 24.939-13.745-.002-24.926-11.194-24.924-24.947l.003-16.033a136.766 136.766 0 0 0 49.855.006zM234 320.203c-50.901 0-95.831-30.02-114.463-76.481-1.479-3.687-4.87-2.968-7.89-2.968-14.073 0-25.523-11.256-25.523-25.091 0-12.372 9.002-22.786 21.405-24.761a5.002 5.002 0 0 0 4.214-4.941v-9.537c43.487 5.947 70.551-19.19 85.708-56.967.837 7.948 1.988 18.822 10.153 23.404 14.188 7.959 40.023-9.462 56.08-31.326 2.025 10.74-.664 21.587-2.85 30.402-2.302 9.284-4.29 17.301 1.979 21.033 1.376.819 2.888 1.185 4.497 1.185 18.983-.005 39.023-31.292 46.346-45.541 1.636 9.476.094 18.365-2.782 27.363-2.112 6.606-4.106 12.846.473 17.383 8.725 8.644 30.802-2.404 42.168-13.805.813-.814 1.6-1.657 2.361-2.527 1.506 12.745.33 26.119.337 38.929a5.002 5.002 0 0 0 4.221 4.94c12.425 1.96 21.442 12.377 21.442 24.768 0 13.835-11.45 25.091-25.523 25.091-2.952 0-6.478-.545-7.888 2.968-18.633 46.458-63.564 76.479-114.465 76.479zm218.947 66.75c-12.321 5.11-23.862 11.766-34.909 19.209-2.29 1.543-2.896 4.652-1.354 6.944a5 5 0 0 0 6.94 1.356c8.029-5.624 16.671-10.57 25.495-14.827a1.34 1.34 0 0 1 .55-.128c1.049.191 1.407.868 1.073 2.031-14.159 24.635-45.029 46.048-78.645 54.552-16.74 4.236-44.565 4.128-45.941-18.926-1.363-22.811 18.858-61.256 19.063-61.641 4.261-8.084 13.317-28.659 24.957-27.26 16.687 2.007-3.263 35.191-7.151 41.178a5.006 5.006 0 0 0 1.03 6.602 4.998 4.998 0 0 0 6.67-.309c.363-.358 36.63-35.8 63.339-37.94 4.747-.38 6.413 6.283 2.188 8.422-7.622 3.86-15.58 8.575-23.652 14.013-2.29 1.543-2.896 4.652-1.354 6.944a5 5 0 0 0 6.94 1.356c8.958-6.037 18.313-11.556 28.135-16.068 5.203-2.39 10.986 1.244 11.663 6.675.216 3.337-1.808 6.478-5.037 7.817z"/></g></svg>
            `

            let bodyDir = $('body').attr('dir') === 'rtl' ? 'برجاء اضافة بيانات' : 'Please add information';

            let emptyTableMessage = `
                <div class="AE_emptyTableMessage ">
                    <div class='AE_Svg'>${SvgIcon}</div>
                    <p class='AE_innerText'>
                        ${bodyDir}
                    </p>
                </div>
            `
        // 
        var table = $("#table").DataTable({
            processing: true,
            pageLength: 25,
            paging: true,
            dom: 'Bfrltip',


            bLengthChange: true,
            serverSide: true,
            ajax: window.location.href,
            columns: columns,
            "ordering": false,
            // order: [
            //     [0, "ASEC"]
            // ],

            buttons: {
                    buttons: [
                        {
                            extend: 'collection',
                            text: ' <i class="fas fa-download"></i>  Export',
                            className: 'btn btn-primary AE_button dropdown-toggle',
                           
                            buttons: [
                                {
                                extend: 'copy',
                                text: 'Copy <i class="fas fa-copy"></i> '
                            },
                            {
                                extend: 'csv',
                                text: 'CSV <i class="fas fa-file-csv"></i> '
                            },
                            {
                                extend: 'excel',
                                text: 'Excel <i class="fas fa-file-excel"></i> '
                            },
                            {
                                extend: 'pdf',
                                text: 'PDF <i class="fas fa-file-pdf"></i> '
                            },
                            {
                                extend: 'print',
                                text: ' Print <i class="fas fa-print"></i> '
                            }
                            ]
                        }
                    ]
                },
            lengthMenu: [
                [25, 50, 100, -1],
                [25, 50, 100, 'All'],
            ],
            language:{
                lengthMenu: "_MENU_",// Customize this text
                search: "", // No label text for search
                searchPlaceholder: "ادخل الاسم او id" ,// Placeholder text for search input
                emptyTable:emptyTableMessage,

            },
            searching: true,
            destroy: true,
            info: false,
            // sDom: '<"row view-filter"<"col-sm-12"<"float-left"l><"float-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',

            drawCallback: function () {
                $($(".dataTables_wrapper .pagination li:first-of-type"))
                    .find("a")
                    .addClass("prev");
                $($(".dataTables_wrapper .pagination li:last-of-type"))
                    .find("a")
                    .addClass("next");

                $(".dataTables_wrapper .pagination").addClass("pagination-sm");
            }
        });
        var tableContainer = $('<div class="AE_TableContainer"></div>').insertBefore('#table');
        var controlsContainer = $('<div class="custom-controls"></div>').insertBefore('#table');
        var searchContainer = $('<div class="search-container"></div>').insertBefore('#table');
        let BtnSearch = $('<button type="button" class="btn btn-primary AE_button " id="searchBtn">ابحث</button>')
        //
        var table_length = $('#table_length') // length of table
        var table_filter = $('#table_filter') // search table filter
        //
        tableContainer.append(controlsContainer).append(searchContainer)
        table.buttons().container().appendTo('.custom-controls')
        controlsContainer.append(table_length)
        searchContainer.append(table_filter)
        table_filter. append(BtnSearch)
        
    });

    $(document).on('click', '#addBtn', function () {
        $('#form-load').html(loader)
        $('#operationType').text('اضافة');

        $('#Modal').modal('show')

        setTimeout(function (){
            $('#form-load').load("{{route("$url.create")}}")
        },1000)
    });

    $(document).on('submit',"form#form",function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        var url = $('#form').attr('action');
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            beforeSend: function () {


                $('#submit').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                    ' ></span> <span style="margin-left: 4px;">Work is underway</span>').attr('disabled', true);
                $('#form-load').append(loader)
                $('#form').hide()
            },
            complete: function () {
            },
            success: function (data) {

                window.setTimeout(function () {
                    $('#submit').html('Ok').attr('disabled', false);

// $('#product-model').modal('hide')
                    if (data.code == 200) {
                        toastr.success(data.message)
                        $('#Modal').modal('hide')
                        $('#table').DataTable().ajax.reload(null, false);
                    }else {
                        $('#form-load > .linear-background').hide(loader)
                        $('#form').show()
                        toastr.error(data.message)
                    }
                }, 1000);



            },
            error: function (data) {
                $('#form-load > .linear-background').hide(loader)
                $('#submit').html('Ok').attr('disabled', false);
                $('#form').show()
                if (data.status === 500) {
                    toastr.error('there is an error')
                }

                if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);

                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error(value)
                            });

                        } else {

                        }
                    });
                }
                if (data.status == 421){
                    toastr.error(data.message)
                }

            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
    $(document).on('click', '.delete', function () {

        var id = $(this).data('id');
        swal.fire({
            title: "Are you sure to delete?",
            text: "Can't you undo then?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ok",
            cancelButtonText: "Cancel",
            okButtonText: "Ok",
            closeOnConfirm: false
        }).then((result) => {
            if (!result.isConfirmed){
                return true;
            }


            var url = '{{ route("$url.destroy",":id") }}';
            url = url.replace(':id',id)
            $.ajax({
                url: url,
                type: 'DELETE',
                beforeSend: function(){
                    $('.loader-ajax').show()

                },
                success: function (data) {

                    window.setTimeout(function() {
                        $('.loader-ajax').hide()
                        if (data.code == 200){
                            toastr.success(data.message)
                            $('#table').DataTable().ajax.reload(null, false);
                        }else {
                            toastr.error('there is an error')
                        }

                    }, 1000);
                }, error: function (data) {

                    if (data.code === 500) {
                        toastr.error('there is an error')
                    }


                    if (data.code === 422) {
                        var errors = $.parseJSON(data.responseText);

                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value)
                                });

                            } else {

                            }
                        });
                    }
                }

            });
        });
    });

    $(document).on('click', '.editBtn', function () {
        var  id = $(this).data('id');
        $('#operationType').text('تعديل ');
        $('#form-load').html(loader)
        $('#Modal').modal('show')

        var url = "{{route("$url.edit",':id')}}";
        url = url.replace(':id',id)

        setTimeout(function (){
            $('#form-load').load(url)
        },1000)


    });
</script>
