@extends('layouts.back', ['title' => 'Daftar Kategori Tefa'])

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form id="form-category" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Daftar Kategori
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table  table-bordered" id="categories-table">
                            {{ $dataTable->table(['width' => '100%', 'class' => 'table table-striped']) }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    <script>
        $(function() {
            // Handle form create & edit
            AjaxCrudHelper.handleForm('#form-category', '#category-table');
            AjaxCrudHelper.handleForm('[id^="form-edit-category-"]', '#category-table');

            // Handle delete
            AjaxCrudHelper.handleDelete('.btn-delete', '#category-table');
        });
    </script>
@endpush
