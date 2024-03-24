
                            <form  method="POST" class="form" action="{{ route('role.store') }}">
                            @csrf
                            @method('POST')
                                            <input type="text" name="role" value="{{ old('role') }}" />

                                            @foreach ($permissions as $permission)
                                                <div>
                                                    <label for="{{ $permission->id }}">
                                                        {{ $permission->title }}
                                                    </label>
                                                    <input name="{{ $permission->permission }}" type="checkbox" value="{{ $permission->id }}" id="{{ $permission->id }}">
                                                </div>
                                            @endforeach
                                    <button type="reset">reset</button>

                                    <button type="submit">submit</button>
                            </form>
