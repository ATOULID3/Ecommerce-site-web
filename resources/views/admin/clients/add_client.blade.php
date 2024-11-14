@extends('admin.admin-layout.style')
@section('title')
    clients
@endsection
@section('contentt')
<div class="container-xxl flex-grow-1 container-p-y">
                <!-- Input Sizing -->
                <form id="client-form" action="{{ route('store.clients') }}" method="POST">
                    @csrf
                <div class="col-md-14">
                    <div class="card mb-4">
                      <h4 class="card-header">Add new client</h4>
                      <div class="card-body">
                        {{-- <small class="text-light fw-semibold">Input text</small> --}}
                        @if ($errors->any())
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            let errorMessages = `
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            `;
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops... Something went wrong!',
                                html: errorMessages,
                                confirmButtonText: 'OK'
                            });
                        </script>
                    @endif
                        <div class="mt-2 mb-3">
                          <label for="largeInput" class="form-label">Client Name</label>
                          <input
                            id="largeInput"
                            name="name"
                            class="form-control form-control-lg"
                            type="text"
                            placeholder="Client Name"
                          />
                        </div>
                        <div class="mb-3">
                          <label for="defaultInput" class="form-label">AGE</label>
                          <input id="defaultInput" class="form-control" type="age" placeholder="AGE" name="age" />
                        </div>
                        <div class="mb-3">
                            <label for="defaultInput" class="form-label">PHONE</label>
                            <input id="defaultInput" class="form-control" type="number" placeholder="PHONE" name="phone" />
                          </div>
                          <div class="mb-3">
                            <label for="defaultInput" class="form-label">EMAIL</label>
                            <input id="defaultInput" class="form-control" type="email" placeholder="EMAIL" name="email" />
                          </div>
                      </div>
                      <hr class="m-0" />
                      <div class="card-body">
                        <small class="text-light fw-semibold">Large select</small>
                        <div class="mt-2 mb-3">
                          <label for="largeSelect" class="form-label">CONTRY</label>
                          <select id="largeSelect" class="form-select form-select-lg" name="address">
                            <option>Large select</option>
                            <option value="1">MAROC</option>
                            <option value="2">FRANCE</option>
                            <option value="3">USA</option>
                          </select>
                        </div>
                        {{-- <div class="mb-3">
                          <label for="defaultSelect" class="form-label">CITY</label>
                          <select id="defaultSelect" class="form-select">
                            <option>Default select</option>
                            <option value="1">MAROC</option>
                            <option value="2">FRANCE</option>
                            <option value="3">USA</option>
                          </select>
                        </div> --}}
                        {{-- <div>
                          <label for="smallSelect" class="form-label">Small select</label>
                          <select id="smallSelect" class="form-select form-select-sm">
                            <option>Small select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div> --}}
                        <br>
                        <div>
                            <button type="submit" type="button" class="btn btn-success">Confirm</button>
                            <a href="/clients"><button type="button" class="btn btn-danger">Cancel</button></a>
                         </div>
                      </div>
                    </div>
                  </div>
                </form>
</div>
@endsection
