<div class="grid grid-cols-6 gap-4">
<div class=" mt-5 col-start-1 col-span-6 xl:col-start-2 xl:col-span-4">

<table class="table-fixed w-full overflow-hidden shadow sm:rounded-lg">
  <thead class="bg-blue-400 h-10">
    <tr>
      <th class="w-12 text-white">No</th>
      <th class="text-white">Kode Program Studi</th>
      <th class="text-white">Kode Matakuliah</th>
      <th class="text-white">Nama Matakuliah</th>
      <th class="text-white">SKS Teori</th>
      <th class="text-white">SKS Praktek</th>
      <th class="text-white">SKS Praktikum</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    @foreach ($data as $d)
    <tr>
      <td class="py-4 text-center">{{ $i }}</td>
      <td class="text-center">{{ $d->kode_program_studi }}</td>
      <td class="text-center">{{ $d->kode_matakuliah }}</td>
      <td class="text-center">{{ $d->nama_matakuliah}}</td>
      <td class="text-center">{{ $d->sks_teori}}</td>
      <td class="text-center">{{ $d->sks_praktek}}</td>
      <td class="text-center">{{ $d->sks_praktikum}}</td>
    </tr>
    <?php $i++ ?>
    @endforeach
  </tbody>
</table>
</div>
</div>

