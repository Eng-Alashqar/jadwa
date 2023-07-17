<x-admin.master title="الصلاحيات">
    <x-page.title :route="route('admin.roles.index')" title="الصلاحيات" title_2="قائمة  الصلاحيات " />
    <x-page.table name='roles' cardtitle="صلاحية">

        <x-slot name="th">
            <th>#</th>
            <th>الاسم</th>
            <th> تاريخ اخر تعديل</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name="tbody">
            @foreach ($roles as $key => $i)
                <tr>
                    <td width="2%">{{ $loop->iteration }}</td>
                    <td width="70%"><span class="tag tag-blue">{{ $i->name }}</span></td>
                    <td width="10%">{{ $i->created_at->format('y-m-d/h:m') }}</td>
                    <td width="10%">
                        <x-page.td-actions :id="$i->id" name="roles" />
                        <a class="btn btn-sm btn-success" href="{{ route('admin.roles.show', $i->id) }}"><span
                                class="fe fe-eye"></a>
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-page.table>
    @push('scripts')
        <x-form.delete name="roles" />
    @endpush
</x-admin.master>
