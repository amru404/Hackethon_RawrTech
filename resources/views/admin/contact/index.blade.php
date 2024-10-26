@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Table Data Contact</h3>

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="datatable">
            <thead>
                <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama </th>
                    <th class="column-title">Email </th>
                    <th class="column-title">No Hp </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                </tr>
            </thead>


            <?php $number = 1; ?>

            <tbody>
                @foreach($contact as $c)
                <tr class="even pointer">
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <td class=" ">{{ $c->nama }}</td>
                    <td class=" ">{{ $c->email }}</td>
                    <td class=" ">{{ $c->no_hp}}</td>
                    <td class=" ">
                        <a href="{{route('admin.contact.show', $c->id)}}" class="btn btn-sm btn-success"><i class="fa-solid fa-sm fa-eye"></i></a>
                        <a href="{{route('admin.contact.edit', $c->id)}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-sm fa-pen-to-square"></i></a>
                        <a href="{{route('admin.contact.destroy', $c->id)}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-sm fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
