@extends('back.layout.dashboard')

@section('content')
   
 <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
                <div class="container px-6 py-8 mx-auto">
                    <h1 class="text-3xl font-medium text-gray-700">Buku Tamu</h1>
    
                    <div class="mt-8">
                    </div>
                    <form action="/cari" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="cari" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>

    
                    <div class="flex flex-col mt-8">
                        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                            <div
                                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead>
                                        <tr >
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                No</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Nama</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Email</th>
                                            <th
                                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Pesan</th>
                                            <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
               $counter = 1; // inisialisasi counter
              @endphp
            @foreach ($contact as $data)
            <tr>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $counter++ }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $data->name }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $data->email }}</td>
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $data->pesan }}</td>
              <td>
                {{-- <a href="{{ url('/back/portofolio/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                <a href="{{ url('back/delete/'.$data->id) }}" class="bg-red-500 text-white p-2 rounded" >Delete</a>
                <a href="{{ url('back/update/'.$data->id) }}" class="bg-green-500 text-white p-2 rounded" >Update</a>
              </td>
            </tr>
            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
  </div>
</div>
 @if($message = Session::get('delete'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('delete') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
 @if($message = Session::get('update'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('update') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
<script>
  function confirmDelete(url) {
    Swal.fire({
      title: "Are you sure?",
      text: "to delete this data",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the delete URL
        window.location.href = url;
      }
    });
  }
</script>
@endsection