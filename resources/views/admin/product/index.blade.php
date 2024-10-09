@extends('layouts.dashboard.app')

@section('content')

<div class="x_content">

    <h3>Table Data Produk</h3>

    <a href="{{route('admin.product.add')}}" class="btn btn-primary mb-4">Add Product</a>

    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action" id="datatable">
            <thead>
                <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama Produk </th>
                    <!-- <th class="column-title">Img </th> -->
                    <th class="column-title">Harga </th>
                    <th class="column-title">Fitur </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span></th>
                </tr>
            </thead>


            <?php $number = 1; ?>

            <tbody>
                @foreach($product as $p)
                <tr class="even pointer">
                    <td>{{ $number }}</td>
                    <?php $number++; ?>
                    <td class=" ">{{ $p->nama }}</td>
                    <!-- <td>
                    @if($p->images && $p->images->count() > 0)
                        <img src="{{ asset('/images/' . $p->images->first()->image) }}" alt="Product Image" style="width: 100px;">
                    @else
                        <p>Gambar tidak tersedia</p>
                    @endif
                    </td> -->
                    <td class=" ">{{ $p->harga }}</td>
                    <td class=" ">{{ $p->fitur }}</td>

                    <td class=" ">
                        <a href="{{route('admin.product.show', $p->id)}}" class="btn btn-sm btn-success"><i class="fa-solid fa-sm fa-eye"></i></a>
                        <a href="{{route('admin.product.edit', $p->id)}}" class="btn btn-sm btn-warning"><i class="fa-solid fa-sm fa-pen-to-square"></i></a>
                        <a href="{{route('admin.product.destroy', $p->id)}}" class="btn btn-sm btn-danger"><i class="fa-solid fa-sm fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>

@endsection
