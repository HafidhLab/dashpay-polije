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
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-primary" type="submit">{{ $btn ?? 'Submit' }}</button>
</div>