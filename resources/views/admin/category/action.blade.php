@props(['query', 'modalId' => 'editModal-' . $query->id])

<div class="d-flex gap-2 p-2">

    <!-- Button Edit -->
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}"
        title="Edit Data">
        <i class="fa fa-pen-alt"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="{{ $modalId }}Label"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="{{ $modalId }}Label">
                        Form Edit
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Body -->
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">
                                Nama
                            </label>

                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $query->name }}">
                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>

                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Button Delete -->

    <form action="{{ route('category.destroy', $query->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger btn-delete">
            <i class="fa fa-trash"></i>
        </button>
    </form>


</div>
