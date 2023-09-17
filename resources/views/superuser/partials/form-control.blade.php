<div class="row">
    <x-forms.input
    name="username"
    label="Username"
    placeholder="Masukkan Username..."
    type="text"
    required
    :value="$user->username ?? ''"
    />
    @error('name')
        {{ $message }}
    @enderror
    <x-forms.input
    name="email"
    label="Email"
    placeholder="Masukkan Email ..."
    type="email"
    required
    :value="$user->email ?? ''"
    />
    @error('email')
        {{ $message }}
    @enderror
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="role">Role</label>
            <select name="role_id" id="role" class="form-control">
                <option value="0">-- Pilih --</option>
                @foreach($roles as $id => $role)
                    <option value="{{ $id }}" {{ $user->hasRole($id) ? 'selected' : '' }}>{{ $role }}</option>
                @endforeach
            </select>
            @error('role_id')
            {{ $message }}
            @enderror
        </div>

        <div class="form-group mt-4">
            <div class="form-check"><input class="form-check-input" name="isSuperUser" type="checkbox" value="1" checked="false" id="defaultCheck10"> <label class="form-check-label" for="defaultCheck10">Super User</label></div>
        </div>
        
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-primary" type="submit">{{ $btn ?? 'Submit' }}</button>
</div>

@push('script')
<script>
    const checkbox = document.getElementById("defaultCheck10");
    

    checkbox.addEventListener("change", function() {
        // Jika checkbox dicentang (checked), kirim request dengan nilai 1
        // Jika checkbox tidak dicentang, kirim request dengan nilai 0
        const valueToSend = this.checked ? 1 : 0;

        // Disini Anda dapat menambahkan kode untuk mengirim request sesuai dengan nilai valueToSend
        // Misalnya, Anda dapat menggunakan fetch API untuk mengirim request ke server.

        console.log("Nilai yang akan dikirim: " + valueToSend);
        // Untuk contoh ini, kita hanya mencetak nilai yang akan dikirim di konsol.
    });
</script>
@endpush