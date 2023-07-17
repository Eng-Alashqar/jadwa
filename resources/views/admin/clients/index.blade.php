<x-admin.master title="العملاء">
    <x-page.title :route="route('admin.clients.index')" title="العملاء" title_2="قائمة  العملاء " />
    <x-page.table name='clients' cardtitle="عميل">

        <x-slot name="th">
            <th>#</th>
            <th>الصورة</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($clients as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="90%">
                        <x-page.td-image :image="$i->image_name" />
                    </td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="clients" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="clients" />
    @endpush
</x-admin.master>
