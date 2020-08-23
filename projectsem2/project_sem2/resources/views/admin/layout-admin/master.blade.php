<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="ZPglNUPRICcuuzU4vBdwga6U9n2GeulnySURXpsf">

    <title>@yield('title')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="http://demo-expense-manager.quickadminpanel.com/css/custom.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('super-market/img/logo_admin.png')}}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-79616612-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-79616612-5');

    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">

    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full">Expense Manager</span>
            <span class="navbar-brand-minimized">Expense Manager</span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div style="text-align: right; background: #eee; padding: 5px 15px">
            Super Market
            <a href="{{ route('index') }}" target="_blank">Try it yourself now!</a>
        </div>

        <ul class="nav navbar-nav ml-auto">
        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    {{-- quan ly user --}}
                    <li class="nav-item">
                                <p style="
    margin-left: 16px;
    margin-bottom: 5px;
    font-size: 25px;
"><i class="fa-fw fas fa-user nav-icon"></i>  <a href="{{route('homeAdmin')}}" style="text-decoration: none;">{{ Auth::user()->name }}</a>
                                    
                                </p><i class="fa fa-circle text-success" style="
    margin-left: 51px;
    font-size: 10px;
"></i>
                                    Online
                            </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-users nav-icon"> </i>
                            User management
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">
                                    </i>
                                    Permissions
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('show_Roles') }}" class="nav-link">
                                    <i class="fa-fw fas fa-briefcase nav-icon">
                                    </i>
                                    Roles
                                </a>
                            </li>
                            
                                <li class="nav-item">
                                    <a href="{{ route('show_user') }}" class="nav-link">
                                        <i class="fa-fw fas fa-user nav-icon"></i>
                                        Users
                                    </a>
                                </li>
                             
                        </ul>
                    </li>
                    {{-- ket thuc quan ly user --}}

                    {{-- quan ly cac danh muc san pham --}}
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-list nav-icon"> </i>
                            Categories manage
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route('categoryList') }}" class="nav-link">
                                    <i class="fa-fw fas fa-briefcase nav-icon">
                                    </i>
                                    Category
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('productList') }}" class="nav-link">
                                    <i class="fa-fw fas fa-briefcase nav-icon">
                                    </i>
                                    Product
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--ket thuc quan ly cac danh muc san pham --}}

                    {{-- quan ly cac don hang va khach hang --}}
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw fas fa-list nav-icon"> </i>
                            Orders manage
                        </a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{route('admin_order')}}" class="nav-link">
                                    <i class="fa-fw fas fa-briefcase nav-icon">
                                    </i>
                                    Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa-fw fas fa-briefcase nav-icon">
                                    </i>
                                    Customer
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--ket thuc quan ly cac don hang va khach hang--}}

                    {{-- thống kê số liệu --}}
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa-fw fas fa-arrow-circle-right nav-icon"></i>
                            Statistics
                        </a>
                    </li>
                    {{-- két thúc thống kê số liệu --}}
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                            <i class="fa-fw fas fa-arrow-circle-right nav-icon">
                            </i>
                            Expenses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa-fw fas fa-arrow-circle-right nav-icon">
                            </i>
                            Income
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('report')}}" class="nav-link">
                            <i class="fa-fw fas fa-chart-line nav-icon">
                            </i>
                            Monthly report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout_exit') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="nav-link">
                            <i class="nav-icon fas fa-fw fa-sign-out-alt"> </i>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

        {{-- moc noi tai day --}}
        @yield('contentTable')
        {{-- ket thuc moc noi --}}

        <form id="logout-form" action="{{ route('logout_exit') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="http://demo-expense-manager.quickadminpanel.com/js/main.js"></script>
    <script>
        $(function() {
            let copyButtonTrans = 'Copy'
            let csvButtonTrans = 'CSV'
            let excelButtonTrans = 'Excel'
            let pdfButtonTrans = 'PDF'
            let printButtonTrans = 'Print'
            let colvisButtonTrans = 'Column visibility'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['en']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style: 'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [{
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });

    </script>

    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            let deleteButtonTrans = 'Delete selected'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "http://demo-expense-manager.quickadminpanel.com/admin/expense-categories/destroy",
                className: 'btn-danger',
                action: function(e, dt, node, config) {
                    var ids = $.map(dt.rows({
                        selected: true
                    }).nodes(), function(entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('No rows selected')

                        return
                    }

                    if (confirm('Are you sure?')) {
                        $.ajax({
                                headers: {
                                    'x-csrf-token': _token
                                },
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                }
                            })
                            .done(function() {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)

            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'asc']
                ],
                pageLength: 100,
            });
            $('.datatable-ExpenseCategory:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>


</body>

</html>
