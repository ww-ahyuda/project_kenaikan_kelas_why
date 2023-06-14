@section('pageTitle', 'Semua Kategori')
@extends('app.app')
@section('content')

    <div class="container-xl">
        <div class="row row-cards">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Kategori
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('perpus.categories.create') }}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($allCategories as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td class="text-muted">
                                            {{ $item->name }}
                                        </td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ url('perpus/categories/' . $item->name . '/edit') }}"
                                                class="btn">Ubah</a>
                                            <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                                action="{{ url('perpus/categories/' . $item->id . '/delete') }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
