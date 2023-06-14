@section('pageTitle', 'Ubah Kategori')
@extends('app.app')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Ubah Kategori:
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('perpus.categories.index') }}" class="btn">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ url('perpus/categories/' . $data->id) }}" method="post" autocomplete="off">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label required">Nama Kategori</label>
                                    <input type="text" class="form-control" name="name" value="{{ $data->name }}"
                                        placeholder="Input Nama Kategori">
                                </div>
                                <button class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
