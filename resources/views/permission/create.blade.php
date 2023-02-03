@extends('layouts.master')



@section('content')
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Permission</h5>

                        <form class="row g-3" action="{{route('storePermission')}}" method="post">
                            @csrf
                            <div class="col-12">
                                <label for="Name" class="form-label">Role Name</label>
                                <select class="form-select" name="role_id">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}} </option>
                                @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="Name" class="form-label">Permission</label>
                                <select class="js-example-basic-multiple" name="permissions[]" multiple="multiple">
                                    @foreach($permissions as $permission)
                                    <option value="{{$permission->name}}">{{$permission->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
    </section>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

    </script>

@endsection
