<a href="{{ route('role.create') }}">create role</a>
<table border="">
    @foreach($roles as $role )
        <tr>
            <td>{{$role->role}}</td>
            <td>
                @foreach($role->permissions as $permission)
                    {{$permission->title}} ,
                @endforeach
            </td>
            <td><a href="{{route('role.edit',['role'=>$role])}}">edit</a></td>
        </tr>
    @endforeach
</table>
