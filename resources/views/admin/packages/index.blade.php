<x-admin.master title="الباقات">
    <x-page.title :route="route('admin.packages.index')" title="الباقات" title_2="قائمة  الباقات " />
    <x-page.table name='packages' cardtitle="باقة">

        <x-slot name="th">
            <th>#</th>
            <th>اسم الباقة</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($packages as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="40%">{{ $i->name_ar }}  </td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="packages" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="packages" />
    @endpush
</x-admin.master>
