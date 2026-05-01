<div>
<!-- Flash Message Notifikasi Sukses  -->
@if(session()->has('success'))
<div class="">
    <div>{{ session('success') }}</div>
</div>
@endif

<div>
    <!-- Kolom kiri Tambahkan Karyawan -->
    <div>
        <h3>
            {{ $isEditMode ? 'Edit Karyawan' : 'Tambah Karyawan'}}
        </h3>
        <form action="" wire:submit="store">
            <div>
                <label for=""></label>
                <input type="text" wire:model.blur="name">
                @error('name') <span class="">{{$message}}</span> @enderror
            </div>
        </form>

</div>


</div>
