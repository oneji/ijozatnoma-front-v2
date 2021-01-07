@extends('layouts.app', [
    'title' => 'ДАРХОСТҲОИ МАН / АРИЗА'
])

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table id="datatable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-12 text-center">
            <p class="main-color-green mb-1">ДАРХОСТҲОИ ҚАБУЛШУЛА ДАР МАҶМУЪ: 12</p>
            <p class="main-color-red mb-1">ДАРХОСТҲОИ РАД КАРДА ДАР МАҶМУЪ: 15</p>
            <p class="main-color mb-1">ДАРХОСТҲОИ ҚАБУЛШУЛА ДАР МАҶМУЪ: 22</p>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
                    search: "",
                    searchPlaceholder: "ҶУСТУҶӮ...",
                    lengthMenu: "САБТИ _MENU_ -РО НИШОН ДИҲЕД",
                    zeroRecords: "ЯГОН САБТҲО ДАСТРАС НЕСТ",
                    info: "САБТҲОИ АЗ _PAGE_ ТО _PAGES_",
                    infoEmpty: "ЯГОН САБТҲО ДАСТРАС НЕСТ",
                    infoFiltered: "(Аз _MAX_ сабти умумӣ филтр карда шудааст)",
                    paginate: {
                        previous: "< Қаблӣ",
                        next: "Баъдӣ >",
                    }
                }
            });
        });
    </script>
@endsection