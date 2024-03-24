
<form  method="POST" class="form" action="{{ route('role.update',['role'=>$role->id]) }}">
    @csrf
    @method('PUT')
    <input type="text" name="role" value="{{ $role->role }}" />

    @foreach ($permissions as $permission)
        {{-- @dd(null !==($role->permissions->where('id',2)),$role->permissions->where('id',2)) --}}
        <div class="form-check m-3">
            <label class="form-check-label" for="{{ $permission->id }}">
                {{ $permission->title }}
            </label>
            <input {{null !== ($role->permissions->where('id',$permission->id)->first()) ? 'checked' : '' }} class="form-check-input" name="{{ $permission->permission }}" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}">
        </div>
    @endforeach
    <button type="reset">reset</button>

    <button type="submit">submit</button>
</form>
