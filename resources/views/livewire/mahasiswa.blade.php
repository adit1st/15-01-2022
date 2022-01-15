<div class="grid grid-cols-6 gap-4">
<div class=" mt-5 col-start-1 col-span-6 xl:col-start-2 xl:col-span-4">

<table class="table-fixed w-full overflow-hidden shadow sm:rounded-lg">
  <thead class="bg-blue-400 h-10">
    <tr>
      <th class="w-12 text-white">No</th>
      <th class="text-white">NIM</th>
      <th class="text-white">Program Studi</th>
      <th class="text-white">Nama Mahasiswa</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach ($data as $d)
    <tr>
      <td class="py-4 text-center">{{ $i }}</td>
      <td class="text-center">{{ $d->nim }}</td>
      <td class="text-center">{{ $d->program_studi_kode }}</td>
      <td class="text-center">{{ $d->nama_mahasiswa}}</td>
    </tr>
    <?php $i++ ?>
    @endforeach
  </tbody>
</table>
</div>
</div>

