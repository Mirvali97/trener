@extends('userlayout')

@section('title','Trenerlar Ro`yhati')


@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
                <h6 class="text-center text-primary text-uppercase">O'zbekiston Respublikasi Sport Vazirligi Huzuridagi Jismoniy Tarbiya
                    Va Sport Bo'yicha Mutaxassislarni Ilmiy-Metodik Ta'minlash Qayta Tayyorlash Va Ularning Malakasini Oshirish Markazi</h6>
            </div>

            <img class="img-fluid" src="{{ asset('banner.png') }}" alt="banner" style="height: 100px">

            <div class="col-md-6 d-flex justify-content-center">
               <h3 class="text-black text-uppercase text-success">Trenerlar Reesteri</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid my-lg-5">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-avatar">
                                <thead>
                                <tr>
                                    <th class="text-uppercase">ID</th>
                                    <th class="text-uppercase">Тренернинг Ф.И.О</th>
                                    <th class="text-uppercase">Иш жойи ва лавозими</th>
                                    <th class="text-uppercase">Спорт тури</th>
                                    <th class="text-uppercase">Малака оширган йили </th>
                                    <th class="text-uppercase">Cертфикат рақами</th>
                                    <th class="text-uppercase"> Тренерлик рухсатномаси амал қилиш муддати</th>
                                    <th class="text-uppercase">Ҳудуд</th>
                                    <th class="text-uppercase">Туман</th>
                                    <th class="text-uppercase">Kurs natijasi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $i => $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->fullname }}</td>
                                        <td>{{ $c->job }}</td>
                                        <td>{{ $c->type_sport }}</td>
                                        <td>{{ $c->year }}</td>
                                        <td>{{ $c->number_cert }}</td>
                                        <td>{{ $c->validate }}</td>
                                        <td>{{ $c->district }}</td>
                                        <td>{{ $c->region }}</td>
                                        <td>{{ $c->result }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="text-uppercase">ID</th>
                                    <th class="text-uppercase">Тренернинг Ф.И.О</th>
                                    <th class="text-uppercase">Иш жойи ва лавозими</th>
                                    <th class="text-uppercase">Спорт тури</th>
                                    <th class="text-uppercase">Малака оширган йили </th>
                                    <th class="text-uppercase">Cертфикат рақами</th>
                                    <th class="text-uppercase"> Тренерлик рухсатномаси амал қилиш муддати</th>
                                    <th class="text-uppercase">Ҳудуд</th>
                                    <th class="text-uppercase">Туман</th>
                                    <th class="text-uppercase">Kurs natijasi</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

@endsection
