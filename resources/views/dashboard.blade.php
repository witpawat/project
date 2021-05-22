<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            สวัสดี  {{Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                          <th scope="col">ลำดับ</th>
                          <th scope="col">ชื่อ</th>
                          <th scope="col">อีเมล</th>
                          <th scope="col">เริ่มใช้งานระบบ</th>
                        </tr>
                      </thead>
                      <tbody>
                          @php($i=1)
                          @foreach($users as $row)
                        <tr>
                          <th>{{$i++}}</th>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>{{$row->created_at->diffForHumans()}}</td>
                        </tr>
                        @endforeach


                  </table>



            </div>



        </div>

    </div>
</x-app-layout>
