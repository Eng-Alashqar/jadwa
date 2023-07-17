<x-admin.master title="المهام">
    <x-page.title :route="route('admin.tasks.index')" title="المهام" title_2="قائمة  المهام " />
    <x-page.table name='tasks' cardtitle="مهمة">

        <x-slot name="th">
            <th>#</th>
            <th>اسم المهمة</th>
            <th>وقت المهمة</th>
            <th>سعر المهمة</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($tasks as $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="40%">{{ $i->name_ar }}  </td>
                    <td width="10%">{{ $i->time }}  </td>
                    <td width="10%">{{ $i->price }}  </td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="tasks" />
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="tasks" />
    @endpush
</x-admin.master>
