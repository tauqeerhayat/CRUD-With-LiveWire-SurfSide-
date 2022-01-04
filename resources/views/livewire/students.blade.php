<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>All Student &nbsp;&nbsp;<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add New Student</button>&nbsp;&nbsp;@if(session()->has('message'))<span class="alert alert-success">{{session('message')}}</span>@endif</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->firstName}}</td>
                                        <td>{{ $student->lastName}}</td>
                                        <td>{{ $student->email}}</td>
                                        <td>{{ $student->phone}}</td>
                                        <td>
                                            <button type="submit" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editStudentModal" wire:click.prevent="edit({{$student->id}})">Edit</button>
                                            <button type="submit" class="btn btn-sm btn-danger" wire:click.prevent="delete({{$student->id}})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>